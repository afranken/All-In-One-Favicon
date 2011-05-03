<?php
/**
 * @package Techotronic
 * @subpackage All in one Favicon
 *
 * @since 3.2
 * @author Arne Franken
 *
 * Tipps box for settings page
 */
?>
<div id="poststuff">
    <div id="aio-favicon-tips" class="postbox">
        <h3 id="tips"><?php _e('Tips', AIOFAVICON_TEXTDOMAIN) ?></h3>

        <div class="inside">
          <table class="form-table">
            <tr>
                <th scope="row">
                    <label for="faviconWikipedia"><?php _e('Favicon wikipedia entry', AIOFAVICON_TEXTDOMAIN); ?>:</label>
                </th>
                <td id="faviconWikipedia">
                    <?php _e('<a href="http://en.wikipedia.org/wiki/Favicon">Wikipedia</a> offers much information about favicon types and sizes.',AIOFAVICON_TEXTDOMAIN) ?>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="faviconGenerator"><?php _e('Favicon generator', AIOFAVICON_TEXTDOMAIN); ?>:</label>
                </th>
                <td id="faviconGenerator">
                    <?php _e('<a href="http://www.html-kit.com/favicon/">HTML Kit</a> provides a favicon generator that is very easy to use.',AIOFAVICON_TEXTDOMAIN) ?>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="faviconValidator"><?php _e('Favicon validator', AIOFAVICON_TEXTDOMAIN); ?>:</label>
                </th>
                <td id="faviconValidator">
                    <?php _e('<a href="http://www.html-kit.com/favicon/validator">HTML Kit</a> provides a favicon validator that tells you whether your favicon is working and if it is compatible to all browsers.',AIOFAVICON_TEXTDOMAIN) ?>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="faviconAppleHowto"><?php _e('Apple Touch Icon Howto', AIOFAVICON_TEXTDOMAIN); ?>:</label>
                </th>
                <td id="faviconAppleHowto">
                    <?php _e('<a href="http://developer.apple.com/library/safari/#documentation/appleapplications/reference/safariwebcontent/ConfiguringWebApplications/ConfiguringWebApplications.html">Apple</a> provides a howto on how to create a PNG to use as an Apple Touch Icon.',AIOFAVICON_TEXTDOMAIN) ?>
                </td>
            </tr>
          </table>
        </div>
    </div>
</div>