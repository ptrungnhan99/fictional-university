<?php

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'fictional-university-db');

/** Database username */
define('DB_USER', 'root');

/** Database password */
define('DB_PASSWORD', 'root');

/** Database hostname */
define('DB_HOST', 'localhost');

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '`|W+sV[B%2.`U(&kT=d2XF!9McMKR29Rr-(IzmwCVv2x3N5O=r&cLn}AgI-I9@NI');
define('SECURE_AUTH_KEY',  ']UxP3._HURj.qqJq^Ar}uyLTU6|$#> Mo#YUE4!%wfK63}?S.di7({hwR^[/;P6C');
define('LOGGED_IN_KEY',    '&X$j(ex,wgU1DjZSn1CiB@t8iVXe~EBZGXFHJa>w:+H>0K>3$xmd1z;I)<AV:gPT');
define('NONCE_KEY',        'x?G<ShUQ~8*K/2Jc7i%WzdxLEnC}E$,JOs`7!S{j6`iJ=Un8NO/Mo/Y}=F.Zw#$:');
define('AUTH_SALT',        'ATb9uaNUn61h52eO?1SCffbf7|]%YTi@zIRG$pwy^>Cpm t[DXU`^o< B=dL`-k[');
define('SECURE_AUTH_SALT', '+nz&{e:Z9QC9S:>Pup.SH<@:^.iS|^rz 9kJ7;o[)>OckohL~Fnsbm7t^>@hV<3j');
define('LOGGED_IN_SALT',   'EtI>%GVVoy-+`C2XI8>]+,=:)dtlSc2dbe2(^HnG[e.w}_$Ic&>ngK^<h96ht]0q');
define('NONCE_SALT',       'Wa;htLN.z0WnJv{G?km@b.&,{Xa)dS*CHK1l5lWUDbEO<vZNuT/iF=JhVF`*@O>(');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define('WP_DEBUG', true);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (! defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
