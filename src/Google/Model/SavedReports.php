<?php
/**
 * Created by JetBrains PhpStorm.
 * User: dan
 * Date: 03/05/2013
 * Time: 11:38
 * To change this template use File | Settings | File Templates.
 */
namespace Google\Model;

use Google\Model;

class SavedReports extends Model
{
    public $etag;
    protected $__itemsType = 'SavedReport';
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

    public function setItems( /* array(SavedReport) */
        $items)
    {
        $this->assertIsArray($items, 'SavedReport', __METHOD__);
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