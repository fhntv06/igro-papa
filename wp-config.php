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
define( 'DB_NAME', 'igro-papa' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'igro-papa' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '-89hjkpZ!;' );

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
define( 'AUTH_KEY',         'F6>mz=,y6g4cD8)BA^96l)JyMKz8pXjKc#eC>Fs>@j1P#;0k>C(c.^8txoqRTC6}' );
define( 'SECURE_AUTH_KEY',  'nlx[8[]kSJ`8u##$([fn=W<QD7vB9ZtdVTihlM1p m84Ey->;QO-CyWOx@f1KQLg' );
define( 'LOGGED_IN_KEY',    'fhA=/! nAnS$qPXKS]h$IdH[>0:*OCd,MnrjvI<jW6jcl4,0s:|6Q}vTS2;WF[E]' );
define( 'NONCE_KEY',        ']1ZQ}WmQ?i_b$~1Z$^;TA6t5`6Q@P[O<-<@gZ*tW0BIdetH0HYm8f z*YbKN:Z [' );
define( 'AUTH_SALT',        'YHTt&!PEWoF!G-Q~l_`[FRDdA-!97d[96~#hJJfvKGKoL>;<oR-`%OX^!yp1zwTt' );
define( 'SECURE_AUTH_SALT', '5lW^O%+dITWe-6@0LgJjj-4)(gM;}R_U{|^B^UEtO.$rzb./4B^I%V$Yg`Zy2$.G' );
define( 'LOGGED_IN_SALT',   'zkqjlDo^rK0j9yp;ahDb~~!Hr4ik2|N%=l*>JT8Y0(jyp]yrZBT~<*/y]Fbxj*FO' );
define( 'NONCE_SALT',       '^db+ou2+N<~$iV>BS.tIim[M7um~Y>#ztLJd8!GYVxyCmiJ/Q(5|s+vI=|@J_qFy' );

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
