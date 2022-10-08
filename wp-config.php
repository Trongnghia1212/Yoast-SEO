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
define( 'DB_NAME', 'Test' );

/** Database username */
define( 'DB_USER', 'wordprees' );

/** Database password */
define( 'DB_PASSWORD', '123456' );

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
define( 'AUTH_KEY',         'VG9rTm:qfoEZ1inX4zbR|]B ~5U!ec/{1@$&%;lHs.5ReD#$Xq0U>.%dwIrqxtc>' );
define( 'SECURE_AUTH_KEY',  '5tV&)~k^2(#Hfvz&u0;gxzjskeP%9!%eJ6o@cLK~q}LO_ZU`)JKt_~]IzA<pnMn2' );
define( 'LOGGED_IN_KEY',    '&3qL+UA[[0&$wZ?^E_%;9-uDIN=@1loT!RqN6/35lSbl_|iUfl.=E7eJCbxy~`%D' );
define( 'NONCE_KEY',        'Qu.#6$9a;2AXR:#vL7n*^S(qf]cbZ]2we)_T1ini.bNJ8P~)K(WOh*L+ad%1Rc 9' );
define( 'AUTH_SALT',        'WXxVto8E E38cW0s->+wqa#,[;aFasL)6]to@$#?56fK4zb}!@iCRai<W*xP_so2' );
define( 'SECURE_AUTH_SALT', 'S1m<. K7>hZ)UYFL?:<**w^_-@Vx-j<L>$UqSYYpinjQjo@FKfB,PTW*eM6O_*.5' );
define( 'LOGGED_IN_SALT',   'AJ-DT/Ng5kKm&G6r7z}oo]4dNFRxGg`2sD;N;N>>;k8EL%o(72)%cw7 m6G-aGzI' );
define( 'NONCE_SALT',       'q^I0D5*KZza3blc?uGiIWT<@/[EH>a6){>?SgvC917}W1saM.D1@UQ*,j7T-rQ)2' );

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
