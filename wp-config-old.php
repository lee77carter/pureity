<?php
/** Enable W3 Total Cache Edge Mode */
define('W3TC_EDGE_MODE', true); // Added by W3 Total Cache

/** Enable W3 Total Cache */
 //Added by WP-Cache Manager

/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
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
define('DB_NAME', 'heaveog3_wordpresscad');

/** MySQL database username */
define('DB_USER', 'heaveog3_wordcad');

/** MySQL database password */
define('DB_PASSWORD', 'xScuhEp9PvCY');

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
define('AUTH_KEY', '$;xTo@cN$kEEy?kMuix+ISwlGP<w^z^SEMC&Ax^G&sl*^jLNxZkY)bAbaWDF-NE;&(a(aKU!O&}rJK+[FJcTfzUMe!P}QS%kk(pT|(h*;LIEADCYm[^_sRCAFVbZ]Cdy');
define('SECURE_AUTH_KEY', 'S_aahM/=[SjfOTg>][[S%*qpg^Uu?Iy;KO=rlN<dY)f(dX-qAqMfSPfsAaW%/X;E/NKs}QUvk^elf=L|+tHb&gN%D&hs+;*s[A+$d;xXjyw]HeJC}zrxN/fCaLcl$PIw');
define('LOGGED_IN_KEY', 'vpT*UwrQxVbdSnmxVCQHyDM}_Cn>?O+|lU&j]?/RCAe+_!nZTh?>mMal!+<L}L<tAMH&oFi+[Eb(EMaM|cig;r_LpMEWr)n%DUiNt]m_|b]P{B)Miu^%?AbClMe%<-Eq');
define('NONCE_KEY', 'tMAKqSQSjpEFGjv>gHuCjxcTIifx}Nu(w?YHK^|h/D+?!e{*DWKj*t<bh;z-_m)(eSsO/nC=a%zSAkO!>$/mu--dD>vplLQkxopMbpHT!IkFs]KUrYPa{{cxVr?Suf_(');
define('AUTH_SALT', 'whg>!AbLKwfz?$(tTHR|Ke+awCx/C/BE=t*(E$nI(dhp=FnIB-vv>HOr&hueyhsfKc+o+HbMhsMzgxC(vA!dtcvE<HE@sEzJ^=|KxbAwFD-Z{f&vF<[|$jwFSDAXLD*g');
define('SECURE_AUTH_SALT', 'o[-HYS%${ceBkb|w-izJk&T*coi(XbP/&}}IHf?dkZYqVp(&ksP]DHhmi{O_eFHMQYt[qYozSO)%mD;_R|W?bgKc;AafAjL}MR{YXoXsbV@e+BoyQCy<)DNCeh/iPh-b');
define('LOGGED_IN_SALT', 'u?K}tdvz{qj|[u/R{%BgsuIUw^vI-nEH-CLMo-?|-a^UGA!m|zCUEmeE[;u)qsd//qwI(Enz-FjJX-tVCSS+tvns?DHWcMqwlkmwbN)QA[d=Jfvg<GG_iCULQA_=ki+U');
define('NONCE_SALT', 'GJmgKCYi$mZC&-iRaRqv;&lll*ga?WT+iin_/dWNozargMdW^qfWtXRcEbV)%<YZFoXNN*ruI|y+>n|EKXU!jgvi-k[Z*D;tdG]}kmvr-TOnF!)caijdikh(vqevgYrl');

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
