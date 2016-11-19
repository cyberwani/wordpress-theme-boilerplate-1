<?php
/**
 * WordPress Theme Boilerplate
 * functions.php
 *
 * This file is the entry point for the theme. It will only define some global constants
 * and include an autoloader.
 *
 * @license MIT
 * @version 1.0.0
 */

/**
 * =========/ Declarations /=========
 * Global declarations needed for the theme
 */

/**
 * Theme Namespace
 * Used for PSR-4
 */
define('THEME_NAMESPACE', "Jdoubleu\\ThemeBoilerplate\\");

/**
 * Root
 * Root path of the theme
 */
define('THEME_DIR', __DIR__);

/**
 * Includes
 * Relative (from the base directory of this theme) path to the Classes folder.
 */
define('THEME_FILES', '/includes');

/**
 * Assets
 * Relative (as 'Includes') path to the assets directory.
 */
define('THEME_ASSETS', '/assets/dist');

/**
 * =========/ Autoloading /=========
 * Include autoloading file which registers a new autoloader.
 */
require_once(THEME_DIR . THEME_FILES . '/autoload.php');