<?php
/**
 * Created by JetBrains PhpStorm.
 * User: dan
 * Date: 03/05/2013
 * Time: 11:23
 * To change this template use File | Settings | File Templates.
 */
namespace Google\Service\Resource;

use Google\Service\Resource;
use Google\Model\AdClients;

class AdClientsResource extends Resource
{


    /**
     * List all ad clients in this Ad Exchange account. (adclients.list)
     *
     * @param array $optParams Optional parameters.
     *
     * @opt_param string maxResults The maximum number of ad clients to include in the response, used for paging.
     * @opt_param string pageToken A continuation token, used to page through ad clients. To retrieve the next page, set this parameter to the value of "nextPageToken" from the previous response.
     * @return AdClients
     */
    public function listAdclients($optParams = array())
    {
        $params = array();
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', array($params));
        if ($this->useObjects()) {
            return new AdClients($data);
        } else {
            return $data;
        }
    }
}