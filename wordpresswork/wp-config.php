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
define( 'DB_NAME', 'wordpresswork' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'KHZ4cuWgkwXv]:bYJPPAcfvQLs/m@>3kD/Q,8~:X5i(rWu-)DXHfe;fd^_D)a/ G' );
define( 'SECURE_AUTH_KEY',  'fA4SbAr{vBw!tBM~J``vTOkV,Q~Ob{t)B9Lac@U]=}4?(cEYz|z]y%TX~I+[K5O.' );
define( 'LOGGED_IN_KEY',    'sbA*1(S}Jl1 Cq<bEcLpoK|UF=2/-g/YS(:ri~;1@R.]|g&$263k_Ch+J*sADY]+' );
define( 'NONCE_KEY',        'G}4Hsd!nWuHTqZTBCT9Q*6aUCV&sO6hDER7n?:Ez_S,YaJfC7<V@D;!oFD?D>,m;' );
define( 'AUTH_SALT',        'D)!lRp=gGE~)Nd4y)Lraj4n9-VCmp9oq.c)=p((h3&?ODD,8VN*UjeH1BcT7I~}j' );
define( 'SECURE_AUTH_SALT', 'Pg $??|o<<J8%9U]]}OGVW}aU_h m$Q?x0wsj6tq0@X#qvmtut%::+dBy(^I*LS}' );
define( 'LOGGED_IN_SALT',   'no|4V@6$1WblA|iXemmOWtKGg[ip$+}?joVrQ2R C#4YXN?Jz*S,<i3#lZV~pF#;' );
define( 'NONCE_SALT',       '#?1eUT+`j$ty.KC*$ad/b6T?>bH(a2Do8Jj-zOv+=;P>(c3lcc =I?M)G{T0z.?V' );

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
