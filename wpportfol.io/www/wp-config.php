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
define('DB_NAME', 'wpportfolio');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '4Jyc_Ib^uyA}43||KWs5uD[9-bavLD~JGY*<j&c#+Q3`0%GCjx)z~Vk_Fwg>b[v~');
define('SECURE_AUTH_KEY',  'zJDNCbN*qq^!1H&Za<h6Qd=DG~Z|S~k%Ln&`#>$HDL{,!Is/5;3(l.NE8tQkvW]U');
define('LOGGED_IN_KEY',    'cwg8^~^%_+~oPM/uro<B5Ge@-h-:j]y3c%F=Q*y5a>(RF/{-OgIC7T8DP>Grp 9/');
define('NONCE_KEY',        'sp;hmSDHI,<_Td*}7>178IJ+;*`f%{|(@?dLH%/S[!hq#!*}mQ]1!|F`JM,&j5zJ');
define('AUTH_SALT',        'q*J0j3vrB)7 L3Nt@7Ars@T{i-6mp`t^9fn!Se/pdhziVjw3(<w7j|5huPFN<;8h');
define('SECURE_AUTH_SALT', ']-Jg7U=G$M-QRbq8QId>i~(S 6$mo`>LkZ2 >_M6frIw7|8NM&OB|i|ROEMsU?bV');
define('LOGGED_IN_SALT',   '@]&&i+D]+(Z<$V_20G2le0GyK*[-fgE$3k3N4aYq./]dXzhHi8P9OE8}{n-.uoue');
define('NONCE_SALT',       'fWc*@P-H(#F)cKYtuk1p~cMMyicY3n~Wb#>Ng0$YY*#La^B!ij}<3oQA6I@1Rv0>');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'fgh_';

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
