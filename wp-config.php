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
define( 'DB_NAME', 'tailwind' );

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
define( 'AUTH_KEY',         'e_,bIFk}]G$psCG@ocq}O0%NkQLFausc8H}GJ:J|$XT[$@mW6tU##(N,yt_izcUJ' );
define( 'SECURE_AUTH_KEY',  'ZR+ENo,s|R{RJ9~X|)15taY;DGg$E)H-]4H35 O%z;!uO8A|]!H@.~~.]Pw(~64@' );
define( 'LOGGED_IN_KEY',    '@q+,r3r6m6,n19UQ+#r5:(^)O.c>,jsX$tHLf*xoKK]{XLO)MSYh+x$p#V6@=tEj' );
define( 'NONCE_KEY',        'Bok>P(}UBiynJHzgTKw,uE,-*fv#qAyy?]#KdvOH@6B21(CkVrs=f(|@OHK0tk1I' );
define( 'AUTH_SALT',        'FK?WGSu~Io 3V*}8-mQ-qh_A~eyqSjT[gPq`o6Cl2tV%>`@;q&_$v]9]uz5&mO#b' );
define( 'SECURE_AUTH_SALT', 'ZA,_NN s>$7DW/f-Z/d&R]J}Lnob:9+#4R` cG&CW z-pfG(5Y9SBwCH`2q#aDN.' );
define( 'LOGGED_IN_SALT',   '-7rroU< ,Xr&i8y]3 I_M-55)[q!LnKHf.?H2)Vf@Sc@DU]-0y*$)<sj<!1}kbYW' );
define( 'NONCE_SALT',       'z(!^GIs/nh]k)wZ,Zag$AaBUz(X>_9IO_&,0R:fJdB:HB{pwl `UUv|84t14F/`u' );

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
