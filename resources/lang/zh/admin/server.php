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
        'no_new_default_allocation' => '您正在嘗試刪除此伺服器的默認分配地址，但此伺服器可用的備選分配地址。',
        'marked_as_failed' => '此伺服器被標記為安裝失敗。當前狀態無法在面板中被改變。',
        'bad_variable' => '變量 :name 有驗證錯誤。',
        'daemon_exception' => '連接守護程序時返回 HTTP/:code 反饋碼。此錯誤已被記錄。',
        'default_allocation_not_found' => '未在此伺服器上找到請求的默認分配地址。',
    ],
    'alerts' => [
        'startup_changed' => '已更新此伺服器的啟動配置。若此伺服器的啟動模板被更改，其將被重新安裝。',
        'server_deleted' => '已成功從系統中刪除伺服器。',
        'server_created' => '已成功在面板中創建伺服器。請稍等面板完全安裝伺服器完畢。',
        'build_updated' => '已更新此伺服器的構建參數。部分更改可能需要重啟才能生效。啟動參數已更改。',
        'suspension_toggled' => '伺服器停用狀態已更改為 :status.',
        'rebuild_on_boot' => '此伺服器已被標記為需要重新構建 Docker 容器。此操作會在下次啟動伺服器後生效。',
        'install_toggled' => '此伺服器的安裝狀態已被更改。',
        'server_reinstalled' => '此伺服器已置於即將開始的重裝隊列中。',
        'details_updated' => '已成功更新伺服器信息。',
        'docker_image_updated' => '已成功更改此伺服器使用的默認 Docker 鏡像。此操作需要重啟以應用更改。',
        'node_required' => '您需要配置至少一個節點以添加伺服器至面板。',
    ],
];
