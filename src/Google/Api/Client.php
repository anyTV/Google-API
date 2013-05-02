<?php
/*
 * Copyright 2010 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace Google\Api;
use Google;

/**
 * The Google API Client
 * http://code.google.com/p/google-api-php-client/
 *
 * @author Chris Chabot <chabotc@google.com>
 * @author Chirag Shah <chirags@google.com>
 * @author Dan Cryer <dan@block8.co.uk>
 */
class Client {
  /**
   * @static
   * @var Google\Auth $auth
   */
  static $auth;

  /**
   * @static
   * @var Google\IO $io
   */
  static $io;

  /**
   * @static
   * @var Google\Cache $cache
   */
  static $cache;

  /**
   * @static
   * @var boolean $useBatch
   */
  static $useBatch = false;

  /** @var array $scopes */
  protected $scopes = array();

  /** @var bool $useObjects */
  protected $useObjects = false;

  // definitions of services that are discovered.
  protected $services = array();

  // Used to track authenticated state, can't discover services after doing authenticate()
  private $authenticated = false;

  /** @var array $config */
  protected $config = array();

  public function __construct($config = array()) {
    if (! ini_get('date.timezone') && function_exists('date_default_timezone_set')) {
      date_default_timezone_set('UTC');
    }

    require(dirname(__FILE__) . '/config.php');

    $apiConfig = array_merge($apiConfig, $config);
    self::$cache = new $apiConfig['cacheClass']();
    self::$auth = new $apiConfig['authClass']();
    self::$io = new $apiConfig['ioClass']();

    $this->config = $apiConfig;
  }

  /**
   * Add a service
   */
  public function addService($service, $version = false) {
    if ($this->authenticated) {
      throw new Google\Exception('Cant add services after having authenticated');
    }
    $this->services[$service] = array();
    if (isset($this->config['services'][$service])) {
      // Merge the service descriptor with the default values
      $this->services[$service] = array_merge($this->services[$service], $this->config['services'][$service]);
    }
  }

  public function authenticate($code = null) {
    $service = $this->prepareService();
    $this->authenticated = true;
    return self::$auth->authenticate($service, $code);
  }

  /**
   * @return array
   * @visible For Testing
   */
  public function prepareService() {
    $service = array();
    $scopes = array();
    if ($this->scopes) {
      $scopes = $this->scopes;
    } else {
      foreach ($this->services as $key => $val) {
        if (isset($val['scope'])) {
          if (is_array($val['scope'])) {
            $scopes = array_merge($val['scope'], $scopes);
          } else {
            $scopes[] = $val['scope'];
          }
        } else {
          $scopes[] = 'https://www.googleapis.com/auth/' . $key;
        }
        unset($val['discoveryURI']);
        unset($val['scope']);
        $service = array_merge($service, $val);
      }
    }
    $service['scope'] = implode(' ', $scopes);
    return $service;
  }

  /**
   * Set the OAuth 2.0 access token using the string that resulted from calling authenticate()
   * or Google\Api\Client#getAccessToken().
   * @param string $accessToken JSON encoded string containing in the following format:
   * {"access_token":"TOKEN", "refresh_token":"TOKEN", "token_type":"Bearer",
   *  "expires_in":3600, "id_token":"TOKEN", "created":1320790426}
   */
  public function setAccessToken($accessToken) {
    if ($accessToken == null || 'null' == $accessToken) {
      $accessToken = null;
    }
    self::$auth->setAccessToken($accessToken);
  }

  /**
   * Set the type of Auth class the client should use.
   * @param string $authClassName
   */
  public function setAuthClass($authClassName) {
    self::$auth = new $authClassName();
  }

  /**
   * Construct the OAuth 2.0 authorization request URI.
   * @return string
   */
  public function createAuthUrl() {
    $service = $this->prepareService();
    return self::$auth->createAuthUrl($service['scope']);
  }

  /**
   * Get the OAuth 2.0 access token.
   * @return string $accessToken JSON encoded string in the following format:
   * {"access_token":"TOKEN", "refresh_token":"TOKEN", "token_type":"Bearer",
   *  "expires_in":3600,"id_token":"TOKEN", "created":1320790426}
   */
  public function getAccessToken() {
    $token = self::$auth->getAccessToken();
    return (null == $token || 'null' == $token) ? null : $token;
  }

  /**
   * Returns if the access_token is expired.
   * @return bool Returns True if the access_token is expired.
   */
  public function isAccessTokenExpired() {
    return self::$auth->isAccessTokenExpired();
  }

  /**
   * Set the developer key to use, these are obtained through the API Console.
   * @see http://code.google.com/apis/console-help/#generatingdevkeys
   * @param string $developerKey
   */
  public function setDeveloperKey($developerKey) {
    self::$auth->setDeveloperKey($developerKey);
  }

  /**
   * Set OAuth 2.0 "state" parameter to achieve per-request customization.
   * @see http://tools.ietf.org/html/draft-ietf-oauth-v2-22#section-3.1.2.2
   * @param string $state
   */
  public function setState($state) {
    self::$auth->setState($state);
  }

