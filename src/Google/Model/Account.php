<?php
/**
 * Created by JetBrains PhpStorm.
 * User: dan
 * Date: 03/05/2013
 * Time: 11:15
 * To change this template use File | Settings | File Templates.
 */
namespace Google\Model;

use Google\Model;

class Account extends Model
{
    protected $__bidderLocationType = 'AccountBidderLocation';
    protected $__bidderLocationDataType = 'array';
    public $bidderLocation;
    public $cookieMatchingNid;
    public $cookieMatchingUrl;
    public $id;
    public $kind;
    public $maximumTotalQps;

    public function setBidderLocation( /* array(AccountBidderLocation) */
        $bidderLocation)
    {
        $this->assertIsArray($bidderLocation, 'AccountBidderLocation', __METHOD__);
        $this->bidderLocation = $bidderLocation;
    }

    public function getBidderLocation()
    {
        return $this->bidderLocation;
    }

    public function setCookieMatchingNid($cookieMatchingNid)
    {
        $this->cookieMatchingNid = $cookieMatchingNid;
    }

    public function getCookieMatchingNid()
    {
        return $this->cookieMatchingNid;
    }

    public function setCookieMatchingUrl($cookieMatchingUrl)
    {
        $this->cookieMatchingUrl = $cookieMatchingUrl;
    }

    public function getCookieMatchingUrl()
    {
        return $this->cookieMatchingUrl;
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

    public function setMaximumTotalQps($maximumTotalQps)
    {
        $this->maximumTotalQps = $maximumTotalQps;
    }

    public function getMaximumTotalQps()
    {
        return $this->maximumTotalQps;
    }
}