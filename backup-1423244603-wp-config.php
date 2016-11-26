<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'leeoyote_wo0511');

/** MySQL database username */
define('DB_USER', 'leeoyote_wo0511');

/** MySQL database password */
define('DB_PASSWORD', 'b77EHxPHU2sz');

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
define('AUTH_KEY', 'tisM*]e@-ZL@Bw|usEGj;S=C!v=QQB|tg;!+ayWr(H%]SkcIwQ_aK*@G^|_N^|WVrK<yD)n(e(aRIix?H}@@<&icI!FmK=EyMTiVawHDmwO&<?K|[OI)X=KODuF;|e|b');
define('SECURE_AUTH_KEY', 'q&(NGahYBC-qSXNZl%M;RZC(w<kq{/)[>QXeyIuEpj$OzD+r<J&}TXHpsSwE/m|D*GWhKF*pW&ClW}hH|PoVm_*U|%^[IpI}Y>+sj{IhWNdWX/CPJtgLf&absP;kkL!z');
define('LOGGED_IN_KEY', '[^+TkB|(IWCjSyqzeFXGgu$$F;%aNm[yY}lNdrsR(]tWLWbnG?g{+n^x-<F|]b+Qdj;+&JEPU%CA>FbC$s%_p/mlX&sTLoZL}/_@a[vlAGoZj%b;_cL@RhfNVFiAo!sd');
define('NONCE_KEY', 'q|JGTa;>F>xvCt{p^i(gGzCoYd[Ta+</d=GST!rdw%-i}aW+vlR>bmf}dXLB(L*QRX!_W+lGXM^?)cttpjHYbwxB@_kGh{eEuvuMS?(oA>R_/RIQcUa}oT_ST=b_ZEKx');
define('AUTH_SALT', 'uelEgAx[$[trO-QqQ<%Q(rHG!C{zcn(PRk}JX=t]Bpo^>ML<PB?z%y%!^p!&e$W]f$KbYBR$<i]E}elRjN^D!>L<NXGG%PxslQNL?{kfQph;b$^-Ep;hanJ)P_CLvX[d');
define('SECURE_AUTH_SALT', 'i@n+(M_o^yIhG%UoUWaHyxZ?Dru_+;$W$yeN;S{vOF}Hf?zmaFSF<ZiJY(]ofNN_C{CpWuxpLU+okDbKZnArk+l-Bu^jlzWrFNE*LAB&pwtIh/pc-^I|uwk!aMqCH>>O');
define('LOGGED_IN_SALT', '(X|li/XMw;|gM<&c]oJ=ipe[w}Qq=gOkzBbMZ@nrcJEu<o}Y$Rx%RSry]FJ!-zhp)>B*duPxIr*NlPcEZ_/yCIZ?ac}n-Gf@);&z)MOKfOWXyNtBSF?<ycLPb=rI!wAy');
define('NONCE_SALT', 'TFGlExXnN{o@j!CskuwWsDo[=jkRlPv)_JWbcsNKxQA]KOQ[Wg$@+A%aSsRB*xrKVydLinPZ^IdJ=ppk&XNFzuGhM^>_yk^?aK_-ryvpkGpqkfUbzI$cy;JqVhN{{uc$');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_bazy_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

/**
 * Include tweaks requested by hosting providers.  You can safely
 * remove either the file or comment out the lines below to get
 * to a vanilla state.
 */
if (file_exists(ABSPATH . 'hosting_provider_filters.php')) {
	include('hosting_provider_filters.php');
}
