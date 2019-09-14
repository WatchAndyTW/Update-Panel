<?php

return [
    'key' => [
        'warning' => 'Похоже, вы уже настроили ключ шифрования приложения. Продолжая этот процесс с перезаписать этот ключ и вызвать повреждение данных для любых существующих зашифрованных данных. НЕ ПРОДОЛЖАЙТЕ, ЕСЛИ ВЫ НЕ ЗНАЕТЕ, ЧТО ВЫ ДЕЛАЕТЕ.',
        'confirm' => 'Я понимаю последствия выполнения этой команды и принимаю на себя всю ответственность за потерю зашифрованных данных.',
        'final_confirm' => 'Вы уверены, что хотите продолжить? Изменение ключа шифрования приложения приведет к потере данных.',
    ],
    'location' => [
        'no_location_found' => 'Не удалось найти запись, соответствующую предоставленному короткому коду.',
        'ask_short' => 'Короткий код местоположения',
        'ask_long' => 'Описание местоположения',
        'created' => 'Успешно создано новое местоположение (:name) с идентификатором :id.',
        'deleted' => 'Успешно удалено запрошенное местоположение.',
    ],
    'user' => [
        'search_users' => 'Введите имя пользователя, UUID или адрес электронной почты',
        'select_search_user' => 'ID пользователя для удаления (Enter \'0\' to re-search)',
        'deleted' => 'Пользователь успешно удален из Панели.',
        'confirm_delete' => 'Вы уверены, что хотите удалить этого пользователя с панели?',
        'no_users_found' => 'По данному запросу не найдено ни одного пользователя.',
        'multiple_found' => 'Для предоставленного пользователя было найдено несколько учетных записей, не удалось удалить пользователя из-за --no-interaction flag.',
        'ask_admin' => 'Является ли этот пользователь администратором?',
        'ask_email' => 'Адрес электронной почты',
        'ask_username' => 'Ник пользователя',
        'ask_name_first' => 'Имя',
        'ask_name_last' => 'Фамилия',
        'ask_password' => 'Пароль',
        'ask_password_tip' => 'Если вы хотите создать учетную запись со случайным паролем, отправленным пользователю по электронной почте, повторите команду (CTRL + C) и передайте `--no-password` flag.',
        'ask_password_help' => 'Пароли должны быть длиной не менее 8 символов и содержать как минимум одну заглавную букву и цифру.',
        '2fa_help_text' => [
            'Эта команда отключит двухфакторную аутентификацию для учетной записи пользователя, если она включена. Это следует использовать только в качестве команды восстановления учетной записи, если пользователь заблокирован в своей учетной записи.',
            'Если это не то, что вы хотели сделать, нажмите CTRL + C, чтобы выйти из этого процесса.',
        ],
        '2fa_disabled' => 'Двухфакторная аутентификация была отключена для :email.',
    ],
    'schedule' => [
        'output_line' => 'Диспетчерская работа для первой задачи в `:schedule` (:hash).',
    ],
    'maintenance' => [
        'deleting_service_backup' => 'Удаление файла резервной копии службы :file.',
    ],
    'server' => [
        'rebuild_failed' => 'Запрос на перестроение для ":name" (#:id) на узле ":node" завершился ошибкой: :message',
        'power' => [
            'confirm' => 'Вы собираетесь выполнить :action против :count серверов. Вы хотите продолжить?',
            'action_failed' => 'Запрос на действие питания для ":name" (#:id) на узле ":node" завершился ошибкой: :message',
        ],
    ],
    'environment' => [
        'mail' => [
            'ask_smtp_host' => 'SMTP Хост (e.g. smtp.gmail.com)',
            'ask_smtp_port' => 'SMTP Порт',
            'ask_smtp_username' => 'SMTP Пользователь',
            'ask_smtp_password' => 'SMTP Password',
            'ask_mailgun_domain' => 'Почтовый Домен',
            'ask_mailgun_secret' => 'Mailgun Secret',
            'ask_mandrill_secret' => 'Mandrill Secret',
            'ask_postmark_username' => 'Postmark API Key',
            'ask_driver' => 'Какой драйвер следует использовать для отправки писем?',
            'ask_mail_from' => 'Адреса электронной почты должны исходить от',
            'ask_mail_name' => 'Имя, с которого должны начинаться электронные письма',
            'ask_encryption' => 'Метод шифрования для использования',
        ],
        'database' => [
            'host_warning' => 'Настоятельно рекомендуется не использовать "localhost" в качестве хоста базы данных, поскольку мы часто сталкиваемся с проблемами подключения к сокету. Если вы хотите использовать локальное соединение, вы должны использовать "127.0.0.1".',
            'host' => 'Хост базы данных',
            'port' => 'Порт базы данных',
            'database' => 'Название базы данных',
            'username_warning' => 'Использование учетной записи "root" для подключений MySQL не только не одобряется, но и не допускается этим приложением. Вам нужно создать пользователя MySQL для этого программного обеспечения.',
            'username' => 'Имя пользователя базы данных',
            'password_defined' => 'Похоже, вы уже определили пароль для подключения к MySQL, хотите изменить его?',
            'password' => 'Пароль базы данных',
            'connection_error' => 'Невозможно подключиться к серверу MySQL с использованием предоставленных учетных данных. Возвращенная ошибка ":error".',
            'creds_not_saved' => 'Ваши учетные данные НЕ были сохранены. Вам нужно будет предоставить действительную информацию о соединении, прежде чем продолжить.',
            'try_again' => 'Вернуться и попробуйте снова?',
        ],
        'app' => [
            'settings' => 'Включить редактор настроек на основе интерфейса?',
            'author' => 'E-mail автора яйца',
            'author_help' => 'Укажите адрес электронной почты, с которого должны быть отправлены яйца, экспортируемые этой панелью. Это должен быть действительный адрес электронной почты.',
            'app_url_help' => 'URL приложения ДОЛЖЕН начинаться с https:// или http:// в зависимости от того, используете ли вы SSL или нет. Если вы не включите схему, ваши электронные письма и другой контент будут ссылаться на неправильное местоположение.',
            'app_url' => 'URL приложения',
            'timezone_help' => 'Часовой пояс должен соответствовать одному из поддерживаемых часовых поясов PHP. Если вы не уверены, пожалуйста перейдите по ссылке http://php.net/manual/en/timezones.php.',
            'timezone' => 'Часовой пояс приложения',
            'cache_driver' => 'Драйвер кеша',
            'session_driver' => 'Драйвер сеанса',
            'queue_driver' => 'Драйвер очереди ',
            'using_redis' => 'Вы выбрали драйвер Redis для одного или нескольких параметров. Пожалуйста, предоставьте действительную информацию о подключении ниже. В большинстве случаев вы можете использовать предоставленные значения по умолчанию, если только вы не изменили настройки.',
            'redis_host' => 'Ност Redis',
            'redis_password' => 'Пароль Redis',
            'redis_pass_help' => 'По умолчанию экземпляр сервера Redis не имеет пароля, поскольку он работает локально и недоступен для внешнего мира. Если это так, просто нажмите Enter, не вводя значение.',
            'redis_port' => 'Порт Redis',
            'redis_pass_defined' => 'Кажется, пароль для Redis уже определен, вы хотите его изменить?',
        ],
    ],
];
