<?php
/**
 * Pterodactyl - Panel
 * Copyright (c) 2015 - 2017 Dane Everitt <dane@daneeveritt.com>.
 *
 * This software is licensed under the terms of the MIT license.
 * https://opensource.org/licenses/MIT
 */

return [
    'exceptions' => [
        'no_new_default_allocation' => '您正在嘗試刪除此服務器的默認分配地址，但此服務器可用的備選分配地址。',
        'marked_as_failed' => '此服務器被標記為安裝失敗。當前狀態無法在面板中被改變。',
        'bad_variable' => '變量 :name 有驗證錯誤。',
        'daemon_exception' => '連接守護程序時返回 HTTP/:code 反饋碼。此錯誤已被記錄。',
        'default_allocation_not_found' => '未在此服務器上找到請求的默認分配地址。',
    ],
    'alerts' => [
        'startup_changed' => '已更新此服務器的啟動配置。若此服務器的啟動模板被更改，其將被重新安裝。',
        'server_deleted' => '已成功從系統中刪除服務器。',
        'server_created' => '已成功在面板中創建服務器。請稍等面板完全安裝服務器完畢。',
        'build_updated' => '已更新此服務器的構建參數。部分更改可能需要重啟才能生效。啟動參數已更改。',
        'suspension_toggled' => '服務器停用狀態已更改為 :status.',
        'rebuild_on_boot' => '此服務器已被標記為需要重新構建 Docker 容器。此操作會在下次啟動服務器後生效。',
        'install_toggled' => '此服務器的安裝狀態已被更改。',
        'server_reinstalled' => '此服務器已置於即將開始的重裝隊列中。',
        'details_updated' => '已成功更新服務器信息。',
        'docker_image_updated' => '已成功更改此服務器使用的默認 Docker 鏡像。此操作需要重啟以應用更改。',
        'node_required' => '您需要配置至少一個節點以添加服務器至面板。',
    ],
];
