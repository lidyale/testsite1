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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'testsite1' );

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
define( 'AUTH_KEY',         'S1o{di!FHLUkB^}akzoEz[$8`X>G@&^^]CRp2af@Ed^<bXa +$k5]lgv,.bKbmQ;' );
define( 'SECURE_AUTH_KEY',  'ZoG}qqP$XeuUAZ{g 9%4h:DC@3=QH=$<f3McH+7dXikRPI8J3yJYQ:Qu<4&{Uv5;' );
define( 'LOGGED_IN_KEY',    '0XB$=j~c+ vVy@UFq=tZKtf6WcAdH3u&4&W(/u2V<Tluz-!ai:(axi76Y#]v3^`S' );
define( 'NONCE_KEY',        'N.D]4pc>zx<ZB)WHa/ja^7N.m8**/%1PdT;[m|LX8)OxjCYV(I?5h^S2Rjm$gDQ)' );
define( 'AUTH_SALT',        'Mztc0)bmy0xl.&;+*sGk&jO),xUl7d#Yd_~T|Ifi&/MaBcNc{7Z(Vl?TlO)Z2yw9' );
define( 'SECURE_AUTH_SALT', '1*@F/fv[qvasfPrY}A4SgHq^(!)$.TeFZ{b_Zm0bd/|YVQzdl9dF,0f7&we9Z4;(' );
define( 'LOGGED_IN_SALT',   'o#=i0;e+}3(Tlq{Dq*swSG/:-Oe1aDg3lqoD6S2ZNM(=1MDME5;OF( 7W&k)3d}T' );
define( 'NONCE_SALT',       '[BGAy^l+<6+tsK(B)}kLqT<GM3 d2 2v!1J#z=+Mq}kcQdY42*2*Yo=q>3^;<w@k' );

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
