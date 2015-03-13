<?php namespace WpDotConfig;

class Settings {

    protected $config;

    protected $settingsFunctions;

    public function __construct($config)
    {
        $this->config = $config;

        $this->settingsFunctions = $this->getSettings();

        $this->doSettingsFunctions();
    }

    protected function getSettings()
    {
        $files = $this->getFiles(WP_DOT_CONFIG_PATH . 'settings/**/*.php');

        return $this->makeSettingsFunctionsFromFiles($files);
    }

    /**
     * Get files from glob pattern
     *
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

    protected function makeSettingsFunctionsFromFiles($files)
    {
        $functions = array();

        foreach ($files as $file)
        {
            $functions[basename(dirname($file)) . '.' . basename($file, '.php')] = include($file);
        }

        return $functions;
    }

    protected function doSettingsFunctions()
    {
        foreach ($this->config as $key => $value)
        {
            if ( ! array_key_exists($key, $this->settingsFunctions))
            {
                continue;
            }

            if ($value) {
                $this->settingsFunctions[$key]($value);
            }
        }
    }

}
