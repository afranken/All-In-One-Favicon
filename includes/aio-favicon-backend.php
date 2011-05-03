<?php
/**
 * @package Techotronic
 * @subpackage All in one Favicon
 *
 * @since 3.2
 * @author Arne Franken
 *
 * Object that handles all actions in the WordPress backend
 */
class AioFaviconBackend {

    /**
     * Constructor
     *
     * @since 3.2
     * @access public
     * @access static
     * @author Arne Franken
     *
     * @param array $aioFaviconSettings user settings
     */
    //public static function AioFaviconBackend($aioFaviconSettings) {
    function AioFaviconBackend($aioFaviconSettings) {

        $this->aioFaviconSettings = $aioFaviconSettings;

        add_action('admin_head', array(& $this, 'aioFaviconRenderAdminHeader'));

        // add options page
        add_action('admin_menu', array(& $this, 'registerAdminMenu'));

        add_action('admin_post_aioFaviconDeleteSettings', array(& $this, 'aioFaviconDeleteSettings'));
        add_action('admin_post_aioFaviconUpdateSettings', array(& $this, 'aioFaviconUpdateSettings'));

        // only register scripts and styles for this plugin page since JavaScript overwrites default WordPress behaviour
        if (isset($_GET['page']) && $_GET['page'] == 'all-in-one-favicon/all-in-one-favicon.php') {
            add_action('admin_print_scripts', array(& $this, 'registerAdminScripts'));
            add_action('admin_print_styles', array(& $this, 'registerAdminStyles'));
        }

    }

    // AioFaviconBackend()

    /**
     * Renders Favicon
     *
     * @since 1.0
     * @access public
     * @author Arne Franken
     */
    //public function aioFaviconRenderAdminHeader() {
    function aioFaviconRenderAdminHeader() {
        if (!empty($this->aioFaviconSettings)) {
            foreach ((array) $this->aioFaviconSettings as $type => $url) {
                if (!empty($url)) {
                    if (preg_match('/backend/i', $type)) {
                        if (preg_match('/ico/i', $type)) {
                            ?>
                            <link rel="shortcut icon" href="<?php echo htmlspecialchars($url)?>"/><?php
                        } else if (preg_match('/gif/i', $type)) {
                            ?>
                            <link rel="icon" href="<?php echo htmlspecialchars($url)?>" type="image/gif"/><?php
                        } else if (preg_match('/png/i', $type)) {
                            ?>
                            <link rel="icon" href="<?php echo htmlspecialchars($url)?>" type="image/png"/><?php
                        } else if (preg_match('/apple/i', $type)) {
                            ?>
                            <link rel="apple-touch-icon" href="<?php echo htmlspecialchars($url)?>"/><?php
                        }
                    }
                }
            }
        }
    }

    // aioFaviconRenderAdminHeader()

    /**
     * Register Settings page JavaScript files
     *
     * @since 1.0
     * @access public
     * @author Arne Franken
     */
    //public function registerAdminScripts() {
    function registerAdminScripts() {
        wp_enqueue_script('media-upload');
        wp_enqueue_script('thickbox');
        wp_register_script('aioFaviconUpload', AIOFAVICON_PLUGIN_URL .'/js/backend.js', array('jquery','media-upload','thickbox'));
        wp_enqueue_script('aioFaviconUpload');
    }

    // registerAdminScripts()

    /**
     * Register Settings page CSS styles
     *
     * @since 1.0
     * @access public
     * @author Arne Franken
     */
    //public function registerAdminStyles() {
    function registerAdminStyles() {
        wp_enqueue_style('thickbox');
    }

    // registerAdminStyles()

    /**
     * Render Settings page
     *
     * @since 1.0
     * @access public
     * @author Arne Franken
     */
    //public function renderSettingsPage() {
    function renderSettingsPage() {
        include_once 'settings-page.php';
    }

    // renderSettingsPage()

    /**
     * Register the settings page in WordPress
     *
     * @since 1.0
     * @access private
     * @author Arne Franken
     */
    //private function registerSettingsPage() {
    function registerSettingsPage() {
        if (current_user_can('manage_options')) {
            add_filter('plugin_action_links_' . AIOFAVICON_PLUGIN_BASENAME, array(& $this, 'addPluginActionLinks'));
            add_options_page(AIOFAVICON_NAME, AIOFAVICON_NAME, 'manage_options', AIOFAVICON_PLUGIN_BASENAME, array(& $this, 'renderSettingsPage'));
        }
    }

    // registerSettingsPage()

    /**
     * Add settings link to plugin management page
     *
     * @since 1.0
     * @access public
     * @author Arne Franken
     *
     * @param  array $action_links original links
     * @return array $action_links with link to settings page
     */
    //public function addPluginActionLinks($action_links) {
    function addPluginActionLinks($action_links) {
        $settings_link = '<a href="options-general.php?page=' . AIOFAVICON_PLUGIN_BASENAME . '">' . __('Settings', AIOFAVICON_TEXTDOMAIN) . '</a>';
        array_unshift($action_links, $settings_link);

        return $action_links;
    }

    //addPluginActionLinks()

    /**
     * Registers the Settings Page in the Admin Menu
     *
     * @since 1.0
     * @access public
     * @author Arne Franken
     */
    //public function registerAdminMenu() {
    function registerAdminMenu() {
        $return_message = '';
        
        if (function_exists('add_management_page') && current_user_can('manage_options')) {

            // update, uninstall message
            if (strpos($_SERVER['REQUEST_URI'], 'all-in-one-favicon.php') && isset($_GET['aioFaviconUpdateSettings'])) {
                $return_message = sprintf(__('Successfully updated %1$s settings.', AIOFAVICON_TEXTDOMAIN), AIOFAVICON_NAME);
            } elseif (strpos($_SERVER['REQUEST_URI'], 'all-in-one-favicon.php') && isset($_GET['aioFaviconDeleteSettings'])) {
                $return_message = sprintf(__('%1$s settings were successfully deleted.', AIOFAVICON_TEXTDOMAIN), AIOFAVICON_NAME);
            }
        }
        $this->registerAdminNotice($return_message);

        $this->registerSettingsPage();
    }

