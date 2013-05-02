<?php
/**
 * Created by JetBrains PhpStorm.
 * User: dan
 * Date: 03/05/2013
 * Time: 11:25
 * To change this template use File | Settings | File Templates.
 */
namespace Google\Service\Resource;
use Google\Service\Resource;
use Google\Model\CustomChannels;

/**
 * The "customchannels" collection of methods.
 * Typical usage is:
 *  <code>
 *   $adexchangesellerService = new AdExchangeSellerService(...);
 *   $customchannels = $adexchangesellerService->customchannels;
 *  </code>
 */
class AdunitsCustomChannelsResource extends Resource
{


    /**
     * List all custom channels which the specified ad unit belongs to. (customchannels.list)
     *
     * @param string $adClientId Ad client which contains the ad unit.
     * @param string $adUnitId Ad unit for which to list custom channels.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string maxResults The maximum number of custom channels to include in the response, used for paging.
     * @opt_param string pageToken A continuation token, used to page through custom channels. To retrieve the next page, set this parameter to the value of "nextPageToken" from the previous response.
     * @return CustomChannels
     */
    public function listAdunitsCustomchannels($adClientId, $adUnitId, $optParams = array())
    {
        $params = array('adClientId' => $adClientId, 'adUnitId' => $adUnitId);
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', array($params));
        if ($this->useObjects()) {
            return new CustomChannels($data);
        } else {
            return $data;
        }
    }
}