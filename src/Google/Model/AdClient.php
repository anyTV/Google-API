<?php
/**
 * Created by JetBrains PhpStorm.
 * User: dan
 * Date: 03/05/2013
 * Time: 11:31
 * To change this template use File | Settings | File Templates.
 */
namespace Google\Model;

use Google\Model;

class AdClient extends Model
{
    public $arcOptIn;
    public $id;
    public $kind;
    public $productCode;
    public $supportsReporting;

    public function setArcOptIn($arcOptIn)
    {
        $this->arcOptIn = $arcOptIn;
    }

    public function getArcOptIn()
    {
        return $this->arcOptIn;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setKind($kind)
    {
        $this->kind = $kind;
    }

    public function getKind()
    {
        return $this->kind;
    }

    public function setProductCode($productCode)
    {
        $this->productCode = $productCode;
    }

    public function getProductCode()
    {
        return $this->productCode;
    }

    public function setSupportsReporting($supportsReporting)
    {
        $this->supportsReporting = $supportsReporting;
    }

    public function getSupportsReporting()
    {
        return $this->supportsReporting;
    }
}