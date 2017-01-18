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
define('DB_NAME', 'phamexco');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'i<QWzioNi}:s6ThlVADi#_[*;?Lq;o}ww:.{d$#nZ[W$XZ0h$dBR}u+CA{)t;~Xl');
define('SECURE_AUTH_KEY',  '*X{zLrHOIF*JN<M8s*Ft)8w*68pMc8,WF[;4h`v0z{azy)H-<+__?-+VQ9Tuqpki');
define('LOGGED_IN_KEY',    '*5_o&IF %_3>#tVdx6*iY}sT?{`4N@IR5HGd!EDJ!4=R|Bd:GIs*p#*eQbQWxad1');
define('NONCE_KEY',        '5F.DV|OtZUvtAH0kSD|:8ahkBJ/qgFG?yj~K{]-/aq8{rWtlz/f$><$??uF>#?bN');
define('AUTH_SALT',        'Y1ulpM?](9Q_A-_BY*2H56 RZ<vCvh.H?1~,i,-]sQd=+Uw4rdA&xS5p>r>kaWtP');
define('SECURE_AUTH_SALT', '`v5R.f C?Y.p)&93+^?%JQVNrfrWzXS,GYXTCP*>y$)US3}*=p4Gtwl5yR6QQe)K');
define('LOGGED_IN_SALT',   'aaj7;ltZ.NcjFk^&6R,d{dcR>moA_{fnM,F~:O&)C/|&2G$8:Ms3$u2GBN!x(w}1');
define('NONCE_SALT',       '} SV>s#tLQ[^2zjBFX#KEaNoJl=7]asN_S4@W,uetspDMb4B=:X<rUATE|,tW./&');

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
