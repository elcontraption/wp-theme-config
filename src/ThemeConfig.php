<?php namespace ElContraption\WpThemeConfig;

class ThemeConfig {

    /**
     * Instance of this class
     */
    protected static $instance = null;

    /**
     * Constructor
     */
    protected function __construct()
    {
        add_action('after_setup_theme', array($this, 'init'));
    }

    /**
     * Initialize ThemeConfig
     */
    public function init()
    {
        // Initialize configurator
        $configurator = Configurator::getInstance();

        // Initialize settings
        new Settings($configurator->all());

        do_action('wp_theme_config_loaded');
    }

    /**
     * Return an instance of this class
     */
    public static function getInstance()
    {
        // If the single instance hasn't been set, set it now.
        if (self::$instance == null)
        {
            self::$instance = new self;
        }

        return self::$instance;
    }

}
