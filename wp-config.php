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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'blog_wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         '~WdO+`|5%~<%tQJ,!5dCdz/~~32oCqwgy)67]XQ~ucbz{4~cPcP4f|9GeD%[lF&A' );
define( 'SECURE_AUTH_KEY',  'em9>HO#6L~h~_X/UxSI8ABob4s|[pt?y:ui~1a2SU_9`jY?qLO.ASfP]|Uik/X3I' );
define( 'LOGGED_IN_KEY',    '4ke%wm+|80Y;@LqWqQ[oRg8#PDTk7o|,%5BL`8 Il%Vaxaj, zURPX>PbB]ocj-,' );
define( 'NONCE_KEY',        'LZ%9Yar8%paC<doD[?,H|:r$mfV~,C2:R&f_ f4;Dx_Aezcy ^]rK53?=951H0aN' );
define( 'AUTH_SALT',        '?YyYEuH.UWG)@%:U$KgqIclODQKd.ohz|&-NQePBGD79nx7sCDn.R/nI.Vs0mN;B' );
define( 'SECURE_AUTH_SALT', '77;%AYh+,bm7MWP>y`.ZoX&/ 71*gsk).OR(l3#) CRqWV9a+)Y6]g}@v2GPy4og' );
define( 'LOGGED_IN_SALT',   '|Vl,)Y;%M})K8bm5?QY;m^i3%Jmfd;LVws{^);[2`S~_)T$FCG!+L84@anZ*{4m^' );
define( 'NONCE_SALT',       'dDa6AwrA$%,-%tj+p$`ny5dN7N@Plvm:9thvuy+LT/iOfPk2TWXYHGw`nB%y8V1v' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
