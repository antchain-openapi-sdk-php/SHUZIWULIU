<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AntChain\SHUZIWULIU\Models;

use AlibabaCloud\Tea\Model;

class QueryCreditBalancebysaasRequest extends Model
{
    // OAuth模式下的授权token
    /**
     * @var string
     */
    public $authToken;

    /**
     * @var string
     */
    public $productInstanceId;

    // 产品id
    /**
     * @var string
     */
    public $productId;

    // 集团平台did
    /**
     * @var string
     */
    public $groupPlatformDid;

    // 查询者did
    /**
     * @var string
     */
    public $platformDid;

    // 发行金额
    /**
     * @var string
     */
    public $freight;
    protected $_name = [
        'authToken'         => 'auth_token',
        'productInstanceId' => 'product_instance_id',
        'productId'         => 'product_id',
        'groupPlatformDid'  => 'group_platform_did',
        'platformDid'       => 'platform_did',
        'freight'           => 'freight',
    ];

    public function validate()
    {
        Model::validateRequired('productId', $this->productId, true);
        Model::validateRequired('groupPlatformDid', $this->groupPlatformDid, true);
        Model::validateRequired('platformDid', $this->platformDid, true);
        Model::validateRequired('freight', $this->freight, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authToken) {
            $res['auth_token'] = $this->authToken;
        }
        if (null !== $this->productInstanceId) {
            $res['product_instance_id'] = $this->productInstanceId;
        }
        if (null !== $this->productId) {
            $res['product_id'] = $this->productId;
        }
        if (null !== $this->groupPlatformDid) {
            $res['group_platform_did'] = $this->groupPlatformDid;
        }
        if (null !== $this->platformDid) {
            $res['platform_did'] = $this->platformDid;
        }
        if (null !== $this->freight) {
            $res['freight'] = $this->freight;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryCreditBalancebysaasRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['auth_token'])) {
            $model->authToken = $map['auth_token'];
        }
        if (isset($map['product_instance_id'])) {
            $model->productInstanceId = $map['product_instance_id'];
        }
        if (isset($map['product_id'])) {
            $model->productId = $map['product_id'];
        }
        if (isset($map['group_platform_did'])) {
            $model->groupPlatformDid = $map['group_platform_did'];
        }
        if (isset($map['platform_did'])) {
            $model->platformDid = $map['platform_did'];
        }
        if (isset($map['freight'])) {
            $model->freight = $map['freight'];
        }

        return $model;
    }
}
