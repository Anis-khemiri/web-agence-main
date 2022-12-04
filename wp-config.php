<?php
define( 'WP_CACHE', true );

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
define( 'DB_NAME', 'webag' );

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
define( 'AUTH_KEY',         '@2L:-i]bIw>&|XS/qyTIX`zWbK:JCfERa/c3$yLku:S{r|^M1mTEyZ#@0|Vkr }K' );
define( 'SECURE_AUTH_KEY',  '8*c-w<r_SDZ =xKY_D = CG)R_H*i+-@lg5NikirInAu2lQds.?+[b]/}:3txb}`' );
define( 'LOGGED_IN_KEY',    '$tH8HK=!$C7ZUf5-hAll2{$i?oW^E5qGi:Fb^oD-g64AwS{8P=;d}931iAjDG`d:' );
define( 'NONCE_KEY',        'lyX, ee<TdOblFXu1ap3IP-<p@M3Z^T)IA`{hA*({L|Y2(oOcXUvB^,V2P@6OK8s' );
define( 'AUTH_SALT',        '/a8e4qw:q7*!~AM0JXJwfjMbA3Q?;LY1CMD6<mH0J$In(-B;H15.:N3-=q{tmQ&l' );
define( 'SECURE_AUTH_SALT', 'DUejG#tc<2(a@7NJ,pJCd>w-/Huqkcs3+WQ2JEj*0V=^jU[f7W{-sP6YO_`$YWy3' );
define( 'LOGGED_IN_SALT',   '#.i(P|B**rdC AJkfc=1j51r$[VpL@{_YdFZ+Rn/ZL7daxSykm!UP>u1Q3eLLSBe' );
define( 'NONCE_SALT',       'c%w.Ir<maJ_s(%gL,`<oJZ5yv7/<0YVc7a3<PQs5=+K!i+<qU]o!D1:L{3ZF~3#0' );

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
