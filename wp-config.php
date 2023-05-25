<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
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

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'tes' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'fvWnDW DK5bLJVJj>}tj.uF,Ewy4FDqB5K0l{5=B}?UTf`nfq w9{fB.:lg{(KaF' );
define( 'SECURE_AUTH_KEY',  '.k5gwzf37JIFUQ<H51Z|Z@1bj WS[?${Vh|lFe=W>N@psS|`LOo]w8]q;+l{yQNS' );
define( 'LOGGED_IN_KEY',    '5(fn@.<OfNJ=<]MaP3*^xjr:c,tW^NaF(5I/`ShPHdhC6A3R5*.3A3,{Hj#Fhy|W' );
define( 'NONCE_KEY',        'f{<m@MGuB ]H9V:pJb;adnaAC&9W-cCbYU1JHZ6~|eqEA7-W,wSpG7:=GhBc(N3J' );
define( 'AUTH_SALT',        'q uy87;kFSMCCH/40(E i3 U7&YchxsS[zajCK}iD5LWrDIx*7m`pqMTc@V..7Pa' );
define( 'SECURE_AUTH_SALT', 'eBrzR_dmoXS*|~d,1l?a{{Ep%d(eEVi&1/}=Ps-]4]*4O6g91a?J<avDUM]C$%F:' );
define( 'LOGGED_IN_SALT',   'L.1oFPU?VWOlU[5P0YsP6ykI!AsRPCZ=6{&D=-hq9N5c,!&wjVAM=2|rHfUkO([F' );
define( 'NONCE_SALT',       '+~t1LcV_53|+Nlohz5=:3.:Rr!Hf~>eK)Cy{B4q9:^ZvdN*?IO(iMr~Oq!&Sn4ca' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
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
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
