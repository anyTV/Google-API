<?php
/**
 * Created by JetBrains PhpStorm.
 * User: dan
 * Date: 03/05/2013
 * Time: 11:30
 * To change this template use File | Settings | File Templates.
 */
namespace Google\Service;
use Google\Client;
use Google\Service;

/**
 * Service definition for Google_AdExchangeSeller (v1).
 *
 * <p>
 * Gives Ad Exchange seller users access to their inventory and the ability to generate reports
 * </p>
 *
 * <p>
 * For more information about this service, see the
 * <a href="https://developers.google.com/adsense/management/" target="_blank">API Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class AdExchangeSellerService extends Service
{
    public $adclients;
    public $adunits;
    public $adunits_customchannels;
    public $customchannels;
    public $customchannels_adunits;
    public $reports;
    public $reports_saved;
    public $urlchannels;

    /**
     * Constructs the internal representation of the AdExchangeSeller service.
     *
     * @param Client $client
     */
    public function __construct(Client $client)
    {
        $this->servicePath = 'adexchangeseller/v1/';
        $this->version = 'v1';
        $this->serviceName = 'adexchangeseller';

        $client->addService($this->serviceName, $this->version);
        $this->adclients = new Resource\AdClientsResource($this, $this->serviceName, 'adclients', json_decode('{"methods": {"list": {"id": "adexchangeseller.adclients.list", "path": "adclients", "httpMethod": "GET", "parameters": {"maxResults": {"type": "integer", "format": "uint32", "minimum": "0", "maximum": "10000", "location": "query"}, "pageToken": {"type": "string", "location": "query"}}, "response": {"$ref": "AdClients"}}}}', true));
        $this->adunits = new Resource\AdUnitsResource($this, $this->serviceName, 'adunits', json_decode('{"methods": {"get": {"id": "adexchangeseller.adunits.get", "path": "adclients/{adClientId}/adunits/{adUnitId}", "httpMethod": "GET", "parameters": {"adClientId": {"type": "string", "required": true, "location": "path"}, "adUnitId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "AdUnit"}}, "list": {"id": "adexchangeseller.adunits.list", "path": "adclients/{adClientId}/adunits", "httpMethod": "GET", "parameters": {"adClientId": {"type": "string", "required": true, "location": "path"}, "includeInactive": {"type": "boolean", "location": "query"}, "maxResults": {"type": "integer", "format": "uint32", "minimum": "0", "maximum": "10000", "location": "query"}, "pageToken": {"type": "string", "location": "query"}}, "response": {"$ref": "AdUnits"}}}}', true));
        $this->adunits_customchannels = new Resource\AdunitsCustomChannelsResource($this, $this->serviceName, 'customchannels', json_decode('{"methods": {"list": {"id": "adexchangeseller.adunits.customchannels.list", "path": "adclients/{adClientId}/adunits/{adUnitId}/customchannels", "httpMethod": "GET", "parameters": {"adClientId": {"type": "string", "required": true, "location": "path"}, "adUnitId": {"type": "string", "required": true, "location": "path"}, "maxResults": {"type": "integer", "format": "uint32", "minimum": "0", "maximum": "10000", "location": "query"}, "pageToken": {"type": "string", "location": "query"}}, "response": {"$ref": "CustomChannels"}}}}', true));
        $this->customchannels = new Resource\CustomChannelsResource($this, $this->serviceName, 'customchannels', json_decode('{"methods": {"get": {"id": "adexchangeseller.customchannels.get", "path": "adclients/{adClientId}/customchannels/{customChannelId}", "httpMethod": "GET", "parameters": {"adClientId": {"type": "string", "required": true, "location": "path"}, "customChannelId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "CustomChannel"}}, "list": {"id": "adexchangeseller.customchannels.list", "path": "adclients/{adClientId}/customchannels", "httpMethod": "GET", "parameters": {"adClientId": {"type": "string", "required": true, "location": "path"}, "maxResults": {"type": "integer", "format": "uint32", "minimum": "0", "maximum": "10000", "location": "query"}, "pageToken": {"type": "string", "location": "query"}}, "response": {"$ref": "CustomChannels"}}}}', true));
        $this->customchannels_adunits = new Resource\CustomChannelsAdUnitsResource($this, $this->serviceName, 'adunits', json_decode('{"methods": {"list": {"id": "adexchangeseller.customchannels.adunits.list", "path": "adclients/{adClientId}/customchannels/{customChannelId}/adunits", "httpMethod": "GET", "parameters": {"adClientId": {"type": "string", "required": true, "location": "path"}, "customChannelId": {"type": "string", "required": true, "location": "path"}, "includeInactive": {"type": "boolean", "location": "query"}, "maxResults": {"type": "integer", "format": "uint32", "minimum": "0", "maximum": "10000", "location": "query"}, "pageToken": {"type": "string", "location": "query"}}, "response": {"$ref": "AdUnits"}}}}', true));
        $this->reports = new Resource\ReportsResource($this, $this->serviceName, 'reports', json_decode('{"methods": {"generate": {"id": "adexchangeseller.reports.generate", "path": "reports", "httpMethod": "GET", "parameters": {"dimension": {"type": "string", "repeated": true, "location": "query"}, "endDate": {"type": "string", "required": true, "location": "query"}, "filter": {"type": "string", "repeated": true, "location": "query"}, "locale": {"type": "string", "location": "query"}, "maxResults": {"type": "integer", "format": "uint32", "minimum": "0", "maximum": "50000", "location": "query"}, "metric": {"type": "string", "repeated": true, "location": "query"}, "sort": {"type": "string", "repeated": true, "location": "query"}, "startDate": {"type": "string", "required": true, "location": "query"}, "startIndex": {"type": "integer", "format": "uint32", "minimum": "0", "maximum": "5000", "location": "query"}}, "response": {"$ref": "Report"}, "supportsMediaDownload": true}}}', true));
        $this->reports_saved = new Resource\ReportsSavedResource($this, $this->serviceName, 'saved', json_decode('{"methods": {"generate": {"id": "adexchangeseller.reports.saved.generate", "path": "reports/{savedReportId}", "httpMethod": "GET", "parameters": {"locale": {"type": "string", "location": "query"}, "maxResults": {"type": "integer", "format": "int32", "minimum": "0", "maximum": "50000", "location": "query"}, "savedReportId": {"type": "string", "required": true, "location": "path"}, "startIndex": {"type": "integer", "format": "int32", "minimum": "0", "maximum": "5000", "location": "query"}}, "response": {"$ref": "Report"}}, "list": {"id": "adexchangeseller.reports.saved.list", "path": "reports/saved", "httpMethod": "GET", "parameters": {"maxResults": {"type": "integer", "format": "int32", "minimum": "0", "maximum": "100", "location": "query"}, "pageToken": {"type": "string", "location": "query"}}, "response": {"$ref": "SavedReports"}}}}', true));
        $this->urlchannels = new Resource\UrlChannelsResource($this, $this->serviceName, 'urlchannels', json_decode('{"methods": {"list": {"id": "adexchangeseller.urlchannels.list", "path": "adclients/{adClientId}/urlchannels", "httpMethod": "GET", "parameters": {"adClientId": {"type": "string", "required": true, "location": "path"}, "maxResults": {"type": "integer", "format": "uint32", "minimum": "0", "maximum": "10000", "location": "query"}, "pageToken": {"type": "string", "location": "query"}}, "response": {"$ref": "UrlChannels"}}}}', true));

    }
}