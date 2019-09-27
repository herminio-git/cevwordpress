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
define( 'DB_NAME', 'cevwordpress' );

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
define( 'AUTH_KEY',         'YC|YngI%0D}oK)4Fge0U/3I/to>78fqvul).X!T4m8]U}JYIVSMa-V5[1W!^ ]PN' );
define( 'SECURE_AUTH_KEY',  'B4Y%!SS^P4ycC~lc)$;qqW{o6mr`h~f]Hy8:?A(z;K@_c{xyp*g[Q9xA5`0-F%(0' );
define( 'LOGGED_IN_KEY',    'ydlK>rZ82ik>[XI=gsq~FB<-_>6<[=|dwCOCo03y/Lt8Nzh7VhoG<e{}se#V=ehP' );
define( 'NONCE_KEY',        'dM2M[M s)`QqXvwq,KS}D`bQ0H#iNp@5M^*3xCS(tt3!;)lz>;(]I:als}}U,Qmc' );
define( 'AUTH_SALT',        '>%g37cQQ.|6{77A)]C}JVlf,>pS7gd+^INZFdG`dRJfz-WO$]{vdt{_5PD-d^I+&' );
define( 'SECURE_AUTH_SALT', 'Un|k*56/P+~+1V)m6-{U&xNmQpG1GO*P!M@{Ft4.KJBh!Ri+_dSPuR^E$F0:CotG' );
define( 'LOGGED_IN_SALT',   '.nn4ZVenXeS=mSHk^rn/9ERU:ocqB#sT_{uZ@?@IK=YdSOqVlT}t1PN=DpCXjT/`' );
define( 'NONCE_SALT',       '0 ON;(rm$WAm6D`r.;7,}l#k?Ly<aNhWm+xqG.#.0v6`zFxoOg=OPsw,KbYMKYge' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'cev_';

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
