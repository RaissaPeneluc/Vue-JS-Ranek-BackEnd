<?php

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'my_wordpress');

/** Database username */
define('DB_USER', 'root');

/** Database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'vKaPWR&Ix[VjOqc2).2E 8GcW_D-]/7ApvX<Nnap%V4|z^$zRn8}uGW;:_>$zR)p');
define('SECURE_AUTH_KEY',  ',3y%|u`XvaC^.;p^rLNpd*gP/:fd!v508m_,n`oxVG+9(pD~C+An^<.f8_EoJsb5');
define('LOGGED_IN_KEY',    '#f7,g%32.&+Sm>k9fQ8B6xK&x*l.d0kqAwRj%3#NQChvwFv:[GT78_+%:/h/X?Em');
define('NONCE_KEY',        'znPXXmGa!H8jPi?x6Qc<5QC0 |JF08Y${5y3RdDbS*ai`J}dJ>xt$FyR2K/9z+1 ');
define('AUTH_SALT',        'ZjJH2ls@vQV``/IY9je,m0_ge3QTL];p$U3S; Myr}m<jNHL,;ww(]Vx!CfhFNOY');
define('SECURE_AUTH_SALT', 'Jn~*wfx@7;]A0;+$PODAreK0x1c&Pk4H|48Fm0ZQ54a A$ MQ5eVQ=eFNnU2zb+7');
define('LOGGED_IN_SALT',   'fw^ln6+-e*A`w0Vz(lva&Rt]O*D~!TTGCbK0rKZ66Y3N;_I 2Yby;Jz.KqzHf?Ee');
define('NONCE_SALT',       '<kMx)~Hqn|0Q,N<hPQI/d`usxo?mA$t&ch-JiWC,J %x^&[a?<DjMWm+3:QaT3@*');

define('JWT_AUTH_SECRET_KEY', '/#,~>Pm7Y/:?;UCO3pjZ<bj]6>}0p+fKt3Zi, G]`N|kynmM|C_=Cj;f~zYA},~');
define('JWT_AUTH_CORS_ENABLE', true);
/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define('WP_DEBUG', false);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (! defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
