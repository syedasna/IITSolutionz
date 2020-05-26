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
define( 'DB_NAME', 'verynew' );

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
define( 'AUTH_KEY',         'IA44>dRKy=>u{wp#l124;C`3E{K-)oY*1[Z$RKDna2I*quL~?5lRIid5Pi~B< /s' );
define( 'SECURE_AUTH_KEY',  'v#u[,u^],)xJ~6$;DK7p.Iy4^&Uu}Pnc=j$::+ho0#9abRhq/q^p5s}Rsz*O(geq' );
define( 'LOGGED_IN_KEY',    'Ms^zOLm$r@)^{x >Mb:V;t)_<Wg&XTu>`MT&[!=>DFwL&j~bvk Ww5%[Vj;I8>hT' );
define( 'NONCE_KEY',        '7kE:%9maN6XWn6Tj@Imj&}jPszHX^Z8l Ope}W-K84yqG(F-w/n#VSfxF9H}?}N2' );
define( 'AUTH_SALT',        'y.9l<oiUI?M$NN>Ey}ng.;Qh)A2.H$kN8E/{oRx&KVF][ho<ap6KUQQA)dbT5T0K' );
define( 'SECURE_AUTH_SALT', '4HG`qVKIxnu=5r`Pu4w9YMsA?8H6Hz=wHuA@<_Box2Y!{l~zCY]MuJF|o{NorV3Y' );
define( 'LOGGED_IN_SALT',   'm^JkO{<dS~o.XxuA})Xj&Em~9;g,Sh@nBDVY;<PQ^btQr#:hI}9RsDc#(Xg*TKL8' );
define( 'NONCE_SALT',       's2rL;l;y~IDU51j/DOd%wKotL:Dhq:e!DV;T+dmA.J9)/,{7I14Q6F#0x_P$9=r4' );

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
