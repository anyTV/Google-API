<?php
/**
 * Created by JetBrains PhpStorm.
 * User: dan
 * Date: 03/05/2013
 * Time: 11:21
 * To change this template use File | Settings | File Templates.
 */
namespace Google\Model;

use Google\Model;

class Creatives extends Model
{
    protected $__itemsType = 'Creative';
    protected $__itemsDataType = 'array';
    public $items;
    public $kind;
    public $nextPageToken;

    public function setItems( /* array(Creative) */
        $items)
    {
        $this->assertIsArray($items, 'Creative', __METHOD__);
        $this->items = $items;
    }

    public function getItems()
    {
        return $this->items;
    }

    public function setKind($kind)
    {
        $this->kind = $kind;
    }

    public function getKind()
    {
        return $this->kind;
    }

    public function setNextPageToken($nextPageToken)
    {
        $this->nextPageToken = $nextPageToken;
    }

    public function getNextPageToken()
    {
        return $this->nextPageToken;
    }
}