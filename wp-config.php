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
define( 'DB_NAME', 'number1_db' );

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
define( 'AUTH_KEY',         '|]9oNmK7 HCRoaq&2)V/.HKf/f<YMBT@N<Jabe;RTVsh4LCA*[:rhwvd>3#rZ+|H' );
define( 'SECURE_AUTH_KEY',  'e%||?Fz]]?M3wQ1BHg;Ws_D0rJy$f;E!BcL?[hc>oTcgN=&xYYBiNYE3p{Q8WL@:' );
define( 'LOGGED_IN_KEY',    'OGwu~iPVq4E%{%RIilaW4fb~0ApFk[j-8)#A9|ed,!SvQ`,kvw<.CWJS4O!6]R}D' );
define( 'NONCE_KEY',        '/aG$V>8,jEluf>@kUHIr4^nC1FS[$q|O;BZ(?8Pq[,T`1|wO:T6~j8:j)O%)tWh[' );
define( 'AUTH_SALT',        ')]WyD9~*i]Nr&:wmi^<@NViA7r&sQ o)zVShr1u>m*@2sid3kW%Wu|(%&slrb[U4' );
define( 'SECURE_AUTH_SALT', 'Z)s+G4T9+s<|k2uo~YT9d*?D=,_=;LU#eaV=TI)d7<ct]^E@,^)QpcUWFZQ`~}uk' );
define( 'LOGGED_IN_SALT',   'eKB]|;8237/+~x3&yQs5Kih)l~)oOY3C Q/?yAJ/9IpnTd!cF>mp:>|KePL/iJ[0' );
define( 'NONCE_SALT',       '!Sn`C56a*1o~]$1/TT`T/x-qHbpBgVKXp <kegY6*gBe_F[tFPHNo|`!u3aJ?~D,' );

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
