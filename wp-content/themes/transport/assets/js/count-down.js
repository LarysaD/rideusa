/** 
 * Transport - Count Down
 * @since transport 1.0.0
 */

(function ($) {
    "use strict";
    if ($("#countdown").length > 0) {
        $("#countdown").countdown({
            until: new Date(TRANSPORT_COMING_SOON.coming_soon_date)
        });
    }
})(jQuery);
