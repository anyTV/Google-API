<?php
/*
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */


/**
 * The "adclients" collection of methods.
 * Typical usage is:
 *  <code>
 *   $adexchangesellerService = new AdExchangeSellerService(...);
 *   $adclients = $adexchangesellerService->adclients;
 *  </code>
 */
namespace Google\Model;
use Google\Client;
use Google\Service;
use Google\Model;
use Google\Service\Resource;


class UrlChannels extends Model
{
    public $etag;
    protected $__itemsType = 'UrlChannel';
    protected $__itemsDataType = 'array';
    public $items;
    public $kind;
    public $nextPageToken;

    public function setEtag($etag)
    {
        $this->etag = $etag;
    }

    public function getEtag()
    {
        return $this->etag;
    }

    public function setItems( /* array(UrlChannel) */
        $items)
    {
        $this->assertIsArray($items, 'UrlChannel', __METHOD__);
        $this->items = $items;
    }

    public function getItems()
    {
        return $this->items;
    }

    public function setKind($kind)
    {
        $this->kind = $kind;
    }

    public function getKind()
    {
        return $this->kind;
    }

    public function setNextPageToken($nextPageToken)
    {
        $this->nextPageToken = $nextPageToken;
    }

    public function getNextPageToken()
    {
        return $this->nextPageToken;
    }
}
