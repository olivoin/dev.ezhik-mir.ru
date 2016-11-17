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
define('DB_NAME', 'ezhik');

/** Имя пользователя MySQL */
define('DB_USER', 'admin');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'ba0de51');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'JvoAJ+m6|(lS(2+Y7I~CR,7FxnARoqW`y)lSn{P|ZbzGIzaSM(lKvV36c8_C1wqw');
define('SECURE_AUTH_KEY',  '=D[m:yG_(-T`#ehXtFk{ s}X?Pm2{rV2Xy4!]_I%SH{Jc_%5!v5K(Sc^K#kom78D');
define('LOGGED_IN_KEY',    'Qt;K~+.R`SF~xan}Lh^1 2R_PSAg=,0qp%Ym&EY.W_Zq`<.#@|!vl+9{Wuo^t+9S');
define('NONCE_KEY',        'a_aX;,-xJB/t63Q~WC.pcNbG/i,:=D,,&Nkj^|K0R}5 B=lxu}g}~bd_w^-!1.69');
define('AUTH_SALT',        'q^rXrk2=)UFX^0(6AtP=&><yyR@znXQNueb6w^&4j!d$YETt6``Ms7Xk.`4baxTu');
define('SECURE_AUTH_SALT', '_iBZxD[#,<FJdtQm8vc8WpB3DMlG5o4G,$[^~XXEf|Wl%xIi{}(?wn~~qawA%0O<');
define('LOGGED_IN_SALT',   'tT(~$.yTdV(n6[2+7S.T-zWHqvd]we_ `Tz<;t3iye1$*DZIrdr{x;7sZ kqD#aH');
define('NONCE_SALT',       'U&_+[ <nl6P7XuC|}8Mb_NE;4NUdRF>uk7qVEEkH[pZi$)t[k=!!k)8x&y*CZ*6_');

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
