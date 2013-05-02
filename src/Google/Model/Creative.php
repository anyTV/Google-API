<?php
/**
 * Created by JetBrains PhpStorm.
 * User: dan
 * Date: 03/05/2013
 * Time: 11:19
 * To change this template use File | Settings | File Templates.
 */
namespace Google\Model;

use Google\Model;

class Creative extends Model
{
    public $HTMLSnippet;
    public $accountId;
    public $advertiserId;
    public $advertiserName;
    public $agencyId;
    public $attribute;
    public $buyerCreativeId;
    public $clickThroughUrl;
    protected $__disapprovalReasonsType = 'CreativeDisapprovalReasons';
    protected $__disapprovalReasonsDataType = 'array';
    public $disapprovalReasons;
    public $height;
    public $kind;
    public $productCategories;
    public $sensitiveCategories;
    public $status;
    public $vendorType;
    public $videoURL;
    public $width;

    public function setHTMLSnippet($HTMLSnippet)
    {
        $this->HTMLSnippet = $HTMLSnippet;
    }

    public function getHTMLSnippet()
    {
        return $this->HTMLSnippet;
    }

    public function setAccountId($accountId)
    {
        $this->accountId = $accountId;
    }

    public function getAccountId()
    {
        return $this->accountId;
    }

    public function setAdvertiserId( /* array(Google_string) */
        $advertiserId)
    {
        $this->assertIsArray($advertiserId, 'Google_string', __METHOD__);
        $this->advertiserId = $advertiserId;
    }

    public function getAdvertiserId()
    {
        return $this->advertiserId;
    }

    public function setAdvertiserName($advertiserName)
    {
        $this->advertiserName = $advertiserName;
    }

    public function getAdvertiserName()
    {
        return $this->advertiserName;
    }

    public function setAgencyId($agencyId)
    {
        $this->agencyId = $agencyId;
    }

    public function getAgencyId()
    {
        return $this->agencyId;
    }

    public function setAttribute( /* array(Google_int) */
        $attribute)
    {
        $this->assertIsArray($attribute, 'Google_int', __METHOD__);
        $this->attribute = $attribute;
    }

    public function getAttribute()
    {
        return $this->attribute;
    }

    public function setBuyerCreativeId($buyerCreativeId)
    {
        $this->buyerCreativeId = $buyerCreativeId;
    }

    public function getBuyerCreativeId()
    {
        return $this->buyerCreativeId;
    }

    public function setClickThroughUrl( /* array(Google_string) */
        $clickThroughUrl)
    {
        $this->assertIsArray($clickThroughUrl, 'Google_string', __METHOD__);
        $this->clickThroughUrl = $clickThroughUrl;
    }

    public function getClickThroughUrl()
    {
        return $this->clickThroughUrl;
    }

    public function setDisapprovalReasons( /* array(CreativeDisapprovalReasons) */
        $disapprovalReasons)
    {
        $this->assertIsArray($disapprovalReasons, 'CreativeDisapprovalReasons', __METHOD__);
        $this->disapprovalReasons = $disapprovalReasons;
    }

    public function getDisapprovalReasons()
    {
        return $this->disapprovalReasons;
    }

    public function setHeight($height)
    {
        $this->height = $height;
    }

    public function getHeight()
    {
        return $this->height;
    }

    public function setKind($kind)
    {
        $this->kind = $kind;
    }

    public function getKind()
    {
        return $this->kind;
    }

    public function setProductCategories( /* array(Google_int) */
        $productCategories)
    {
        $this->assertIsArray($productCategories, 'Google_int', __METHOD__);
        $this->productCategories = $productCategories;
    }

    public function getProductCategories()
    {
        return $this->productCategories;
    }

    public function setSensitiveCategories( /* array(Google_int) */
        $sensitiveCategories)
    {
        $this->assertIsArray($sensitiveCategories, 'Google_int', __METHOD__);
        $this->sensitiveCategories = $sensitiveCategories;
    }

    public function getSensitiveCategories()
    {
        return $this->sensitiveCategories;
    }

    public function setStatus($status)
    {
        $this->status = $status;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function setVendorType( /* array(Google_int) */
        $vendorType)
    {
        $this->assertIsArray($vendorType, 'Google_int', __METHOD__);
        $this->vendorType = $vendorType;
    }

    public function getVendorType()
    {
        return $this->vendorType;
    }

    public function setVideoURL($videoURL)
    {
        $this->videoURL = $videoURL;
    }

    public function getVideoURL()
    {
        return $this->videoURL;
    }

    public function setWidth($width)
    {
        $this->width = $width;
    }

    public function getWidth()
    {
        return $this->width;
    }
}