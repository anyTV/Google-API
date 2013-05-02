<?php
/**
 * Created by JetBrains PhpStorm.
 * User: dan
 * Date: 03/05/2013
 * Time: 11:13
 * To change this template use File | Settings | File Templates.
 */
namespace Google\Service\Resource;
use Google\Service\Resource;
use Google\Model\Creative;
use Google\Model\Creatives;

/**
 * The "creatives" collection of methods.
 * Typical usage is:
 *  <code>
 *   $adexchangebuyerService = new AdExchangeBuyerService(...);
 *   $creatives = $adexchangebuyerService->creatives;
 *  </code>
 */
class CreativesResource extends Resource
{


    /**
     * Gets the status for a single creative. (creatives.get)
     *
     * @param int $accountId The id for the account that will serve this creative.
     * @param string $buyerCreativeId The buyer-specific id for this creative.
     * @param array $optParams Optional parameters.
     * @return \Google\Model\Creative
     */
    public function get($accountId, $buyerCreativeId, $optParams = array())
    {
        $params = array('accountId' => $accountId, 'buyerCreativeId' => $buyerCreativeId);
        $params = array_merge($params, $optParams);
        $data = $this->__call('get', array($params));
        if ($this->useObjects()) {
            return new Creative($data);
        } else {
            return $data;
        }
    }

    /**
     * Submit a new creative. (creatives.insert)
     *
     * @param \Google\Model\Creative $postBody
     * @param array $optParams Optional parameters.
     * @return Creative
     */
    public function insert(Creative $postBody, $optParams = array())
    {
        $params = array('postBody' => $postBody);
        $params = array_merge($params, $optParams);
        $data = $this->__call('insert', array($params));
        if ($this->useObjects()) {
            return new Creative($data);
        } else {
            return $data;
        }
    }

    /**
     * Retrieves a list of the authenticated user's active creatives. (creatives.list)
     *
     * @param array $optParams Optional parameters.
     *
     * @opt_param string statusFilter When specified, only creatives having the given status are returned.
     * @opt_param string pageToken A continuation token, used to page through ad clients. To retrieve the next page, set this parameter to the value of "nextPageToken" from the previous response. Optional.
     * @opt_param string maxResults Maximum number of entries returned on one result page. If not set, the default is 100. Optional.
     * @return \Google\Model\Creatives
     */
    public function listCreatives($optParams = array())
    {
        $params = array();
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', array($params));
        if ($this->useObjects()) {
            return new Creatives($data);
        } else {
            return $data;
        }
    }
}