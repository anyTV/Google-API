<?php
/**
 * Created by JetBrains PhpStorm.
 * User: dan
 * Date: 03/05/2013
 * Time: 11:09
 * To change this template use File | Settings | File Templates.
 */
namespace Google\Service\Resource;

use Google\Service\Resource;
use Google\Model\Account;
use Google\Model\Accounts;

class AccountsResource extends Resource
{


    /**
     * Gets one account by ID. (accounts.get)
     *
     * @param int $id The account id
     * @param array $optParams Optional parameters.
     * @return \Google\Model\Account
     */
    public function get($id, $optParams = array())
    {
        $params = array('id' => $id);
        $params = array_merge($params, $optParams);
        $data = $this->__call('get', array($params));
        if ($this->useObjects()) {
            return new Account($data);
        } else {
            return $data;
        }
    }

    /**
     * Retrieves the authenticated user's list of accounts. (accounts.list)
     *
     * @param array $optParams Optional parameters.
     * @return \Google\Model\Accounts
     */
    public function listAccounts($optParams = array())
    {
        $params = array();
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', array($params));
        if ($this->useObjects()) {
            return new Accounts($data);
        } else {
            return $data;
        }
    }

    /**
     * Updates an existing account. This method supports patch semantics. (accounts.patch)
     *
     * @param int $id The account id
     * @param Account $postBody
     * @param array $optParams Optional parameters.
     * @return \Google\Model\Account
     */
    public function patch($id, Account $postBody, $optParams = array())
    {
        $params = array('id' => $id, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        $data = $this->__call('patch', array($params));
        if ($this->useObjects()) {
            return new Account($data);
        } else {
            return $data;
        }
    }

    /**
     * Updates an existing account. (accounts.update)
     *
     * @param int $id The account id
     * @param Account $postBody
     * @param array $optParams Optional parameters.
     * @return Account
     */
    public function update($id, Account $postBody, $optParams = array())
    {
        $params = array('id' => $id, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        $data = $this->__call('update', array($params));
        if ($this->useObjects()) {
            return new Account($data);
        } else {
            return $data;
        }
    }
}