<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Agency\V20221216\Models\GetDailyBillResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example intl-reseller-month-bill.oss-ap-southeast-1.aliyuncs.com/statements/month/dts/1064252248461886/202104/Month%20Billing%20Invoice%20202104.pdf?Expires=1671160973&OSSAccessKeyId=TMP.3KhvoD9pW264cPv8sYe8E2zJ5HLWmrijNHgKiKpXcy8yS472BcrvemgTfNrrXKu5fCCdbLr2XhmYAyYPmbCe8zJyEkmYzL&Signature=hns1PgiiYl1WdI%2FdiOqbEdsgmfI%3D
     *
     * @var string
     */
    public $billLinkCSV;

    /**
     * @example intl-reseller-month-bill.oss-ap-southeast-1.aliyuncs.com/statements/month/dts/1064252248461886/202104/Month%20Billing%20Invoice%20202104.pdf?Expires=1671160973&OSSAccessKeyId=TMP.3KhvoD9pW264cPv8sYe8E2zJ5HLWmrijNHgKiKpXcy8yS472BcrvemgTfNrrXKu5fCCdbLr2XhmYAyYPmbCe8zJyEkmYzL&Signature=hns1PgiiYl1WdI%2FdiOqbEdsgmfI%3D
     *
     * @var string
     */
    public $billLinkXLSX;

    /**
     * @example 1
     *
     * @var string
     */
    public $billOwner;

    /**
     * @example DailyInstanceBillV2
     *
     * @var string
     */
    public $billType;

    /**
     * @example 20221201
     *
     * @var string
     */
    public $spendingTime;
    protected $_name = [
        'billLinkCSV'  => 'BillLinkCSV',
        'billLinkXLSX' => 'BillLinkXLSX',
        'billOwner'    => 'BillOwner',
        'billType'     => 'BillType',
        'spendingTime' => 'SpendingTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->billLinkCSV) {
            $res['BillLinkCSV'] = $this->billLinkCSV;
        }
        if (null !== $this->billLinkXLSX) {
            $res['BillLinkXLSX'] = $this->billLinkXLSX;
        }
        if (null !== $this->billOwner) {
            $res['BillOwner'] = $this->billOwner;
        }
        if (null !== $this->billType) {
            $res['BillType'] = $this->billType;
        }
        if (null !== $this->spendingTime) {
            $res['SpendingTime'] = $this->spendingTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BillLinkCSV'])) {
            $model->billLinkCSV = $map['BillLinkCSV'];
        }
        if (isset($map['BillLinkXLSX'])) {
            $model->billLinkXLSX = $map['BillLinkXLSX'];
        }
        if (isset($map['BillOwner'])) {
            $model->billOwner = $map['BillOwner'];
        }
        if (isset($map['BillType'])) {
            $model->billType = $map['BillType'];
        }
        if (isset($map['SpendingTime'])) {
            $model->spendingTime = $map['SpendingTime'];
        }

        return $model;
    }
}
