<?php
/**
 * Created by JetBrains PhpStorm.
 * User: dan
 * Date: 03/05/2013
 * Time: 11:34
 * To change this template use File | Settings | File Templates.
 */
namespace Google\Model;

use Google\Model;
use Google\Model\CustomChannelTargetingInfo;

class CustomChannel extends Model
{
    public $code;
    public $id;
    public $kind;
    public $name;
    protected $__targetingInfoType = 'CustomChannelTargetingInfo';
    protected $__targetingInfoDataType = '';
    public $targetingInfo;

    public function setCode($code)
    {
        $this->code = $code;
    }

    public function getCode()
    {
        return $this->code;
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

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setTargetingInfo(CustomChannelTargetingInfo $targetingInfo)
    {
        $this->targetingInfo = $targetingInfo;
    }

    public function getTargetingInfo()
    {
        return $this->targetingInfo;
    }
}