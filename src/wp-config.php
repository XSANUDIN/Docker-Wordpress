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
define( 'DB_USER', 'user' );

/** Database password */
define( 'DB_PASSWORD', 'wordpress_password' );

/** Database hostname */
define( 'DB_HOST', 'mysql-server' );

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
define( 'AUTH_KEY',         'eV4i,^,BX,2nZWokg?E&wf*Z+<*L( 4]6>TMhzy]V9i*`H=|iLnVIAHj=kTN{:X?' );
define( 'SECURE_AUTH_KEY',  'l=TLOvkveXah$FZb0;-gpe-dfX**`&^#F|(&)=?TM>O}4{Vd6r#n:sb.~;=JH%*`' );
define( 'LOGGED_IN_KEY',    ';0B/@v4_2}ooofEK=wftrvpy@ 9_XPSl5_XI8$9YI-GH`/5XQauCbZG7ukT##&N2' );
define( 'NONCE_KEY',        ')u)pwqlzMptIS~nc#;v*_GyG#>4sXzn<Zh4uEHL2*O!JlnB:t.5~FfKFsoz-DBg1' );
define( 'AUTH_SALT',        'sfdI4[/..oTUG!VdOEk_se#((dWK0*HnL>ps7LsxuQB7%f,u,w;/=0bt^=r|##I5' );
define( 'SECURE_AUTH_SALT', 'TZ1p7qXiY,;mkXqt)t^98)JqXUt9]>?!},#^~,~Lq|&=CWVOv40C+%R`Hpj`_Ql`' );
define( 'LOGGED_IN_SALT',   'KH7am5l&2e{@?w^(RpZo&K(.AQaOCxi5xC vCJY{M:^U2Q%tn/|#l-jGTjIeHj? ' );
define( 'NONCE_SALT',       '$|86O!)Ln#?i}?K ^C,C_tvcK|j+_Ofmw%f|.CD]sm6~i1?OgG9x):`772@Zks [' );

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
