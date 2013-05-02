<?php
/**
 * Created by JetBrains PhpStorm.
 * User: dan
 * Date: 03/05/2013
 * Time: 11:27
 * To change this template use File | Settings | File Templates.
 */
namespace Google\Service\Resource;
use Google\Service\Resource;
use Google\Model\AdUnits;

/**
 * The "adunits" collection of methods.
 * Typical usage is:
 *  <code>
 *   $adexchangesellerService = new AdExchangeSellerService(...);
 *   $adunits = $adexchangesellerService->adunits;
 *  </code>
 */
class CustomChannelsAdUnitsResource extends Resource
{


    /**
     * List all ad units in the specified custom channel. (adunits.list)
     *
     * @param string $adClientId Ad client which contains the custom channel.
     * @param string $customChannelId Custom channel for which to list ad units.
     * @param array $optParams Optional parameters.
     *
     * @opt_param bool includeInactive Whether to include inactive ad units. Default: true.
     * @opt_param string maxResults The maximum number of ad units to include in the response, used for paging.
     * @opt_param string pageToken A continuation token, used to page through ad units. To retrieve the next page, set this parameter to the value of "nextPageToken" from the previous response.
     * @return AdUnits
     */
    public function listCustomchannelsAdunits($adClientId, $customChannelId, $optParams = array())
    {
        $params = array('adClientId' => $adClientId, 'customChannelId' => $customChannelId);
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', array($params));
        if ($this->useObjects()) {
            return new AdUnits($data);
        } else {
            return $data;
        }
    }
}