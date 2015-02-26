<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'twinkal_profile');

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
define('AUTH_KEY',         '/HLMKiw)hSp|SAt|K!jH5$A:#@@a][QzV$^zp^aL,iv?!i#6.yrTfdp(dptN+mKQ');
define('SECURE_AUTH_KEY',  '1$j: =+1X,ouG&Hyv(uavvV1*:i)a-V~.CTjfB]T3 #Q<^2]ApF]oPBeJ:3Az%ny');
define('LOGGED_IN_KEY',    '6BgW,<DaW1]7=mSf*tl!AV.P$n>}0R6:R9t|Fl=RN2YREBBw4w*/T8dpxUQ+W+p5');
define('NONCE_KEY',        '}ElKCerEPF7STp,jS)-,ypsYR#|4LnkuD{,.~IP|WEUj`;o]C4Y:zjGL0$qfk=A6');
define('AUTH_SALT',        'P*v,*?&_+XS@quFyjO`qE+CoU4PiZnvs~@4kbGWss5jR&o`rdKY|F>fNC$H64_H9');
define('SECURE_AUTH_SALT', ']~14v4<[~guip p:9!;#AOz{#vfmf5 6Ei v<qnwV7QHE3>B&_rAK/M:PGa[r#[i');
define('LOGGED_IN_SALT',   '{BTt1&~I&e{-jC, Ct,uQ,L?Ar!sXJA5.kD[OrN]+o`%X)vP7MTZYAe:Crx0tQ`8');
define('NONCE_SALT',       'O%8g$YlRpT| @y,O)Crf1zX=@seT|HLxvO6@-0,MBcZ=RAN_s8iYmKVb^T2N/+Ba');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_profile';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
