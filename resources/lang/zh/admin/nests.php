<?php
/**
 * Pterodactyl - Panel
 * Copyright (c) 2015 - 2017 Dane Everitt <dane@daneeveritt.com>.
 *
 * This software is licensed under the terms of the MIT license.
 * https://opensource.org/licenses/MIT
 */

return [
    'notices' => [
        'created' => '已成功創建 :name 。',
        'deleted' => '已成功從面板刪除指定的管理模塊。',
        'updated' => '已成功更新管理模塊選項。',
    ],
    'eggs' => [
        'notices' => [
            'imported' => '已成功導入管理模板。',
            'updated_via_import' => '此管理模板已按照上傳的文件完成更新。',
            'deleted' => '已成功刪除指定的管路模板。',
            'updated' => '已成功更新管理模板的配置。',
            'script_updated' => '已成功更新孵化蛋安裝腳本且將於服務器安裝時自動執行。',
            'egg_created' => '一個管理模板已經成功創建. 你需要重啟所有正在運行的節點受控端來使該模板生效。',
        ],
    ],
    'variables' => [
        'notices' => [
            'variable_deleted' => '已移除變量 ":variable" 且其在重構服務器鏡像後將會失效。 ',
            'variable_updated' => '已更新變量 ":variable" 。您需要重構使用此變量的服務器以應用更改。',
            'variable_created' => '已成功創建新變量並分配給此孵化蛋。',
        ],
    ],
];
