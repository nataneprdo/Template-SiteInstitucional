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
define( 'DB_NAME', 'template-institucional' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'KI?wf(4*Q`.Zf@stV&4T?{.c2~m2+74ey(K /(@uwN8KaIHa*v$Z2<kOzd<40DSK' );
define( 'SECURE_AUTH_KEY',  'ZM+<)`6[+V:+!3K=3fbqw !mj1!bmfvP+<<tcu2SarFO,K-v3ay:RrWaZVK_s%e(' );
define( 'LOGGED_IN_KEY',    'LJ`7#AtbdF-z<:Bj]<:5]^k_J-XJ,@lz[dPVFFI5k!r/R]o#.#BHRCgtWu~#i.13' );
define( 'NONCE_KEY',        'eE2Jc$^)H]GODTN=FsO5[)^/G&,>+6NXg|j8jKnm^M9}AvHHT]/_@rBe.Qcl.hw}' );
define( 'AUTH_SALT',        '+@o WCv}D,D2%cbRQlHUCO3o|?,3bM~%Y#[:]1aqF}8uZ,&]R2KZiO%cxaT7i8aS' );
define( 'SECURE_AUTH_SALT', 'oL`A7{#!Io1:ExGE2Bb+j^ tn:7{l *![y[/|R{; esY]A3;yuMLk.wpw%c1K,T}' );
define( 'LOGGED_IN_SALT',   'Q;!eNGAFU~z:Mq,HbT<[3vqWe-oxV9!VKFm@;)c_G&w4}B/Ycx&Q;LnCe4N1wl6{' );
define( 'NONCE_SALT',       'SC)BIDr1YEd[vFA-}4:4V-/xQ.*vCWT7EH9E?6@G<T6Pt4!@>T!>(c%}+4^7Is9<' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'dcd_templates';

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
