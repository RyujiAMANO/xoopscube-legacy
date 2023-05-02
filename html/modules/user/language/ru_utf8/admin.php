<?php
// DATA
define( '_AD_USER_DATA_DOWNLOAD_DO' , 'Download CSV');
define( '_AD_USER_DATA_NUM' , '%d users are registered.');
define( '_AD_USER_DATA_UPLOAD_BACK' , 'Select The CSV file again');
define( '_AD_USER_DATA_UPLOAD_CHECK_USER_CSVFILE' , 'Please confirm the content for registration.');
define( '_AD_USER_DATA_UPLOAD_CONF' , 'Confirm to Register');
define( '_AD_USER_DATA_UPLOAD_DO' , 'Register');
define( '_AD_USER_DATA_UPLOAD_DONE' , 'The user data was updated according to CSV data.');
define( '_AD_USER_DATA_UPLOAD_SELECT_USER_CSVFILE' , 'Please select the file of registered CSV.');

// ERROR
define('_AD_USER_ERROR_CONTENT_IS_NOT_FOUND', "Не могу найти данные.");
define( '_AD_USER_ERROR_COULD_NOT_SAVE_AVATAR_FILE' , 'Could not save avatar file {0}');
define( '_AD_USER_ERROR_DBUPDATE_FAILED' , 'Database update failed.');
define('_AD_USER_ERROR_EMAIL', "{0} не является валидным Email адресом");
define( '_AD_USER_ERROR_EXTENSION_IS_WRONG' , 'The extension of the uploaded file is invalid.');
define('_AD_USER_ERROR_GROUP_VALUE', "Указанное значение группы неверно.");
define('_AD_USER_ERROR_IMAGE_REQUIRED', "Вы должны выбрать файл кантинки.");
define('_AD_USER_ERROR_INJURY_MIN_MAX', "Связь между минимальным и максимальным значением неверна.");
define('_AD_USER_ERROR_INTRANGE', "Неверный ввод для {0:toLower}.");
define('_AD_USER_ERROR_MAILJOB_SEND_FAIL', "Ошибка отправки Email или личного сообщения.");
define('_AD_USER_ERROR_MAILJOB_SEND_MEANS', "Вы должны выбрать один или более методов доставки почты.");
define('_AD_USER_ERROR_MIN', "Введите {0:toLower} с {1} или большим количеством цифр.");
define('_AD_USER_ERROR_OBJECTEXIST', "Неверный ввод для {0:toLower}.");
define( '_AD_USER_ERROR_REQUIRED' , '{0} is required.');
define('_AD_USER_ERROR_REQUEST_IS_WRONG', "Неверный запрос.");
define('_AD_USER_ERROR_UMODE', "Указанное значение для порядка сортировки комментариев неверно.");
define('_AD_USER_ERROR_UNAME_NO_UNIQUE', "Имя пользователя уже занято.");

