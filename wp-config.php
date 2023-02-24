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
define( 'DB_NAME', 'veselicvetovidb' );

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
define( 'AUTH_KEY',         '8@A,O{%&ePwFqkRo1_iB)&GSGnB6ueOGJv<Z[a)aYfq{6TCpCq699d1M^J,K+vw=' );
define( 'SECURE_AUTH_KEY',  'H[e[:3:;M@+aXNi]m<98AO)W[>!k0crd?vNB9Wdj7W8IO @8qYd8Uy$k{gb{Q RK' );
define( 'LOGGED_IN_KEY',    'Y+!bcxN6!c3[$#HtuN H6/SMsvjqT%.?B&kWJ4w2$q4RsDu3gC==s,80t?,[Qrr?' );
define( 'NONCE_KEY',        'Wk4TUp0juKMaU]4dhw.4X~ful.$Z<Rd7381=pI~w@!S/CHSU#(`ewO@he0+,qZx3' );
define( 'AUTH_SALT',        'W#%ak*-oPT5LI+M-W|uY)L{@Eig_VbjJl,$#!T/C}vsPyq8LjiSiFXhhoMyqfxM1' );
define( 'SECURE_AUTH_SALT', 'Qq|QRLMsi3DDY`u2q}WL&cY{Xanz/*z+UY`a>^9a0~!3*`?xl(zg(tx!}t}:|76-' );
define( 'LOGGED_IN_SALT',   '*qN!To%d=aY5gt(o@|[O5DiFL2$Q?Rj;>-6v_f1taU*A6}Xmu^%%fNF&ov$:e5FD' );
define( 'NONCE_SALT',       '~5~=M.*_IAt`^3pViV]`<t9rE;YyePl^0s3,HN|jtPn?({).HXE$[!W)S|8}t :H' );

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

/**Comment for testing purposes*/
