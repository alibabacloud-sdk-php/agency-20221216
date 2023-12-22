<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Agency\V20221216\Models;

use AlibabaCloud\Tea\Model;

class SetWarningThresholdResponseBody extends Model
{
    /**
     * @description Result code:
     *
     *   200 OK
     *   1109 system error
     *   The operation cannot be completed 3040 the sub-account is frozen-the 3044 alert proportion value is not a number.
     *   3045 Alert Scale value should be 1 to 100
     *
     * @example 200
     *
     * @var string
     */
    public $code;

    /**
     * @description Same as Code parameter value
     *
     * @example 200
     *
     * @var string
     */
    public $message;

    /**
     * @description the request id. the unique identifier generated by alibaba cloud for the request.
     *
     * @example 9C14ADFE-DF0A-54D4-8BD5-45D0839246B4
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Candidate value: True or False, which indicates whether the current API call itself is successful. does not represent the success of subsequent business operations.
     *
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'code'      => 'Code',
        'message'   => 'Message',
        'requestId' => 'RequestId',
        'success'   => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetWarningThresholdResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
