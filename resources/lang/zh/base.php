<?php

return [
    'validation_error' => '請求中有一個或多個字段出錯',
    'errors' => [
        'return' => '返回上頁',
        'home' => '返回主頁',
        '403' => [
            'header' => '禁止訪問',
            'desc' => '您沒有訪問此伺服器上的資源的權限。',
        ],
        '404' => [
            'header' => '文件未找到',
            'desc' => '我們無法在此伺服器上找到所請求的資源。',
        ],
        'installing' => [
            'header' => '伺服器安裝中',
            'desc' => '請求的伺服器正在完成安裝進程。請幾分鐘後再來查看，您將在此過程完成後收到電子郵件提醒。',
        ],
        'suspended' => [
            'header' => '伺服器已停用',
            'desc' => '此伺服器已停用且無法訪問。',
        ],
        'maintenance' => [
            'header' => '節點維護中',
            'title' => '暫時不可用',
            'desc' => '此節點正在維護，當前無法訪問。',
        ],
    ],
    'index' => [
        'header' => '您的伺服器',
        'header_sub' => '您有權限訪問的伺服器。',
        'list' => '伺服器列表',
    ],
    'api' => [
        'index' => [
            'list' => '您的密鑰',
            'header' => '帳戶 API',
            'header_sub' => '管理允許您對面板執行操作的 API 密鑰。',
            'create_new' => '新建 API 密鑰',
            'keypair_created' => '已成功生成 API 密鑰並列於下方。',
        ],
        'new' => [
            'header' => '新建 API 密鑰',
            'header_sub' => '新建帳戶訪問密鑰。',
            'form_title' => '詳細信息',
            'descriptive_memo' => [
                'title' => '描述',
                'description' => '請輸入便於分辨此密鑰的描述信息。',
            ],
            'allowed_ips' => [
                'title' => '許可 IP',
                'description' => '輸入允許使用此密鑰的 IP 地址列表。此功能支持無類別域間路由。留空將允許所有 IP 使用。',
            ],
        ],
    ],
    'account' => [
        'details_updated' => '已成功更新您的帳戶信息。',
        'invalid_password' => '您提供的密碼無效。',
        'header' => '您的帳戶',
        'header_sub' => '管理您的帳戶信息.',
        'update_pass' => '修改密碼',
        'update_email' => '修改電子郵件地址',
        'current_password' => '當前密碼',
        'new_password' => '新密碼',
        'new_password_again' => '重覆密碼',
        'new_email' => '新電子郵件地址',
        'first_name' => '姓氏',
        'last_name' => '名稱',
        'update_identity' => '更新個人信息',
        'username_help' => '您的用戶名必須未被他人使用，且僅包含下列字符：:requirements。',
        'language' => '語言',
    ],
    'security' => [
        'session_mgmt_disabled' => '您的托管商未啟用此界面來管理帳戶會話。',
        'header' => '帳戶安全',
        'header_sub' => '管理活躍中的會話與兩步驗證。',
        'sessions' => '活躍會話',
        '2fa_header' => '兩步驗證',
        '2fa_token_help' => '請填入由應用程序所生成的兩步驗證密鑰（Google 身份驗證器、Authy 等）。',
        'disable_2fa' => '關閉兩步驗證',
        '2fa_enabled' => '已為此帳戶啟用兩步驗證，您將需要驗證以登錄至此帳戶。若您想關閉兩步驗證，您只需在下方輸入密鑰並提交即可。',
        '2fa_disabled' => '已關閉兩步驗證！您應啟用此功能來作為此帳戶的附加防護手段。',
        'enable_2fa' => '啟用兩步驗證',
        '2fa_qr' => '在您的設備上配置兩步驗證',
        '2fa_checkpoint_help' => '在您的手機上使用兩步驗證應用程序掃描左側的二維碼或直接輸入下方的代碼。錄入後，請在下方輸入應用程序生成的密碼。',
        '2fa_disable_error' => '提供的兩步驗證密鑰無效。未關閉此帳戶的兩步驗證。兩步驗證密碼錯誤. 關閉兩步驗證失敗.',
    ],
];