  /**
   * @param string $accessType Possible values for access_type include:
   *  {@code "offline"} to request offline access from the user. (This is the default value)
   *  {@code "online"} to request online access from the user.
   */
  public function setAccessType($accessType) {
    self::$auth->setAccessType($accessType);
  }

  /**
   * @param string $approvalPrompt Possible values for approval_prompt include:
   *  {@code "force"} to force the approval UI to appear. (This is the default value)
   *  {@code "auto"} to request auto-approval when possible.
   */
  public function setApprovalPrompt($approvalPrompt) {
    self::$auth->setApprovalPrompt($approvalPrompt);
  }

  /**
   * Set the application name, this is included in the User-Agent HTTP header.
   * @param string $applicationName
   */
  public function setApplicationName($applicationName) {
    $this->config['application_name'] = $applicationName;
  }

  /**
   * Set the OAuth 2.0 Client ID.
   * @param string $clientId
   */
  public function setClientId($clientId) {
    $this->config['oauth2_client_id'] = $clientId;
    self::$auth->clientId = $clientId;
  }

  /**
   * Get the OAuth 2.0 Client ID.
   */
  public function getClientId() {
    return self::$auth->clientId;
  }

  /**
   * Set the OAuth 2.0 Client Secret.
   * @param string $clientSecret
   */
  public function setClientSecret($clientSecret) {
    $this->config['oauth2_client_secret'] = $clientSecret;
    self::$auth->clientSecret = $clientSecret;
  }

  /**
   * Get the OAuth 2.0 Client Secret.
   */
  public function getClientSecret() {
    return self::$auth->clientSecret;
  }

  /**
   * Set the OAuth 2.0 Redirect URI.
   * @param string $redirectUri
   */
  public function setRedirectUri($redirectUri) {
    $this->config['oauth2_redirect_uri'] = $redirectUri;
    self::$auth->redirectUri = $redirectUri;
  }

  /**
   * Get the OAuth 2.0 Redirect URI.
   */
  public function getRedirectUri() {
    return self::$auth->redirectUri;
  }

  /**
   * Fetches a fresh OAuth 2.0 access token with the given refresh token.
   * @param string $refreshToken
   * @return void
   */
  public function refreshToken($refreshToken) {
    self::$auth->refreshToken($refreshToken);
  }

  /**
   * Revoke an OAuth2 access token or refresh token. This method will revoke the current access
   * token, if a token isn't provided.
   * @throws Google\Exception\AuthException
   * @param string|null $token The token (access token or a refresh token) that should be revoked.
   * @return boolean Returns True if the revocation was successful, otherwise False.
   */
  public function revokeToken($token = null) {
    self::$auth->revokeToken($token);
  }

  /**
   * Verify an id_token. This method will verify the current id_token, if one
   * isn't provided.
   * @throws Google\Exception\AuthException
   * @param string|null $token The token (id_token) that should be verified.
   * @return Google\Auth\LoginTicket Returns an apiLoginTicket if the verification was
   * successful.
   */
  public function verifyIdToken($token = null) {
    return self::$auth->verifyIdToken($token);
  }

  /**
   * @param Google\Auth\AssertionCredentials $creds
   * @return void
   */
  public function setAssertionCredentials(Google_AssertionCredentials $creds) {
    self::$auth->setAssertionCredentials($creds);
  }

  /**
   * This function allows you to overrule the automatically generated scopes,
   * so that you can ask for more or less permission in the auth flow
   * Set this before you call authenticate() though!
   * @param array $scopes, ie: array('https://www.googleapis.com/auth/plus.me', 'https://www.googleapis.com/auth/moderator')
   */
  public function setScopes($scopes) {
    $this->scopes = is_string($scopes) ? explode(" ", $scopes) : $scopes;
  }

  /**
   * Returns the list of scopes set on the client
   * @return array the list of scopes
   *
   */
  public function getScopes() {
     return $this->scopes;
  }

  /**
   * Declare if objects should be returned by the api service classes.
   *
   * @param boolean $useObjects True if objects should be returned by the service classes.
   * False if associative arrays should be returned (default behavior).
   * @experimental
   */
  public function setUseObjects($useObjects) {
    $this->config['use_objects'] = $useObjects;
  }

  /**
   * Declare if objects should be returned by the api service classes.
   *
   * @param boolean $useBatch True if the experimental batch support should
   * be enabled. Defaults to False.
   * @experimental
   */
  public function setUseBatch($useBatch) {
    self::$useBatch = $useBatch;
  }

  /**
   * @static
   * @return Google\Auth the implementation of apiAuth.
   */
  public static function getAuth() {
    return static::$auth;
  }

  /**
   * @static
   * @return Google\IO the implementation of apiIo.
   */
  public static function getIo() {
    return static::$io;
  }

  /**
   * @return Google\Cache the implementation of apiCache.
   */
  public function getCache() {
    return static::$cache;
  }
}
