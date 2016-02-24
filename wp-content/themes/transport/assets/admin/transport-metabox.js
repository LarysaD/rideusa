/*!
 * Transport
 * Metabox control according page template
 * 
 *  @scince transport 1.0 
 */

(function ($) {

    var TransportMetaboxControl = {
        id: [],
        default: '',
        visualComposer: '',
        init: function () {
            this.setID();
            this.event();
        },
        event: function () {
            var self = this;

            self.reset();
            self.setShow($("#page_template").val());

            $(document).on("change", "#page_template", function () {
                self.reset();
                var $id = $(this).val();
                if ($id) {
                    self.setShow($id);
                }
            });
        },
        setID: function () {
            this.default = '#contact_page_boxes, #achivements_page_boxes';
            this.visualComposer = '#contact_page_boxes, #achivements_page_boxes, #common_page_boxes'; //transport-js-composer.php
            this.id = {
                'transport-contact.php': '#contact_page_boxes',
                'transport-achivement.php': '#achivements_page_boxes',
            };
        },
        reset: function () {
            var self = this;
            $(self.default).hide();
            $('#common_page_boxes').show();
        },
        setShow: function ($id) {

            if ($id == 'transport-js-composer.php') {
                $(this.visualComposer).hide();
            } else {
                var selection = this.id[$id];
                $(selection).show();
            }
        }
    };

    if ($("#page_template").length > 0) {
        TransportMetaboxControl.init();
    }

})(jQuery);
