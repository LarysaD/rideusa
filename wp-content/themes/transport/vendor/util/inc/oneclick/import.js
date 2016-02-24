/**
 * Onclick ajax installation JS
 * 
 * @package wptm.inc.oneclick
 * @since wptm 1.0.0
 */
(function($) {
    //"use strict";
    if ($("#wptm-button-install-oneclick").length > 0) {

        var WPTM_OneClick = {
            threadInterval: null,
            events: function() {
                var $this = this;
                $("#wptm-button-install-oneclick").click(function() {
                    var $confirm = confirm("Are you want to install data with oneclick");
                    if ($confirm) { $this.import(); }
                });
            },
            //URL: http://www.dave-bond.com/blog/2010/01/JQuery-ajax-progress-HMTL5/
            //URL: http://www.bennolan.com/2011/07/21/ajax-download-progress.html

            import: function() {
                var $this = this;
                $(document).ajaxStart(function() {});
                
                $.ajax({
                    type: 'post',
                    data: {
                        action: 'wptm_oneclick_import'
                    },
                    url: WPTM_LOCAL.url,
                    cache: false,
                    dataType: "text",
                    xhr: function() {
                        return $this.xhrInit();
                    },
                    complete: function() {
                        return clearInterval($this.threadInterval);
                    },
                    success: function($html) { $this.done($html); }
                });
            },
            done: function($html) {
                var $this = this;
                $html = $html.replace(/<<(\d+)\>>/gi, "");
                $this.showProgress("100");
               window.location.href = WPTM_LOCAL.sucess;

            },
            xhrInit: function() {
                var $this = this;
                var xhr;
                xhr = jQuery.ajaxSettings.xhr();
                $this.threadInterval = setInterval(function() {
                    var response, status;
                    if (xhr.readyState > 2) {
                        response = xhr.responseText;
                        status = $this.getStatus(response);
                        $this.showProgress(status);
                    }
                }, 100);
                return xhr;
            },
            showProgress: function($point) {
                // console.log($point);
                if(WPTM_LOCAL.status[$point]){
                    $("#wptm-progress-label").html("Status: "+WPTM_LOCAL.status[$point]+"");
                }
                $(".wptm-progressbar .active").css("width", $point + "%");
                $(".wptm-progressbar .value").html($point + "%");
            },
            getStatus: function($html) {
                var $matches, $status;
                $matches = $html.match(/<<(\d+)\>>/gi);
                $status = $matches[$matches.length - 1];
                $status = $status.replace('<<', '').replace('>>', '');
                return $status;
            }
        };
        
        WPTM_OneClick.events();
        
    }
})(jQuery);