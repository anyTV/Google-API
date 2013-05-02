<?php
/**
 * Created by JetBrains PhpStorm.
 * User: dan
 * Date: 03/05/2013
 * Time: 11:17
 * To change this template use File | Settings | File Templates.
 */
namespace Google\Model;

use Google\Model;

class AccountBidderLocation extends Model
{
    public $maximumQps;
    public $region;
    public $url;

    public function setMaximumQps($maximumQps)
    {
        $this->maximumQps = $maximumQps;
    }

    public function getMaximumQps()
    {
        return $this->maximumQps;
    }

    public function setRegion($region)
    {
        $this->region = $region;
    }

    public function getRegion()
    {
        return $this->region;
    }

    public function setUrl($url)
    {
        $this->url = $url;
    }

    public function getUrl()
    {
        return $this->url;
    }
}