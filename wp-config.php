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
define( 'DB_NAME', 'dataquanly' );

/** MySQL database username */
define( 'DB_USER', 'dataquanly' );

/** MySQL database password */
define( 'DB_PASSWORD', '0924404019a' );

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
define( 'AUTH_KEY',         '#_Yp$*@eE*40Lu;INT[fxs?VTWY!(6vmB=u,2KUiK k`~,T]y@(i.,sk2=0VIs+O' );
define( 'SECURE_AUTH_KEY',  '(Tq{5@LJ`rh2@MVI)/up#^459RA Pfg,?@*y@Px45p2.2[~ i5;%}19EPB}`.bX`' );
define( 'LOGGED_IN_KEY',    '&Wku(hcKKt)f9W%:X6%+.|O8nu& cl!kx})I,v;XT -q{sYc6m38y0VxQD32mcVY' );
define( 'NONCE_KEY',        '!^j4bLVq>pO#tg`sS?Z)_Um*/{+HA&$WJG<9gyf.3E9mByckpxD8ZDN*B<Ac{,A<' );
define( 'AUTH_SALT',        '<Qj3sufN4W$jfhm(bgd$wP^`^`s22EZDIj,KtwmkOOKIzo>Nl<nI^^XE.wsy1$e7' );
define( 'SECURE_AUTH_SALT', '<pGc 7v`s>7_{VEyZMt]gO<Vz=UEpVM>5^l{xt7/urnDoh|& f3eZ=vo)ph+jbRo' );
define( 'LOGGED_IN_SALT',   '*&vMs.NsQ614vW%))}qpc!]d*,9H7^Iwxvx~]tk=Z9 ycn+pr??2W,Y6X l$&>nN' );
define( 'NONCE_SALT',       '5IH7bSAMUI]rHS:5VOCTZ$=@u8uWXtU/};|gNTVg}UUJjBSL5Dtfwp0%%B~yxWR%' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_ql';

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
