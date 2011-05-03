<?php
/**
 * @package Techotronic
 * @subpackage All in one Favicon
 *
 * @since 3.2
 * @author Arne Franken
 *
 * Plugin Settings for settings page
 */
?>
<div id="aio-favicon-settings" class="postbox">
    <h3 id="settings"><?php _e('Settings', AIOFAVICON_TEXTDOMAIN); ?></h3>

    <div class="inside">
        <form name="aio-favicon-settings-update" method="post" action="admin-post.php">
        <?php if (function_exists('wp_nonce_field') === true) wp_nonce_field('aio-favicon-settings-form'); ?>

        <table class="form-table">
            <tr>
                <th scope="row">
                    <label for="<?php echo AIOFAVICON_SETTINGSNAME ?>-frontendICO"><?php printf(__('%1$s ICO', AIOFAVICON_TEXTDOMAIN), __('Frontend', AIOFAVICON_TEXTDOMAIN)); ?>:</label>
                </th>
                <td>
                    <input id="<?php echo AIOFAVICON_SETTINGSNAME ?>-frontendICO" class="aioFaviconUrl" type="text" size="50" name="<?php echo AIOFAVICON_SETTINGSNAME ?>[frontendICO]" value="<?php echo $this->aioFaviconSettings['frontendICO'] ?>" />
                    <input id="<?php echo AIOFAVICON_SETTINGSNAME ?>-frontendICO_button" class="button aioFaviconUpload" type="button" value="<?php echo htmlspecialchars(__('Upload Favicon',AIOFAVICON_TEXTDOMAIN)) ?>" />
                    <br /><?php _e('Enter a URL or upload a Favicon.',AIOFAVICON_TEXTDOMAIN) ?>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="<?php echo AIOFAVICON_SETTINGSNAME ?>-frontendPNG"><?php printf(__('%1$s PNG', AIOFAVICON_TEXTDOMAIN), __('Frontend', AIOFAVICON_TEXTDOMAIN)); ?>:</label>
                </th>
                <td>
                    <input id="<?php echo AIOFAVICON_SETTINGSNAME ?>-frontendPNG" class="aioFaviconUrl" type="text" size="50" name="<?php echo AIOFAVICON_SETTINGSNAME ?>[frontendPNG]" value="<?php echo $this->aioFaviconSettings['frontendPNG'] ?>" />
                    <input id="<?php echo AIOFAVICON_SETTINGSNAME ?>-frontendPNG_button" class="button aioFaviconUpload" type="button" value="<?php echo htmlspecialchars(__('Upload Favicon',AIOFAVICON_TEXTDOMAIN)) ?>" />
                    <br /><?php _e('Enter a URL or upload a Favicon.',AIOFAVICON_TEXTDOMAIN) ?>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="<?php echo AIOFAVICON_SETTINGSNAME ?>-frontendGIF"><?php printf(__('%1$s GIF', AIOFAVICON_TEXTDOMAIN), __('Frontend', AIOFAVICON_TEXTDOMAIN)); ?>:</label>
                </th>
                <td>
                    <input id="<?php echo AIOFAVICON_SETTINGSNAME ?>-frontendGIF" class="aioFaviconUrl" type="text" size="50" name="<?php echo AIOFAVICON_SETTINGSNAME ?>[frontendGIF]" value="<?php echo $this->aioFaviconSettings['frontendGIF'] ?>" />
                    <input id="<?php echo AIOFAVICON_SETTINGSNAME ?>-frontendGIF_button" class="button aioFaviconUpload" type="button" value="<?php echo htmlspecialchars(__('Upload Favicon',AIOFAVICON_TEXTDOMAIN)) ?>" />
                    <br /><?php _e('Enter a URL or upload a Favicon.',AIOFAVICON_TEXTDOMAIN) ?>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="<?php echo AIOFAVICON_SETTINGSNAME ?>-frontendApple"><?php printf(__('%1$s Apple touch icon', AIOFAVICON_TEXTDOMAIN), __('Frontend', AIOFAVICON_TEXTDOMAIN)); ?>:</label>
                </th>
                <td>
                    <input id="<?php echo AIOFAVICON_SETTINGSNAME ?>-frontendApple" class="aioFaviconUrl" type="text" size="50" name="<?php echo AIOFAVICON_SETTINGSNAME ?>[frontendApple]" value="<?php echo $this->aioFaviconSettings['frontendApple'] ?>" />
                    <input id="<?php echo AIOFAVICON_SETTINGSNAME ?>-frontendApple_button" class="button aioFaviconUpload" type="button" value="<?php echo htmlspecialchars(__('Upload Favicon',AIOFAVICON_TEXTDOMAIN)) ?>" />
                    <br /><?php _e('Enter a URL or upload a Favicon.',AIOFAVICON_TEXTDOMAIN) ?>
                </td>
            </tr>

            <tr>
                <th scope="row">
                    <label for="<?php echo AIOFAVICON_SETTINGSNAME ?>-backendICO"><?php printf(__('%1$s ICO', AIOFAVICON_TEXTDOMAIN), __('Backend', AIOFAVICON_TEXTDOMAIN)); ?>:</label>
                </th>
                <td>
                    <input id="<?php echo AIOFAVICON_SETTINGSNAME ?>-backendICO" class="aioFaviconUrl" type="text" size="50" name="<?php echo AIOFAVICON_SETTINGSNAME ?>[backendICO]" value="<?php echo $this->aioFaviconSettings['backendICO'] ?>" />
                    <input id="<?php echo AIOFAVICON_SETTINGSNAME ?>-backendICO_button" class="button aioFaviconUpload" type="button" value="<?php echo htmlspecialchars(__('Upload Favicon',AIOFAVICON_TEXTDOMAIN)) ?>" />
                    <br /><?php _e('Enter a URL or upload a Favicon.',AIOFAVICON_TEXTDOMAIN) ?>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="<?php echo AIOFAVICON_SETTINGSNAME ?>-backendPNG"><?php printf(__('%1$s PNG', AIOFAVICON_TEXTDOMAIN), __('Backend', AIOFAVICON_TEXTDOMAIN)); ?>:</label>
                </th>
                <td>
                    <input id="<?php echo AIOFAVICON_SETTINGSNAME ?>-backendPNG" class="aioFaviconUrl" type="text" size="50" name="<?php echo AIOFAVICON_SETTINGSNAME ?>[backendPNG]" value="<?php echo $this->aioFaviconSettings['backendPNG'] ?>" />
                    <input id="<?php echo AIOFAVICON_SETTINGSNAME ?>-backendPNG_button" class="button aioFaviconUpload" type="button" value="<?php echo htmlspecialchars(__('Upload Favicon',AIOFAVICON_TEXTDOMAIN)) ?>" />
                    <br /><?php _e('Enter a URL or upload a Favicon.',AIOFAVICON_TEXTDOMAIN) ?>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="<?php echo AIOFAVICON_SETTINGSNAME ?>-backendGIF"><?php printf(__('%1$s GIF', AIOFAVICON_TEXTDOMAIN), __('Backend', AIOFAVICON_TEXTDOMAIN)); ?>:</label>
                </th>
                <td>
                    <input id="<?php echo AIOFAVICON_SETTINGSNAME ?>-backendGIF" class="aioFaviconUrl" type="text" size="50" name="<?php echo AIOFAVICON_SETTINGSNAME ?>[backendGIF]" value="<?php echo $this->aioFaviconSettings['backendGIF'] ?>" />
                    <input id="<?php echo AIOFAVICON_SETTINGSNAME ?>-backendGIF_button" class="button aioFaviconUpload" type="button" value="<?php echo htmlspecialchars(__('Upload Favicon',AIOFAVICON_TEXTDOMAIN)) ?>" />
                    <br /><?php _e('Enter a URL or upload a Favicon.',AIOFAVICON_TEXTDOMAIN) ?>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="<?php echo AIOFAVICON_SETTINGSNAME ?>-backendApple"><?php printf(__('%1$s Apple touch icon', AIOFAVICON_TEXTDOMAIN), __('Backend', AIOFAVICON_TEXTDOMAIN)); ?>:</label>
                </th>
                <td>
                    <input id="<?php echo AIOFAVICON_SETTINGSNAME ?>-backendApple" class="aioFaviconUrl" type="text" size="50" name="<?php echo AIOFAVICON_SETTINGSNAME ?>[backendApple]" value="<?php echo $this->aioFaviconSettings['backendApple'] ?>" />
                    <input id="<?php echo AIOFAVICON_SETTINGSNAME ?>-backendApple_button" class="button aioFaviconUpload" type="button" value="<?php echo htmlspecialchars(__('Upload Favicon',AIOFAVICON_TEXTDOMAIN)) ?>" />
                    <br /><?php _e('Enter a URL or upload a Favicon.',AIOFAVICON_TEXTDOMAIN) ?>
                </td>
            </tr>
            <tr>
            <th scope="row">
                <label for="<?php echo AIOFAVICON_SETTINGSNAME ?>-removeLinkFromMetaBox"><?php _e('Remove link from Meta-box', AIOFAVICON_TEXTDOMAIN); ?>:</label>
            </th>
            <td>
                <input type="checkbox" name="<?php echo AIOFAVICON_SETTINGSNAME ?>[removeLinkFromMetaBox]" id="<?php echo AIOFAVICON_SETTINGSNAME ?>-removeLinkFromMetaBox" value="true" <?php echo ($this->aioFaviconSettings['removeLinkFromMetaBox']) ? 'checked="checked"' : '';?>/>
                <br/><?php _e('Remove the link to the developers site from the WordPress meta-box.', AIOFAVICON_TEXTDOMAIN); ?>
            </td>
        </tr>
        </table>
        <p class="submit">
            <input type="hidden" name="action" value="aioFaviconUpdateSettings"/>
            <input type="submit" name="aioFaviconUpdateSettings" class="button-primary" value="<?php _e('Save Changes') ?>"/>
        </p>
        </form>
    </div>
</div>