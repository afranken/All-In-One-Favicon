/**
 * @package Techotronic
 * @subpackage All in one Favicon
 *
 * @since 3.2
 * @author Arne Franken
 *
 * AioFavicon Javascript
 */

/**
 * call favicon loader on page load.
 */
jQuery(document).ready(function() {
    faviconLoader();
    bindFileSelectionDialogTriggers();
    bindTextBoxUpdaters();
});

/**
 * faviconLoader
 * 
 * load all uploaded favicons
 */
(function(jQuery) {
    faviconLoader = function() {
        jQuery.each(Aiofavicon, function(key, value) {
            var $imgTag = "<img src=\"" + value  + "\" />";
            var selector = "#"+key+"-favicon";
            jQuery(selector).empty().html($imgTag).fadeIn();
        });
    }
})(jQuery);

// faviconLoader()

/**
 * faviconLoader
 *
 * load all uploaded favicons
 */
(function(jQuery) {
    bindFileSelectionDialogTriggers = function() {

        var buttons = jQuery("form#aio-favicon-settings-update")
            .find('input[type="button"]');

        buttons.click(function () {
            jQuery(this).siblings('input[type="file"]').trigger('click');
        });
    }
})(jQuery);

// faviconLoader()


/**
 * faviconLoader
 *
 * load all uploaded favicons
 */
(function(jQuery) {
    bindTextBoxUpdaters = function() {
        var containers = jQuery("form#aio-favicon-settings-update");
        containers.find('input[type="file"]').change(function () {
          jQuery(this).siblings('input[type="text"]').val(jQuery(this).val());
        });
    }
})(jQuery);

// faviconLoader()

