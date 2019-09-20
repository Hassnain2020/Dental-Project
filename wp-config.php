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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'allure_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '+X3Yj[$=0>iB~M>|h[C{K`5Gm54:8IS !,YY.H$p;9AQ :_/iMvb^9p@z8u2X,Fa');
define('SECURE_AUTH_KEY',  '!6W%L;YZCQM n1wG>8)5zvtmeZV1wBaK8c3)|u58])DFVw.(4?X#TEWAI!gBLl0l');
define('LOGGED_IN_KEY',    ',V#euYDF~$Q;=6CAj)q<mRsx Of&ye]Su5FMRtN5[UJs~L73191q|ozUDTH2NjkO');
define('NONCE_KEY',        ' n7uCMPaw|.bg;4!W>4rYDs4gm#:v+1$C-|TNO*3ybZ@ES9]S)(>)R5se*y@S2yz');
define('AUTH_SALT',        'r4![Mnt8t`p)+ .$fw0:{ZsvY?LbR?vq/W._oRP,Pz|40hl{)(v];P(U,-%Z`,`Z');
define('SECURE_AUTH_SALT', '4s6z[cf99 ?V0>[K[1R58-O.I )<Gk1TkVB(E4oK6xD0NVdD&y8k;eC|nPs)m>&r');
define('LOGGED_IN_SALT',   'Q%cIBpO`u)!Y]bQ7@-84JJ`#D);/8m(6~bfUp.8<xdqzP+jX8Bh5?>utY*6_VJrO');
define('NONCE_SALT',       '+nhjUaNSWn(U[.Ja2NrjK`c~:o!2[p2u=?? {Q]]fO:]6;[<&-#c8JJV6`zX0!vp');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
