# Spinen\ConnectWise\Clients\System\AuditTrailApi
Spinen&#39;s PHP ConnectWise Client for System API generated by Swagger Code Generator.

All URIs are relative to *https://api-na.myconnectwise.net/v4_6_release/apis/3.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**systemAudittrailCountGet**](AuditTrailApi.md#systemAudittrailCountGet) | **GET** /system/audittrail/count | 
[**systemAudittrailGet**](AuditTrailApi.md#systemAudittrailGet) | **GET** /system/audittrail | 


# **systemAudittrailCountGet**
> \Spinen\ConnectWise\Clients\System\Model\Count systemAudittrailCountGet($type, $id, $device_identifier)



Get Members Count

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\System\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\System\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\System\Api\AuditTrailApi();
$type = "type_example"; // string | 
$id = 56; // int | 
$device_identifier = "device_identifier_example"; // string | 

try {
    $result = $api_instance->systemAudittrailCountGet($type, $id, $device_identifier);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuditTrailApi->systemAudittrailCountGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type** | **string**|  | [optional]
 **id** | **int**|  | [optional]
 **device_identifier** | **string**|  | [optional]

### Return type

[**\Spinen\ConnectWise\Clients\System\Model\Count**](../Model/Count.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **systemAudittrailGet**
> \Spinen\ConnectWise\Clients\System\Model\AuditTrailEntry[] systemAudittrailGet($type, $id, $device_identifier, $page, $page_size)



Get Audit Trail

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\System\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\System\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\System\Api\AuditTrailApi();
$type = "type_example"; // string | 
$id = 56; // int | 
$device_identifier = "device_identifier_example"; // string | 
$page = 56; // int | 
$page_size = 56; // int | 

try {
    $result = $api_instance->systemAudittrailGet($type, $id, $device_identifier, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuditTrailApi->systemAudittrailGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type** | **string**|  | [optional]
 **id** | **int**|  | [optional]
 **device_identifier** | **string**|  | [optional]
 **page** | **int**|  | [optional]
 **page_size** | **int**|  | [optional]

### Return type

[**\Spinen\ConnectWise\Clients\System\Model\AuditTrailEntry[]**](../Model/AuditTrailEntry.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

