<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetRoleAclOnObjectResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The operations that were performed on the object.
     *
     * @var string[]
     */
    public $actions;

    /**
     * @description The name of the object.
     *
     * @example tableA
     *
     * @var string
     */
    public $name;
    protected $_name = [
        'actions' => 'actions',
        'name'    => 'name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->actions) {
            $res['actions'] = $this->actions;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
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
        if (isset($map['actions'])) {
            if (!empty($map['actions'])) {
                $model->actions = $map['actions'];
            }
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        return $model;
    }
}
