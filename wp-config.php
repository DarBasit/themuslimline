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
define( 'DB_NAME', 'project2_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'F6(l8PA`7zs=tto!&_cB[63#chh-X>QL!?7ZU5VB~tCuA}o(E$)|!{~M~ImcI=JA' );
define( 'SECURE_AUTH_KEY',  'q?j~SfG3+WJ9FvcA=Hnwb(!h7G&j}I3vN<V6U-,1CO*i4w7o/=-y0)Hjdp{o&(#(' );
define( 'LOGGED_IN_KEY',    'cvy6S{foc/NX&^LZ,7%kKWJ=a~+tCh>}&/kca_bMpo%/~$hsLHpZ8n0>.Zx.UX/^' );
define( 'NONCE_KEY',        'yaggE.q5# ocISz2PR5p2A#~G$i?z/Ef?]eY>=|wwHKMpkFVA53}<Goz;RJAnz?2' );
define( 'AUTH_SALT',        '$jEezUuT`&>hR5T7.XkSE[ve`/WNXT{R<&qx]6uNdd_xFx|L !Kl`ZQG&[8%&mXX' );
define( 'SECURE_AUTH_SALT', '@Tk%0>AdbeNH5nX9WwTxFi*gP;%m~W8rt>4Y2@fH1yxBHs=PB*|T&Vxt(1SzIP~I' );
define( 'LOGGED_IN_SALT',   '6>-UG~G0BFY#_*3p:$DE&*h(CCR_2S4:tfMsnJYg-Z:N7&5z-fCcL/&(1Y=fO:k_' );
define( 'NONCE_SALT',       'GATw$qQ?Q6U-}ROTNC!(NR=t^7Y2#<m3tANKkprF!Dbmx~HiUaX<_LyBZe.+=z_#' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */

define( 'WP_MEMORY_LIMIT', '256M' );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
