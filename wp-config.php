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
define( 'DB_NAME', 'gitwp_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'En:&W-BbEa9UG$gpzm5kbA^MV z0{5+/w6#eQbPD,<U/O4`x5#m*aRz_a9><t2hJ' );
define( 'SECURE_AUTH_KEY',  '!C8f_c$Km@|8oO{&7M8Y{-_{-9zF</*wxv9mm=^r|b&N/eo_(`F^;z?>[%4m~`=_' );
define( 'LOGGED_IN_KEY',    'Xo/,FIX4J>+wORL,$ew-B5t8vhJ)dr_U;yp*IVwLGd#:}VZX.p W]yVL`hp[0h0&' );
define( 'NONCE_KEY',        'XVQ~)FK.9iU0*cL@JI=pbcZc[^exd5eX~e>%=f~sSph;@K-n8fz`LH*eRl;(LLm`' );
define( 'AUTH_SALT',        '+#mYy?a:sNo});[kH`a@t2f%84DhO6Y[0RC&0xMku2$nQo|2g[vr=Z~k^YLs7V#u' );
define( 'SECURE_AUTH_SALT', 'vYS{GUIT3+rZX$JxQZiZ1/[MohspM_m+8sxCyGzv_C2opq)W~V3<ctjc}%%-@Pus' );
define( 'LOGGED_IN_SALT',   '}OOjOAzL:3{Hf,-Rt95rT5OV<_PT/Eu[fPpmkQM:/9?Joh{7Pg)be39O >VN~e-N' );
define( 'NONCE_SALT',       'nyio.wH6E~BWQFg).[Y%cp|tyzL#xO;0=w#-WNuWEK7CSZ4Q)i9!)Bti$dlU/OBH' );

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
