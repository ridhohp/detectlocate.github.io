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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '*AStme=c?bv=u^X#m#N1^Piw`&<rM^OOndXt1Hh$!hdkxA=~0K|T;rYS)N<[N*sn');
define('SECURE_AUTH_KEY',  '+RTfXo,2CmkVL|mVhP>r1z*&J{eZu,T<@fdu-{k_Q;G{JCHZ1TWAmTfGzi=-8{VK');
define('LOGGED_IN_KEY',    'A.RnB}?Wgd%{ e_dYXM,U&=4!oJP|YBgN;!!du%sh!?pT81b*_,h8.ZG2l5sw=51');
define('NONCE_KEY',        '^a4,=,ZWcYDUr9PZ:KWy:5WR@RLL$BMG@Lz9kc[0~B|B;@UQv[XP#_=g^j}|av1t');
define('AUTH_SALT',        'iV]7G5QpLuhnV4VYTh&u}%yABg?tEW=~MsJ./=L|#],;2pve6P,D<tw eG-|UTQ]');
define('SECURE_AUTH_SALT', 'R!t`}`Gy+G/zmC[Kbz>@hQo*T,D`fD`yfcH35mAU9{AkGa:P>KZmbIXEK(1o&i!V');
define('LOGGED_IN_SALT',   'H% z?hpr}yoV^jJ{VuXF_rbJh`jix8Mg])DCp_#O:bp_0?.Ea.N>e6pR:a,,bZD-');
define('NONCE_SALT',       'Y!Q*PWT6emP9#&]?2rpQA2?`1-7G?JWMJzCZFPIdAt]pp5f$P|Pn^$1`>,nf*J=W');

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
