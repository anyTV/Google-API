<?php
/**
 * Created by JetBrains PhpStorm.
 * User: dan
 * Date: 03/05/2013
 * Time: 11:18
 * To change this template use File | Settings | File Templates.
 */
namespace Google\Model;

use Google\Model;

class Accounts extends Model
{
    protected $__itemsType = 'Account';
    protected $__itemsDataType = 'array';
    public $items;
    public $kind;

    public function setItems( /* array(Account) */
        $items)
    {
        $this->assertIsArray($items, 'Account', __METHOD__);
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
}