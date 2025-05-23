<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListResourcesResponseBody\data;

use AlibabaCloud\Dara\Model;

class resources extends Model
{
    /**
     * @var string
     */
    public $comment;

    /**
     * @var string
     */
    public $contentMD5;

    /**
     * @var int
     */
    public $creationTime;

    /**
     * @var string
     */
    public $displayName;

    /**
     * @var int
     */
    public $lastModifiedTime;

    /**
     * @var string
     */
    public $lastUpdator;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $owner;

    /**
     * @var string
     */
    public $schema;

    /**
     * @var int
     */
    public $size;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'comment' => 'comment',
        'contentMD5' => 'contentMD5',
        'creationTime' => 'creationTime',
        'displayName' => 'displayName',
        'lastModifiedTime' => 'lastModifiedTime',
        'lastUpdator' => 'lastUpdator',
        'name' => 'name',
        'owner' => 'owner',
        'schema' => 'schema',
        'size' => 'size',
        'type' => 'type',
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

        if (null !== $this->contentMD5) {
            $res['contentMD5'] = $this->contentMD5;
        }

        if (null !== $this->creationTime) {
            $res['creationTime'] = $this->creationTime;
        }

        if (null !== $this->displayName) {
            $res['displayName'] = $this->displayName;
        }

        if (null !== $this->lastModifiedTime) {
            $res['lastModifiedTime'] = $this->lastModifiedTime;
        }

        if (null !== $this->lastUpdator) {
            $res['lastUpdator'] = $this->lastUpdator;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->owner) {
            $res['owner'] = $this->owner;
        }

        if (null !== $this->schema) {
            $res['schema'] = $this->schema;
        }

        if (null !== $this->size) {
            $res['size'] = $this->size;
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

        if (isset($map['contentMD5'])) {
            $model->contentMD5 = $map['contentMD5'];
        }

        if (isset($map['creationTime'])) {
            $model->creationTime = $map['creationTime'];
        }

        if (isset($map['displayName'])) {
            $model->displayName = $map['displayName'];
        }

        if (isset($map['lastModifiedTime'])) {
            $model->lastModifiedTime = $map['lastModifiedTime'];
        }

        if (isset($map['lastUpdator'])) {
            $model->lastUpdator = $map['lastUpdator'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['owner'])) {
            $model->owner = $map['owner'];
        }

        if (isset($map['schema'])) {
            $model->schema = $map['schema'];
        }

        if (isset($map['size'])) {
            $model->size = $map['size'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
