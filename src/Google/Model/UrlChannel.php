<?php
/**
 * Created by JetBrains PhpStorm.
 * User: dan
 * Date: 03/05/2013
 * Time: 11:39
 * To change this template use File | Settings | File Templates.
 */
namespace Google\Model;

use Google\Model;

class UrlChannel extends Model
{
    public $id;
    public $kind;
    public $urlPattern;

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

    public function setUrlPattern($urlPattern)
    {
        $this->urlPattern = $urlPattern;
    }

    public function getUrlPattern()
    {
        return $this->urlPattern;
    }
}