// LANG
define('_AD_USER_LANG_ALL_OF_USERS', "Все пользователи");
define('_AD_USER_LANG_APPROVE_USERS_ONLY', "Только активные пользователи");
define('_AD_USER_LANG_AVATAR_CREATED', "Создан");
define('_AD_USER_LANG_AVATAR_DELETE', "Удалить аватар");
define('_AD_USER_LANG_AVATAR_DISPLAY', "Показать");
define('_AD_USER_LANG_AVATAR_FILE', "Файл изображения");
define('_AD_USER_LANG_AVATAR_MIMETYPE', "Mimetype");
define('_AD_USER_LANG_AVATAR_NAME', "Имя");
define('_AD_USER_LANG_AVATAR_NEW', "Добавить аватар");
define( '_AD_USER_LANG_AVATAR_TOTAL' , 'Total of Avatar(s)');
define('_AD_USER_LANG_AVATAR_TYPE', "Тип");
define('_AD_USER_LANG_AVATAR_TYPE_C', "Custom");
define('_AD_USER_LANG_AVATAR_TYPE_S', "Система");
define( '_AD_USER_LANG_AVATAR_UPDATECONF' , 'Confirm avatar update');
define( '_AD_USER_LANG_AVATAR_UPLOAD' , 'Avatar Batch-Upload');
define( '_AD_USER_LANG_AVATAR_UPLOAD_FILE' , 'Avatars Archive(Only tar.gz or zip)');
define( '_AD_USER_LANG_AVATAR_UPLOAD_RESULT' , 'Result of Avatar Batch-Upload');
define('_AD_USER_LANG_AVATAR_USING_COUNT', "Пользователь");
define('_AD_USER_LANG_AVATAR_WEIGHT', "Вес");
define('_AD_USER_LANG_BODY', "Body");
define('_AD_USER_LANG_COMPLETED', "Completed");
define('_AD_USER_LANG_CONTROL', "Control");
define('_AD_USER_LANG_CREATE_NEW', "Создать новый");
define('_AD_USER_LANG_CREATE_UNIXTIME', "Дата создания");
define('_AD_USER_LANG_DELETE_RANK', "Удалить ранг");
define('_AD_USER_LANG_DISPLAY_USER_LEVEL', "Показать уровень пользователя");
define('_AD_USER_LANG_DISPLAY_USER_MAIL_CONDITION', "Показать настройки почты пользователя");
define( '_AD_USER_LANG_FOUNDUSERS' , 'Total of Found user(s)');
define('_AD_USER_LANG_FROM_EMAIL', "from email");
define('_AD_USER_LANG_FROM_NAME', "from name");
define('_AD_USER_LANG_GROUP', "Группа");
define('_AD_USER_LANG_GROUP_AMMO', "Количество");
define('_AD_USER_LANG_GROUP_ASSIGN', "Assign a member");
define('_AD_USER_LANG_GROUP_ASSIN_MEMBERS', "Список пользователей группы");
define('_AD_USER_LANG_GROUP_DELETE', "Удалить группу");
define('_AD_USER_LANG_GROUP_DELETE_ADVICE', "Вы уверены, что хотите удалить эту группу пользователей?");
define('_AD_USER_LANG_GROUP_DELETE_ADVICE2', "Пользователи входяющие в эту группу НЕ будут удалены в любом случае.");
define('_AD_USER_LANG_GROUP_DESC', "Описание");
define('_AD_USER_LANG_GROUP_EDIT', "Редактировать группы");
define('_AD_USER_LANG_GROUP_GID', "GID");
define('_AD_USER_LANG_GROUP_LIST', "Управление группами");
define('_AD_USER_LANG_GROUP_NAME', "Имя");
define('_AD_USER_LANG_GROUP_NEW', "Добавить новую группу");
define('_AD_USER_LANG_GROUP_NOASSIN_MEMBERS', "Пользователи сайта не входящие в эту группу");
define('_AD_USER_LANG_GROUP_PERMISSION', "Права");
define('_AD_USER_LANG_GROUP_PROPERTY', "Свойства");
define('_AD_USER_LANG_GROUP_TYPE', "Тип");
define('_AD_USER_LANG_IS_MAIL', "Mail");
define('_AD_USER_LANG_IS_PM', "Личное сообщение");
define('_AD_USER_LANG_LASTLOG_LESS', "Последний визит меньше чем X дней назад");
define('_AD_USER_LANG_LASTLOG_MORE', "Последний визит был более чем X дней назад");
define('_AD_USER_LANG_LASTLOGIN', "Последний визит");
define('_AD_USER_LANG_LEFT_TARGET_USER', "Remaining Recipients");
define('_AD_USER_LANG_LEVEL_ACTIVE', "Active User");
define('_AD_USER_LANG_LEVEL_PENDING', "Pending User");
define('_AD_USER_LANG_LEVEL_ROOT', "Root User");
define('_AD_USER_LANG_MAIL_NG_USERS_ONLY', "Только пользователи, которые не принимают писма.");
define('_AD_USER_LANG_MAIL_OK_USERS_ONLY', "Только пользователи, которые принимают письма.");
define('_AD_USER_LANG_MAILJOB_DELETE', "Удалить Mailjob");
define('_AD_USER_LANG_MAILJOB_EDIT', "Редактировать Mailjob");
define('_AD_USER_LANG_MAILJOB_ID', "Job ID");
define('_AD_USER_LANG_MAILJOB_LINK_LIST', "Mailjob link list");
define('_AD_USER_LANG_MAILJOB_LIST', "Mailjob list");
define('_AD_USER_LANG_MAILJOB_NEW', "New Mailjob");
define('_AD_USER_LANG_MAILJOB_SEND', "Send Mailjob");
define('_AD_USER_LANG_MAILJOB_VIEW', "View Mailjob");
define('_AD_USER_LANG_MESSAGE', "Сообщение");
define('_AD_USER_LANG_NO_SPECIAL_RANK', "--------------");
define('_AD_USER_LANG_OVER_POSTS', "Количество сообщений больше чем X");
define('_AD_USER_LANG_PENDING_USERS_ONLY', "Только неактивные пользователи");
define('_AD_USER_LANG_PERM_ACCESS', "Доступ");
define('_AD_USER_LANG_PERM_ACCESS_ADMIN', "Привилегии");
define('_AD_USER_LANG_PERM_ADMIN', "Админ");
define('_AD_USER_LANG_PERM_BLOCK_ACCESS', "Права доступа к блоку");
define('_AD_USER_LANG_PERM_GROUP_PERM_BLOCK', "Блоки");
define('_AD_USER_LANG_PERM_GROUP_PERM_MODULE', "Система / Модуль");
define('_AD_USER_LANG_PERM_MODULE_ACCESS', "Система/модуль права");
define('_AD_USER_LANG_PERM_SYSTEM_PERM_MODULE', "Администрирование системы");
define('_AD_USER_LANG_RANK', "Ранг");
define('_AD_USER_LANG_RANK_EDIT', "Редактировать ранг пользователя");
define('_AD_USER_LANG_RANK_IMAGE', "Изображение");
define('_AD_USER_LANG_RANK_LIST', "Управление рангами пользователей");
define('_AD_USER_LANG_RANK_MAX', "Максимум постов");
define('_AD_USER_LANG_RANK_MIN', "Минимум постов");
define('_AD_USER_LANG_RANK_NEW', "Добавить новый ранг");
define('_AD_USER_LANG_RANK_SPECIAL', "Специальный ранг");
define('_AD_USER_LANG_RANK_TITLE', "Заголовок");
define( '_AD_USER_LANG_RANK_TOTAL' , 'Total of Ranks');
define( '_AD_USER_LANG_RANK_UPDATECONF' , 'Confirm rank update');
define('_AD_USER_LANG_RECOUNT', "Пересчитать");
define('_AD_USER_LANG_REGDATE', "Дата регистрации");
define('_AD_USER_LANG_REGDATE_LESS', "Дата регистрации меньше чем X дней назад");
define('_AD_USER_LANG_REGDATE_MORE', "Дата регистрации больше чем X дней назад");
define('_AD_USER_LANG_RESET', "Сбросить");
define('_AD_USER_LANG_RETRY', "Повторить");
define('_AD_USER_LANG_SEARCH_AGAIN', "Искать снова");
define('_AD_USER_LANG_SEND_MAIL_BY_THIS_CONDITION', "Отправить письмо этим пользователям");
define('_AD_USER_LANG_TARGET_RETRY_NUMBER', "Target retry number");
define('_AD_USER_LANG_TITLE', "Заголовок");
define( '_AD_USER_LANG_TOTAL' , 'Total');
define('_AD_USER_LANG_UID', "uid");
define('_AD_USER_LANG_UNDER_POSTS', "Количество сообщений меньше чем X");
define( '_AD_USER_LANG_UPLOAD' , 'Upload');
define('_AD_USER_LANG_USER', "Пользователь");
define('_AD_USER_LANG_USER_DELETE', "Удалить пользователя");
define('_AD_USER_LANG_USER_DELETE_ADVICE', "Вы уверены, что хотите удалить этого пользователя?");
define('_AD_USER_LANG_USER_EDIT', "Редактировать пользователя");
define('_AD_USER_LANG_USER_LIST', "Управление пользователями");
define('_AD_USER_LANG_USER_NEW', "Добавить нового пользователя");
define('_AD_USER_LANG_USER_NEW_FIELD', "Add a New Field");
define('_AD_USER_LANG_USER_SEARCH_LIST', "User search list");
define( '_AD_USER_LANG_USER_TOTAL' , 'Total of Users');
define( '_AD_USER_LANG_USER_UPDATECONF' , 'Confirm user update');
define('_AD_USER_LANG_USER_VIEW', "user view");
define('_AD_USER_LANG_VPASS', "Проверить пароль");

