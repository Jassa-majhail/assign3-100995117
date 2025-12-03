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
define( 'AUTH_KEY',          ')!EOXwF-|>_}#y!Pvs(ek})]*zW#Vy/l9KgDJWeffgp~|.V&q4s3?]I93$j@bW1v' );
define( 'SECURE_AUTH_KEY',   'SFZdb,j.cIpF)tYO q`W{Q9%C+:5c9P(l :<}m|fXyp/%DMLe5g3Dl(o87@jDqkQ' );
define( 'LOGGED_IN_KEY',     'Ml!sk<bkTFa21=:*`[QI+-%sYl[2nJ{dZk?}T$dV*.-(z2n,C+u<H;1@ (-{!Bf+' );
define( 'NONCE_KEY',         'v>sTm&wpo[atkY=$8p9^B+e(22`#P- Pz)9JQpEOrVcko)HfYsK(cl>1%w=KFie[' );
define( 'AUTH_SALT',         'NSShS@W?z{[I{b@rc@Bp)sR!t=Ccy<tV,OGA*8@$<Az;3Hi^C?s])qsV}[Hb_z~N' );
define( 'SECURE_AUTH_SALT',  'V8b+>HjnZ{3>Y;9!/itE*MU!p^e)7r)oi9/,C{J[eAL=zpt{|fq<R5Z*Q.4:HY8S' );
define( 'LOGGED_IN_SALT',    'ad,]GiV)*6{6sK!)6tlkK;v*RYY0SKT5:U`rO?!H+h4I:&*K&eG$0)7$ CIv nd%' );
define( 'NONCE_SALT',        '<Pa?4Sv43u,r;F^LQOQCMQ=L9cdNhs?Ong5I}E.jh#$C|&*u=Yq<V*.v A^Al/rb' );
define( 'WP_CACHE_KEY_SALT', 'j#->nlJR?A<W~BNYCn Z?Q9Xd`(HXqD Aft. <r3I@:9J[-GFdJ}U^3l9w)Ph:<(' );


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

define( 'DISALLOW_FILE_EDIT', true );

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
