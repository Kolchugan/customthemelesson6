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
define('DB_NAME', 'lesson6');

/** Имя пользователя MySQL */
define('DB_USER', 'admin');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'password');

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
define('AUTH_KEY',         '&ap(]`pi3[sQ:ra[{&$yspu&GJWp8X#Je%yz5&E1d5#qqu1/[_}h4f?<^l{q14zM');
define('SECURE_AUTH_KEY',  'dxOC*9Mqk(_dA+[fh{8sr<.X*n7p&oIM*AYK^w_yBk6siET$:X{D&^o*lgX{@#2Y');
define('LOGGED_IN_KEY',    'T&}Zk+ib>00*2c`g/#,E_WAMX-0qsp5j[2fFZ}axD.>Qz=.[g3x/wI2Y][r4_9_J');
define('NONCE_KEY',        'ff2},]8u4l(iIZPoY@dNfG.m[_d;9_S8?_Kd.(`pt<YlXE+x5&CZd]-9`JZBZ2qA');
define('AUTH_SALT',        'eb>ZV%3NLxA*O4vLcO_}l8{o23yC22]f)Z/[)Zj+,6!Zo[8 hO:cS2n!wp!Uyk5H');
define('SECURE_AUTH_SALT', 'n,;2MoZ1X+$IKsZ+o`?xL6:}7r<Eo-c(b{fcK=fY*r[]TRmW^6LdG1:GFGzEiALi');
define('LOGGED_IN_SALT',   'M89omKVjhI)lDy2Yh%K/.34TpS/?7{&qH6e_{(qu0~n^Fi2Q7Z4dSo?6R 2O:?[c');
define('NONCE_SALT',       'a&rutMLP/HOznHN/Wt&(^6Nj%@O,@:bu TWB=z+S+,&8=&&C#lzNGH;f[FH%<4L(');

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
