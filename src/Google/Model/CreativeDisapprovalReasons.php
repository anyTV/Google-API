<?php
/**
 * Created by JetBrains PhpStorm.
 * User: dan
 * Date: 03/05/2013
 * Time: 11:20
 * To change this template use File | Settings | File Templates.
 */
namespace Google\Model;

use Google\Model;

class CreativeDisapprovalReasons extends Model
{
    public $details;
    public $reason;

    public function setDetails( /* array(Google_string) */
        $details)
    {
        $this->assertIsArray($details, 'Google_string', __METHOD__);
        $this->details = $details;
    }

    public function getDetails()
    {
        return $this->details;
    }

    public function setReason($reason)
    {
        $this->reason = $reason;
    }

    public function getReason()
    {
        return $this->reason;
    }
}