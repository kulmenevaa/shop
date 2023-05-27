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
define( 'DB_NAME', 'shop' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'TMS*p~~IAv/$~qPUsL1nael0QY-h>BX8<S#Q/[LBgtL#W6&m)IZlV6<X:c_r,h+(' );
define( 'SECURE_AUTH_KEY',  'p.h3xvX^<;Y7qG!wcB2;kf<n@uM~)nM.xU#RkqF/$B2^O7J_ivC]h<w`bk%Ig0Ev' );
define( 'LOGGED_IN_KEY',    '8dp66?X>d?4</+:xP-1+3I+^@wZjYJS[2|r!~JnNXY%15Wx`yBfSHyL9OG|D1mhC' );
define( 'NONCE_KEY',        'Xhmy/hDFoB`F<I]K>FS-Y@re 31jnj-7MHlUe(P@bs#b/D?f9w)g$;_UuI.tce!L' );
define( 'AUTH_SALT',        '`ik% : a1Dh36p}wbbhL F~pc0zT}M+hFG*.4d2UTqbOR^!u#~U:LMP%~#Z:dX^>' );
define( 'SECURE_AUTH_SALT', '[WxmC#(2K`*@Z9})(@bXZB!Y_lhagBkf9sMG=fuQv!2*_/.DlO+JlD#aLlU(5mc>' );
define( 'LOGGED_IN_SALT',   'Z!0]SB^:u<:~db]zv;HjO&yo0l0aml,Zz/[?=r@T~AxxfK>x~,)`M@F6TY5-$ *>' );
define( 'NONCE_SALT',       'p`*<cP^SJbM0%_&KsxEGb.0}E/qB3IwtU_)]nfNN=8K=w+[E0U<5r~B,^ly#9p0(' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

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
