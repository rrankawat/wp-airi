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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '12345' );

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
define( 'AUTH_KEY',         '{[Nisea4^DMy8]^`q]UE(lF *v^a^0gH&#L(Vn*xHAa={wp^],6amy-d?-GeMfDY' );
define( 'SECURE_AUTH_KEY',  '7UkP$vn]dt4_[h[sM:n9n[@49rF#m*zO:rUX*A#^P5FSA9a%m|1!hVA:vQKCRL^u' );
define( 'LOGGED_IN_KEY',    'cN-T_[8,u~Aefw^hI:HIqONvVbw6YNm0p /A7Q0|#?8STl6vj&m<hu1%jQdzeq=o' );
define( 'NONCE_KEY',        'TUKfJ+-CJp{GVi~vZE4Q0{j^O^CKZpf%a~N,*w%8/A#&I`~O9y.dWb;tp+7?Am|]' );
define( 'AUTH_SALT',        'p=!x. P31zp8{A}l2O}OQx@T^#u8(_[[{Cbjgx>cvy(i9?E`x?W=3uK 0ynG!lJ_' );
define( 'SECURE_AUTH_SALT', 'a|WoDCpfbkFB~}sg,pg/e.85<.$/[aHcS@XfG- Ukz8_7[d&T5UblmCd`Gjry6Dr' );
define( 'LOGGED_IN_SALT',   '~v&6Oz_lg,NSQv}, 2{1sw-cb{iT.X8/:KU-yv-K,lG<TD{IFY+z4UtzY7H4^u+$' );
define( 'NONCE_SALT',       '![JZ5wF,y/L3/_WR?-G ck?w,Nh7Rx_-(1hdA1Dewn1KIBx_w)E?@x%OnPIKVeDR' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
