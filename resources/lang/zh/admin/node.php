<?php
/**
 * Pterodactyl - Panel
 * Copyright (c) 2015 - 2017 Dane Everitt <dane@daneeveritt.com>.
 *
 * This software is licensed under the terms of the MIT license.
 * https://opensource.org/licenses/MIT
 */

return [
    'validation' => [
        'fqdn_not_resolvable' => '提供的正式域名（FQDN）或 IP 地址未解析到有效的 IP 地址。',
        'fqdn_required_for_ssl' => '此節點需要解析到公網 IP 地址的正式域名才能使用 SSL。',
    ],
    'notices' => [
        'allocations_added' => '已成功為此節點分配地址。',
        'node_deleted' => '已成功從面板中移除節點。',
        'location_required' => '您必須至少配置一個區域才能添加節點至面板。',
        'node_created' => '已成功新建節點！您可通過\'配置\'選項卡已自動配置此機器上的守護程序。<strong>在您添加服務器前，您必須先分配一個 IP 地址及端口。</strong>',
        'node_updated' => '已更新節點信息。若守護程序設置更改，您需要重啟守護程序才能生效。',
        'unallocated_deleted' => '已為 <code>:ip</code> 刪除所有未分配的端口。',
    ],
];
