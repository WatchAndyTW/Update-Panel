<?php

return [
    'key' => [
        'warning' => '似乎您已配置應用程序加密密鑰。繼續此操作將覆蓋密鑰並損壞已加密數據。請了解您所執行的操作後再決定是否繼續！！！',
        'confirm' => '我已了解執行此操作的後果並承受丟失加密數據的風險，請繼續。',
        'final_confirm' => '確您是否決定繼續？更改應用程序加密密鑰將導致數據丟失！！！',
    ],
    'location' => [
        'no_location_found' => '無法找到與提供的代碼匹配的記錄。',
        'ask_short' => '地區代碼',
        'ask_long' => '地區描述',
        'created' => '已成功創建地區（:name），編號為 :id。',
        'deleted' => '已成功刪除請求的地區。',
    ],
    'user' => [
        'search_users' => '請輸入用戶名、UUID 或電子郵件地址',
        'select_search_user' => '待刪除的用戶編號（請鍵入 \'0\' 來重新搜索）',
        'deleted' => '已成功從面板刪除用戶。',
        'confirm_delete' => '您是否想從面板中刪除此用戶？',
        'no_users_found' => '未找到匹配搜索項的用戶。',
        'multiple_found' => '已找到多個匹配搜索項的用戶，由於 --no-interaction 參數而無法刪除。',
        'ask_admin' => '此用戶是否為管理員？',
        'ask_email' => '電子郵件地址',
        'ask_username' => '用戶名',
        'ask_name_first' => '姓氏',
        'ask_name_last' => '名稱',
        'ask_password' => '密碼',
        'ask_password_tip' => '若您想創建用戶並稍後發送生成的隨機密碼給用戶，請重新運行此命令（CTRL+C）並添加 `--no-password` 參數。',
        'ask_password_help' => '密碼長度必須至少為八位且包含至少一位大寫字母和數字。',
        '2fa_help_text' => [
            '此命令將關閉帳戶的兩步驗證（若啟用）。此命令應作為帳戶被鎖定時的恢覆措施。',
            '若您不想這麽做，請使用 CTRL+C 退出進程。',
        ],
        '2fa_disabled' => '已成功為 :email 禁用兩步驗證。',
    ],
    'schedule' => [
        'output_line' => '首次任務將於 `:schedule`（:hash）後執行。',
    ],
    'maintenance' => [
        'deleting_service_backup' => '正在刪除服務備份文件 :file。',
    ],
    'server' => [
        'rebuild_failed' => '節點 ":node" 上的重構操作 ":name"（#:id） 發生了 :message 錯誤。',
        'power' => [
            'confirm' => '您將在 :count 台伺服器上執行 :action 操作。是否繼續？',
            'action_failed' => '節點 ":node" 上的電源命令 ":name"（#:id） 發生了 :message 錯誤。',
        ],
    ],
    'environment' => [
        'mail' => [
            'ask_smtp_host' => 'SMTP 主機（如 smtp.gmail.com）',
            'ask_smtp_port' => 'SMTP 端口',
            'ask_smtp_username' => 'SMTP 用戶名',
            'ask_smtp_password' => 'SMTP 密碼',
            'ask_mailgun_domain' => 'Mailgun 域名',
            'ask_mailgun_secret' => 'Mailgun 密鑰',
            'ask_mandrill_secret' => 'Mandrill 密鑰',
            'ask_postmark_username' => 'Postmark API 密鑰',
            'ask_driver' => '應使用哪款引擎發送郵件？',
            'ask_mail_from' => '電子郵件地址的郵件發信人為',
            'ask_mail_name' => '電子郵件的顯示發信人為',
            'ask_encryption' => '加密方法',
        ],
        'database' => [
            'host_warning' => '由於經常發生套接字連接錯誤，我們極度不推薦您使用 “localhost” 作為數據庫主機地址。若您仍想使用本地連接則應使用 “127.0.0.1”。',
            'host' => '數據庫主機',
            'port' => '數據庫端口',
            'database' => '數據庫名',
            'username_warning' => '不僅翼龍面板不允許使用 "root" 帳戶連接 MySQL 數據庫，且這將產生嚴重安全漏洞。您應為此軟件單獨創建 MySQL 帳戶。',
            'username' => '數據庫用戶名',
            'password_defined' => '您似乎已創建了帶有密碼的 MySQL 連接，您是否想更改？',
            'password' => '數據庫密碼',
            'connection_error' => '無法使用提供的憑證連接 MySQL 伺服器。 返回的錯誤為 ":error"。',
            'creds_not_saved' => '您的數據庫訪問憑證尚未保存。您需要在繼續前提供有效的連接信息。',
            'try_again' => '是否返回重試？',
        ],
        'app' => [
            'settings' => '是否啟用可視化設置編輯器？',
            'author' => '管理模板作者電子郵件地址',
            'author_help' => '提供從此面板導出管理模板人員的電子郵件地址。此電子郵件地址必須合法。',
            'app_url_help' => '根據您是否啟用 SSL 來決定此應用程序的 URL 應為 https:// 或 http://。若您選擇錯誤，您的電子郵件及其他內容將指向到錯誤地址。',
            'app_url' => '應用程序 URL',
            'timezone_help' => '時區應匹配 PHP 所支持的時區。 如果您不確定，請參閱 http://php.net/manual/en/timezones.php。',
            'timezone' => '應用程序時區',
            'cache_driver' => '緩存驅動程序',
            'session_driver' => '會話驅動程序',
            'queue_driver' => '隊列驅動程序',
            'using_redis' => '若您選擇使用 Redis，請在下方提供有效的連接信息。在您未更改設置的大多數情況下，您均可使用默認值。',
            'redis_host' => 'Redis 主機',
            'redis_password' => 'Redis 密碼',
            'redis_pass_help' => '默認情況下，Redis 伺服器實例無需密碼且在本地運行禁止外界訪問。這種情況下，您只需回車即可。',
            'redis_port' => 'Redis 端口',
            'redis_pass_defined' => '您似乎已為 Redis 配置了密碼，您是否想更改？',
        ],
    ],
];
