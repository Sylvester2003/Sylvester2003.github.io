<?php
/**
 * A WordPress fő konfigurációs állománya
 *
 * Ebben a fájlban a következő beállításokat lehet megtenni: MySQL beállítások
 * tábla előtagok, titkos kulcsok, a WordPress nyelve, és ABSPATH.
 * További információ a fájl lehetséges opcióiról angolul itt található:
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 *  A MySQL beállításokat a szolgáltatónktól kell kérni.
 *
 * Ebből a fájlból készül el a telepítési folyamat közben a wp-config.php
 * állomány. Nem kötelező a webes telepítés használata, elegendő átnevezni
 * "wp-config.php" névre, és kitölteni az értékeket.
 *
 * @package WordPress
 */

// ** MySQL beállítások - Ezeket a szolgálatótól lehet beszerezni ** //
/** Adatbázis neve */
define( 'DB_NAME', 'beadando' );

/** MySQL felhasználónév */
define( 'DB_USER', 'root' );

/** MySQL jelszó. */
define( 'DB_PASSWORD', '' );

/** MySQL  kiszolgáló neve */
define( 'DB_HOST', 'localhost' );

/** Az adatbázis karakter kódolása */
define( 'DB_CHARSET', 'utf8mb4' );

/** Az adatbázis egybevetése */
define('DB_COLLATE', '');

/**#@+
 * Bejelentkezést tikosító kulcsok
 *
 * Változtassuk meg a lenti konstansok értékét egy-egy tetszóleges mondatra.
 * Generálhatunk is ilyen kulcsokat a {@link http://api.wordpress.org/secret-key/1.1/ WordPress.org titkos kulcs szolgáltatásával}
 * Ezeknek a kulcsoknak a módosításával bármikor kiléptethető az összes bejelentkezett felhasználó az oldalról.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY', 'LY|me4%50w/)Ln-k:(g#{9U>yU5u!&6,I0+z)EVIpJk6xAuT9?B3By=]v#7%|NGf' );
define( 'SECURE_AUTH_KEY', '{9IK</Lw%br6Gw{-QGy^2dQR~oXV0izr[HyS]oyDNq]Lv:i~7=s{TlM{.~M7_jc&' );
define( 'LOGGED_IN_KEY', '0FBJI7(apW_aB<-FT,br0?Pp-f@# $S4I6XrQOUSOir%~(#o6V9]X,ny4z-VeZ5w' );
define( 'NONCE_KEY', ' Hp+(|= a`bBgfGGHtC]L>)yadFgzFA 9aX.1SiYgd6)!NN$/nWF-u@mxZWEo^~4' );
define( 'AUTH_SALT',        'Xc%O WUmv}Gu]Mas`1f82q2/(>CUl;0$N6,A<NpbW>*i-LYX^?DVV#H^3:pS;7~v' );
define( 'SECURE_AUTH_SALT', 'Yye7QJ:&Q(JwYgvC}BGfQo8egp[<=zqO3}>l!0 E.k=ALv|~I7F.}4L9Av@AU]Gr' );
define( 'LOGGED_IN_SALT',   'wVEOI]eIDOn&Y~TTpI&%p6c{^4hcpB$}^+?o(F41(h`iO(#E2I?(t#Px>jq^ql;p' );
define( 'NONCE_SALT',       'qROSs>&eXJHOwA}2ZVW^$v045|O<_=p<FhQcv+JDRj_>`p%IW8fA>z4B4$!qAqb*' );

/**#@-*/

/**
 * WordPress-adatbázis tábla előtag.
 *
 * Több blogot is telepíthetünk egy adatbázisba, ha valamennyinek egyedi
 * előtagot adunk. Csak számokat, betűket és alulvonásokat adhatunk meg.
 */
$table_prefix = 'wp_';

/**
 * Fejlesztőknek: WordPress hibakereső mód.
 *
 * Engedélyezzük ezt a megjegyzések megjelenítéséhez a fejlesztés során.
 * Erősen ajánlott, hogy a bővítmény- és sablonfejlesztők használják a WP_DEBUG
 * konstansot.
 */
define('WP_DEBUG', false);

/* Ennyi volt, kellemes blogolást! */
/* That's all, stop editing! Happy publishing. */

/** A WordPress könyvtár abszolút elérési útja. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Betöltjük a WordPress változókat és szükséges fájlokat. */
require_once(ABSPATH . 'wp-settings.php');
