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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'id7423796_wp_3ee14d682d5aa6acd089e695f0b2bf34' );

/** MySQL database username */
define( 'DB_USER', 'id7423796_wp_3ee14d682d5aa6acd089e695f0b2bf34' );

/** MySQL database password */
define( 'DB_PASSWORD', 'f09cecb09af9b3a6de5c791807f5a6e570b7f4c9' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '-ql.R:XTS,3WB$~ADC/r8.k/:+y=sHyOgf;kwX=_`0*z2%G=9:2;wv5]YWgI{19f' );
define( 'SECURE_AUTH_KEY',  'jEZ4i&>f/.dLp_Ee@w(8u[4`g;6i/F=_hUAVq.km_*m$?j*9YF5#fN794G;Lz?EJ' );
define( 'LOGGED_IN_KEY',    'FDb1z_n!;CUj>K!lU^1:/h^Vc>xdRYKaD4a?advr$n],guBuXAG|)ZNA*Irs+&Nc' );
define( 'NONCE_KEY',        'V/5 MHiIM9o E-HInL._kg%GOLH9EHMmd._]{h,T,D &]r>L+zecZA*iv@NEM#Wk' );
define( 'AUTH_SALT',        'F;6t0h,t-Ws+*WZ<KU|$^#FF~x-P%#rAEOXj)w|kJg}=[gthfSUkiS yB,aHB5j%' );
define( 'SECURE_AUTH_SALT', 'G`PuQyBFFcC_kvquH%/.x-DIc|1l)wMIl[J9V2D~Dqqj27xQN2q%%:H #BX<[`UQ' );
define( 'LOGGED_IN_SALT',   '6Z@I%EUz8f.*2wS7BYd+k[;t@;JF<j`^AtkYq)atZ-P~t`QJ<GY9*$>YN(Qb:pSZ' );
define( 'NONCE_SALT',       'g3943t]g8*00{X{p|O?uE7{3Z`kvPTPGzd|9kwl ueY/pp=O-{}] ?|],>.Vab@2' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
