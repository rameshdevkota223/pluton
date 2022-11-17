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
define( 'DB_NAME', 'pluton' );

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
define( 'AUTH_KEY',         'J!G_2 CX0l3ixUTO=AVAE^L<aYmG:G/.R(W}gha9N*@L()U@D3kf_z|B2AKwd8c&' );
define( 'SECURE_AUTH_KEY',  '7@Y2 ,b)0`5yN(hl4IqWEana7r=r:@|.GL`:kzORZrNCPzdnB&zX!Tlt3+X+X3~4' );
define( 'LOGGED_IN_KEY',    'O+|#Y078DiRg+_(@gc=a5-Cb(]s3-FFj&^xJO&5w@74}IHx|b0rJDAao$)$]o+c5' );
define( 'NONCE_KEY',        'iO^,L|c!t6GD#185:Vb_fm=]73(f?>4HMOtk7#5AAR|jERIVPD+4|3YCIIkfunw{' );
define( 'AUTH_SALT',        '+0Q%|pQK~/swg|n[fR2C;X6^L0jsG/r9~#^:pFBz.z4}B 55|r%ey7b*vc]G?GlZ' );
define( 'SECURE_AUTH_SALT', '[0F;Cz3peH.)[H&ouP?5oan~^$},BPj6QP7]8!6f*?_$gCr8&d%/ct[o`H@(K]AY' );
define( 'LOGGED_IN_SALT',   'KTpnm=C(hgx!)i8M6Wd]Ecwm3aA.qtEkt%%2d^_ >?D+}f%}.2ycAL9U>#>w0#S^' );
define( 'NONCE_SALT',       'plO!1BgRu_XMcNmxV[1Da6+pqjmB$:#7xY)SoX`1~DKdRQu2t1qll^-=>@wt2rJ)' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'tt_';

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
