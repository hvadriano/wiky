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
define( 'DB_NAME', 'wiky' );

/** MySQL database username */
define( 'DB_USER', 'root' );

// alterar
/** MySQL database password */
define( 'DB_PASSWORD', 'admin123' );

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
define( 'AUTH_KEY',         ':K_AU?`}fG >;RV%YH1{Sl/IUKa<UcxwO!OIIWL7hcjPR)5$>v2s{UjL+(WL_~?j' );
define( 'SECURE_AUTH_KEY',  'r9Qh0J&w|HM3R|k;w[>91c-g7[2fmZEHH`AlXShX/-=eF|t[mp(C.OF$#<`{eMNE' );
define( 'LOGGED_IN_KEY',    '!2zxP50of`x7hh6~{U9H`V?xuqK6VXf%q(dHT~YZRf?,e>EI:wi57<e(c`&rkod!' );
define( 'NONCE_KEY',        '7/Y..yZwNOOWO+G-f_L#iR%vrWy5?4+PVleMG,mkgJA6H/B>wKk0!OLs<}/up]{=' );
define( 'AUTH_SALT',        'y:7h,hLtDsIgPjL(EHK@L[!#u(dp*2<=/hU=iqDuCh>b|rO*tvEQ5w&X[g>M0i+C' );
define( 'SECURE_AUTH_SALT', 'x57&gMW{.3]$tcN1v(?0ZY2O84&WhI}Nv!FfMl[@OMqGX8WKH[;:B 56-ic-6(OL' );
define( 'LOGGED_IN_SALT',   '~Dq9%7hBQaAax<,Cg,aZ0!~)n)y~x(wkY`llkod9}#=lW<nG<Z#GG[:D.TaNSAQU' );
define( 'NONCE_SALT',       '++C~B~Lr5/)yID(;zW4p%B`*?L>EH4P.[B~{O*@8ANCc2aK! akR|I_$rHc(1>fD' );

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

