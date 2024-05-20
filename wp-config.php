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
define( 'DB_NAME', 'timespole' );

/** Database username */
define( 'DB_USER', 'asunal' );

/** Database password */
define( 'DB_PASSWORD', 'Ha242390@' );

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
define( 'AUTH_KEY',         'V.I{:*QSP(YdeBH?;(3[wODu.7#{K} QU6T@Lgvk0Zn6Q8M+C[WWH:b@?xD4[yfc' );
define( 'SECURE_AUTH_KEY',  'w.D3VQT:d$X{r<K//Z;Gb>w(>cH+d_5`yw]U|<KSG_r<*~&2vH~vcOH_/5oi,9wj' );
define( 'LOGGED_IN_KEY',    '%Kr,8>Te#/UeMfEq|O4z=TxE=]HX42A#ASVlFp!C>[r|ZlqQg!<Fs&4;FgFu$aLb' );
define( 'NONCE_KEY',        'J:5u6j,uk9X7Jo1}ss(Xg2+fs{VHwuRK,1q2PKtr)QP}sPt>iuHaH@xWDqiddoHU' );
define( 'AUTH_SALT',        'r0|p(EU^}<V5pTS(N;aBM`g%iALTnIjRx!T4|`<5&~H74LrIQvaxyUf{@v}UDZ.+' );
define( 'SECURE_AUTH_SALT', '%V-*BU+<&<ZLL!^{](c^z`h VT.1 Hnx6y%;_8tK~bu!0Ay8d4^s1dU5YJ8KdlvS' );
define( 'LOGGED_IN_SALT',   'Gsis=YbIX$V(.Mx+J%3T/(u.=[EF)np.4|lh66Q!KCW,Py$^RW?/A5gSLqq@s<&X' );
define( 'NONCE_SALT',       'jB=Y,-vVI:,k:pjuW5jcx>:M2F:DY3r<5liete2n9Pa]CV^*b=Y#+[m}[ ~93{F%' );

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
define( 'FS_METHOD', 'direct' );
/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
    define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
