<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', '2308-21_78841' );

/** Имя пользователя базы данных */
define( 'DB_USER', '2308-21_78841' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '58bfda598486fcf25247' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'SJ?$;MggDlha)G$Csts,Z<{eD1z>J, 9(4mN#]6]V3 V+&O`jd,>0lY`owta14eH' );
define( 'SECURE_AUTH_KEY',  '.kh&3e-&|+T4v:A:ZGqt7?7VoBjC$N>M![z[LYC>TQK2D93YM]xSnI^_lyuB]S/F' );
define( 'LOGGED_IN_KEY',    'cUe0(!B9+ZXD^`sddvQ/yC&T2qC-OwL u,<12_l1aZph>[mnKo-$NB b9ek EJtC' );
define( 'NONCE_KEY',        '8^4e;|%bBRn=%bWE|zM*Z~y&Hm=v|4W>`giO%.UUp0O.3 K]@T/~{{C0O,9;0G26' );
define( 'AUTH_SALT',        'erPy/+Q^>.M<^,:B4|PnY-d4]uv,/*nm/.;JMwn=g+7}41?4,K8U-[!c+alb.SbR' );
define( 'SECURE_AUTH_SALT', '{^4SNM<?o9%,Xc{O+)l9&V@d-0+WSWl6|k^t!qq:C]oKbaJo6Bh+i:;9?du=t^Q~' );
define( 'LOGGED_IN_SALT',   '<I>`L=gUB`HN3gnr!c<t/WKp6;}-%z{V= jL7Li]jk)xpMl[ R%*22/UZl33R&P3' );
define( 'NONCE_SALT',       '5GcLHws>(cF|`jQ[[/Z3Q(t>=wgxC}Xkzidy8)rz~ZM.:gaV0e/;?(v|SILX!Mo)' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'RKaAz_';


/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';