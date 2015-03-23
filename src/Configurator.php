<?php namespace ElContraption\WpThemeConfig;

class Configurator {

    /**
     * Default config options
     *
     * @var array
     */
    protected $defaults;

    /**
     * Theme-specific overrides
     *
     * @var array
     */
    protected $overrides;

    /**
     * Merged config
     *
     * @var array
     */
    protected $config;

    /**
     * Merged config in dot notation
     *
     * @var array
     */
    protected $dotConfig;

    /**
     * Instance of this class
     */
    protected static $instance = null;

    /**
     * Constructor
     */
    protected function __construct()
    {
        $this->defaults = $this->getDefaults();
        $this->overrides = $this->getOverrides();

        $this->config = array_replace_recursive($this->defaults, $this->overrides);
        $this->dotConfig = $this->dot($this->config);

        return $this;
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

    /**
     * Get default config options
     *
     * @return array The default options
     */
    protected function getDefaults()
    {
        $files = $this->getFiles(dirname(__FILE__) . '/defaults/*.php');

        return $this->makeConfigFromFiles($files);
    }

    /**
     * Get override config options
     *
     * @return array The override options
     */
    protected function getOverrides()
    {
        $files = $this->getFiles(get_stylesheet_directory() . '/config/*.php');

        return $this->makeConfigFromFiles($files);
    }

    /**
     * Get files from glob pattern
     * @param  string $pattern The glob pattern
     * @return array           Filenames
     */
    protected function getFiles($pattern)
    {
        $glob = glob($pattern);

        if ($glob === false)
        {
            return array();
        }

        return array_filter($glob, function($file)
        {
            return filetype($file) == 'file';
        });
    }

    /**
     * Read options from file arrays
     *
     * @param  array $files Incoming files
     * @return array        Config options
     */
    protected function makeConfigFromFiles($files)
    {
        $config = array();

        foreach ($files as $file)
        {
            $config[basename($file, '.php')] = include $file;
        }

        return $config;
    }

    /**
     * Flatten a multi-dimensional associative array with dots
     *
     * Stops at numeric arrays!
     *
     * @param  array $array    Incoming array
     * @param  string $prepend Prepend string used on recursion
     * @return array           Outgoing array
     */
    protected function dot($array, $prepend = '')
    {
        $results = array();

        foreach ($array as $key => $value)
        {
            if (is_array($value) && $this->is_assoc($value)) {
                $results = array_merge($results, $this->dot($value, $prepend . $key . '.'));
                continue;
            }

            $results[$prepend . $key] = $value;
        }

        return $results;
    }

    /**
     * Get a config value
     *
     * @param  string $value
     * @return mixed
     */
    public function get($value)
    {
        // If setting exists, return it
        if (isset($this->dotConfig[$value]))
        {
            return $this->dotConfig[$value];
        }

        // Dot -> array
        $parts = explode('.', $value);

        if ( ! isset($this->config[$parts[0]]))
        {
            return false;
        }

        // Set array to first part of value
        $config = $this->config[$parts[0]];

        // Step through and reassign array for each additional part
        for ($i = 1; $i < count($parts); $i++)
        {
            if ( ! isset($config[$parts[$i]]))
            {
                return false;
            }
            $config = $config[$parts[$i]];
        }

        return $config;
    }

    public function all()
    {
        return $this->dotConfig;
    }

    /**
     * Is array associative?
     *
     * http://stackoverflow.com/questions/173400/how-to-check-if-php-array-is-associative-or-sequential/4254008#4254008
     */
    protected function is_assoc(Array $array) {
        return (bool)count(array_filter(array_keys($array), 'is_string'));
    }

}
