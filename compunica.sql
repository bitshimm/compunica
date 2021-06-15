-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 15 2021 г., 19:14
-- Версия сервера: 10.3.22-MariaDB
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `compunica`
--

-- --------------------------------------------------------

--
-- Структура таблицы `applications`
--

CREATE TABLE `applications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` char(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `applications`
--

INSERT INTO `applications` (`id`, `name`, `email`, `phone`, `service_name`, `created_at`, `updated_at`) VALUES
(2, 'Богда', 'bogdan89228543868@gmail.com', '89228552840', '1', '2021-05-09 11:31:06', '2021-05-26 11:34:32'),
(3, 'Богдан', 'bogdan89228543868@gmail.com', '89228552840', '8', '2021-05-09 11:31:33', '2021-05-09 11:31:33'),
(4, 'Богдан', 'bogdan89228543868@gmail.com', '89228552840', 'Видеосвязь, конференцсвязь, АТС', '2021-05-09 11:37:05', '2021-05-09 11:37:05'),
(5, 'Богдан', 'bogdanshiman@mail.ru', '89879878787', 'Системы контроля и управления доступом', '2021-05-12 10:32:41', '2021-05-12 10:32:41'),
(6, 'Богдан', 'bogdan89228543868@gmail.com', '89228552840', 'Автоматизация. Диспетчеризация. ЭХЗ', '2021-05-13 10:24:51', '2021-05-13 10:24:51'),
(8, 'Богдан', 'bogdan@gmail.com', '89225532626', 'ТЫРЫ', '2021-05-26 11:34:06', '2021-05-26 11:34:06');

-- --------------------------------------------------------

--
-- Структура таблицы `employees`
--

CREATE TABLE `employees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `patronymic` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` char(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `employees`
--

INSERT INTO `employees` (`id`, `name`, `surname`, `patronymic`, `position`, `phone`, `created_at`, `updated_at`) VALUES
(2, 'Богдан', 'Шиман', 'Васильевич', 'Программмист', '89969257036', '2021-05-28 13:40:14', '2021-05-28 13:40:14');

-- --------------------------------------------------------

--
-- Структура таблицы `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` char(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(18, '2021_03_30_162336_create_services_table', 1),
(27, '2021_03_30_065442_create_services_table', 2),
(28, '2021_03_30_182445_create_uslugis_table', 3),
(34, '2014_10_12_000000_create_users_table', 4),
(35, '2014_10_12_100000_create_password_resets_table', 4),
(36, '2021_03_19_072455_create_applications_table', 4),
(40, '2021_04_01_070255_create_messages_table', 4),
(41, '2021_03_31_150247_create_services_table', 5),
(42, '2021_03_28_194727_create_employees_table', 6),
(43, '2021_03_31_181522_create_orders_table', 7);

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `application` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `patronymic` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `employee` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id`, `application`, `surname`, `patronymic`, `employee`, `created_at`, `updated_at`) VALUES
(2, 'Богдан 89228552840 bogdan89228543868@gmail.com', 'аывпывп', 'пваыпавып', 'выа', '2021-05-28 13:33:04', '2021-05-28 13:33:04');

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `path_to_file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `services`
--

INSERT INTO `services` (`id`, `name`, `description`, `path_to_file`, `created_at`, `updated_at`) VALUES
(9, 'Электроснабжение, гарантийное электропитание', '<p>Наша компания работает со следующими объектами:</p>\r\n        <ul>\r\n            <li>Жилые здания и помещения (квартиры, коттеджи, загородные дома, пентхаусы);</li>\r\n            <li>Административные здания и помещения (бизнес-центры, офисы, помещения банков и т.д.);</li>\r\n            <li>Торговые комплексы и помещения (гипер- и супермаркеты, торговые павильоны, магазины);</li>\r\n            <li>Развлекательные комплексы (кинотеатры, клубы, игровые залы и спортзалы);</li>\r\n            <li>Промышленные предприятия (заводы, фабрики, складские помещения и т.д.).</li>\r\n        </ul>\r\n        <p>Наши решения гарантировано обеспечит электроэнергией:</p>\r\n        <ul>\r\n            <li>оборудование локальной вычислительной сети (ПЭВМ, активное сетевое оборудование);</li>\r\n            <li>системы связи (АТС), комплексы спецсвязи;</li>\r\n            <li>технические средства спутниковой сети передачи данных;</li>\r\n            <li>система аварийного освещения;</li>\r\n            <li>системы кондиционирования и вентиляции технологических помещений;</li>\r\n            <li>системы пожарной и охранной сигнализации;</li>\r\n            <li>медицинское оборудование.</li>\r\n        </ul>\r\n<ol>\r\n            <li>Подготовка задания. Формирование пояснительной записки (технических условий).</li>\r\n            <li>Разработка проекта:\r\n                <ul>\r\n                    <li>предварительный расчет;</li>\r\n                    <li>выполнение однолинейной расчетной схемы электроснабжения;</li>\r\n                    <li>получение разрешения на присоединение мощности;</li>\r\n                    <li>выбор изделий и оборудования;</li>\r\n                    <li>проверка работоспособности в номинальном режиме и в режиме КЗ;</li>\r\n                    <li>подготовка спецификации изделий и оборудования;</li>\r\n                    <li>разработка электрической схемы осветительной и розеточной сети;</li>\r\n                    <li>подготовка монтажной схемы.</li>\r\n                </ul>\r\n            </li>\r\n            <li>Согласование проекта в местном надзоре, в кабельных сетях (если нужно), в Энергосбыте.</li>\r\n            <li>Выполнение электромонтажных работ.</li>\r\n            <li>Приемо-сдаточные работы:\r\n                <ul>\r\n                    <li>вызов представителя Госэнергонадзора для оценки правильности выполнения работ по проекту; -оформление документации и составление акта допуска к эксплуатации;</li>\r\n                    <li>вызов представителя Энергосбыта для опечатывания счетчика.</li>\r\n                </ul>\r\n            </li>\r\n        </ol>\r\n        <strong>Системы гарантированного электропитания ИБП</strong>\r\n        <p>Мы предлагаем надежные решения электрообеспечения коммерческих, производственных и государственных предприятий с помощью систем гарантированного и бесперебойного электропитания</p>', 'uploads/xDbDyS7ZA2C8YDyIvSstPQM2SC6KiiE7L1WcxqX4.jpeg', '2021-05-28 14:05:19', '2021-05-28 14:05:19'),
(10, 'Видеосвязь, конференцсвязь, АТС', '<ul>\r\n            <li>Консультации по вопросам выбора и конфигурирования мини АТС;</li>\r\n            <li>Поставка телефонных аппаратов и АТС таких ведущих производителей, как Panasonic, LG, Samsung, Siemens, Alcatel и т.д.;</li>\r\n            <li>Создание корпоративных сетей связи;</li>\r\n            <li>Выполнение монтажных работ кроссового оборудования. Прокладку слаботочных сетей, разводку витой пары любой сложности, как внутри помещений, так и по внешней территории предприятия;</li>\r\n            <li>Монтаж телефонных, компьютерных сетей, СКС;</li>\r\n            <li>Монтаж, подключение и настройка мини-АТС, УПАТС, пультов селекторной и директорской связи, решения на основе технологий IP;</li>\r\n            <li>Монтаж, подключение, настройка и программирование телефонных станций любой емкости и конфигурации;</li>\r\n            <li>Совмещение телефонных систем с другими системами офиса;</li>\r\n            <li>Перепрограммирование мини АТС;</li>\r\n        </ul>\r\n<ul>\r\n            <li>Настройку оконечного телефонного оборудования (телефонов, факсов);</li>\r\n            <li>Подключение, настройка каналов связи по протоколу PRI, VOIP (Н.323, MGCP, SIP), ISDN;</li>\r\n            <li>Организацию микросотовых сетей беспроводной связи DECT;</li>\r\n            <li>Обучение персонала заказчика навыкам работы с АТС, телефонами, факсами;</li>\r\n            <li>Диагностика, ремонт офисных АТС с выездом специалиста;</li>\r\n            <li>Устранение неисправностей в телефонной, компьютерной сети;</li>\r\n            <li>Техническое обслуживание АТС и сетей связи (гарантийное, постгарантийное сервисное обслуживание на основе договора аутсорсинга);</li>\r\n            <li>Поставка, монтаж и настройка оборудования ВКС производителей: CISCO, Polycom и др.;</li>\r\n            <li>Предоставление в аренду портов ВКС сервера, терминала ВКС для проведения многоточечных конференций в качестве HD;</li>\r\n        </ul>', 'uploads/RqSsLXu09vjQjjx5sA1DAoUTGstLhtal9bXNXTgw.jpeg', '2021-05-28 14:06:47', '2021-05-28 14:06:47'),
(11, 'Охранно-пожарная сигнализация', '<p>Наша компания предоставляет услуги по установке такого оборудования как:</p>\r\n        <ul>\r\n            <li>Охранная сигнализация;</li>\r\n            <li>Система охраны периметра;</li>\r\n            <li>Пожарная сигнализация;</li>\r\n            <li>Система оповещения о пожаре;</li>\r\n            <li>Система пожаротушения;</li>\r\n            <li>Системы трансляции звука (по сигналам оповещения ГО и ЧС).</li>\r\n        </ul>', 'uploads/gab8mcNHxK1uhR5vCoM2jsgVVVfuYtUMfvHOg2Lr.jpeg', '2021-05-28 14:07:15', '2021-05-28 14:07:15'),
(12, 'Системы контроля и управления доступом', '<p>Основная задача — управление доступом на заданную территорию (кого пускать, в какое время и на какую территорию), включая также:</p>\r\n        <ul>\r\n            <li>ограничение доступа на заданную территорию;</li>\r\n            <li>идентификацию лица, имеющего доступ на заданную территорию.</li>\r\n        </ul>\r\n        <p>Преимущества установки СКУД</p>\r\n        <ul>\r\n            <li>Отсутствие «человеческого фактора». Устройства и программа выполняют свою работу одинаково хорошо в любое время и при любых обстоятельствах.</li>\r\n            <li>Работа 24 часа в сутки – СКУД не устает, не отвлекается и не нуждается в сменщике.</li>\r\n            <li>Отсутствие необходимости содержать большой штат вахтеров – контроль деятельности всех СКУД в здании может быть сосредоточен на пульте одного оператора, который нужен для принятия решения в случае возникновения нестандартной ситуации.</li>\r\n            <li>Совмещение в одном программно-аппаратном комплексе нескольких полезных функций, таких как: ограничение доступа, учет количества прохождений, видеозапись момент входа в здание или помещение и выхода из него, а также многое другое.</li>\r\n        </ul>\r\n        <p>Мы более 18 лет создаем основу безопасности ведущих компаний России. Воспользуйтесь нашими разработками – обеспечьте себе надежную защиту от непрошеных гостей.</p>', 'uploads/10kwtIzYdyVDkKUWavUy7dF966YSZQEHmW3eIRCg.jpeg', '2021-05-28 14:08:28', '2021-05-28 14:08:28'),
(13, 'Видеонаблюдение', '<p>Видеонаблюдение (англ. Сlosed Circuit Television, CCTV — система телевидения замкнутого контура) — процесс, осуществляемый с применением видеокамер, предназначенных для визуального контроля или автоматического анализа изображений.</p>\r\n        <p>Видеокамеры для систем видеонаблюдения разработаны и протестированы для эксплуатации в условиях России. Специалисты нашей компании помогут подобрать оборудование для системы видеонаблюдения, рассчитать стоимость системы видеонаблюдения, выполнить монтаж, установку и пуско-наладку системы видеонаблюдения.</p>', 'uploads/t7dTa0TnR5dJVldWOMJC7xQaZsZWSYxVcdahmi78.jpeg', '2021-05-28 14:09:03', '2021-05-28 14:09:03'),
(14, 'Компьютеры. Серверы. СХД', '<p>Для построения IT систем Вашего предприятия мы предлагаем надежное оборудование от всемирно известных производителей:</p>\r\n        <ul>\r\n            <li>Системы хранения данных;</li>\r\n            <li>Серверы;</li>\r\n            <li>Компьютеры, Рабочие станции, Ноутбуки;</li>\r\n            <li>Ленточные системы резервного копирования данных;</li>\r\n            <li>Блейд-системы;</li>\r\n            <li>Источники бесперебойного питания от персональных до систем гарантированного питания в масштабах всего здания;</li>\r\n            <li>Сетевое оборудование;</li>\r\n            <li>Вспомогательное оборудование для монтажа и управления;</li>\r\n            <li>Печатное оборудование от МФУ до инженерных систем;</li>\r\n            <li>Проекционное оборудование;</li>\r\n            <li>Программное обеспечение;</li>\r\n            <li>ТСД терминалы и принтеры этикеток.</li>\r\n        </ul>\r\n        <p>Всё предлагаемое оборудование - от вендоров первого дивизиона - и это гарантия надежности работы Вашей компании.</p>', 'uploads/BaJEvQicTOeqnE22VwMMcUVybcpw7uoMYOLXyPUY.jpeg', '2021-05-28 14:09:48', '2021-05-28 14:09:48'),
(15, 'Автоматизация. Диспетчеризация. ЭХЗ', '<p>Основные направления автоматизации:</p>\r\n        <ul>\r\n            <li>автоматизация и диспетчеризация инженерных систем зданий АСУЗ;</li>\r\n            <li>автоматизация учета энергоресурсов АСКУЭ;</li>\r\n            <li>программирование контроллеров автоматики;</li>\r\n            <li>автоматики инженерных систем;</li>\r\n            <li>систем отопления, вентиляции, кондиционирования ОВК;</li>\r\n            <li>холодильного оборудования;</li>\r\n            <li>систем электроснабжения и освещения;</li>\r\n            <li>слаботочных систем.</li>\r\n        </ul>\r\n        <p>Мы имеем большой опыт работы с оборудованием и программным обеспечением для автоматизации зданий, как отечественной разработки и производства Овен, Сегнетикс (Segnetics), Мастер Скада (MasterScada), так и мировых ведущих брендов Wago, Schneider electric (Tac xenta), SCADA Citect, Indusoft (Indusoft web studio)</p>', 'uploads/U5sUwdlMAayq4bGDG7jR8coxuADzFoeC91PbI7xY.png', '2021-05-28 14:10:37', '2021-05-28 14:10:37'),
(16, 'Проектирование', '<p>Наша компания является одним из лидеров в Оренбургском регионе в области построения инженерных систем зданий, а именно: проектирование и монтаж компьютерных сетей, СКС, в том числе на базе ВОЛС; создание СПД, ЛВС, электросетей, систем гарантированного и бесперебойного электропитания, систем кондиционирования, установка пожарной сигнализации, IP видеонаблюдение, СКУД.</p>\r\n        <p>Наши заказчики – государственные структуры и крупнейшие компании ключевых отраслей экономики: операторы связи, финансовые организации, промышленные, топливно-энергетические, транспортные и торговые предприятия.</p>\r\n        <p>Гарантией качества реализуемых проектов является:</p>\r\n        <ul>\r\n            <li>профессиональная команда сертифицированных инженеров-проектировщиков;</li>\r\n            <li>квалифицированная штатная монтажная бригада;</li>\r\n            <li>использование в работах профессионального инструмента и качественных материалов;</li>\r\n            <li>опыт реализации сложных, масштабных проектов в компаниях с непрерывным циклом.</li>\r\n        </ul>', 'uploads/xtsaY46D9cyol0vEwipjaEBnx8yJAT1IkRp6EXRP.jpeg', '2021-05-28 14:11:08', '2021-05-28 14:11:08');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'bogdan@mail.ru', NULL, '$2y$10$FQdTRzfxCKO9RrKeSsS4B.bd/uh9x5HwMHrd6jyn2ZJwe2vqdkq1m', NULL, NULL, NULL);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `applications`
--
ALTER TABLE `applications`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `applications`
--
ALTER TABLE `applications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `employees`
--
ALTER TABLE `employees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
