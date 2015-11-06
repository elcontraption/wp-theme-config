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
/**
 * Require Composer's autoloader if you haven't already:
 */
require('vendor/autoload.php');

/**
 * Initialize ThemeConfig.
 */
ElContraption\WpThemeConfig\ThemeConfig::getInstance();
```

Check out the [default config files](defaults). You may override any of the settings within the default config files by creating a file of the same name in your theme's `config` directory. Your config override must return an array. You only need to declare the settings you would like to override.

## Adding configuration settings
TODO: add documentation for this.

**Important**: all config settings are initialized on `after_setup_theme`, so actions that need to be initialized on that hook should not be wrapped in `add_action`.
