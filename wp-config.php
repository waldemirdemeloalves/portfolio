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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          ';f&5KL;-O`fzfGZZP[x#ucNH:y[R[4RG#p^6-jT(T*I[S=K.4Q)#G<y939u6l/R^' );
define( 'SECURE_AUTH_KEY',   'J:*z5BEyA]Up@4j}}iIBaJLS@M)7k$_6:B` }P*bZUM%|?9Lh&8;^ta;XIl mdkt' );
define( 'LOGGED_IN_KEY',     'V}*}uIaK]ZMxCXp@>TCJIKPa@X`OoZM -Pmm%{vJKBMm$[PXMRg0|pXYHVsad;*k' );
define( 'NONCE_KEY',         'wX?@{@#NK_7O&RN[XzY&1q#?$|#}A$^]9uhTWUX6r0O;A0/rR;?Z#,&nPV4*9mJ=' );
define( 'AUTH_SALT',         'VUO&d9)o8$;RS{t4k,`$l@$E&z<k;H%I7<XzO&/..~;mf1gjT$Q=`}m0KgNw#*A*' );
define( 'SECURE_AUTH_SALT',  '^WXphts9)1Mx6<)nwPs0-6CA+r{AwzqP}M;(#nF=JiS0YN[,uH&AG(&4tFJZJ8JM' );
define( 'LOGGED_IN_SALT',    ';BKb=Qb9p}Nl4Mi)!7-]}]/DPW%E,i,vHV*Ei0/HnspY{=wM=J3BLT-`Ozq]%OVt' );
define( 'NONCE_SALT',        'd`&?%Q +oY{D(pEKrt>_Cs7r/kB#h?%PA5><>Ah57L+@#w`&6Asyqq` {>?m0-Yn' );
define( 'WP_CACHE_KEY_SALT', '7x#JG;BV{9qt.X,1iBYpog/v,apJ_xqkKfhr9P+MSW0sW.+]6xfsSdkTGy@OH+h/' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
