<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'blog-site-wordpress');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'c5dpu3K*/~k.XsU6:=|??5uvs)r<R;E9.[R:CqqsS/o@zmR pdp;ar7^s{xGx=?Q');
define('SECURE_AUTH_KEY',  'JQ&<,y%B?k%b6^COQ?j>j?B;8z^~PeIq?gu(60#C=47#FhUy;!&DJax$)vqCS=0/');
define('LOGGED_IN_KEY',    'z]WQx2egw ~}ReIr0F}{ +u-.MA(plT}%lv-34]vmL;xeEX^}t+}nzLOb-&{XO=g');
define('NONCE_KEY',        ' ^9Ki0-8]8uL)#1SKq23NH$S}ICoJK6!T pzZL&aJ!.<4*].}~Rzw+^Y-`:).jw4');
define('AUTH_SALT',        'teqd#7CMY$[Vtn{5I?^Sce^V:;7-t>l;^w2%`6Sat6_)kTFHrHT%[-ab<@W([FB4');
define('SECURE_AUTH_SALT', 'jbm@jj|3<X>oL}iHQ*dbc-h%ta;60QLBMOJSt>wfTxL#/yUOlstcnv|eP)Ev05a<');
define('LOGGED_IN_SALT',   'yYa@b~Cde5vHwHh!*o6 HJmcHgU-W(8FQ{C4`y.8QA:)bIlT6oJQr>|(sVpQdf7]');
define('NONCE_SALT',       '&?$Kz9=Yg[z$oaA,_$xhe~$UJ~,2igm,R(#!^^k %[htS{ZkFgC^BI.Ava<Fs0`|');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 * 
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
