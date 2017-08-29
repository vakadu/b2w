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
define('FS_METHOD', 'direct');
/** The name of the database for WordPress */
define('DB_NAME', 'b2w');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'sachin10');

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
define('AUTH_KEY',         'aL#m;f3d)Jv6R{S-fd4HDn-gCbkthMtZ]qHPX r-GN{sZTGBGenD[y|Q[YU$` Kz');
define('SECURE_AUTH_KEY',  'mFI=?K}Xe@Ab%Ouir*mfO4w`bK=dpE=N^|Qc{Pq$~d-NwOor[2c4,]]ELI66S)!(');
define('LOGGED_IN_KEY',    '2N/u<I,qR+;.S&SV+LZ!g@CZ#h5`.[]t*api|UpJWIgQS_1vultu~M9M%_8`-GS&');
define('NONCE_KEY',        'I4O41e<_!@z$Nx_VW3X.1d]o%lw?Z~kJ. bb*+M+ROeH0s{p`;^Mj*jeLh5M8JaD');
define('AUTH_SALT',        'Jms!(>NK#Dj0p0|^;-v8sZd+!(o%q4zFU[0M-c0W,cHM qXjY-Nv|>EOiRQ=7<aM');
define('SECURE_AUTH_SALT', ';WR}z@M*_j#$xKA5~_|D!?+N+JIUFI eJO[}mZ(vqpm,[]Eq_BDfPr1d ERf-RH9');
define('LOGGED_IN_SALT',   ';!vua^{[A_ EL0Ui8$Et[aokmF|^5I(jwTKH;A~-o&|+4SO/MfbA>O*^U.GZ9fIT');
define('NONCE_SALT',       'sb83s06nFWB`+urC0=SGfIK1pVXa[W1WKd*Ogunk=EY99g8AE|_<o@sme@Q~Fk{D');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'b2w_';

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
