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
define( 'DB_NAME', 'webbanhang01' );

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
define( 'AUTH_KEY',         ')yDl5G`pe7HhR_qnFJlD1bH}QLVgnAY;{IiNcPgGGKD&J0Q7HJT=&E6rrHrSz1K!' );
define( 'SECURE_AUTH_KEY',  '#TJC]/W>#@?%GL[<b86#k0U|A{HzRX>JiZy|%b:fBXq.b8A>#2bi9l/z;5Kx$%N2' );
define( 'LOGGED_IN_KEY',    '{[S=um.hkRT,A=ieC]mf}}:[|)<)yto.ihR#NZO+Nw/,5gP8=6<!5&1@9Ehl/Z;2' );
define( 'NONCE_KEY',        'phV_HNmX<!o.*)ZD/[KgMW)ln}pPu,]*yj)|,5Z>)[J57]ZY`!GG@NQ-b+$d8uk~' );
define( 'AUTH_SALT',        ';N(KWLa1R.P@6 Pt_PHvx|34c#lQ#jZC1/KLlKYTj ;<E)X<Pvj#;e}OuSg_*f*&' );
define( 'SECURE_AUTH_SALT', 'ji#_&=L#[d|dUFa5WC3zJzYMU3J(nGb0[I735qa`V*<yY{` f~>v&~szme7k)(>:' );
define( 'LOGGED_IN_SALT',   'q68M1YQQ9~v#G@@MTLw-|o~a+sm2B6jwg.jpCNrt4r51/]!lkO29ghDg/&],=/<+' );
define( 'NONCE_SALT',       ';{Djr!wzn`h)#xH4cCN1$Olu5~x*no^Ph>qy@[F]xH iTo.IyWs,z=ahQY9}73<s' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
