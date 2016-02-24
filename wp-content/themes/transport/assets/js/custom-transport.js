/** 
 * Transport - Custom JS
 * @since transport 1.0.0
 */

(function ($) {
    "use strict";
    /**
     * Transport - Comment Form
     * @since transport 1.0.0
     */
    if ($("#commentform").length > 0) {


        $("#commentform").submit(function () {
            var $cmtFlag = true;
            $("#email, #comment ,#author").removeClass('transport-required');
            if ($('#email').length > 0) {
                var $emailRgx = /^([a-zA-Z.0-9])+@([a-zA_Z0-9])+\.([a-zA-Z])/;
                var $cmauthor = $("#author").val();
                var $cmemail = $("#email").val();
                if ($cmauthor == "") {
                    $("#author").addClass('transport-required');
                    $cmtFlag = false;
                }
                if ($cmemail == "" || !$emailRgx.test($cmemail)) {
                    $("#email").addClass('transport-required');
                    $cmtFlag = false;
                }
            }
            var $cmmsg = $("#comment").val();
            if ($cmmsg == "") {
                $("#comment").addClass('transport-required');
                $cmtFlag = false;
            }
            return $cmtFlag;
        });


    }

    /**
     *Transport - Search Form
     *@since  transport 1.0.0
     */

    if ($("form.search-box").length > 0) {
        $("form.search-box").submit(function () {
            var $serchFlag = true;
            $("form.search-box input[name=s]").removeClass('transport-required');
            var $serchmsg = $("form.search-box input[name=s]").val();
            if ($serchmsg == "") {
                $("form.search-box input[name=s]").addClass('transport-required');
                $serchFlag = false;
            }
            return $serchFlag;
        });
    }



})(jQuery);

