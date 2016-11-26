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
define('DB_NAME', 'leeoyote_wo1110');

/** MySQL database username */
define('DB_USER', 'leeoyote_wo1110');

/** MySQL database password */
define('DB_PASSWORD', 'iNqDkFKinvq9');

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
define('AUTH_KEY', 'b!miuAJMXmEUpx+X_-e)j$Sav@!F=E;Wb=>vC;bQ+^>Eb]|A*V_FdC<)NLPb/OaT/u^Iar?bmE$h}B*RlTezDfZWWBMKMI?|kNQ}!Kte-C;+bSFg/=$DO|ZvBN@e<OQ@');
define('SECURE_AUTH_KEY', ')}G<c*eBAW|hPFkPAGVsfFxULb+);Vj@Cx<IOCIrMdQw<*WY>$m}Y+%/mmiGJkw=HodmDt=!_]r)cgz&R/AdpqFc%OGgOJh=iQe(fB@l;n|QaQQu}O$$M?QSUg-Uh;$V');
define('LOGGED_IN_KEY', '+I=pS<i%Nmk<x=AduK*qU+;CJ*Vk;)vj)+-<{oFjh{(O[DohG&bxtQYXQ+qlN)Z^W>/-ib@lyh-!U?=izle>_d/oRwo?l*-bLfyt&B(]d)?qV)vzVZjFqEuHVK;LwWHE');
define('NONCE_KEY', 'o(hRR{o{P$BI*=P_m%-[r;q!Qj*c|>Q!GK$[cF;pSvJeoyyJ}+Kze+]Hjo>G_Nrdq+YR>Rp*/ELiaPOjcLvE[ToMEGHSO^bnf{*]_<nabU$WCjYvecKCr>@@Mw[Fxrv&');
define('AUTH_SALT', 'FkuTlpolTw?T)P=l<D@{MPOOw@A=g+wNUHht(XkGmLyOI^[?bHm*$uwc<RlpSBcb)|>x*uAN-+ma)N^j{hTq]|qiHb+YPwUXrAmUyfeO}Xetm}BZJa]ugnZM^kOC_Dth');
define('SECURE_AUTH_SALT', 'A^aN%+A<zo?N!@S@zuiQ*bJQEl|Vv?wZ_x$cBHFJQR-UsE<}AAq-rY&=W=(CKiImhvIIlO}-yuEO@J|uhh<j%Kx_PBFuG<!OJ@gNE*&+^x{e})QMU*h@lY?A[H{*n;NK');
define('LOGGED_IN_SALT', 'mTO=RlK%Ia!W_dFEM?dvjxmL^WRlV=;M+e*Cd&v</qbI?eI;>ueKHaUCP$aVK-v+$bc$kqGf{I*IC_P=@_yW<>jBHdGs&*keV^YJ*HhqXi<nj^PMMwqf]<?ow/SRKt%F');
define('NONCE_SALT', 'C^-!|MLFLgzJ?;GR*@Ady{/XvbLR%MKTKp+Z<mxdvj-Qx|=![?)?cqjdZW_jb[DvdUTIX$ot>{>?mlFXbpvulMXTBfMyF@sp@DAJ|fp_FEqm-gTRhfzS{efrX|zRJ+Uf');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_qere_';

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
