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
define( 'DB_NAME', 'portfolio' );

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
define( 'AUTH_KEY',         'ZN7z%o_TAR#iqY&+q@vLx~@/8+TYR%p;3NT3<;r!jbYRbBCE9z.8h{ulOphlyCO6' );
define( 'SECURE_AUTH_KEY',  'l>)Lpa:aKHg_5hz.1m!a$)rbS[%Ey#h}9mw&,755]Zd=s0a2m--ep=!55 nuCGIJ' );
define( 'LOGGED_IN_KEY',    'nEgqF>.WJP6[2h9?$[iQdN$f+}JA.OjCRPWHPd!&GI&8fl.xbE{xA%3MMZPUp2O-' );
define( 'NONCE_KEY',        'rPqYxLlK T[hcvtjD4(0iueY#ykY:4ZKKlz<+{0i;]#2<3021jCC[_$wP~fu?};4' );
define( 'AUTH_SALT',        ',^A(q/o*?o.z4-+D(i^,V5Q+nQC[<9d%N7Z)ro87#uSB355B@{KoQ;kB21nfXZKR' );
define( 'SECURE_AUTH_SALT', 'q-YV4a_9JGFV6,vjsbf2kx@Cz*oXkAWY7NedAoG 0g7-ng2(IQN~6u8/NGBhi~N^' );
define( 'LOGGED_IN_SALT',   'fP{F7#4Uxk07%y^#$Fr{U_G[^b9rD+=uqUVPM>LkKLg}/r^4mh(V?J]_2WjO}tJL' );
define( 'NONCE_SALT',       'A|cV;Hy4KA1aW2:M7/csN]y$hYp e&7>*8,zI:Je[xvl93|fCWF*`L@`PQVeo?My' );

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
define( 'UPLOADS', 'wp-content/uploads' );
require_once ABSPATH . 'wp-settings.php';
