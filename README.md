# WordPress Theme Config
Sensible configuration for theming WordPress.

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

Check out the [default config files](defaults).
