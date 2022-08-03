<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_webcuamee' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '|w1v4|>coX)/U:v,aFdG~jSGaL+2`o(NtU#;Xu^-0Wc#$lb+2eS4UYZkJs)HoU$D' );
define( 'SECURE_AUTH_KEY',  'F}Y6W1DM0aeEB%s0_@zMN)V}$>%YmkK^C=~jxuLKl2Pj86U3Am#-YF[-H C@:7m{' );
define( 'LOGGED_IN_KEY',    'd+HL&V!rVGVg5SWqkrmn=jh=;R[jV0V|+?z=]1HjGRs@[{/M*aGo 8<9HCWSpiz_' );
define( 'NONCE_KEY',        'K>});c{$e!04OCHeiF[$}w|*5A*Ok(c#o%tm%:?s]<+vMIRX{l5OLeDkC7h,ox_c' );
define( 'AUTH_SALT',        'Y&#4jQiU-Lp|JY(MdF@g;~L/sXLoeys)EH%QC}BUOmH~c8db<lz}b{_V>#VFr>ln' );
define( 'SECURE_AUTH_SALT', 'A:wUcRchhaRWP=kfK D*;j,G9a*gsNgCeB?~8z6SfZtx_+rztbZcC|QtH;HZ5LV*' );
define( 'LOGGED_IN_SALT',   'v?L#6&CG$^!EP`]{Jw68gQgU^{(tIDo&/FgtfPCQwIp]T@!sp}I6XNP(<rT#?r84' );
define( 'NONCE_SALT',       'v-!+Lj6PT[d<Y8uPQ)@Ebf{)`Xj[+yGqEdL+?y$zSJ+|ITndZ=;E.Hv=d>3)QLOm' );

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
