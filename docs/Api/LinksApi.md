# Spinen\ConnectWise\Clients\System\LinksApi
Spinen&#39;s PHP ConnectWise Client for System API generated by Swagger Code Generator.

All URIs are relative to *https://api-na.myconnectwise.net/v4_6_release/apis/3.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**systemLinksCountGet**](LinksApi.md#systemLinksCountGet) | **GET** /system/links/count | 
[**systemLinksGet**](LinksApi.md#systemLinksGet) | **GET** /system/links | 
[**systemLinksIdDelete**](LinksApi.md#systemLinksIdDelete) | **DELETE** /system/links/{id} | 
[**systemLinksIdGet**](LinksApi.md#systemLinksIdGet) | **GET** /system/links/{id} | 
[**systemLinksIdPatch**](LinksApi.md#systemLinksIdPatch) | **PATCH** /system/links/{id} | 
[**systemLinksIdPut**](LinksApi.md#systemLinksIdPut) | **PUT** /system/links/{id} | 
[**systemLinksPost**](LinksApi.md#systemLinksPost) | **POST** /system/links | 


# **systemLinksCountGet**
> \Spinen\ConnectWise\Clients\System\Model\Count systemLinksCountGet($conditions)



Get Links Count

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\System\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\System\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\System\Api\LinksApi();
$conditions = "conditions_example"; // string | 

try {
    $result = $api_instance->systemLinksCountGet($conditions);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LinksApi->systemLinksCountGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conditions** | **string**|  | [optional]

### Return type

[**\Spinen\ConnectWise\Clients\System\Model\Count**](../Model/Count.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **systemLinksGet**
> \Spinen\ConnectWise\Clients\System\Model\Link[] systemLinksGet($conditions, $order_by, $childconditions, $customfieldconditions, $page, $page_size)



Get Links

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\System\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\System\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\System\Api\LinksApi();
$conditions = "conditions_example"; // string | 
$order_by = "order_by_example"; // string | 
$childconditions = "childconditions_example"; // string | 
$customfieldconditions = "customfieldconditions_example"; // string | 
$page = 56; // int | 
$page_size = 56; // int | 

try {
    $result = $api_instance->systemLinksGet($conditions, $order_by, $childconditions, $customfieldconditions, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LinksApi->systemLinksGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conditions** | **string**|  | [optional]
 **order_by** | **string**|  | [optional]
 **childconditions** | **string**|  | [optional]
 **customfieldconditions** | **string**|  | [optional]
 **page** | **int**|  | [optional]
 **page_size** | **int**|  | [optional]

### Return type

[**\Spinen\ConnectWise\Clients\System\Model\Link[]**](../Model/Link.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **systemLinksIdDelete**
> systemLinksIdDelete($id)



Delete Link By Id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\System\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\System\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\System\Api\LinksApi();
$id = 56; // int | 

try {
    $api_instance->systemLinksIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling LinksApi->systemLinksIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **systemLinksIdGet**
> \Spinen\ConnectWise\Clients\System\Model\Link systemLinksIdGet($id)



Get Link By Id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\System\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\System\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\System\Api\LinksApi();
$id = 56; // int | 

try {
    $result = $api_instance->systemLinksIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LinksApi->systemLinksIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\Spinen\ConnectWise\Clients\System\Model\Link**](../Model/Link.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **systemLinksIdPatch**
> \Spinen\ConnectWise\Clients\System\Model\Link systemLinksIdPatch($id, $operations)



Update Link

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\System\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\System\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\System\Api\LinksApi();
$id = 56; // int | 
$operations = array(new PatchOperation()); // \Spinen\ConnectWise\Clients\System\Model\PatchOperation[] | 

try {
    $result = $api_instance->systemLinksIdPatch($id, $operations);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LinksApi->systemLinksIdPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **operations** | [**\Spinen\ConnectWise\Clients\System\Model\PatchOperation[]**](../Model/PatchOperation.md)|  |

### Return type

[**\Spinen\ConnectWise\Clients\System\Model\Link**](../Model/Link.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **systemLinksIdPut**
> \Spinen\ConnectWise\Clients\System\Model\Link systemLinksIdPut($id, $link)



Replace Link

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\System\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\System\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\System\Api\LinksApi();
$id = 56; // int | 
$link = new \Spinen\ConnectWise\Clients\System\Model\Link(); // \Spinen\ConnectWise\Clients\System\Model\Link | 

try {
    $result = $api_instance->systemLinksIdPut($id, $link);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LinksApi->systemLinksIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **link** | [**\Spinen\ConnectWise\Clients\System\Model\Link**](../Model/\Spinen\ConnectWise\Clients\System\Model\Link.md)|  |

### Return type

[**\Spinen\ConnectWise\Clients\System\Model\Link**](../Model/Link.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **systemLinksPost**
> \Spinen\ConnectWise\Clients\System\Model\Link systemLinksPost($link)



Create Link

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\System\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\System\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\System\Api\LinksApi();
$link = new \Spinen\ConnectWise\Clients\System\Model\Link(); // \Spinen\ConnectWise\Clients\System\Model\Link | 

try {
    $result = $api_instance->systemLinksPost($link);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LinksApi->systemLinksPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **link** | [**\Spinen\ConnectWise\Clients\System\Model\Link**](../Model/\Spinen\ConnectWise\Clients\System\Model\Link.md)|  |

### Return type

[**\Spinen\ConnectWise\Clients\System\Model\Link**](../Model/Link.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)
