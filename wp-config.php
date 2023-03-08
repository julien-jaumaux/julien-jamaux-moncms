<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'julien-jaumaux_wp_zbr1m' );

/** MySQL database username */
define( 'DB_USER', 'wp_uul2c' );

/** MySQL database password */
define( 'DB_PASSWORD', '2t_3l*Z#L^_JI4WP' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3306' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '669MBSC(zgdEI!400*7WWW0!K3PnehJ@E6s:18Vx6~5lW+UT;9Eg:*[%j2MG1+%*');
define('SECURE_AUTH_KEY', '7D+15J%A4Fwv!)x*EzSE7~5hc__8C90uSGeBg|*:yE8)tNWDzz+09W]23emTuU0%');
define('LOGGED_IN_KEY', 'j9E~&PM+50B3*2Q5!VFdO~/3goH79uox1fIv0V)8+r3Z6/cE5ys:d_fO9a]t(10+');
define('NONCE_KEY', '8(G0krd(2+B69@7sWsG6j3f;%#Z3QwdXT1H%o+Z5Q8|-h03:q1/664jO:-f:A#c:');
define('AUTH_SALT', 'f+7@s|Q8]+81h0Lr6z5*~WJjR8&KnN9#TOm1_~A5|4]/x)x~@@l3fS86LI1]zpr2');
define('SECURE_AUTH_SALT', '5YI5E]vSH0R@oiSDVpUsO6HR)in5O[AAP-(B254!@2J@#1G8kI488|__bl8y)2Ns');
define('LOGGED_IN_SALT', 'YYuR686!]FNag24Oxli43-hmR_88|0~47Zb/b0f66L(@hY3h_-_8@7O_b7[uFJyE');
define('NONCE_SALT', '+Bk+:OuOy2|U3Q&)B:YP8*+3:j&6[u26E@4j]B%fH]jM_3*YSL43sRge0l8]9lHY');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'BATp0b3VP_';


define('WP_ALLOW_MULTISITE', true);
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
