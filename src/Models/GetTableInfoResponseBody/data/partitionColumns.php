<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetTableInfoResponseBody\data;

use AlibabaCloud\Dara\Model;

class partitionColumns extends Model
{
    /**
     * @var string
     */
    public $comment;
    /**
     * @var string
     */
    public $label;
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'comment' => 'comment',
        'label'   => 'label',
        'name'    => 'name',
        'type'    => 'type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->comment) {
            $res['comment'] = $this->comment;
        }

        if (null !== $this->label) {
            $res['label'] = $this->label;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['comment'])) {
            $model->comment = $map['comment'];
        }

        if (isset($map['label'])) {
            $model->label = $map['label'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
