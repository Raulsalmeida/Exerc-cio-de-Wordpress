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
define( 'DB_NAME', 'wp_bernado' );

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
define( 'AUTH_KEY',         'L#-[5 ZEMGS.lm>?c]Q_J=f^WaQ(%bm];^u[e|8I8VL=R;P[5iNBxPOV0M@2!8fw' );
define( 'SECURE_AUTH_KEY',  '13_=7A~&rQB![KoHANS?-~(7Q(H^yRI5|`/TUw.K~_akvFXpe,=|LqgI&^}O@zU_' );
define( 'LOGGED_IN_KEY',    '>=nj##l^6Tlh H1A}8;^coN _1F1(#4Jj{f@,GIHa#4W2Tgm5;mL3iG vHE9IFg>' );
define( 'NONCE_KEY',        'Kj7+%0j:X3{//VUG]RvC!H.Q664Z#m{*q#E+rde#~|%U?|)?f`VHa)b<^6k&dAd~' );
define( 'AUTH_SALT',        'Aj7rNv#E]af|/aV03;BgF[y i~{aj)*za8P2(?4!s@_yJS$|G*9HO@W8o;nelE!L' );
define( 'SECURE_AUTH_SALT', 'oICUMt>~O!])SyTv@5utuS`>9=2j=%JY}_Yrz&(RO,$7kK<FrSoU7a;B$4C2x>@X' );
define( 'LOGGED_IN_SALT',   'QUwOV&5VGcFYv2c7/4tI}^InnJCp{(4|nO)K!*G-c2=r4ic.V9p{vR6#CF4MR4*b' );
define( 'NONCE_SALT',       '`tEroZ^:Q)F0K8Lmh9)yI`}604619G`,netixQFD}_j8ix83,,|IDk#F!gyuhO/k' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', true);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
