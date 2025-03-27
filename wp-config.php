<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', '[ND)<$?xkl3h-_2LQzW.wq8i>7*h' );

/** Database hostname */
define( 'DB_HOST', 'wordpress.cbwywu2mciur.us-east-1.rds.amazonaws.com' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
define('AUTH_KEY',         'm}n)C.iKv*$Ze$s`)+kRy-sr%+n+t:Dl>./`hkX=%pOj9abT*w.WVRiteKAJ1)|}');
define('SECURE_AUTH_KEY',  '>q)R`SEX |&<<*-|I,e&+m0?;^E!@aft2LtHW}G*@ABI7pu1156;92N3C`dmU[t?');
define('LOGGED_IN_KEY',    '=JfXzWLF+sJU+/:)bv^dX}l6XA!Ynb(1;w}@?&:~giZ({kJ5ZT4U#iX9eW6upE<Y');
define('NONCE_KEY',        'QqwP1f[=/Ai6j_hx)CBo%v2USs.ovPq{3<%siBT(i|)>VHj+5HU[gEp;mI=cyG]|');
define('AUTH_SALT',        '7ca9j%>WBgv+nOg|X/m4Y WZSU.-Ag`gDcBwJAt=~~#O65[=5eu6]zbX#_RwB/y[');
define('SECURE_AUTH_SALT', 'PxqFO`R.|L{}UC_JpGY8/}(;TQy$p^(zbW`pQdNS;+:GoMt Ey@DqukB+*+J$,M$');
define('LOGGED_IN_SALT',   '$)v>+-a100Fk,P3B<dw3s:M&G2f0(-}v643LJ;O|%(lEO1=U(6DhLU|zYGGyS}MT');
define('NONCE_SALT',       'yvo07AkH&}~x(0U BF>;+7g-D9h@F[{n(+QX+;II!jDhD;6goYt!HgBQ.)&{m$rD');
