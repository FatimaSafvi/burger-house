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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'burger_house' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'o(blB4#;O7[e|D`p#*1rhg8>H]fP+6;p_o+63stL@-&_>RT>9N}AvM9MCOGP&iUa' );
define( 'SECURE_AUTH_KEY',  'nWgODKLu_WV!e@ct~F@&TOT3ih|TSKu+ti8]6;ph#/Y*kXX!^44x$mMeZP84E^X6' );
define( 'LOGGED_IN_KEY',    'mLYWa<9dp)q0b+@<r&`/BIS~aI3KZ9h8Bk(f^LAX3UiOIZcu`E~2x=y(tY|D<kJy' );
define( 'NONCE_KEY',        'V`G8v-eHL{6}Fc}tbA[jb&iI.2<`e?ThvwH^AC1^Iy2t5}slx&5 iG@uO17JP8rU' );
define( 'AUTH_SALT',        'Y;UQ1(JtG3Y6p<s+6/2QZ*YnI4J>S_u>_$d7>=@RS/d2uX6ai }tb^9n;/ulN{W=' );
define( 'SECURE_AUTH_SALT', 'l }FSCs$;tKk]pu*6A^K|zSlU~78Q>NXPs&Wr1<)_M#@=~+#Uq?PqBO|/=*TNOzH' );
define( 'LOGGED_IN_SALT',   '@SfA1$Vn=@)P<}/:sI,fw)>n:,mn):}p6x^g_s3X+kC]>:IYAZzzCG8en9A|j%nq' );
define( 'NONCE_SALT',       '=c#7eu4iI*d=~]Svv;]t]5OOfL.t3G:dG:?_dHE?Qztf4AC=6HH}]Mf&iuF&9KtK' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'bh_';

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
