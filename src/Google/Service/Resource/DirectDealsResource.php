<?php
/**
 * Created by JetBrains PhpStorm.
 * User: dan
 * Date: 03/05/2013
 * Time: 11:14
 * To change this template use File | Settings | File Templates.
 */
namespace Google\Service\Resource;
use Google\Service\Resource;
use Google\Model\DirectDeal;
use Google\Model\DirectDeals;

/**
 * The "directDeals" collection of methods.
 * Typical usage is:
 *  <code>
 *   $adexchangebuyerService = new AdExchangeBuyerService(...);
 *   $directDeals = $adexchangebuyerService->directDeals;
 *  </code>
 */
class DirectDealsResource extends Resource
{


    /**
     * Gets one direct deal by ID. (directDeals.get)
     *
     * @param string $id The direct deal id
     * @param array $optParams Optional parameters.
     * @return DirectDeal
     */
    public function get($id, $optParams = array())
    {
        $params = array('id' => $id);
        $params = array_merge($params, $optParams);
        $data = $this->__call('get', array($params));
        if ($this->useObjects()) {
            return new DirectDeal($data);
        } else {
            return $data;
        }
    }

    /**
     * Retrieves the authenticated user's list of direct deals. (directDeals.list)
     *
     * @param array $optParams Optional parameters.
     * @return DirectDeals
     */
    public function listDirectDeals($optParams = array())
    {
        $params = array();
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', array($params));
        if ($this->useObjects()) {
            return new DirectDeals($data);
        } else {
            return $data;
        }
    }
}