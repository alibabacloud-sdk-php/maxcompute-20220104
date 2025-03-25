<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetComputeQuotaPlanResponseBody\data\quota;

use AlibabaCloud\Tea\Model;

class parameter extends Model
{
    /**
     * @description The value of elastic Reserved CUs.
     *
     * @example 50
     *
     * @var int
     */
    public $elasticReservedCU;

    /**
     * @description The value of maxCU in Reserved CUs.
     *
     * @example 50
     *
     * @var int
     */
    public $maxCU;

    /**
     * @description The value of minCU in Reserved CUs.
     *
     * @example 50
     *
     * @var int
     */
    public $minCU;
    protected $_name = [
        'elasticReservedCU' => 'elasticReservedCU',
        'maxCU' => 'maxCU',
        'minCU' => 'minCU',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->elasticReservedCU) {
            $res['elasticReservedCU'] = $this->elasticReservedCU;
        }
        if (null !== $this->maxCU) {
            $res['maxCU'] = $this->maxCU;
        }
        if (null !== $this->minCU) {
            $res['minCU'] = $this->minCU;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return parameter
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['elasticReservedCU'])) {
            $model->elasticReservedCU = $map['elasticReservedCU'];
        }
        if (isset($map['maxCU'])) {
            $model->maxCU = $map['maxCU'];
        }
        if (isset($map['minCU'])) {
            $model->minCU = $map['minCU'];
        }

        return $model;
    }
}
