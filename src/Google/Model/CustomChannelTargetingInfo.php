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

class CustomChannelTargetingInfo extends Model
{
    public $adsAppearOn;
    public $description;
    public $location;
    public $siteLanguage;

    public function setAdsAppearOn($adsAppearOn)
    {
        $this->adsAppearOn = $adsAppearOn;
    }

    public function getAdsAppearOn()
    {
        return $this->adsAppearOn;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setLocation($location)
    {
        $this->location = $location;
    }

    public function getLocation()
    {
        return $this->location;
    }

    public function setSiteLanguage($siteLanguage)
    {
        $this->siteLanguage = $siteLanguage;
    }

    public function getSiteLanguage()
    {
        return $this->siteLanguage;
    }
}