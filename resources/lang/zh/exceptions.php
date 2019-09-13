<?php

return [
    'daemon_connection_failed' => '嘗試連接守護程序是發生錯誤，狀態碼 HTTP/:code。此錯誤已被記錄。',
    'node' => [
        'servers_attached' => '要刪除節點，您必須先取消其與其他服務器的關聯。',
        'daemon_off_config_updated' => '<strong>已更新</strong>守護程序配置，但在嘗試自動更新守護程序配置文件時發生錯誤。您需要手動更新守護程序的配置文件（core.json）以應用更改。',
    ],
    'allocations' => [
        'server_using' => '已有服務器被分配到該地址。您必須先解除關聯才能刪除此地址。',
        'too_many_ports' => '不支持單次添加多於 1000 個端口。',
        'invalid_mapping' => '所提供的端口 :port 無效，無法繼續操作。',
        'cidr_out_of_range' => '類別域間路由僅允許介於 /25 和 /32 之間的掩碼。',
        'port_out_of_range' => '分配端口的範圍必須介於 1024 至 65535 之間。',
    ],
    'nest' => [
        'delete_has_servers' => '無法刪除附著到活躍服務器上的管理模塊。',
        'egg' => [
            'delete_has_servers' => '無法刪除附著到活躍服務器上的管理模塊。',
            'invalid_copy_id' => '用於覆制腳本的管理模板不存在，或腳本本身不存在。',
            'must_be_child' => '“覆制設置自”選項指定的目標必須為所選管理模塊的子選項。',
            'has_children' => '此管理模版為一個或多個管理模板的母模板。請先刪除其他管理模板再刪除此模板。',
        ],
        'variables' => [
            'env_not_unique' => '此管理面板的環境變量 :name 必須唯一。',
            'reserved_name' => '環境變量 :name 被保護的且無法被分配至其他變量。',
            'bad_validation_rule' => '驗證規則 “:rule” 不是此應用程序的有效規則。',
        ],
        'importer' => [
            'json_error' => '導入 JSON 文件時發生錯誤：:error.',
            'file_error' => '所提供的 JSON 文件無效。',
            'invalid_json_provided' => '所提供的 JSON 文件格式無法被解析。',
        ],
    ],
    'packs' => [
        'delete_has_servers' => '無法刪除依附到活躍服務器的整合包。',
        'update_has_servers' => '無法在有服務器依附至整合包時修改關聯選項編號。',
        'invalid_upload' => '所提供的文件格式無效。',
        'invalid_mime' => '提供的文件不符合所需文件類型 :type',
        'unreadable' => '服務器無法打開所提供的歸檔文件。',
        'zip_extraction' => '提取歸檔文件至服務器時發生錯誤。',
        'invalid_archive_exception' => '整合包歸檔文件的根目錄似乎缺少 archive.tar.gz 或 import.json。',
    ],
    'subusers' => [
        'editing_self' => '您無法作為子用戶編輯您自己的子用戶賬號。',
        'user_is_owner' => '您無法作為子用戶來添加為此服務器的服主。',
        'subuser_exists' => '使用該電子郵件地址的用戶已被分配為此服務器的子用戶。',
    ],
    'databases' => [
        'delete_has_databases' => '無法刪除關聯至活躍數據庫的數據庫服務器。',
    ],
    'tasks' => [
        'chain_interval_too_long' => '連環任務的最大時間間隔為 15 分鐘。',
    ],
    'locations' => [
        'has_nodes' => '無法刪除被依附活動節點的區域。',
    ],
    'users' => [
        'node_revocation_failed' => '註銷<a href=":link">節點 #:node</a> 的密鑰失敗：:error',
    ],
    'deployment' => [
        'no_viable_nodes' => '無法找到滿足自動化部署需求的節點。',
        'no_viable_allocations' => '無法找到滿足自動化部署需求的分配地址。',
    ],
    'api' => [
        'resource_not_found' => '服務器上不存在所請求的資源。',
    ],
];
