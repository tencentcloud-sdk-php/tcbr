<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Tcbr\V20220217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 服务基本信息
 *
 * @method string getServerName() 获取服务名
 * @method void setServerName(string $ServerName) 设置服务名
 * @method string getDefaultDomainName() 获取默认服务域名
 * @method void setDefaultDomainName(string $DefaultDomainName) 设置默认服务域名
 * @method string getCustomDomainName() 获取自定义域名
 * @method void setCustomDomainName(string $CustomDomainName) 设置自定义域名
 * @method string getStatus() 获取服务状态：running/deploying/deploy_failed
 * @method void setStatus(string $Status) 设置服务状态：running/deploying/deploy_failed
 * @method string getUpdateTime() 获取更新时间
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间
 */
class ServerBaseInfo extends AbstractModel
{
    /**
     * @var string 服务名
     */
    public $ServerName;

    /**
     * @var string 默认服务域名
     */
    public $DefaultDomainName;

    /**
     * @var string 自定义域名
     */
    public $CustomDomainName;

    /**
     * @var string 服务状态：running/deploying/deploy_failed
     */
    public $Status;

    /**
     * @var string 更新时间
     */
    public $UpdateTime;

    /**
     * @param string $ServerName 服务名
     * @param string $DefaultDomainName 默认服务域名
     * @param string $CustomDomainName 自定义域名
     * @param string $Status 服务状态：running/deploying/deploy_failed
     * @param string $UpdateTime 更新时间
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("ServerName",$param) and $param["ServerName"] !== null) {
            $this->ServerName = $param["ServerName"];
        }

        if (array_key_exists("DefaultDomainName",$param) and $param["DefaultDomainName"] !== null) {
            $this->DefaultDomainName = $param["DefaultDomainName"];
        }

        if (array_key_exists("CustomDomainName",$param) and $param["CustomDomainName"] !== null) {
            $this->CustomDomainName = $param["CustomDomainName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
