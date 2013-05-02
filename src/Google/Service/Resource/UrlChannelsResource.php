<?php
/**
 * Created by JetBrains PhpStorm.
 * User: dan
 * Date: 03/05/2013
 * Time: 11:30
 * To change this template use File | Settings | File Templates.
 */
namespace Google\Service\Resource;
use Google\Service\Resource;
use Google\Model\UrlChannels;

/**
 * The "urlchannels" collection of methods.
 * Typical usage is:
 *  <code>
 *   $adexchangesellerService = new AdExchangeSellerService(...);
 *   $urlchannels = $adexchangesellerService->urlchannels;
 *  </code>
 */
class UrlChannelsResource extends Resource
{


    /**
     * List all URL channels in the specified ad client for this Ad Exchange account. (urlchannels.list)
     *
     * @param string $adClientId Ad client for which to list URL channels.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string maxResults The maximum number of URL channels to include in the response, used for paging.
     * @opt_param string pageToken A continuation token, used to page through URL channels. To retrieve the next page, set this parameter to the value of "nextPageToken" from the previous response.
     * @return UrlChannels
     */
    public function listUrlchannels($adClientId, $optParams = array())
    {
        $params = array('adClientId' => $adClientId);
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', array($params));
        if ($this->useObjects()) {
            return new UrlChannels($data);
        } else {
            return $data;
        }
    }
}