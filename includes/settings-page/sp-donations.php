<?php
/**
 * @package Techotronic
 * @subpackage All in one Favicon
 *
 * @since 4.0
 * @author Arne Franken
 *
 * Donations for settings page
 */
?>
<div id="poststuff">
  <div id="jquery-colorbox-topdonations" class="postbox">
    <h3 id="topdonations"><?php _e('Top donations', AIOFAVICON_TEXTDOMAIN) ?></h3>

    <div class="inside">
      <?php echo $this->getRemoteContent(AIOFAVICON_TOPDONATEURL); ?>
    </div>
  </div>
</div>
<div id="poststuff">
  <div id="jquery-colorbox-latestdonations" class="postbox">
    <h3 id="latestdonations"><?php _e('Latest donations', AIOFAVICON_TEXTDOMAIN) ?></h3>

    <div class="inside">
      <?php echo $this->getRemoteContent(AIOFAVICON_LATESTDONATEURL); ?>
    </div>
  </div>
</div>