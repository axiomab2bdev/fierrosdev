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
define('DB_NAME', 'fierros_portal');
/** MySQL database username */
define('DB_USER', 'fierros_dev');
/** MySQL database password */
define('DB_PASSWORD', '{f5Rm_f8)PxBi=9f');
/** MySQL hostname */
define('DB_HOST', 'localhost');
/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');
/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '@*~/l7bD4iidk<6L*y@aO)VBI.[T(LehHlEC^/ Fz2qK10RW{_e)q2>|j;qAqr:c');
define('SECURE_AUTH_KEY',  'P>ia1LK<Jsa>rHXoaTde[x8mZjjPj0D$SK%u62yW3`kw4M1FJPUw>)I}KL}gNtQH');
define('LOGGED_IN_KEY',    'UvRH>d|[B/oK[P9E7KJ=d1;UH5Op29&(pc6/u?4(Pr;Gi2YplBmo^@ j)4+03|x3');
define('NONCE_KEY',        '=,.]qGY-d$OvOae;xHv}jM10</j<A%SlRqAG(IkZ^m1]iu!n8mdx0E:%J.yCB7>0');
define('AUTH_SALT',        'jnIfEHFKb5(*@hmYr*--Zzb#zfy, 2:@oRq+zu5pU_^+%!ex/I3]ow&Q(m;93RKB');
define('SECURE_AUTH_SALT', 'Rwf(+nad^8sa9(J$[?F${9v?7;:0a,Ta`4TRm|~(1H8A{Q__g)dBRV@tf{5m{Gaw');
define('LOGGED_IN_SALT',   '%6oXVF%t]ma+UPXDJz%5}D``m}=Kd^2oQ:1O/(b]kyE V~Byxqv;VbGd5GpH!YnO');
define('NONCE_SALT',       '%]2V0@$p> $ivK!ulSmBhzIW7vpawLMs21?AsY+<:rXw0rK0*+F^okQp(ib%R+*s');
/**#@-*/
/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';
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
define('WP_DEBUG', false);
/* That's all, stop editing! Happy blogging. */
/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
