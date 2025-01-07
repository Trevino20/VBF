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
define( 'DB_NAME', 'vbf2' );

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
define( 'AUTH_KEY',         ';Q !%=TlJni9_6{;_y.yqk6N^(rg}`0piM|aV4/[-XV}nJqFu({dZNFV#))&nJ,}' );
define( 'SECURE_AUTH_KEY',  '51l@B<$IVh4A!c4&]^yD7#_*S}E]xv3)% NZza #^b} rKb}kOROF+Woc&ZK#]E2' );
define( 'LOGGED_IN_KEY',    ',6]bC#3CWNj?MQ_:CzI!g^sY68I*.1Q#;$.&CZr|Sg2`l&j8_alNIVdyzb3d7YBY' );
define( 'NONCE_KEY',        '21PrGT4?G$p> L>e=aR$P^ ~ak]MKOj$H*qez6b4jG>y) {1Z>ZVo_qktAAKWFS~' );
define( 'AUTH_SALT',        'uVCzkHz9kv5:2Y9QQuH<1j3DVyj6B>0mt=Xjyl)]1TJ2Xa_y3NAaF.|Ab0N;`vS(' );
define( 'SECURE_AUTH_SALT', 'TL]m)M1iPSX{#BJ:@d6X5jfI*X)2[xoq0M4-(SIz!{TyEGFjxFBA`l#A2vFmbA>R' );
define( 'LOGGED_IN_SALT',   'EWa`%z3eC&c0l%q3Z=kKhg0iT/N%W&;Vk</F)Z ~4AHTl3 &@[jN_th[qyi9h3|6' );
define( 'NONCE_SALT',       'aw.I=bS!;V!Vc&TT.Z$!MfgnS^I2jh7DQ[bN$!D!l@P>>tgX6Km:&^8cVFg;M%g<' );

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
