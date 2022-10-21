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
define( 'DB_NAME', 'belajar' );

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
define( 'AUTH_KEY',         '!1za$e@=8/<nf_iQPaeNM^tb_DlH^miGOmf8SH{{,&,fRZp9gO4s/Th-A+rp 8@D' );
define( 'SECURE_AUTH_KEY',  '`6?2:P:i4=hk%=2/-ENJ|I/kM4YV<d&L?f8d{5sOX-MowwK9G9[tNKA=^5>qQ})P' );
define( 'LOGGED_IN_KEY',    'GMy [|F.|}<lCg|Qli],k?KOvTj&i>She{`{95-:Q(o7[(Kp^QER?F4}K+6f|j{:' );
define( 'NONCE_KEY',        'HH1w9=.{PB`-*9|NR2q=VOuRl!am)v__yo3v,Dp0poa#oxbi4|+?:W(TH!^:5tBv' );
define( 'AUTH_SALT',        'cE:+debK1d*r`P7>4i|a[9Chhk/dxjm3*_m.3EUtBx|6Z^$5c+GS{Otgq$>Y+~.p' );
define( 'SECURE_AUTH_SALT', 'Fu;NMf-zD(Fd&-*jR2PFM_FhbU@,[&w@g$XdY_H5?Pt=8<HoBJ|=_$AKm[*%5RFg' );
define( 'LOGGED_IN_SALT',   '^2s`uHQ? x$1x]=K~*]`~2Ep~NsOB%6&nUO81u{qtAO1 pQs8EkO5uMB_[+cMei@' );
define( 'NONCE_SALT',       'Fm{Ffc%9n!!`U>Q+}iLs7B8K![3Ol($}nu>hF!8$,OymQ$w_|]h$yUN7L)1KZXNP' );

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
