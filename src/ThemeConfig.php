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
