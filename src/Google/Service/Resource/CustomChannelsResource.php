<?php
/**
 * Created by JetBrains PhpStorm.
 * User: dan
 * Date: 03/05/2013
 * Time: 11:26
 * To change this template use File | Settings | File Templates.
 */
namespace Google\Service\Resource;
use Google\Service\Resource;
use Google\Model\CustomChannel;
use Google\Model\CustomChannels;

/**
 * The "customchannels" collection of methods.
 * Typical usage is:
 *  <code>
 *   $adexchangesellerService = new AdExchangeSellerService(...);
 *   $customchannels = $adexchangesellerService->customchannels;
 *  </code>
 */
class CustomChannelsResource extends Resource
{


    /**
     * Get the specified custom channel from the specified ad client. (customchannels.get)
     *
     * @param string $adClientId Ad client which contains the custom channel.
     * @param string $customChannelId Custom channel to retrieve.
     * @param array $optParams Optional parameters.
     * @return CustomChannel
     */
    public function get($adClientId, $customChannelId, $optParams = array())
    {
        $params = array('adClientId' => $adClientId, 'customChannelId' => $customChannelId);
        $params = array_merge($params, $optParams);
        $data = $this->__call('get', array($params));
        if ($this->useObjects()) {
            return new CustomChannel($data);
        } else {
            return $data;
        }
    }

    /**
     * List all custom channels in the specified ad client for this Ad Exchange account.
     * (customchannels.list)
     *
     * @param string $adClientId Ad client for which to list custom channels.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string maxResults The maximum number of custom channels to include in the response, used for paging.
     * @opt_param string pageToken A continuation token, used to page through custom channels. To retrieve the next page, set this parameter to the value of "nextPageToken" from the previous response.
     * @return CustomChannels
     */
    public function listCustomchannels($adClientId, $optParams = array())
    {
        $params = array('adClientId' => $adClientId);
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', array($params));
        if ($this->useObjects()) {
            return new CustomChannels($data);
        } else {
            return $data;
        }
    }
}