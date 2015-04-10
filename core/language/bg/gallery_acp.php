<?php
/**
*
* gallery-acp [Bulgarian]
*
* @package phpBB Gallery
* @version $Id$
* @copyright (c) 2015 Lucifer lucifer@anavaro.com http://www.anavaro.com
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
**/

/**
* DO NOT CHANGE
*/


$lang = array_merge($lang, array(
	'ACP_GALLERY_OVERVIEW'			=> 'phpBB Gallery',
	'ACP_GALLERY_OVERVIEW_EXPLAIN'	=> 'Тук се намират някои от статистиките за вашата галерия.',

	'ADD_ALBUM_ON_TOP'				=> 'Добави албума от горе',
	'ADD_PERMISSIONS'				=> 'Добави права',
	'ALBUM_ADMIN'					=> 'Администрация на албум',
	'ALBUM_ADMIN_EXPLAIN'			=> 'В phpBB Gallery няма категории, всичко е базирано на албуми. Всеки албум може да има неограничен брой подалбуми и вие можете да определите за всеки дали в него може да се качва. Тук можете да добавяте, променяте, триете, заключвате и отключвате индивидуални албуми, както и да настройвате допълнителни опции. Ако избраженията ви не са синхронизирани, тук можете да синхронизирате албума. <strong>Трябва да копирате подходящите права за новосъзаддени албуми, за да могат да бъдат показвани.</strong>',
	'ALBUM_AUTH_TITLE'				=> 'Права на албум',
	'ALBUM_CREATED'					=> 'Албумът беше създаден успешно.',
	'ALBUM_DELETE'					=> 'Изтрий албум',
	'ALBUM_DELETE_EXPLAIN'			=> 'Формата по-долу ще ви пзоволи да изтриете албум и да решите какво да правите с изображенията в него',
	'ALBUM_DELETED'					=> 'Този албум беше изтрит успешно.',
	'ALBUM_DESC'					=> 'Описание',
	'ALBUM_DESC_EXPLAIN'			=> 'Всички HTML части ще бъдат изобразени както са.',
	'ALBUM_DESC_TOO_LONG'			=> 'Описанието на албума е твърде дълго, трябв да съдържа под 4000 символа.',
	'ALBUM_EDIT_EXPLAIN'			=> 'Форамта по-долу ще ви помогна да промените албума. Моля отбележете че модераторския достъп се настройва чрез правата на лабума за всеки потребител или група.',
	'ALBUM_ID'						=> 'ID на албума',
	'ALBUM_IMAGE'					=> 'Изображение на албума',
	'ALBUM_IMAGE_EXPLAIN'			=> 'Място, относително до phpBB root директорията, на допълнително изображение свързано с този албум.',
	'ALBUM_NAME_EMPTY'				=> 'Трябва да въведете име за този албум.',
	'ALBUM_NO_TYPE_CHANGE_TO_CONTEST'	=> 'Албум без конкурс не може да бъде превърнат в такъв със.',
	'ALBUM_PARENT'					=> 'Старши албум',
	'ALBUM_PARENT_INVALID'			=> 'Старшия албум който сте избрали е невалиден. Или е подалбум на албума който променяте или не съществува.',
	'ALBUM_PASSWORD'				=> 'Паролса на албума',
	'ALBUM_PASSWORD_EXPLAIN'		=> 'Слага парола за този албум, използвайте системата за слагане на права за предпочитания.',
	'ALBUM_PASSWORD_CONFIRM'		=> 'Потвърди паролата на албума',
	'ALBUM_PASSWORD_CONFIRM_EXPLAIN'	=> 'Това трябва да се сложи само ако паролата на албума е зададена.',
	'ALBUM_RESYNCED'				=> 'Албум “%s” успешно ресинхронизиран.',
	'ALBUM_SETTINGS'				=> 'Настройки на албум',
	'ALBUM_STATUS'					=> 'Статус на албума',
	'ALBUM_TYPE'					=> 'Вид албум',
	'ALBUM_TYPE_CAT'				=> 'Категория',
	'ALBUM_TYPE_CONTEST'			=> 'Конкурс',
	'ALBUM_TYPE_UPLOAD'				=> 'Албум',
	'ALBUM_UPDATED'					=> 'Албумът е опреснен упешно.',
	'ALBUM_WATERMARK'				=> 'Показвай воден знак',
	'ALBUM_WATERMARK_EXPLAIN'		=> 'Ако тази опция е сложена на <samp>Не</samp>, водния знак никога не се показва, независимо от правата!',
	'ALBUM_WITH_CONTEST_NO_TYPE_CHANGE'	=> 'Състезателен албум не може да бъде превърнат в не състезателен.',
	'ALBUMS'						=> 'Албуми',

	'CACHE_DIR_SIZE'				=> 'Размер на папка cache/',
	'CHANGE_AUTHOR_TO_GUEST'		=> 'Промени автора на "гост"',
	'CHECK'							=> 'Провери',
	'CHECK_AUTHOR_EXPLAIN'			=> 'Не бяха намерени изображения без валиден автор.',
	'CHECK_COMMENT_EXPLAIN'			=> 'Не бяха открити коментари без валиден автор.',
	'CHECK_ENTRY_EXPLAIN'			=> 'Трябва да пуснете проверка, която да потърси за файлове без ред в DB.',
	'CHECK_PERSONALS_EXPLAIN'		=> 'Не бяха открити лични албуми без валиден автор.',
	'CHECK_PERSONALS_BAD_EXPLAIN'	=> 'Не бяха открити лични албуми.',
	'CHECK_SOURCE_EXPLAIN'			=> 'Не бяха открити записи. Трябва да пуснете проверка за да сте сигурни.',
	'COLS_PER_PAGE'					=> 'Брой колони на страницата с thumbnail-и',
	'COMMENT'						=> 'Коментар',
	'COMMENT_ID'					=> 'ID на коментара',
	'COMMENT_MAX_LENGTH'			=> 'Максимална дължина за коментар',
	'COMMENT_SYSTEM'				=> 'Разреши системата за коментиране',
	'COMMENT_USER_CONTROL'			=> 'Потребителите могат да контролират коментарите',
	'COMMENT_USER_CONTROL_EXP'		=> 'Позволи на потребителите да избират дали други потребители могат да коментират техните изображения.',
	'CONTEST_DATE_EXPLAIN'			=> 'Моля въведете дата във формат YYYY-MM-DD HH:MM',
	'CONTEST_END'					=> 'Край на конкурса',
	'CONTEST_END_BEFORE_RATING'		=> 'Края на конкурса не трябва да е преди начлото на етапа за гласуване.',
	'CONTEST_END_BEFORE_START'		=> 'Края на конкурса не трябва да е преди началото на конкурса.',
	'CONTEST_END_EXPLAIN'			=> 'След края на конкурса, потребителите няма да могат да оценяват изображенията.',
	'CONTEST_END_INVALID'			=> 'Не валиден край на конкурса (%s). Моля въвдете датата във формат YYYY-MM-DD HH:MM',
	'CONTEST_RATING'				=> 'Начало на оценяването',
	'CONTEST_RATING_BEFORE_START'	=> 'Начлото на етапа за оценяване не трбва да е преди началото на конкурса.',
	'CONTEST_RATING_EXPLAIN'		=> 'След “Начало на оценяване“, поребителите няма да могат да качват повече изображения.',
	'CONTEST_RATING_INVALID'		=> 'Не валидно начало на етапа за гласуване (%s). Моля въвдете датата във формат YYYY-MM-DD HH:MM',
	'CONTEST_SETTINGS'				=> 'Настройка на конкурс',
	'CONTEST_START'					=> 'Начало на конкурса',
	'CONTEST_START_EXPLAIN'			=> 'В началото на конкурса, на потребителите е позволено да качват изображения.',
	'CONTEST_START_INVALID'			=> 'Не валидно начало на конкурса (%s). Моля въвдете датата във формат YYYY-MM-DD HH:MM',
	'COPY_PERMISSIONS'				=> 'Копирай права от',
	'COPY_PERMISSIONS_ADD_EXPLAIN'	=> 'Ако изберете копиране на права, албумът ще има същите права като избрания тук. Ако не е избран албум, ще се наложи да настроите правата за достъп на по-късен етап.',
	'COPY_PERMISSIONS_ALBUM_FROM_EXPLAIN'	=> 'Албума от който желаете да копирате права.',
	'COPY_PERMISSIONS_ALBUM_TO_EXPLAIN'		=> 'Албума за който искате да копирате права.',
	'COPY_PERMISSIONS_CONFIRM'		=> 'Моля имайте предвид че това ще презапише всички права на избраните албуми.',
	'COPY_PERMISSIONS_EDIT_EXPLAIN'	=> 'Ако изберете да копирате права, албума ще има същите права като избрания тук. Това ще презапише всички предходни права на албума който сте избрали тук. Ако няма избран албум, правата ще бъдат запазени.',
	'COPY_PERMISSIONS_FROM'			=> 'Копирай правата от',
	'COPY_PERMISSIONS_SUCCESSFUL'	=> 'Успешно копирани права към избраните албуми.',
	'COPY_PERMISSIONS_TO'			=> 'Приложи права към',
	'CREATE'						=> 'Създай',
	'CREATE_ALBUM'					=> 'Създай нов албум',
	'CREATE_USERS_PEGA'				=> 'Създай нова лична галерия за потребител',

	'DECIDE_MOVE_DELETE_CONTENT'	=> 'Изтрий съдаржанието или премести към албум',
	'DECIDE_MOVE_DELETE_SUBALBUMS'	=> 'Изтрий подалбуми или премести към албум',
	'DEFAULT_SORT_EXPLAIN'			=> 'Ако изберете <samp>Default</samp> тук, ще бъде взете стойността зададена по подразбиране за сортиране.',
	'DEFAULT_SORT_METHOD'			=> 'Метод за сортиране по подразбиране',
	'DEFAULT_SORT_ORDER'			=> 'Ред за сортиране по подразбиране',
	'DELETE_ALBUM_SUBS'				=> 'Моля първо премахнете подалбумите',
	'DELETE_ALL_IMAGES'				=> 'Изтрий всички изображения',
	'DELETE_IMAGES'					=> 'Изтрий изображения',
	'DELETE_PERMISSIONS'			=> 'Изтрий права',
	'DELETE_SUBALBUMS'				=> 'Изтрий подалбумите и техните изображения',
	'DISP_BIRTHDAYS'				=> 'Покажи рожденните дни',
	'DISP_FAKE_THUMB'				=> 'Виж thumbnail в списъка с албуми',
	'DISP_LOGIN'					=> 'Покажи не успешно влизане',
	'DISP_LOGIN_EXP'				=> 'Само гости',
	'DISP_NEXTPREV_THUMB'			=> 'Покажи thumbnail-и за следващо/предходно изображение',
	'DISP_NEXTPREV_THUMB_EXPLAIN'	=> 'Ако е избрано не, ще се почви само името на изборажението като връзка.',
	'DISP_PERSONAL_ALBUM_PROFILE'	=> 'Покажи връзка към личния албум в профила на потребителите',
	'DISP_STATISTIC'				=> 'Поакжи статистика на галерията',
	'DISP_TOTAL_IMAGES'				=> 'Покажи "Общо изображения" на index.' . $phpEx,
	'DISP_USER_IMAGES_PROFILE'		=> 'Покажи статистика с качените изображения в потребителския профил',
	'DISP_VIEWTOPIC_ICON'			=> 'Покажи бутон за личния албум в viewtopic.' . $phpEx,
	'DISP_VIEWTOPIC_IMAGES'			=> 'Покажи брояч на изобраенията в viewtopic.' . $phpEx,
	'DISP_VIEWTOPIC_LINK'			=> 'Свържи брояча на изборажения към потребителските изображения',
	'DISP_WHOISONLINE'				=> 'Покажи "Кой е на линия"',
	'DISPLAY_IN_RRC'				=> 'Покажи изборажения от този албум в "Последни/случайни" изображения',
	'DONT_COPY_PERMISSIONS'			=> 'Не копирай права',

	'EDIT_ALBUM'					=> 'Промени албум',

	'FAKE_THUMB_SIZE'				=> 'Размер на Thumbnail',
	'FAKE_THUMB_SIZE_EXP'			=> 'Ако искате да запазите оригиналния размер, запомнете 16 px за черната инфо лента',

	'GALLERY_ALBUMS_TITLE'			=> 'Контрол на албумите',
	'GALLERY_CONFIG'				=> 'Настройка на галерията',
	'GALLERY_CONFIG_EXPLAIN'		=> 'От тук можете да настроите основните функции на phpBB Gallery.',
	'GALLERY_CONFIG_UPDATED'		=> 'Конфигурацията на галерията беше опреснена успешно.',
	'GALLERY_INDEX'					=> 'Gallery-Index',
	'GALLERY_PURGE_CACHE_EXPLAIN'	=> 'Ако зиползвате Thumbnail Cache опцията, ще се наложи да изчистите thumbnail кеша след промяна на настройките на thumbnail-ите в "Настройки на галерията за да ги накрате да се презаредят.',
	'GALLERY_STATS'					=> 'Статистики на галерията',
	'GALLERY_VERSION'				=> 'Весия',
	'GD_VERSION'					=> 'Оптимизация за GD версия',
	'GENERAL_ALBUM_SETTINGS'		=> 'Основни настройки на албум',
	'GIF_ALLOWED'					=> 'Позволено качването на GIF файлове',
	'GUPLOAD_DIR_SIZE'				=> 'Размер на папак source/',

	'HACKING_ATTEMPT'				=> 'Опит за хакване!',
	'HANDLE_IMAGES'					=> 'Какво да правя с избраженията',
	'HANDLE_SUBS'					=> 'Какво да правя с подалбумите',
	'HOTLINK_ALLOWED'				=> 'Whitelist на връзки',
	'HOTLINK_ALLOWED_EXP'			=> 'Връзки към изображенията от тези домейни ще са разрешени. Домейните трябва да са разделени с запетайка (без space). Например: “anavaro.com,phpbb.com“',
	'HOTLINK_PREVENT'				=> 'Позволи връзки към изображенията от всички сайтове',

	'IMAGE_DESC_MAX_LENGTH'			=> 'Максимална дължина на описанията',
	'IMAGE_ID'						=> 'ID на изображението',
	'IMAGE_SETTINGS'				=> 'Настройки на изображението',
	'IMAGES_PER_DAY'				=> 'Изобраения на ден',
	'INDEX_SETTINGS'				=> 'Настройки за gallery/index.' . $phpEx,
	'INFO_LINE'						=> 'Покажи размера в thumbnail',
	'INHERIT_PERMISSIONS_ALBUM'		=> 'Наследи права от друг албум',
	'INHERIT_PERMISSIONS_VICTIM'	=> 'Наследи права от друга настройка',

	'JPG_ALLOWED'					=> 'Позволи качването на JPG файлове',
	'JPG_QUALITY'					=> 'Качество на JPG',
	'JPG_QUALITY_EXP'				=> 'При въртене или преоразмеряване на изображение, големината на файла може да стане по-голяма от тази преди това. С тази опция можете да намалите качеството за да спестите дисково пространство.',

	'LIST_INDEX'					=> 'Изброявай подалбумите в информацията на старшите албуми',
	'LIST_INDEX_EXPLAIN'			=> 'Displays this album on the index and elsewhere as a link within the legend of its parent-album if the parent-album’s “List subalbums in legend” option is enabled.',
	'LIST_SUBALBUMS'				=> 'Покажи подалбумите в информацията',
	'LIST_SUBALBUMS_EXPLAIN'		=> 'Покажи подалбумите на този албум в началото и другаде като инфоемация ако "Изброявай подалбумите в информацията на старшите албуми" опцията е разрешена.',
	'LOCKED'						=> 'Заключен',
	'LOOK_UP_ALBUM'					=> 'Избери албум',
	'LOOK_UP_ALBUMS_EXPLAIN'		=> 'Можете да изберете повече от един албум.',

	'MANAGE_CRASHED_ENTRIES'		=> 'Настрой счупените редове в базата',
	'MANAGE_CRASHED_IMAGES'			=> 'Настрой счупените изборажения',
	'MANAGE_PERSONALS'				=> 'Настрой личните албуми',
	'MAX_IMAGES_PER_ALBUM'			=> 'Максимален брой изображения във всеки албум',
	'MAX_IMAGES_PER_ALBUM_EXP'		=> 'Неограничено е -1',
	'MEDIUM_CACHE'					=> 'Кеширай преоразмерените изображения за страницат на изображението',
	'MEDIUM_DIR_SIZE'				=> 'Гоемина на папката medium/',
	'MISSING_ALBUM_NAME'			=> 'Трябва да въведете име за албума.',
	'MISSING_AUTHOR'				=> 'Изображения без валиден автор',
	'MISSING_AUTHOR_C'				=> 'Коментари без валиден автор',
	'MISSING_ENTRY'					=> 'Файлове без DB',
	'MISSING_OWNER'					=> 'Лични албуми без валиден собственик',
	'MISSING_OWNER_EXP'				=> 'Подалбуми, изображения и коментари също биват изтрити.',
	'MISSING_SOURCE'				=> 'Изображения без фаил',
	'MOVE_IMAGES_TO'				=> 'Премести изобраения в',
	'MOVE_SUBALBUMS_TO'				=> 'Премести подлбуми в',

	'NEW_ALBUM_CREATED'				=> 'Новият албум беше създаден успешно',
	'NO_ALBUM_SELECTED'				=> 'Трябва да изберете поне един албум.',
	'NO_DESTINATION_ALBUM'			=> 'Не сте посочили албум в който да преместя съдаржанието.',
	'NO_PERMISSIONS_SELECTED'		=> 'Трябва да изберете поне един албум или система за права.',
	'NO_VICTIM_SELECTED'			=> 'Трябва да изберете поне един потребител или група.',
	'NO_INHERIT'					=> 'Не копирай права',
	'NO_PARENT_ALBUM'				=> 'Без старши',
	'NO_SUBALBUMS'					=> 'Няма прикачени албуми',
	'NUMBER_ALBUMS'					=> 'Брой албуми',
	'NUMBER_IMAGES'					=> 'Брой изображения',
	'NUMBER_PERSONALS'				=> 'Брой лични албуми',

	'OWN_PERSONAL_ALBUMS'			=> 'Собствени лични албуми',
	'OWN_PERSONAL_ALBUMS_EXPLAIN'	=> 'Тези права се изпозлват когато Потребител А посещава собствените си албуми. <strong>Ако потребителите ви не могат да създават лични албуми, това са правата, които трябва да коригирате.</strong>',
	'PERSONAL_ALBUMS_EXPLAIN'		=> 'Тези права се използват когато Потребител А посещава личния албум на Потребител Б. <strong>Ако модераторите ви не могат да модерират личните албуми, това са правата които трябва да коригирате.</strong>',

	'PERMISSION'					=> 'Права',
	'PERMISSION_NEVER'				=> 'Никога',
	'PERMISSION_NO'					=> 'Не',
	'PERMISSION_SETTING'			=> 'Настройки',
	'PERMISSION_YES'				=> 'Да',

	'PERMISSION_A_COUNT'			=> 'Брой допустими лични подалбуми',
	'PERMISSION_A_LIST'				=> 'Може да вижда албум',
	'PERMISSION_A_RESTRICT'			=> 'Може да ограничва достъпа',
	'PERMISSION_A_UNLIMITED'		=> 'Не огрничен брой лични подалбуми',
	'PERMISSION_C'					=> 'Коментари',
	'PERMISSION_C_DELETE'			=> 'Може да трие собствените си коментари',
	'PERMISSION_C_EDIT'				=> 'Може да редактира собствените си коментари',
	'PERMISSION_C_POST'				=> 'Може да коментира изображение',
	'PERMISSION_C_READ'				=> 'Може да чете коментари',
	'PERMISSION_I'					=> 'Изображения',
	'PERMISSION_I_APPROVE'			=> 'Може да качва без одобрение',
	'PERMISSION_I_COUNT'			=> 'Бой на качваните изображения',
	'PERMISSION_I_DELETE'			=> 'Може да трие собствените си изобраения',
	'PERMISSION_I_EDIT'				=> 'Може да редактира собствените си изобраения',
	'PERMISSION_I_LOCK'				=> 'Може да заключва изобраения',
	'PERMISSION_I_RATE'				=> 'Може да оценява изображения',
	'PERMISSION_I_RATE_EXPLAIN'		=> 'Гости и качилия изображението <samp>НИКОГА</samp> не могат да оценяват изображение.',
	'PERMISSION_I_REPORT'			=> 'Може да докладва изобраения',
	'PERMISSION_I_UNLIMITED'		=> 'Може да качва не ограничен брой изобраения',
	'PERMISSION_I_UPLOAD'			=> 'Може да качва изобраения',
	'PERMISSION_I_UPLOAD_EXPLAIN'	=> 'Това право също се използва и за определяне дали потребителя може да мести изборажения в този албум, когато има модераторски права в други албуми.',
	'PERMISSION_I_VIEW'				=> 'Може да вижда изобраения',
	'PERMISSION_I_WATERMARK'		=> 'Може да вижда изобраения без воден знак',
	'PERMISSION_M'					=> 'Модерация',
	'PERMISSION_MISC'				=> 'Разни', //Miscellaneous
	'PERMISSION_M_COMMENTS'			=> 'Може да модерира коментари',
	'PERMISSION_M_DELETE'			=> 'Може да трие изобраения',
	'PERMISSION_M_EDIT'				=> 'Може да редактира изобраения',
	'PERMISSION_M_MOVE'				=> 'Може да мести изображения',
	'PERMISSION_M_REPORT'			=> 'Може да управялява доклади',
	'PERMISSION_M_STATUS'			=> 'Може да одобрява и заключва изображения',

	'PERMISSION_EMPTY'				=> 'Не сте настроили всички права.',
	'PERMISSIONS'					=> 'Права',
	'PERMISSIONS_COPY'				=> 'Копирай права',
	'PERMISSIONS_COPY_EXPLAIN'		=> 'Тук можете да копирате правата от един албум на един или много други.',
	'PERMISSIONS_EXPLAIN'			=> 'Тук можете да променяте кои потребители и групи могат да достъпват кои албуми.',
	'PERMISSIONS_STORED'			=> 'Правата са запазени успешно.',
	'PERSONAL_ALBUM_INDEX'			=> 'Покажи личните албуми като албуми в началото',
	'PERSONAL_ALBUM_INDEX_EXP'		=> 'Ако е избрано "Не", ще има връзка точно под него.',
	'PEGA_CREATED'					=> 'Създадена лична галерия за %s.',
	'PEGA_ALREADY_EXISTS'			=> '%s вече има лична галерия.',
	'PGALLERIES_PER_PAGE'			=> 'Брой лични галерии на страница',
	'ITEMS_PER_PAGE'				=> 'Обекта на страница',
	'ITEMS_PER_PAGE_EXP'			=> 'Колко изображения/албума да показва на страница',
	'RANDOM_ON_INDEX'				=> 'Показвай случайни картинки',
	'RANDOM_ON_INDEX_EXP'			=> 'Дали да показва случайните картинки на началната страница.',
	'RANDOM_ON_INDEX_COUNT'			=> 'Брой случайни картинки',
	'RECENT_ON_INDEX'				=> 'Показвай последните картинки',
	'RECENT_ON_INDEX_EXP'			=> 'Дали да показва последните качени картиники на началната страница.',
	'RECENT_ON_INDEX_COUNT'			=> 'Брой последни изображения',
	'PHPBB_INTEGRATION'				=> 'Интеграция в phpBB',
	'PNG_ALLOWED'					=> 'Разрешено качването на PNG файлове',
	'PURGED_CACHE'					=> 'Кешът е прочистен',

	'RATE_SCALE'					=> 'Скала за оценяване',
	'RATE_SYSTEM'					=> 'Разреши системата за оценка',
	'REDIRECT_ACL'					=> 'Сега можете да %sзададете нива на достъп%s за този албум.',
	'REMOVE_IMAGES_FOR_CAT'			=> 'Трябва да премахнете снимките от албума, преди да можете да промените типа му на категория.',
	'RESET_RATING'					=> 'Премахни оценките за албум',
	'RESET_RATING_COMPLETED'		=> 'Оценките успешно изтрити.',
	'RESET_RATING_CONFIRM'			=> 'Наистина ли искате да изтриете всички оценки на изображенията в албум “%s“?',
	'RESET_RATING_EXPLAIN'			=> 'Изтрий всички оценки на изображения в специфичен албум.',
	'RESIZE_IMAGES'					=> 'Преоразмери големите изображения',
	'RESYNC_IMAGECOUNTS'			=> 'Ресинхронизиран брой на изображенията',
	'RESYNC_IMAGECOUNTS_CONFIRM'	=> 'Сигурен ли сте че искате да ресинхронизирате броя изображения?',
	'RESYNC_IMAGECOUNTS_EXPLAIN'	=> 'Само съществуващи изображения ще бъдат взети предвид.',
	'RESYNC_LAST_IMAGES'			=> 'Опресни "Последно изображение"',
	'RESYNC_PERSONALS'				=> 'Ресинхронизирай личните албуми',
	'RESYNC_PERSONALS_CONFIRM'		=> 'Сигурен ли сте че искате да ресинхронизирате броя изображения?',
	'RESYNCED_IMAGECOUNTS'			=> 'Ресинхронизиран брой на изображенията',
	'RESYNCED_LAST_IMAGES'			=> 'Опреснено "Последно изображение"',
	'RESYNCED_PERSONALS'			=> 'Ресинхронизирани лични албуми',
	'ROTATE_IMAGES'					=> 'Позволи въртенето на изображения',
	'ROTATE_IMAGES_EXP'				=> 'Тази функция не може да се използва в момента, защото необходимата “imagerotate“ функция не е включена във вашата GD версия.',
	'ROWS_PER_PAGE'					=> 'Брой редо на thumbnail страницата',

	'RRC_DISPLAY_ALBUMNAME'			=> 'Име на албума',
	'RRC_DISPLAY_COMMENTS'			=> 'Коментари',
	'RRC_DISPLAY_IMAGENAME'			=> 'Име на изобранието',
	'RRC_DISPLAY_IMAGETIME'			=> 'Време на качване',
	'RRC_DISPLAY_IMAGEVIEWS'		=> 'Брой прегледи на изображението',
	'RRC_DISPLAY_IP'				=> 'Потребителски IP',
	'RRC_DISPLAY_NONE'				=> 'Нищо',
	'RRC_DISPLAY_OPTIONS'			=> 'Кои полета трябва да се изобразява под thumbnail-ите',
	'RRC_DISPLAY_USERNAME'			=> 'Потребителско име',
	'RRC_DISPLAY_RATINGS'			=> 'Оценки',
	'RRC_GINDEX'					=> 'Скорошни- &amp; Случайни Изображение &amp; Коментари - възможности',
	'RRC_GINDEX_COLUMNS'			=> 'Колони',
	'RRC_GINDEX_COMMENTS'			=> 'Свий коментарите',
	'RRC_GINDEX_CONTESTS'			=> 'Брой конкурси',
	'RRC_GINDEX_CROWS'				=> 'Брой коментари',
	'RRC_GINDEX_MODE'				=> 'Състояние',
	'RRC_GINDEX_MODE_EXP'			=> '“Случайни изображения“ може да отнеме малко повече време да зареди при големи бази!',
	'RRC_GINDEX_PGALLERIES'			=> 'Виж изображенията от личните албуми',
	'RRC_GINDEX_ROWS'				=> 'Редове',
	'RRC_MODE_COMMENTS'				=> 'Коментари',
	'RRC_MODE_NONE'					=> 'Нищо',
	'RRC_MODE_RANDOM'				=> 'Случайни изобрания',
	'RRC_MODE_RECENT'				=> 'Последни изображения',
	'RRC_PROFILE_COLUMNS'			=> 'Колони',
	'RRC_PROFILE_MODE'				=> 'Състояние на “Скорошни и Случайни изображения“ - Показани в профила',
	'RRC_PROFILE_MODE_EXP'			=> '“Случайни изображения“ може да отнеме малко повече време да зареди при големи бази!',
	'RRC_PROFILE_ROWS'				=> 'Редове',
	'RRC_PROFILE_ITEMS'				=> 'Елементи в профила',

	'RSZ_HEIGHT'					=> 'Максимална височина при гледане на изображение',
	'RSZ_WIDTH'						=> 'Максимална ширина при гледане на изображение',

	'SEARCH_SETTINGS'				=> 'Настройки на търсене',
	'SELECT_ALBUM'					=> 'Избери албум',
	'SELECT_ALBUMS'					=> 'Избери албуми',
	'SELECT_GROUPS'					=> 'Избери групи',
	'SELECT_PERM_SYS'				=> 'Избери система за нива на достъпа',
	'SELECT_PERMISSIONS'			=> 'Избери нива на достъпа',
	'SELECTED_ALBUM_NOT_EXIST'		=> 'Избраните албуми не съществуват.',
	'SELECTED_ALBUMS'				=> 'Избрани албуми',
	'SELECTED_GROUPS'				=> 'Избрани групи',
	'SELECTED_PERM_SYS'				=> 'Избрана система за нива на достъп',
	'SET_PERMISSIONS'				=> '<br />Настрой <a href="%s">нивата на достъп</a> сега.',
	'SORRY_NO_STATISTIC'			=> 'Съжалявам, тази статична стойност все още не е достъпна.',
	'SYNC_IN_PROGRESS'				=> 'Синхронизация на албум',
	'SYNC_IN_PROGRESS_EXPLAIN'		=> 'В момента се ресинхронизират изобрания в интервала %1$d/%2$d.',

	'THUMBNAIL_CACHE'				=> 'Thumbnail cache',
	'THUMBNAIL_HEIGHT'				=> 'Thumbnail ширина',
	'THUMBNAIL_QUALITY'				=> 'Качество на thumbnail',
	'THUMBNAIL_QUALITY_EXP'			=> 'Стойността трябва да е между 1 и 100.',
	'THUMBNAIL_SETTINGS'			=> 'Thumbnail настройки',
	'THUMBNAIL_WIDTH'				=> 'Thumbnail ширина',

	'UC_IMAGE_NAME'					=> 'Име на изображението',
	'UC_IMAGE_ICON'					=> 'Икона на последното изображение',
	'UC_IMAGEPAGE'					=> 'Изображение на страницата му.',
	'UC_IMAGEPAGE_EXP'				=> 'Това е страниацта с детайлите за изображението и коментарите.',
	'UC_LINK_CONFIG'				=> 'Настройки на връзки',
	'UC_LINK_HIGHSLIDE'				=> 'Отвори Highslide-Plugin',
	'UC_LINK_IMAGE'					=> 'Отвори изображението',
	'UC_LINK_IMAGE_PAGE'			=> 'Отвори страницата на изображението (с детайлите и коментарите)',
	'UC_LINK_LYTEBOX'				=> 'Отвори Lytebox-Plugin',
	'UC_LINK_NEXT'					=> 'Следващо изображение',
	'UC_LINK_NEWTAB'				=> 'Отвори в Нов таб',
	'UC_LINK_NONE'					=> 'Без действие',
	'UC_LINK_SHADOWBOX'				=> 'Отвори Shadowbox-Plugin',
	'UC_THUMBNAIL'					=> 'Thumbnail',
	'UC_THUMBNAIL_EXP'				=> 'Също се използва за BBCode.',
	'UNLOCKED'						=> 'Отключен',
	'UPDATE_BBCODE'					=> 'Опресни BBCode',
	'UPLOAD_IMAGES'					=> 'Качване на множество изображения',

	'VIEW_IMAGE_URL'				=> 'Виж Image-URL на страницата на изображението',

	'WATERMARK'						=> 'Воден знак',
	'WATERMARK_HEIGHT'				=> 'Минимална височина за воден знак',
	'WATERMARK_HEIGHT_EXP'			=> 'За да избегнете покриването на малки изображения от водния знак, можете да въведете минимална височина за изображението. Ако изображението е по-малко, водния знак няма да се вижда.',
	'WATERMARK_IMAGES'				=> 'Сложи виден знак на изображения',
	'WATERMARK_OPTIONS'				=> 'Настройки на водния знак',
	'WATERMARK_POSITION'			=> 'Позиция на водния знак',
	'WATERMARK_POSITION_BOTTOM'		=> 'долу',
	'WATERMARK_POSITION_CENTER'		=> 'център',
	'WATERMARK_POSITION_LEFT'		=> 'ляво',
	'WATERMARK_POSITION_MIDDLE'		=> 'среда',
	'WATERMARK_POSITION_RIGHT'		=> 'дясно',
	'WATERMARK_POSITION_TOP'		=> 'горе',
	'WATERMARK_SOURCE'		 		=> 'Фаил с водния знак',
	'WATERMARK_SOURCE_EXP'		 	=> 'Относително към вашата phpBB root пътека',
	'WATERMARK_WIDTH'				=> 'Минимална ширина за воден знак',
	'WATERMARK_WIDTH_EXP'			=> 'За да избегнете покриването на малки изображения от водния знак, можете да въведете минимална ширина за изображението. Ако изображението е по-малко, водния знак няма да се вижда.',

	'ZIP_ALLOWED'					=> 'Разрешено казчването на ZIP архиви',

	'NO_WRITE_ACCESS'				=> 'Няма права за запис',
	'WRITE_ACCESS'					=> 'OK',
	'DIR_CREATED'					=> 'Директорията е създадена',
));

/**
* A copy of Handyman` s MOD version check, to view it on the gallery overview
*/
$lang = array_merge($lang, array(
	'ANNOUNCEMENT_TOPIC'	=> 'Release Announcement',
	'CURRENT_VERSION'		=> 'Current Version',
	'DOWNLOAD_LATEST'		=> 'Download Latest Version',
	'LATEST_VERSION'		=> 'Latest Version',
	'NO_INFO'					=> 'Version server could not be contacted',
	'NOT_UP_TO_DATE'			=> '%s is not up to date',
	'RELEASE_ANNOUNCEMENT'	=> 'Annoucement Topic',
	'UP_TO_DATE'			=> '%s is up to date',
	'VERSION_CHECK'			=> 'MOD Version Check',
));
