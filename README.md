# WordPress Theme Config
Sensible default settings and intelligent overrides for theming WordPress.

## Installation

Via Composer:

```
composer require elcontraption/wp-theme-config
```

## Setup

In your theme's `functions.php` file:

```php
use \ElContraption\WpThemeConfig\ThemeConfig;

/**
 * Require Composer's autoloader if you haven't already:
 */
require('vendor/autoload.php');

/**
 * Initialize ThemeConfig.
 */
$config = ThemeConfig::getInstance();
```

Check out the [default config files](defaults). You may override any of the settings within the default config files by creating a file of the same name in your theme's `config` directory. Your config override must return an array. You only need to declare the settings you would like to override.
