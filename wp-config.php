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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'monsite' );

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
define( 'AUTH_KEY',         '[p:@E)c2gLb[1PrJ`ri wqPD?$<jUg_7Pa;u<R%9E})(isE-EJ6^941`f|y?~U{_' );
define( 'SECURE_AUTH_KEY',  '8xB6pSj!?fWQv1M80%wklZ|{?K%{ZIlurE9N]eNO6}gW(9^1o[Ewl_/-&uTJ(T`}' );
define( 'LOGGED_IN_KEY',    'qcQK2cH&F<[6>dLF%BvIC3#uXD%LQ9Y+c$Xg2(SXT7B/#|T%Zd[KPO()&4yf^c3j' );
define( 'NONCE_KEY',        'XU-vzm$$<MrPiK~T;{#Kls(t,cc1srPA/lh`fS)1hOmhQy!+8d-?rRpnG({Mq(fe' );
define( 'AUTH_SALT',        ' (|_J$RjjJ^PY}wRLX>1NP:m$.Idz&[)u[T+{`}(??w[dy9)7Z(n@UH~(2lKe[]/' );
define( 'SECURE_AUTH_SALT', '>sFj3ium%?qktKh~<?P356Jj+xw$n*4t]UM1V8ZFEc3L9C6SvgH}]yMtA+sshh1d' );
define( 'LOGGED_IN_SALT',   '+ijRc#g5=+PY^.u/WIOj{cXno}M5QFyFZJ0^#Qz,ijM9kpUhzm1`YoPB~dDMAb%}' );
define( 'NONCE_SALT',       '5mL}N7ii]}Emcw=@P=2;V|x7x:Q[._0qEKA@+5cj<n|!tQs*8u#]iw%Apgt~(YNT' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
