<?php
/**
 * UserDefinedFieldsApi
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
 * UserDefinedFieldsApi Class Doc Comment
 *
 * @category Class
 * @package  Spinen\ConnectWise\Clients\System
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UserDefinedFieldsApi
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
     * @return UserDefinedFieldsApi
     */
    public function setApiClient(\Spinen\ConnectWise\Clients\System\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation systemUserDefinedFieldsCountGet
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for System API generated by Swagger Code Generator.
     *
     * @param string $conditions  (optional)
     * @throws \Spinen\ConnectWise\Clients\System\ApiException on non-2xx response
     * @return \Spinen\ConnectWise\Clients\System\Model\Count
     */
    public function systemUserDefinedFieldsCountGet($conditions = null)
    {
        list($response) = $this->systemUserDefinedFieldsCountGetWithHttpInfo($conditions);
        return $response;
    }

    /**
     * Operation systemUserDefinedFieldsCountGetWithHttpInfo
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for System API generated by Swagger Code Generator.
     *
     * @param string $conditions  (optional)
     * @throws \Spinen\ConnectWise\Clients\System\ApiException on non-2xx response
     * @return array of \Spinen\ConnectWise\Clients\System\Model\Count, HTTP status code, HTTP response headers (array of strings)
     */
    public function systemUserDefinedFieldsCountGetWithHttpInfo($conditions = null)
    {
        // parse inputs
        $resourcePath = "/system/userDefinedFields/count";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // query params
        if ($conditions !== null) {
            $queryParams['conditions'] = $this->apiClient->getSerializer()->toQueryValue($conditions);
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
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
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Spinen\ConnectWise\Clients\System\Model\Count',
                '/system/userDefinedFields/count'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Spinen\ConnectWise\Clients\System\Model\Count', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\System\Model\Count', $e->getResponseHeaders());
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

    /**
     * Operation systemUserDefinedFieldsGet
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for System API generated by Swagger Code Generator.
     *
     * @param string $conditions  (optional)
     * @param string $order_by  (optional)
     * @param string $childconditions  (optional)
     * @param string $customfieldconditions  (optional)
     * @param int $page  (optional)
     * @param int $page_size  (optional)
     * @throws \Spinen\ConnectWise\Clients\System\ApiException on non-2xx response
     * @return \Spinen\ConnectWise\Clients\System\Model\UserDefinedField[]
     */
    public function systemUserDefinedFieldsGet($conditions = null, $order_by = null, $childconditions = null, $customfieldconditions = null, $page = null, $page_size = null)
    {
        list($response) = $this->systemUserDefinedFieldsGetWithHttpInfo($conditions, $order_by, $childconditions, $customfieldconditions, $page, $page_size);
        return $response;
    }

    /**
     * Operation systemUserDefinedFieldsGetWithHttpInfo
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for System API generated by Swagger Code Generator.
     *
     * @param string $conditions  (optional)
     * @param string $order_by  (optional)
     * @param string $childconditions  (optional)
     * @param string $customfieldconditions  (optional)
     * @param int $page  (optional)
     * @param int $page_size  (optional)
     * @throws \Spinen\ConnectWise\Clients\System\ApiException on non-2xx response
     * @return array of \Spinen\ConnectWise\Clients\System\Model\UserDefinedField[], HTTP status code, HTTP response headers (array of strings)
     */
    public function systemUserDefinedFieldsGetWithHttpInfo($conditions = null, $order_by = null, $childconditions = null, $customfieldconditions = null, $page = null, $page_size = null)
    {
        // parse inputs
        $resourcePath = "/system/userDefinedFields";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // query params
        if ($conditions !== null) {
            $queryParams['conditions'] = $this->apiClient->getSerializer()->toQueryValue($conditions);
        }
        // query params
        if ($order_by !== null) {
            $queryParams['orderBy'] = $this->apiClient->getSerializer()->toQueryValue($order_by);
        }
        // query params
        if ($childconditions !== null) {
            $queryParams['childconditions'] = $this->apiClient->getSerializer()->toQueryValue($childconditions);
        }
        // query params
        if ($customfieldconditions !== null) {
            $queryParams['customfieldconditions'] = $this->apiClient->getSerializer()->toQueryValue($customfieldconditions);
        }
        // query params
        if ($page !== null) {
            $queryParams['page'] = $this->apiClient->getSerializer()->toQueryValue($page);
        }
        // query params
        if ($page_size !== null) {
            $queryParams['pageSize'] = $this->apiClient->getSerializer()->toQueryValue($page_size);
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
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
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Spinen\ConnectWise\Clients\System\Model\UserDefinedField[]',
                '/system/userDefinedFields'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Spinen\ConnectWise\Clients\System\Model\UserDefinedField[]', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\System\Model\UserDefinedField[]', $e->getResponseHeaders());
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

    /**
     * Operation systemUserDefinedFieldsIdDelete
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for System API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @throws \Spinen\ConnectWise\Clients\System\ApiException on non-2xx response
     * @return void
     */
    public function systemUserDefinedFieldsIdDelete($id)
    {
        list($response) = $this->systemUserDefinedFieldsIdDeleteWithHttpInfo($id);
        return $response;
    }

    /**
     * Operation systemUserDefinedFieldsIdDeleteWithHttpInfo
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for System API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @throws \Spinen\ConnectWise\Clients\System\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function systemUserDefinedFieldsIdDeleteWithHttpInfo($id)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling systemUserDefinedFieldsIdDelete');
        }
        // parse inputs
        $resourcePath = "/system/userDefinedFields/{id}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept([]);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
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
                'DELETE',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/system/userDefinedFields/{id}'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\System\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation systemUserDefinedFieldsIdGet
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for System API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @throws \Spinen\ConnectWise\Clients\System\ApiException on non-2xx response
     * @return \Spinen\ConnectWise\Clients\System\Model\UserDefinedField
     */
    public function systemUserDefinedFieldsIdGet($id)
    {
        list($response) = $this->systemUserDefinedFieldsIdGetWithHttpInfo($id);
        return $response;
    }

    /**
     * Operation systemUserDefinedFieldsIdGetWithHttpInfo
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for System API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @throws \Spinen\ConnectWise\Clients\System\ApiException on non-2xx response
     * @return array of \Spinen\ConnectWise\Clients\System\Model\UserDefinedField, HTTP status code, HTTP response headers (array of strings)
     */
    public function systemUserDefinedFieldsIdGetWithHttpInfo($id)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling systemUserDefinedFieldsIdGet');
        }
        // parse inputs
        $resourcePath = "/system/userDefinedFields/{id}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
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
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Spinen\ConnectWise\Clients\System\Model\UserDefinedField',
                '/system/userDefinedFields/{id}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Spinen\ConnectWise\Clients\System\Model\UserDefinedField', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\System\Model\UserDefinedField', $e->getResponseHeaders());
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

    /**
     * Operation systemUserDefinedFieldsIdPatch
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for System API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param \Spinen\ConnectWise\Clients\System\Model\PatchOperation[] $operations  (required)
     * @throws \Spinen\ConnectWise\Clients\System\ApiException on non-2xx response
     * @return \Spinen\ConnectWise\Clients\System\Model\UserDefinedField
     */
    public function systemUserDefinedFieldsIdPatch($id, $operations)
    {
        list($response) = $this->systemUserDefinedFieldsIdPatchWithHttpInfo($id, $operations);
        return $response;
    }

    /**
     * Operation systemUserDefinedFieldsIdPatchWithHttpInfo
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for System API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param \Spinen\ConnectWise\Clients\System\Model\PatchOperation[] $operations  (required)
     * @throws \Spinen\ConnectWise\Clients\System\ApiException on non-2xx response
     * @return array of \Spinen\ConnectWise\Clients\System\Model\UserDefinedField, HTTP status code, HTTP response headers (array of strings)
     */
    public function systemUserDefinedFieldsIdPatchWithHttpInfo($id, $operations)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling systemUserDefinedFieldsIdPatch');
        }
        // verify the required parameter 'operations' is set
        if ($operations === null) {
            throw new \InvalidArgumentException('Missing the required parameter $operations when calling systemUserDefinedFieldsIdPatch');
        }
        // parse inputs
        $resourcePath = "/system/userDefinedFields/{id}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($operations)) {
            $_tempBody = $operations;
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
                'PATCH',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Spinen\ConnectWise\Clients\System\Model\UserDefinedField',
                '/system/userDefinedFields/{id}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Spinen\ConnectWise\Clients\System\Model\UserDefinedField', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\System\Model\UserDefinedField', $e->getResponseHeaders());
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

    /**
     * Operation systemUserDefinedFieldsIdPut
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for System API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param \Spinen\ConnectWise\Clients\System\Model\UserDefinedField $user_defined_field  (required)
     * @throws \Spinen\ConnectWise\Clients\System\ApiException on non-2xx response
     * @return \Spinen\ConnectWise\Clients\System\Model\UserDefinedField
     */
    public function systemUserDefinedFieldsIdPut($id, $user_defined_field)
    {
        list($response) = $this->systemUserDefinedFieldsIdPutWithHttpInfo($id, $user_defined_field);
        return $response;
    }

    /**
     * Operation systemUserDefinedFieldsIdPutWithHttpInfo
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for System API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param \Spinen\ConnectWise\Clients\System\Model\UserDefinedField $user_defined_field  (required)
     * @throws \Spinen\ConnectWise\Clients\System\ApiException on non-2xx response
     * @return array of \Spinen\ConnectWise\Clients\System\Model\UserDefinedField, HTTP status code, HTTP response headers (array of strings)
     */
    public function systemUserDefinedFieldsIdPutWithHttpInfo($id, $user_defined_field)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling systemUserDefinedFieldsIdPut');
        }
        // verify the required parameter 'user_defined_field' is set
        if ($user_defined_field === null) {
            throw new \InvalidArgumentException('Missing the required parameter $user_defined_field when calling systemUserDefinedFieldsIdPut');
        }
        // parse inputs
        $resourcePath = "/system/userDefinedFields/{id}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($user_defined_field)) {
            $_tempBody = $user_defined_field;
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
                'PUT',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Spinen\ConnectWise\Clients\System\Model\UserDefinedField',
                '/system/userDefinedFields/{id}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Spinen\ConnectWise\Clients\System\Model\UserDefinedField', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\System\Model\UserDefinedField', $e->getResponseHeaders());
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

    /**
     * Operation systemUserDefinedFieldsPost
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for System API generated by Swagger Code Generator.
     *
     * @param \Spinen\ConnectWise\Clients\System\Model\UserDefinedField $user_defined_field  (required)
     * @throws \Spinen\ConnectWise\Clients\System\ApiException on non-2xx response
     * @return \Spinen\ConnectWise\Clients\System\Model\UserDefinedField
     */
    public function systemUserDefinedFieldsPost($user_defined_field)
    {
        list($response) = $this->systemUserDefinedFieldsPostWithHttpInfo($user_defined_field);
        return $response;
    }

    /**
     * Operation systemUserDefinedFieldsPostWithHttpInfo
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for System API generated by Swagger Code Generator.
     *
     * @param \Spinen\ConnectWise\Clients\System\Model\UserDefinedField $user_defined_field  (required)
     * @throws \Spinen\ConnectWise\Clients\System\ApiException on non-2xx response
     * @return array of \Spinen\ConnectWise\Clients\System\Model\UserDefinedField, HTTP status code, HTTP response headers (array of strings)
     */
    public function systemUserDefinedFieldsPostWithHttpInfo($user_defined_field)
    {
        // verify the required parameter 'user_defined_field' is set
        if ($user_defined_field === null) {
            throw new \InvalidArgumentException('Missing the required parameter $user_defined_field when calling systemUserDefinedFieldsPost');
        }
        // parse inputs
        $resourcePath = "/system/userDefinedFields";
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
        if (isset($user_defined_field)) {
            $_tempBody = $user_defined_field;
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
                '\Spinen\ConnectWise\Clients\System\Model\UserDefinedField',
                '/system/userDefinedFields'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Spinen\ConnectWise\Clients\System\Model\UserDefinedField', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\System\Model\UserDefinedField', $e->getResponseHeaders());
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