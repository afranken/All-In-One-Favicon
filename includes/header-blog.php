<?php
/**
 * @package Techotronic
 * @subpackage All in one Favicon
 *
 * @since 1.0
 * @author Arne Franken
 *
 */
?>
<?php
function aioFaviconRenderBlogHeader() {
    $aioFaviconSettings = (array)get_option(AIOFAVICON_SETTINGSNAME);
    if (! empty($aioFaviconSettings)) {
        ?><!-- <?php echo AIOFAVICON_NAME ?> <?php echo AIOFAVICON_VERSION ?> | by Arne Franken, http://www.techotronic.de/ --><?php
        foreach ((array) $aioFaviconSettings as $type => $url) {
            if(preg_match('/frontend/i', $type)){
                if(preg_match('/ico/i', $url)) {
                    ?><link rel="shortcut icon" href="<?php echo htmlspecialchars($url)?>" /><?php
                } else if (preg_match('/gif/i', $url)) {
                    ?><link rel="icon" href="<?php echo htmlspecialchars($url)?>" type="image/gif" /><?php
                } else if (preg_match('/png/i', $url)) {
                    ?><link rel="icon" href="<?php echo htmlspecialchars($url)?>" type="image/png" /><?php
                }
            }
        }
        ?><!-- <?php echo AIOFAVICON_NAME ?> <?php echo AIOFAVICON_VERSION ?> | by Arne Franken, http://www.techotronic.de/ --><?php
    }
}
?>