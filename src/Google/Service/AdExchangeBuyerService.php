<?php
/**
 * Created by JetBrains PhpStorm.
 * User: dan
 * Date: 03/05/2013
 * Time: 11:15
 * To change this template use File | Settings | File Templates.
 */
namespace Google\Service;
use Google\Client;
use Google\Service;

/**
 * Service definition for Google_Adexchangebuyer (v1.2).
 *
 * <p>
 * Lets you manage your Ad Exchange Buyer account.
 * </p>
 *
 * <p>
 * For more information about this service, see the
 * <a href="https://developers.google.com/ad-exchange/buyer-rest" target="_blank">API Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class AdExchangeBuyerService extends Service
{
    public $accounts;
    public $creatives;
    public $directDeals;

    /**
     * Constructs the internal representation of the Adexchangebuyer service.
     *
     * @param Client $client
     */
    public function __construct(Client $client)
    {
        $this->servicePath = 'adexchangebuyer/v1.2/';
        $this->version = 'v1.2';
        $this->serviceName = 'adexchangebuyer';

        $client->addService($this->serviceName, $this->version);
        $this->accounts = new Resource\AccountsResource($this, $this->serviceName, 'accounts', json_decode('{"methods": {"patch": {"scopes": ["https://www.googleapis.com/auth/adexchange.buyer"], "parameters": {"id": {"location": "path", "required": true, "type": "integer", "format": "int32"}}, "request": {"$ref": "Account"}, "response": {"$ref": "Account"}, "httpMethod": "PATCH", "path": "accounts/{id}", "id": "adexchangebuyer.accounts.patch"}, "list": {"scopes": ["https://www.googleapis.com/auth/adexchange.buyer"], "id": "adexchangebuyer.accounts.list", "httpMethod": "GET", "path": "accounts", "response": {"$ref": "AccountsList"}}, "update": {"scopes": ["https://www.googleapis.com/auth/adexchange.buyer"], "parameters": {"id": {"location": "path", "required": true, "type": "integer", "format": "int32"}}, "request": {"$ref": "Account"}, "response": {"$ref": "Account"}, "httpMethod": "PUT", "path": "accounts/{id}", "id": "adexchangebuyer.accounts.update"}, "get": {"scopes": ["https://www.googleapis.com/auth/adexchange.buyer"], "parameters": {"id": {"location": "path", "required": true, "type": "integer", "format": "int32"}}, "response": {"$ref": "Account"}, "httpMethod": "GET", "path": "accounts/{id}", "id": "adexchangebuyer.accounts.get"}}}', true));
        $this->creatives = new Resource\CreativesResource($this, $this->serviceName, 'creatives', json_decode('{"methods": {"insert": {"scopes": ["https://www.googleapis.com/auth/adexchange.buyer"], "request": {"$ref": "Creative"}, "id": "adexchangebuyer.creatives.insert", "httpMethod": "POST", "path": "creatives", "response": {"$ref": "Creative"}}, "list": {"scopes": ["https://www.googleapis.com/auth/adexchange.buyer"], "parameters": {"statusFilter": {"enum": ["approved", "disapproved", "not_checked"], "type": "string", "location": "query"}, "pageToken": {"type": "string", "location": "query"}, "maxResults": {"format": "uint32", "maximum": "1000", "minimum": "1", "location": "query", "type": "integer"}}, "id": "adexchangebuyer.creatives.list", "httpMethod": "GET", "path": "creatives", "response": {"$ref": "CreativesResource"}}, "get": {"scopes": ["https://www.googleapis.com/auth/adexchange.buyer"], "parameters": {"buyerCreativeId": {"required": true, "type": "string", "location": "path"}, "accountId": {"location": "path", "required": true, "type": "integer", "format": "int32"}}, "response": {"$ref": "Creative"}, "httpMethod": "GET", "path": "creatives/{accountId}/{buyerCreativeId}", "id": "adexchangebuyer.creatives.get"}}}', true));
        $this->directDeals = new Resource\DirectDealsResource($this, $this->serviceName, 'directDeals', json_decode('{"methods": {"list": {"scopes": ["https://www.googleapis.com/auth/adexchange.buyer"], "id": "adexchangebuyer.directDeals.list", "httpMethod": "GET", "path": "directdeals", "response": {"$ref": "DirectDealsResource"}}, "get": {"scopes": ["https://www.googleapis.com/auth/adexchange.buyer"], "parameters": {"id": {"location": "path", "required": true, "type": "string", "format": "int64"}}, "response": {"$ref": "DirectDeal"}, "httpMethod": "GET", "path": "directdeals/{id}", "id": "adexchangebuyer.directDeals.get"}}}', true));

    }
}