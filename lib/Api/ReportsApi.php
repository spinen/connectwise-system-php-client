<?php
/**
 * ReportsApi
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
 * ReportsApi Class Doc Comment
 *
 * @category Class
 * @package  Spinen\ConnectWise\Clients\System
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ReportsApi
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
     * @return ReportsApi
     */
    public function setApiClient(\Spinen\ConnectWise\Clients\System\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation systemReportsGet
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for System API generated by Swagger Code Generator.
     *
     * @param string $conditions  (optional)
     * @param string $order_by  (optional)
     * @param string $childconditions  (optional)
     * @param string $customfieldconditions  (optional)
     * @throws \Spinen\ConnectWise\Clients\System\ApiException on non-2xx response
     * @return \Spinen\ConnectWise\Clients\System\Model\Report[]
     */
    public function systemReportsGet($conditions = null, $order_by = null, $childconditions = null, $customfieldconditions = null)
    {
        list($response) = $this->systemReportsGetWithHttpInfo($conditions, $order_by, $childconditions, $customfieldconditions);
        return $response;
    }

    /**
     * Operation systemReportsGetWithHttpInfo
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for System API generated by Swagger Code Generator.
     *
     * @param string $conditions  (optional)
     * @param string $order_by  (optional)
     * @param string $childconditions  (optional)
     * @param string $customfieldconditions  (optional)
     * @throws \Spinen\ConnectWise\Clients\System\ApiException on non-2xx response
     * @return array of \Spinen\ConnectWise\Clients\System\Model\Report[], HTTP status code, HTTP response headers (array of strings)
     */
    public function systemReportsGetWithHttpInfo($conditions = null, $order_by = null, $childconditions = null, $customfieldconditions = null)
    {
        // parse inputs
        $resourcePath = "/system/reports";
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
                '\Spinen\ConnectWise\Clients\System\Model\Report[]',
                '/system/reports'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Spinen\ConnectWise\Clients\System\Model\Report[]', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\System\Model\Report[]', $e->getResponseHeaders());
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
     * Operation systemReportsReportNameColumnsGet
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for System API generated by Swagger Code Generator.
     *
     * @param string $report_name  (required)
     * @throws \Spinen\ConnectWise\Clients\System\ApiException on non-2xx response
     * @return \Spinen\ConnectWise\Clients\System\Model\JObject[]
     */
    public function systemReportsReportNameColumnsGet($report_name)
    {
        list($response) = $this->systemReportsReportNameColumnsGetWithHttpInfo($report_name);
        return $response;
    }

    /**
     * Operation systemReportsReportNameColumnsGetWithHttpInfo
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for System API generated by Swagger Code Generator.
     *
     * @param string $report_name  (required)
     * @throws \Spinen\ConnectWise\Clients\System\ApiException on non-2xx response
     * @return array of \Spinen\ConnectWise\Clients\System\Model\JObject[], HTTP status code, HTTP response headers (array of strings)
     */
    public function systemReportsReportNameColumnsGetWithHttpInfo($report_name)
    {
        // verify the required parameter 'report_name' is set
        if ($report_name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $report_name when calling systemReportsReportNameColumnsGet');
        }
        // parse inputs
        $resourcePath = "/system/reports/{reportName}/columns";
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
        if ($report_name !== null) {
            $resourcePath = str_replace(
                "{" . "reportName" . "}",
                $this->apiClient->getSerializer()->toPathValue($report_name),
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
                '\Spinen\ConnectWise\Clients\System\Model\JObject[]',
                '/system/reports/{reportName}/columns'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Spinen\ConnectWise\Clients\System\Model\JObject[]', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\System\Model\JObject[]', $e->getResponseHeaders());
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
     * Operation systemReportsReportNameCountGet
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for System API generated by Swagger Code Generator.
     *
     * @param string $report_name  (required)
     * @param string $conditions  (optional)
     * @throws \Spinen\ConnectWise\Clients\System\ApiException on non-2xx response
     * @return \Spinen\ConnectWise\Clients\System\Model\Count
     */
    public function systemReportsReportNameCountGet($report_name, $conditions = null)
    {
        list($response) = $this->systemReportsReportNameCountGetWithHttpInfo($report_name, $conditions);
        return $response;
    }

    /**
     * Operation systemReportsReportNameCountGetWithHttpInfo
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for System API generated by Swagger Code Generator.
     *
     * @param string $report_name  (required)
     * @param string $conditions  (optional)
     * @throws \Spinen\ConnectWise\Clients\System\ApiException on non-2xx response
     * @return array of \Spinen\ConnectWise\Clients\System\Model\Count, HTTP status code, HTTP response headers (array of strings)
     */
    public function systemReportsReportNameCountGetWithHttpInfo($report_name, $conditions = null)
    {
        // verify the required parameter 'report_name' is set
        if ($report_name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $report_name when calling systemReportsReportNameCountGet');
        }
        // parse inputs
        $resourcePath = "/system/reports/{reportName}/count";
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
        // path params
        if ($report_name !== null) {
            $resourcePath = str_replace(
                "{" . "reportName" . "}",
                $this->apiClient->getSerializer()->toPathValue($report_name),
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
                '\Spinen\ConnectWise\Clients\System\Model\Count',
                '/system/reports/{reportName}/count'
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
     * Operation systemReportsReportNameGet
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for System API generated by Swagger Code Generator.
     *
     * @param string $report_name  (required)
     * @param string $conditions  (optional)
     * @param string $order_by  (optional)
     * @param string $childconditions  (optional)
     * @param string $customfieldconditions  (optional)
     * @param int $page  (optional)
     * @param int $page_size  (optional)
     * @param string $columns  (optional)
     * @throws \Spinen\ConnectWise\Clients\System\ApiException on non-2xx response
     * @return \Spinen\ConnectWise\Clients\System\Model\ReportDataResponse
     */
    public function systemReportsReportNameGet($report_name, $conditions = null, $order_by = null, $childconditions = null, $customfieldconditions = null, $page = null, $page_size = null, $columns = null)
    {
        list($response) = $this->systemReportsReportNameGetWithHttpInfo($report_name, $conditions, $order_by, $childconditions, $customfieldconditions, $page, $page_size, $columns);
        return $response;
    }

    /**
     * Operation systemReportsReportNameGetWithHttpInfo
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for System API generated by Swagger Code Generator.
     *
     * @param string $report_name  (required)
     * @param string $conditions  (optional)
     * @param string $order_by  (optional)
     * @param string $childconditions  (optional)
     * @param string $customfieldconditions  (optional)
     * @param int $page  (optional)
     * @param int $page_size  (optional)
     * @param string $columns  (optional)
     * @throws \Spinen\ConnectWise\Clients\System\ApiException on non-2xx response
     * @return array of \Spinen\ConnectWise\Clients\System\Model\ReportDataResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function systemReportsReportNameGetWithHttpInfo($report_name, $conditions = null, $order_by = null, $childconditions = null, $customfieldconditions = null, $page = null, $page_size = null, $columns = null)
    {
        // verify the required parameter 'report_name' is set
        if ($report_name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $report_name when calling systemReportsReportNameGet');
        }
        // parse inputs
        $resourcePath = "/system/reports/{reportName}";
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
        // query params
        if ($columns !== null) {
            $queryParams['columns'] = $this->apiClient->getSerializer()->toQueryValue($columns);
        }
        // path params
        if ($report_name !== null) {
            $resourcePath = str_replace(
                "{" . "reportName" . "}",
                $this->apiClient->getSerializer()->toPathValue($report_name),
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
                '\Spinen\ConnectWise\Clients\System\Model\ReportDataResponse',
                '/system/reports/{reportName}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Spinen\ConnectWise\Clients\System\Model\ReportDataResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\System\Model\ReportDataResponse', $e->getResponseHeaders());
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