    // registerAdminMenu()

    /**
     * Registers Admin Notices
     *
     * @since 1.0
     * @access private
     * @author Arne Franken
     *
     * @param string $notice to register notice with.
     */
    //private function registerAdminNotice($notice) {
    function registerAdminNotice($notice) {
        if ($notice != '') {
            $message = '<div class="updated fade"><p>' . $notice . '</p></div>';
            add_action('admin_notices', create_function('', "echo '$message';"));
        }
    }

    // registerAdminNotice()

    /**
     * Update jQuery Colorbox settings wrapper
     *
     * handles checks and redirect
     *
     * @since 1.0
     * @access public
     * @author Arne Franken
     */
    //public function aioFaviconUpdateSettings() {
    function aioFaviconUpdateSettings() {

        if (!current_user_can('manage_options'))
            wp_die(__('Did not update settings, you do not have the necessary rights.', AIOFAVICON_TEXTDOMAIN));

        //cross check the given referer for nonce set in settings form
        check_admin_referer('aio-favicon-settings-form');
        //get settings from plugins admin page
        $this->aioFaviconSettings = $_POST[AIOFAVICON_SETTINGSNAME];
        //have to add jQueryColorboxVersion here because it is not included in the HTML form
        $this->aioFaviconSettings['aioFaviconVersion'] = AIOFAVICON_VERSION;
        $this->updateSettingsInDatabase();
        $referrer = str_replace(array('&aioFaviconUpdateSettings', '&aioFaviconDeleteSettings'), '', $_POST['_wp_http_referer']);
        wp_redirect($referrer . '&aioFaviconUpdateSettings');
    }

    // aioFaviconUpdateSettings()

    /**
     * Update jQuery Colorbox settings
     *
     * handles updating settings in the WordPress database
     *
     * @since 1.0
     * @access private
     * @author Arne Franken
     */
    //private function updateSettingsInDatabase() {
    function updateSettingsInDatabase() {
        update_option(AIOFAVICON_SETTINGSNAME, $this->aioFaviconSettings);
    }

    //aioFaviconUpdateSettingsInDatabase()


    /**
     * Delete jQuery Colorbox settings wrapper
     *
     * handles checks and redirect
     *
     * @since 1.0
     * @access public
     * @author Arne Franken
     */
    //public function aioFaviconDeleteSettings() {
    function aioFaviconDeleteSettings() {

        if (current_user_can('manage_options') && isset($_POST['delete_settings-true'])) {
            //cross check the given referer for nonce set in delete settings form
            check_admin_referer('aio-favicon-delete_settings-form');
            $this->deleteSettingsFromDatabase();
        } else {
            wp_die(sprintf(__('Did not delete %1$s settings. Either you dont have the nececssary rights or you didnt check the checkbox.', AIOFAVICON_TEXTDOMAIN), AIOFAVICON_NAME));
        }
        //clean up referrer
        $referrer = str_replace(array('&aioFaviconUpdateSettings', '&aioFaviconDeleteSettings'), '', $_POST['_wp_http_referer']);
        wp_redirect($referrer . '&aioFaviconDeleteSettings');
    }

    // aioFaviconDeleteSettings()

    /**
     * Delete jQuery Colorbox settings
     *
     * handles deletion from WordPress database
     *
     * @since 1.0
     * @access private
     * @author Arne Franken
     */
    //private function deleteSettingsFromDatabase() {
    function deleteSettingsFromDatabase() {
        delete_option(AIOFAVICON_SETTINGSNAME);
    }

    // aioFaviconDeleteSettingsFromDatabase()

    /**
     * Read HTML from a remote url
     *
     * @since 2.1
     * @access private
     * @author Arne Franken
     *
     * @param string $url
     * @return the response
     */
    //private function getRemoteContent($url) {
    function getRemoteContent($url) {
        if ( function_exists('wp_remote_request') ) {

            $options = array();
            $options['headers'] = array(
                'User-Agent' => 'All-in-One Favicon V' . AIOFAVICON_VERSION . '; (' . get_bloginfo('url') .')'
             );

            $response = wp_remote_request($url, $options);

            if ( is_wp_error( $response ) )
                return false;

            if ( 200 != wp_remote_retrieve_response_code($response) )
                return false;

            return wp_remote_retrieve_body($response);
        }

        return false;
    }

    // getRemoteContent()

    /**
     * gets current URL to return to after donating
     *
     * @since 2.1
     * @access private
     * @author Arne Franken
     */
    //private function getReturnLocation(){
    function getReturnLocation(){
        $currentLocation = "http";
        $currentLocation .= ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS']=='on') ? "s" : "")."://";
        $currentLocation .= $_SERVER['SERVER_NAME'];
        if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS']=='on') {
            if($_SERVER['SERVER_PORT']!='443') {
                $currentLocation .= ":".$_SERVER['SERVER_PORT'];
            }
        }
        else {
            if($_SERVER['SERVER_PORT']!='80') {
                $currentLocation .= ":".$_SERVER['SERVER_PORT'];
            }
        }
        $currentLocation .= $_SERVER['REQUEST_URI'];
        echo $currentLocation;
    }

    // getReturnLocation()
    
}

// AioFaviconBackend()
?>