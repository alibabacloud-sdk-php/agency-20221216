<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Agency\V20221216\Models;

use AlibabaCloud\Tea\Model;

class SetWarningThresholdRequest extends Model
{
    /**
     * @example 1792155717328010
     *
     * @var int
     */
    public $uid;

    /**
     * @example 20
     *
     * @var string
     */
    public $warningValue;
    protected $_name = [
        'uid'          => 'Uid',
        'warningValue' => 'WarningValue',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->uid) {
            $res['Uid'] = $this->uid;
        }
        if (null !== $this->warningValue) {
            $res['WarningValue'] = $this->warningValue;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetWarningThresholdRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Uid'])) {
            $model->uid = $map['Uid'];
        }
        if (isset($map['WarningValue'])) {
            $model->warningValue = $map['WarningValue'];
        }

        return $model;
    }
}
