<?php
/**
 * Created by JetBrains PhpStorm.
 * User: dan
 * Date: 03/05/2013
 * Time: 11:35
 * To change this template use File | Settings | File Templates.
 */
namespace Google\Model;

use Google\Model;

class CustomChannels extends Model
{
    public $etag;
    protected $__itemsType = 'CustomChannel';
    protected $__itemsDataType = 'array';
    public $items;
    public $kind;
    public $nextPageToken;

    public function setEtag($etag)
    {
        $this->etag = $etag;
    }

    public function getEtag()
    {
        return $this->etag;
    }

    public function setItems( /* array(CustomChannel) */
        $items)
    {
        $this->assertIsArray($items, 'CustomChannel', __METHOD__);
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