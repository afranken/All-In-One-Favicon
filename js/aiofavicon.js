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
    removeWarning();
    loadFavicons();
    bindEventTriggers();
    bindChangeHandlers();
});

/**
 * Remove warning from backend that JavaScript is not enabled
 *
 * @since 4.2
 * @author Arne Franken
 */
(function(jQuery) {
  removeWarning = function() {
    jQuery('#javascriptWarning').hide();

  }
})(jQuery);


/**
 * load all uploaded favicons
 *
 * @since 3.2
 * @author Arne Franken
 */
(function(jQuery) {
    loadFavicons = function() {
        jQuery.each(Aiofavicon, function(key, value) {
            var $imgTag = "<img src=\"" + value  + "\" />";
            var selector = "#"+key+"-favicon";
            jQuery(selector).empty().html($imgTag).fadeIn();
        });
    }
})(jQuery);

// loadFavicons()

/**
 * Find all buttons, attach a click event.
 * Event triggers a click event on the hidden "file" input field
 * which displays the file selector dialog.
 *
 * @since 4.1
 * @author Arne Franken
 */
(function(jQuery) {
    bindEventTriggers = function() {

      var form = jQuery("form#aio-favicon-settings-update");

      var buttonInputs = form.find('input[type="button"]');

      //all buttons disabled since they won't work without JavaScript anyway
      buttonInputs.removeAttr('disabled');

      console.debug("added hook to button inputs");
      buttonInputs.click(function () {
          jQuery(this)
              .siblings('input[type="file"]')
              .trigger('click');
          console.debug("fired hook on button input %s", jQuery(this).attr('id'));
      });

    }
})(jQuery);

// bindEventTriggers()


/**
 * Attach change event handler to all hidden "file" inputs.
 * Value will be copied to "text" input when user selects a file.
 * Only the filename will be displayed.
 *
 * @since 4.1
 * @author Arne Franken
 */
(function(jQuery) {
    bindChangeHandlers = function() {

        var form = jQuery("form#aio-favicon-settings-update");

        var fileInputs = form.find('input[type="file"]');

        console.debug("added hook to file inputs");
        fileInputs.change(function () {
            jQuery(this)
                .siblings('input[type="text"]')
                .val(jQuery(this)
                .val());
            console.debug("fired hook on file input %s", jQuery(this).attr('id'));
        });
        fileInputs.click(function() {
          console.debug("click on file input %s", jQuery(this).attr('id'));
        });
    }
})(jQuery);

// bindChangeHandlers()
