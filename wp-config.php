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
define('DB_NAME', 'portfolio');

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
define('AUTH_KEY',         '/l|,t*f)/Y@%<@I=#W:xAuRwRd@C?{-^EhRGx06@5fqG58`&h`qP_-}.4wO/<R22');
define('SECURE_AUTH_KEY',  'FY-aZ%F8w&) JQB+&AF^KHNsy(-!0-`(0#$1B[4lE6=45B<QG<Qny2 cVc[1)d9|');
define('LOGGED_IN_KEY',    'zO)A]CjjIE*}@3*GG*jT5X|uzrgUmVL(0#:-[(SSm7;2O@k5GsW|lG5}$D;W;oav');
define('NONCE_KEY',        '*c^kv%qS?MEOp:E-R:9&&lh-{o<{SM@ZdqJ{9LQ;_DdPm&Z(=D4H(m1+i6xIzHU#');
define('AUTH_SALT',        'E-|r OIglY:HKIwl|=66@<W${if$A40Pq[3vCS)3>hylsmeD;e9R+Q4j9YzD=:%Z');
define('SECURE_AUTH_SALT', 'k2{=I m!8PLPFt_Kvz L,+C-nb{?fK&pTV$GU!6}uYBF { QvS@ z`6JB@Od:l0Q');
define('LOGGED_IN_SALT',   'zLhXQ{bf02AU1_yO-(c jEDjRm|NN=g5o|tKLxc.E/0hJe?J[8X`yAf%<27:A%o*');
define('NONCE_SALT',       '_Zw!Y#6$<0t?_Lp~u,fV}%W`[e;WF{d2^&McE^y:M#d]:)JT.Y{`Bv/tjsXVDFt|');

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
