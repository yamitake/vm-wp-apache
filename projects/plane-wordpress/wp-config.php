<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link http://wpdocs.sourceforge.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86
 *
 * @package WordPress
 */

// 注意: 
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.sourceforge.jp/Codex:%E8%AB%87%E8%A9%B1%E5%AE%A4 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define('DB_NAME', 'planewordpress');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'planeadmin');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', 'planepassword');

/** MySQL のホスト名 */
define('DB_HOST', 'localhost');

/** データベースのテーブルを作成する際のデータベースの文字セット */
define('DB_CHARSET', 'utf8');

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define('DB_COLLATE', '');

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'YCBS0AWt/i|NoU?e+||mbZ|7*V@&<vq/sk|z XW +iISTQwzS &Z`YRaQ3_R*xTY');
define('SECURE_AUTH_KEY',  'VL#E+a|^Qxk}h%?- G$e1>m%Xm`%w56(rfVWmHMha6Dmbp]|.Xwh+D;!|-)G|lXU');
define('LOGGED_IN_KEY',    '89bL8{w%G!r?:{F|4rh@5t+^G{G7-0J%H+|1-|*</7N[=m(yb_GQBl7DOu*#$Kx6');
define('NONCE_KEY',        'L?;p6wgYLQrr-jit{2$,OJ ,eIgs(L0&,{-SAa_cjHLpAioVU?8eqN|d)O7BT+b#');
define('AUTH_SALT',        '>]|iufuRRLUb|*Y @?eo:X|$iSX> SM+~Qz7z./Ip{Xfq*1j Aka`=rd~vOS3OU2');
define('SECURE_AUTH_SALT', 'LND:,mj@6<vg`N@[F_W,=+7>.6i.KA@*GST}Oquw+N*@!To$x/[zk|OpdXEN]1|.');
define('LOGGED_IN_SALT',   '4,)AllNO6WZQXYq8{D?NO( 7bc3}5es|_]z,qa#g;{,-}INp:$ItkKx;]Z8muJS;');
define('NONCE_SALT',       'OD2g#=-pi5tgk`!4V$7{P~}e2FF;Je|C-~:G0p.`aS|1|m`2EP++*Lj<kkrR5]Fw');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数については Codex をご覧ください。
 *
 * @link http://wpdocs.osdn.jp/WordPress%E3%81%A7%E3%81%AE%E3%83%87%E3%83%90%E3%83%83%E3%82%B0
 */
define('WP_DEBUG', false);

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
