<?php
/**
 * @package Techotronic
 * @subpackage All in one Favicon
 *
 * @since 4.0
 * @author Arne Franken
 *
 * Plugin Settings for settings page
 */
?>
<div id="aio-favicon-settings" class="postbox">
  <h3 id="settings"><?php _e('Settings', AIOFAVICON_TEXTDOMAIN); ?></h3>

  <div class="inside">
    <form name="aio-favicon-settings-update" enctype="multipart/form-data" method="post" action="admin-post.php">
      <?php if (function_exists('wp_nonce_field') === true) wp_nonce_field('aio-favicon-settings-form'); ?>

      <table class="form-table">
        <tr>
          <th scope="row">
            <label for="<?php echo AIOFAVICON_SETTINGSNAME ?>-frontendICO"><?php printf(__('%1$s ICO', AIOFAVICON_TEXTDOMAIN), __('Frontend', AIOFAVICON_TEXTDOMAIN)); ?>:</label>
          </th>
          <td width="32">
            <div id="frontendICO-favicon"></div>
          </td>
          <td>
            <input id="<?php echo AIOFAVICON_SETTINGSNAME ?>-frontendICO" type="file" size="50" maxlength="100000" accept="text/*" name="frontendICO" value="<?php echo $this->aioFaviconSettings['frontendICO'] ?>"/>
          </td>
        </tr>
        <tr>
          <th scope="row">
            <label for="<?php echo AIOFAVICON_SETTINGSNAME ?>-frontendPNG"><?php printf(__('%1$s PNG', AIOFAVICON_TEXTDOMAIN), __('Frontend', AIOFAVICON_TEXTDOMAIN)); ?>:</label>
          </th>
          <td width="32">
            <div id="frontendPNG-favicon"></div>
          </td>
          <td>
            <input id="<?php echo AIOFAVICON_SETTINGSNAME ?>-frontendPNG" type="file" size="50" maxlength="100000" accept="text/*" name="frontendPNG" value="<?php echo $this->aioFaviconSettings['frontendPNG'] ?>"/>
          </td>
        </tr>
        <tr>
          <th scope="row">
            <label for="<?php echo AIOFAVICON_SETTINGSNAME ?>-frontendGIF"><?php printf(__('%1$s GIF', AIOFAVICON_TEXTDOMAIN), __('Frontend', AIOFAVICON_TEXTDOMAIN)); ?>:</label>
          </th>
          <td width="32">
            <div id="frontendGIF-favicon"></div>
          </td>
          <td>
            <input id="<?php echo AIOFAVICON_SETTINGSNAME ?>-frontendGIF" type="file" size="50" maxlength="100000" accept="text/*" name="frontendGIF" value="<?php echo $this->aioFaviconSettings['frontendGIF'] ?>"/>
          </td>
        </tr>
        <tr>
          <th scope="row">
            <label for="<?php echo AIOFAVICON_SETTINGSNAME ?>-frontendApple"><?php printf(__('%1$s Apple Touch Icon', AIOFAVICON_TEXTDOMAIN), __('Frontend', AIOFAVICON_TEXTDOMAIN)); ?>:</label>
          </th>
          <td width="32">
            <div id="frontendApple-favicon"></div>
          </td>
          <td>
            <input id="<?php echo AIOFAVICON_SETTINGSNAME ?>-frontendApple" type="file" size="50" maxlength="100000" accept="text/*" name="frontendApple" value="<?php echo $this->aioFaviconSettings['frontendApple'] ?>"/>

          </td>
        </tr>
        <tr>
          <th scope="row">
            <label for="<?php echo AIOFAVICON_SETTINGSNAME ?>-backendICO"><?php printf(__('%1$s ICO', AIOFAVICON_TEXTDOMAIN), __('Backend', AIOFAVICON_TEXTDOMAIN)); ?>:</label>
          </th>
          <td width="32">
            <div id="backendICO-favicon"></div>
          </td>
          <td>
            <input id="<?php echo AIOFAVICON_SETTINGSNAME ?>-backendICO" type="file" size="50" maxlength="100000" accept="text/*" name="backendICO" value="<?php echo $this->aioFaviconSettings['backendICO'] ?>"/>
          </td>
        </tr>
        <tr>
          <th scope="row">
            <label for="<?php echo AIOFAVICON_SETTINGSNAME ?>-backendPNG"><?php printf(__('%1$s PNG', AIOFAVICON_TEXTDOMAIN), __('Backend', AIOFAVICON_TEXTDOMAIN)); ?>:</label>
          </th>
          <td width="32">
            <div id="backendPNG-favicon"></div>
          </td>
          <td>
            <input id="<?php echo AIOFAVICON_SETTINGSNAME ?>-backendPNG" type="file" size="50" maxlength="100000" accept="text/*" name="backendPNG" value="<?php echo $this->aioFaviconSettings['backendPNG'] ?>"/>
          </td>
        </tr>
        <tr>
          <th scope="row">
            <label for="<?php echo AIOFAVICON_SETTINGSNAME ?>-backendGIF"><?php printf(__('%1$s GIF', AIOFAVICON_TEXTDOMAIN), __('Backend', AIOFAVICON_TEXTDOMAIN)); ?>:</label>
          </th>
          <td width="32">
            <div id="backendGIF-favicon"></div>
          </td>
          <td>
            <input id="<?php echo AIOFAVICON_SETTINGSNAME ?>-backendGIF" type="file" size="50" maxlength="100000" accept="text/*" name="backendGIF" value="<?php echo $this->aioFaviconSettings['backendGIF'] ?>"/>
          </td>
        </tr>
        <tr>
          <th scope="row">
            <label for="<?php echo AIOFAVICON_SETTINGSNAME ?>-backendApple"><?php printf(__('%1$s Apple Touch Icon', AIOFAVICON_TEXTDOMAIN), __('Backend', AIOFAVICON_TEXTDOMAIN)); ?>:</label>
          </th>
          <td width="32">
            <div id="backendApple-favicon"></div>
          </td>
          <td>
            <input id="<?php echo AIOFAVICON_SETTINGSNAME ?>-backendApple" type="file" size="50" maxlength="100000" accept="text/*" name="backendApple" value="<?php echo $this->aioFaviconSettings['backendApple'] ?>"/>
          </td>
        </tr>
        <tr>
          <th scope="row">
            <label for="<?php echo AIOFAVICON_SETTINGSNAME ?>-removeLinkFromMetaBox"><?php _e('Remove link from Meta-box', AIOFAVICON_TEXTDOMAIN); ?>:</label>
          </th>
          <td width="32"></td>
          <td>
            <input type="checkbox" name="<?php echo AIOFAVICON_SETTINGSNAME ?>[removeLinkFromMetaBox]" id="<?php echo AIOFAVICON_SETTINGSNAME ?>-removeLinkFromMetaBox" value="true" <?php echo ($this->aioFaviconSettings['removeLinkFromMetaBox'])
                    ? 'checked="checked"' : '';?>/>
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