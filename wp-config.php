<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'db_myweb' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '6HW ]!8:TUD|Mk|^),FPEI+:rKY/8a3ru!0^{F%eiI$d,BK/;mCRL6W4}%qI99%)' );
define( 'SECURE_AUTH_KEY',  '2lm|s4TE,Lwe-|u.bR+KOy2Yt{aiuB|>wHgC#L8ow7[ rrhCr=Kat>(!Nz:ohrM2' );
define( 'LOGGED_IN_KEY',    'a-nY[M;H>GN;FXT5}p>hn@cdGKOE)+BGId+XW<eVR.h?^eHfQzeF;o,fLKBaD2O]' );
define( 'NONCE_KEY',        '*gJ}7w:o)ujc2_&fLB^URX.DC?MBNdLlg-D$bEeIG>9:vxs$EjX67pi$>Vk?S/SO' );
define( 'AUTH_SALT',        'tSd~ro^,t--)4Z`~}4LZb7:*tO+lMoT$!(3Shd7_BP< BRV^{dQ{vf]1<a/<~+_Q' );
define( 'SECURE_AUTH_SALT', 'XgMhIUI%?UF4igi74KI>-L3Ff@C^#9jfP!*HAcZa)rNYKnWSWTpaiL{2-{+1UM&Z' );
define( 'LOGGED_IN_SALT',   'w)l/LW^`zJv=Coz/_$44.!/TCw|(qwR$SFjcgS U%h$A_t/$:.h{^w]QLadEP`,V' );
define( 'NONCE_SALT',       '/Q=@uIj^lu+GCAm,gosj(.bn(4Q%kz@h:[3*AI&o`rdOZ)@0[_f@(x2oQ5}f%l?o' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
