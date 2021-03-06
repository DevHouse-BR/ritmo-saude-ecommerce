<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa user o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações
// com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'ritmosau_wp');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'ritmosau_wp');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '9n5FtC7tnp');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'J~k|;ID5f+bPoO:tuvB+X<*r8jKNP<<h_Kbe~ykW;T5/qYk?q<}c!?|fXWp|&<BH');
define('SECURE_AUTH_KEY',  '6H@/5i*0P7]01Pa ``:J8uXi0inb&zh.QC4tTYnejkh54wm5w7A*#qh/B}d-sJZb');
define('LOGGED_IN_KEY',    'L=7Zi{D/CIE0jGz,36!eTw]_`uLhcpDf_p.}JP{e&r2Ip~?u9KAjn)7p;svb+,~O');
define('NONCE_KEY',        'K>,H`H=0?Tx_X^+6Pz_+P1+G8B|hB8?)l,dKFl{LyH^,<,4.!~uPxAS>LK^k]!?B');
define('AUTH_SALT',        '&<Fhw`*[t{{9mr!{VY.(|@G5VR(yQ+|N;o5b}Tt}ObzO6%=8OLvWyt]J}6EYBzA]');
define('SECURE_AUTH_SALT', 'By=W6y .F9_2N`~Mw!Ma1y4[{ PjvY-mN#Snx3?-N6Eaebw^[DrVj^ZY(k4$)jV^');
define('LOGGED_IN_SALT',   '[hp]JseEByu^~0Lb03cM:&ONnV~Ix:.bl2i1 ,^JtV UOrve]VA2UMvoHK0E$lKq');
define('NONCE_SALT',       'Lk2teDp_Iw]}GU{Y6!nDO.~hFU19z$Vln9&n%=t(jxFEcF[y[mac~e^npX89/U,D');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * para cada um um único prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'ritmos_';

/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */

// Habilita modo de debug
define('WP_DEBUG', false);
 
// Guarda os logs em /wp-content/debug.log
//define('WP_DEBUG_LOG', true);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
