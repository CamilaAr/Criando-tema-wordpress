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
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'wp_site' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', 'root' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         'u3dA7>{9= ]*?|6Mj1c7KBY-.Kgi)IgMJtm+Z0tQ9MM)LtL[^s^.wvTFC7KV4H:E' );
define( 'SECURE_AUTH_KEY',  '8]wJ}HB(:>b[476]2}gA~p+jYPU0(-SBrcR4*32`Fc6(^9{7Bq,|c0.1Z5h$=72^' );
define( 'LOGGED_IN_KEY',    'm@21o!^/ha I6XIPK9@fW?,S<&Yvxw$B,Rt-/EYy4Ya^l[1K*h6wzsCyUUP03MF#' );
define( 'NONCE_KEY',        ',Bj{yy/Abq0BT?;>`eO`7-OFe-;C ^Q*/j_PU7~,N=YHWaSUY[V2e n8;%si=Cl0' );
define( 'AUTH_SALT',        '4:(msUf,Utt}>KVoe0`vF@38|e8S.tiUHQAr9{]]nDN-H-9D-LB&@)>]oEqL0TGA' );
define( 'SECURE_AUTH_SALT', '|#a7ajf4aH84TC}rx/yNt#72zT8N|5V%T 5$p<YhbZlX%l*GvyWWoSoIYbGjg:_]' );
define( 'LOGGED_IN_SALT',   '0D@RHDcqxytdt=em4Q:@Wj}]4rCTyDu;^[w]n}D_R%,KBp0{*tE4M=@U|>,}Db[O' );
define( 'NONCE_SALT',       'MRzxyzzW*8Ei2WGkWe3L;]%gBB8Bvj*[GYb`G%X60Y vs!pa[0aH=/( P6$K;xI`' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wpsite_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