// Message
define('_AD_USER_MESSAGE_CONFIRM_DELETE', "Вы уверены, что хотите удалить?");
define('_AD_USER_MESSAGE_CONFIRM_DELETE_RANK', "Вы уверены, что ходтите удалить этот ранг пользователя?");
define( '_AD_USER_MESSAGE_CONFIRM_UPDATE_AVATAR' , 'Are you sure you want to update it?');
define( '_AD_USER_MESSAGE_CONFIRM_UPDATE_RANK' , 'Are you sure you want to update rank?');
define( '_AD_USER_MESSAGE_CONFIRM_UPDATE_USER' , 'Are you sure you want to update user?');
define('_AD_USER_MESSAGE_RECOUNT_SUCCESS', "Пересчет произведен");

// Tips
define( '_AD_USER_ADMENU_USER_DATA_DOWNLOAD' , 'User Data Download');

define( '_AD_USER_TIPS_AVATAR' , 'Site members can optionally fashion their own online personae called avatars.<br>You can view and manage avatar settings in the module : <a href="'.XOOPS_URL.'/modules/legacy/admin/index.php?action=PreferenceEdit&confmod_id=4#avatar-active">User preferences ⭧</a>');
define( '_AD_USER_TIPS_AVATAR_UPLOAD' , 'You can easily register many avatars by uploading Archive file including them! <br>This batch-upload does not check Length and File-Size of each avatar!<br>Please pre-adjust them before you archive them!<br>(Only tar.gz or zip archive)');
define( '_AD_USER_TIPS_DATA_DOWNLOAD' , 'You can export User Data (order by user_id) from your MySQL database in CSV format, which is a standard format with several benefits and usable by other tools and environments.');
define('_AD_USER_TIP_DELETE_AVATAR', "Пользователи у которых был установлен этот аватар будут теперь использовать blank.gif в качестве аватара.");
define( '_AD_USER_TIPS_MAILJOB_LIST' , 'Set up mail, private message or both to complete sending the mail to all users.');
define( '_AD_USER_TIPS_MAILJOB_LINK' , 'In Mail Job, messages that cannot be successfully delivered are subject to various retry. The Mail Job expires after all delivery. In case of a delivery failure, it can be deleted from the queue.');
define( '_AD_USER_TIPS_MAILJOB_SEND', "Если Вы выбрали очень много пользователей для отправки писем - сервер может не ответить правильно (вернет пустую страницу и т.п.). В таком случае перезагрузите страницу несколько раз, чтобы закончить отправку всем пользователям.");
define( '_AD_USER_TIPS_RANK' , 'A social user ranking system is helpfull to identify contributors. You can define your own policy by editing default ranks.');
define('_AD_USER_TIPS_RECOUNT_POSTS', "Вы можете пересчитать количество сообщений для каждого пользователя нажав на кнопку [Пересчитать].");
define( '_AD_USER_TIPS_USER_ADMIN' , 'Access to your web site is controlled through a group-based system. Create new groups based on default groups and assign users to groups that authorize their access to Modules and blocks content.
You can also extend default User Profile by adding new fields.');
define('_AD_USER_TIPS_USER_EDIT', "Если Вам необходимо сменить пароль введите 'Пароль' и 'Подтвердить пароль'.");
define('_AD_USER_TIPS_USER_NEW', "Вы должны ввести 'Имя пользователя', 'Email адрес',  'Пароль' и 'Подтвердить пароль'.");
define( '_AD_USER_TIPS_USER_SEARCH' , 'You can search and sort your users data to find the vital information you are looking for.<br>The accuracy of the end result will be directly related to the number of fields you fill.');
define( '_AD_USER_TIPS1_DATA_UPLOAD' , 'You can register a batch of members with CSV file.');
define( '_AD_USER_TIPS2_DATA_UPLOAD' , 'Use the CSV file downloaded from <a href="?action=UserDataDownload">'._AD_USER_ADMENU_USER_DATA_DOWNLOAD.'</a> - Do not increase and decrease columns.');
define( '_AD_USER_TIPS3_DATA_UPLOAD' , 'In CSV file, add only the new users information to update and to register.');
define( '_AD_USER_TIPS4_DATA_UPLOAD' , 'When the row of leftmost UID is empty (or 0), it registers as a new user.');
define( '_AD_USER_TIPS5_DATA_UPLOAD' , 'The user information is updated when there is a value in the leftmost row (UID).<br>If you set a password, set it within 30bytes.');
