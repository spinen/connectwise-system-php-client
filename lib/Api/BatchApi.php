<?php
/**
 * BatchApi
 * PHP version 5
 *
 * @category Class
 * @package  Spinen\ConnectWise\Clients\System
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * System API
 *
 * ConnectWise System API
 *
 * OpenAPI spec version: 1.0.0
 * Contact: platform@connectwise.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Spinen\ConnectWise\Clients\System\Api;

use \Spinen\ConnectWise\Clients\System\ApiClient;
use \Spinen\ConnectWise\Clients\System\ApiException;
use \Spinen\ConnectWise\Clients\System\Configuration;
use \Spinen\ConnectWise\Clients\System\ObjectSerializer;

/**
 * BatchApi Class Doc Comment
 *
 * @category Class
 * @package  Spinen\ConnectWise\Clients\System
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class BatchApi
{
    /**
     * API Client
     *
     * @var \Spinen\ConnectWise\Clients\System\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \Spinen\ConnectWise\Clients\System\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\Spinen\ConnectWise\Clients\System\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \Spinen\ConnectWise\Clients\System\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \Spinen\ConnectWise\Clients\System\ApiClient $apiClient set the API client
     *
     * @return BatchApi
     */
    public function setApiClient(\Spinen\ConnectWise\Clients\System\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation systemBatchPost
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for System API generated by Swagger Code Generator.
     *
     * @param \Spinen\ConnectWise\Clients\System\Model\BatchRequest $request  (required)
     * @throws \Spinen\ConnectWise\Clients\System\ApiException on non-2xx response
     * @return \Spinen\ConnectWise\Clients\System\Model\BatchResponse
     */
    public function systemBatchPost($request)
    {
        list($response) = $this->systemBatchPostWithHttpInfo($request);
        return $response;
    }

    /**
     * Operation systemBatchPostWithHttpInfo
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for System API generated by Swagger Code Generator.
     *
     * @param \Spinen\ConnectWise\Clients\System\Model\BatchRequest $request  (required)
     * @throws \Spinen\ConnectWise\Clients\System\ApiException on non-2xx response
     * @return array of \Spinen\ConnectWise\Clients\System\Model\BatchResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function systemBatchPostWithHttpInfo($request)
    {
        // verify the required parameter 'request' is set
        if ($request === null) {
            throw new \InvalidArgumentException('Missing the required parameter $request when calling systemBatchPost');
        }
        // parse inputs
        $resourcePath = "/system/batch";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($request)) {
            $_tempBody = $request;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires HTTP basic authentication
        if (strlen($this->apiClient->getConfig()->getUsername()) !== 0 or strlen($this->apiClient->getConfig()->getPassword()) !== 0) {
            $headerParams['Authorization'] = 'Basic ' . base64_encode($this->apiClient->getConfig()->getUsername() . ":" . $this->apiClient->getConfig()->getPassword());
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Spinen\ConnectWise\Clients\System\Model\BatchResponse',
                '/system/batch'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Spinen\ConnectWise\Clients\System\Model\BatchResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\System\Model\BatchResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\System\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
