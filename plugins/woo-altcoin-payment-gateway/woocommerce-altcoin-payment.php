<?php

/**
 * @wordpress-plugin
 * Plugin Name:       WooCommerce Bitcoin / AltCoin Payment Gateway
 * Plugin URI:        https://coinmarketstats.online/product/woocommerce-bitcoin-altcoin-payment-gateway
 * Description:       A very light weight Cryptocurrency payment gateway for WooCommerce Store. Accept Bitcoin, Bitcoin Cash, Ethereum, Dogecoin, Dash, Litecoin, Ripple & 1800+ cryptocurrencies
 * Version:           1.3.2
 * Author:            CodeSolz.net
 * Author URI:        https://www.codesolz.net
 * License:           GPLv3
 * License URI:       https://www.gnu.org/licenses/gpl.txt
 * Domain Path:       /languages
 * Text Domain:       woo-altcoin-payment-gateway
 * Requires PHP: 6.0
 * Requires At Least: 4.0
 * Tested Up To: 5.3
 * WC requires at least: 3.0
 * WC tested up to: 3.7
 */

if (!defined('ABSPATH')) {
    exit;
}


if (!class_exists('Woocommerce_Altcoin_Payment_Gateway')) {

    class Woocommerce_Altcoin_Payment_Gateway
    {

        /**
         * Hold actions hooks
         *
         * @var array 
         */
        private static $wapg_hooks = [];

        /**
         * Hold version
         * 
         * @var String 
         */
        private static $version = '1.3.2';

        /**
         * Hold version
         * 
         * @var String 
         */
        private static $db_version = '1.0.3';

        /**
         * Hold nameSpace
         *
         * @var string 
         */
        private static $namespace = 'WooGateWayCoreLib';


        function __construct()
        {

            //load plugins constant
            self::set_constants();

            //load core files
            self::load_core_framework();

            //load init
            self::load_action_files();

            //during activation
            self::init_activation();

            /**load textdomain */
            add_action('plugins_loaded', array(__CLASS__, 'init_textdomain'), 15);

            /**check plugin db*/
            add_action('plugins_loaded', array(__CLASS__, 'check_db'), 17);

            /**check plugin version*/
            add_action('plugins_loaded', array(__CLASS__, 'check_plugin_version'), 19);

            /**load gateway*/
            add_action('plugins_loaded', array(__CLASS__, 'init_gateway'), 21);
        }

        /**
         * Set constant data
         */
        private static function set_constants()
        {
            $constants = array(
                'CS_WAPG_VERSION'           => self::$version, //Define current version
                'CS_WAPG_DB_VERSION'        => self::$db_version, //Define current db version
                'CS_WAPG_BASE_DIR_PATH'     => untrailingslashit(plugin_dir_path(__FILE__)) . '/', //Hold plugins base dir path
                'CS_WAPG_PLUGIN_ASSET_URI'  => plugin_dir_url(__FILE__) . 'assets/', //Define asset uri
                'CS_WAPG_PLUGIN_LIB_URI'    => plugin_dir_url(__FILE__) . 'lib/', //Library uri
                'CS_WAPG_PLUGIN_IDENTIFIER' => plugin_basename(__FILE__), //plugins identifier - base dir
                'CS_WAPG_PLUGIN_NAME'       => 'WooCommerce AltCoin Payment Gateway', //Plugin name
            );

            foreach ($constants as $name => $value) {
                self::set_constant($name, $value);
            }

            return true;
        }

        /**
         * Set constant
         * 
         * @param type $name
         * @param type $value
         * @return boolean
         */
        private static function set_constant($name, $value)
        {
            if (!defined($name)) {
                define($name, $value);
            }
            return true;
        }

        /**
         * load core framework
         */
        private static function load_core_framework()
        {
            require_once CS_WAPG_BASE_DIR_PATH . 'vendor/autoload.php';
        }

        /**
         * Load Action Files
         *
         * @return classes
         */
        private static function load_action_files()
        {
            foreach (glob(CS_WAPG_BASE_DIR_PATH . "core/actions/*.php") as $cs_action_file) {
                $class_name = basename($cs_action_file, '.php');
                $class =  self::$namespace . '\\actions\\' . $class_name;
                if (class_exists($class) && !array_key_exists($class, self::$wapg_hooks)) { //check class doesn't load multiple time
                    self::$wapg_hooks[$class] = new $class();
                }
            }
        }

        /**
         * init activation hook
         */
        private static function init_activation()
        {
            //load config
            require_once CS_WAPG_BASE_DIR_PATH . 'core/install/wapg_config.php';
            //register hook
            register_activation_hook(__FILE__, array(self::$namespace . '\\install\\Activate', 'on_activate'));

            return true;
        }

        /**
         * init textdomain
         */
        public static function init_textdomain()
        {
            load_plugin_textdomain('woo-altcoin-payment-gateway', false, CS_WAPG_BASE_DIR_PATH . '/languages/');
        }

        /**
         * Init payment gateway
         * 
         * @return Gateway
         */
        public static function init_gateway()
        {
            $CsWooPlMissing = self::$namespace . "\admin\\functions\\CsWapgNotice";
            if (class_exists('WC_Payment_Gateway')) {
                self::set_constant('IS_WOOCOMMERCE_INSTALLED', TRUE);
                //check is upgraded or not
                $CsAutoOrder = self::$namespace . "\\admin\\functions\\CsAutomaticOrderConfirmationSettings";
                $isAutoOrder = $CsAutoOrder::get_order_confirm_settings_data();
                if (empty($isAutoOrder)) {
                    new $CsWooPlMissing(2);
                }
                $CsGatewayInit = self::$namespace . "\admin\settings\CsGateWaySettings";
                return new $CsGatewayInit();
            } else {
                self::set_constant('IS_WOOCOMMERCE_INSTALLED', FALSE);
                new $CsWooPlMissing(1);
            }
        }

        /**
         * Check db status
         */
        public static function check_db()
        {
            $cls_install = self::$namespace . "\install\Activate";
            $cls_install::check_db_status();
        }

        /**
         * Check plugin version
         */
        public static function check_plugin_version()
        {
            $cls_install = self::$namespace . "\install\Activate";
            $cls_install::import_old_settins();
        }
    }

    global $WAPG;
    $WAPG = new Woocommerce_Altcoin_Payment_Gateway();
}
