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
define( 'DB_NAME', 'slp-tech' );

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
define( 'AUTH_KEY',         '}`LRr+E3mmhh]%EJ3m7(2$|@rMn@Fkw5%9G$R(##IFr=0x(P_H|Wh8env`}+JV]5' );
define( 'SECURE_AUTH_KEY',  'XgzO=Wg4z2U}a?(K_X{JMLZ=jNkEfSgx<thBe-.jkXf`V|MR88sjfCeFMb}Q%pcc' );
define( 'LOGGED_IN_KEY',    '^K|xjEz99HTZ5/tZ|;,&lAo@--RsGZIsNy]g#B/W]04g@)Q5f!D?L3kZw*SE)2$o' );
define( 'NONCE_KEY',        'sdkex**D{!$teg/VFE^X~nEYp1pUA_]+ zOO=|c/abQCfr<)~G/G3l7/$3iGvu[M' );
define( 'AUTH_SALT',        '/}d? +M ph{ZfFNb>/<gn(=M[9+ZV5B@I Q.j7Ge5*~<t3L~HsNMLheI~zpX XIY' );
define( 'SECURE_AUTH_SALT', 'L0ws;a{b^JlU A.WEfp+Z4A,KnphHLL9{RQf73Uo0Nl?e[kk|t$aV;=^)o=9RvzW' );
define( 'LOGGED_IN_SALT',   'x?VWH0kc,X+!|av2!qd0;TWH0D(Og Y.D+6Q<R&<b[}8&8#e_dmsKl<a,}R7G:i%' );
define( 'NONCE_SALT',       '/wPO=Ut9q-gi+:Urj7-P0Frp7rp>:fR6TUxd}{P= *amD{{@5ERWd{M^MD~g$!}5' );

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
