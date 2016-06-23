<?php
/**
 * Il file base di configurazione di WordPress.
 *
 * Questo file definisce le seguenti configurazioni: impostazioni MySQL,
 * Prefisso Tabella, Chiavi Segrete, Lingua di WordPress e ABSPATH.
 * E' possibile trovare ultetriori informazioni visitando la pagina: del
 * Codex {@link http://codex.wordpress.org/Editing_wp-config.php
 * Editing wp-config.php}. E' possibile ottenere le impostazioni per
 * MySQL dal proprio fornitore di hosting.
 *
 * Questo file viene utilizzato, durante l'installazione, dallo script
 * di creazione di wp-config.php. Non è necessario utilizzarlo solo via
 * web,è anche possibile copiare questo file in "wp-config.php" e
 * rimepire i valori corretti.
 *
 * @package WordPress
 */

// ** Impostazioni MySQL - E? possibile ottenere questoe informazioni
// ** dal proprio fornitore di hosting ** //
/** Il nome del database di WordPress */
define('DB_NAME', 'portfolio');

/** Nome utente del database MySQL */
define('DB_USER', 'root');

/** Password del database MySQL */
define('DB_PASSWORD', 'root');

/** Hostname MySQL  */
define('DB_HOST', 'localhost:8889');

/** Charset del Database da utilizare nella creazione delle tabelle. */
define('DB_CHARSET', 'utf8');

/** Il tipo di Collazione del Database. Da non modificare se non si ha
idea di cosa sia. */
define('DB_COLLATE', '');

/**#@+
 * Chiavi Univoche di Autenticazione e di Salatura.
 *
 * Modificarle con frasi univoche differenti!
 * E' possibile generare tali chiavi utilizzando {@link https://api.wordpress.org/secret-key/1.1/salt/ servizio di chiavi-segrete di WordPress.org}
 * E' possibile cambiare queste chiavi in qualsiasi momento, per invalidare tuttii cookie esistenti. Ciò forzerà tutti gli utenti ad effettuare nuovamente il login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'ncI0(rHv6q-?G*cag*:*i6bYH<r,)`]LE v!#M{_l)Ed1=d9p`S;*bW*h;s--G&0');
define('SECURE_AUTH_KEY',  'J(,XxY%p:L*+{wpu_[V)LM9z<]|>O,gai}TfPa,DG:0t0j_Uw|DA_47p>-sHCv8Y');
define('LOGGED_IN_KEY',    '#c:B&&),Qyq%22/wqo].kOMZT#9K`kuU smt>D&]e?;)U|Z(9;h2}$AVVcq,L2x|');
define('NONCE_KEY',        '$pEm$CeCok|YktwW[2XRnbyArw@RZ9q+LS(uQ:ef#ggN}73>/a6+#w`{c,p{eaJj');
define('AUTH_SALT',        'B2Operd:.{)Q1X_j-S>*C%R]( (:SS?n[hY9ysJ]9|Tp_@YUK3iE&E 1%|Wu-9MK');
define('SECURE_AUTH_SALT', 'Q%Qt{-(iktBJ3{{7`I 7Na-$/8I?7+l%0Wlap8sM;dXaA=8v>xQJ.%=WNYj}qf%U');
define('LOGGED_IN_SALT',   'eoHXU>eMqtYB?FfG%U~D8WrHo.Q@spy/g@X~)}DCm$*y|ZtMoIf_dX.QWTQc >=P');
define('NONCE_SALT',       '`U,vv|}ip3De;*zhM:~rhZv-(uqqyWoj{P>;DNrt)+xH{dEk*Sudz# `{tT|.d`T');

/**#@-*/

/**
 * Prefisso Tabella del Database WordPress .
 *
 * E' possibile avere installazioni multiple su di un unico database if you give each a unique
 * fornendo a ciascuna installazione un prefisso univoco.
 * Solo numeri, lettere e sottolineatura!
 */
$table_prefix  = 'wp_';

/**
 * Per gli sviluppatori: modalità di debug di WordPress.
 *
 * Modificare questa voce a TRUE per abilitare la visualizzazione degli avvisi
 * durante lo sviluppo.
 * E' fortemente raccomandato agli svilupaptori di temi e plugin di utilizare
 * WP_DEBUG all'interno dei loro ambienti di sviluppo.
 */
define('WP_DEBUG', true);

define('FS_METHOD','direct');

/* Finito, interrompere le modifiche! Buon blogging. */

/** Path assoluto alla directory di WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Imposta lle variabili di WordPress ed include i file. */
require_once(ABSPATH . 'wp-settings.php');
