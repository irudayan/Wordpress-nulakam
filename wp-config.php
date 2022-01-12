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
define( 'DB_NAME', 'nulakam' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '`D*o[Xsc{eX1C/XbI/3L2lR&,x@gS)V:L.}wEM3F-Ovy|8cWa}Pq%[*.e~ynh#z0' );
define( 'SECURE_AUTH_KEY',  '^U$lXjw8^Vm8y=7oFwx!~*:ADZM5/tz]yfNDNYcoGuM65(Hbi:,E}t75c9=Z/x(,' );
define( 'LOGGED_IN_KEY',    ';x3WoL&tW<F%*kG5@ult]eBV$YX7.m.)?vu%,.A,(XV0)DvKpz/-1#CwM~I7XV5>' );
define( 'NONCE_KEY',        'E=I6&lO.v)UGa=.<DcdW^c60o-J`PBX.qfu)hIlAD^/0i~Z2B)uFdz<*^C%-L_m.' );
define( 'AUTH_SALT',        ' I !Y|e:Ym2=hzw!pVh~<xQIG^EKt<f-@7jQLr>FY?{:J!N?uC[.L);kE~rka7q&' );
define( 'SECURE_AUTH_SALT', 'Ag_%E8+U}XJBx^LO)WK<lL0te.sR$@=gFu/U`<H`2ulCD:+[;.a(]XrQ|&DJeU(>' );
define( 'LOGGED_IN_SALT',   'tMo,>LNj)=65w~4|k?cmUlOA^Z4FTQz&@p$?E]*,O/TQS@$:eqB,7]O]hp=i]8Qs' );
define( 'NONCE_SALT',       '(]NH|oC0O~czZN=I@V9#GM!@}oJ~HJ85Us9TqMphc*?1@iwME3?R|sA6wUOC`]M2' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'cms_';

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
