# Spinen\ConnectWise\Clients\System\UserDefinedFieldsApi
Spinen&#39;s PHP ConnectWise Client for System API generated by Swagger Code Generator.

All URIs are relative to *https://api-na.myconnectwise.net/v4_6_release/apis/3.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**systemUserDefinedFieldsCountGet**](UserDefinedFieldsApi.md#systemUserDefinedFieldsCountGet) | **GET** /system/userDefinedFields/count | 
[**systemUserDefinedFieldsGet**](UserDefinedFieldsApi.md#systemUserDefinedFieldsGet) | **GET** /system/userDefinedFields | 
[**systemUserDefinedFieldsIdDelete**](UserDefinedFieldsApi.md#systemUserDefinedFieldsIdDelete) | **DELETE** /system/userDefinedFields/{id} | 
[**systemUserDefinedFieldsIdGet**](UserDefinedFieldsApi.md#systemUserDefinedFieldsIdGet) | **GET** /system/userDefinedFields/{id} | 
[**systemUserDefinedFieldsIdPatch**](UserDefinedFieldsApi.md#systemUserDefinedFieldsIdPatch) | **PATCH** /system/userDefinedFields/{id} | 
[**systemUserDefinedFieldsIdPut**](UserDefinedFieldsApi.md#systemUserDefinedFieldsIdPut) | **PUT** /system/userDefinedFields/{id} | 
[**systemUserDefinedFieldsPost**](UserDefinedFieldsApi.md#systemUserDefinedFieldsPost) | **POST** /system/userDefinedFields | 


# **systemUserDefinedFieldsCountGet**
> \Spinen\ConnectWise\Clients\System\Model\Count systemUserDefinedFieldsCountGet($conditions)



Get User Defined Fields Count

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\System\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\System\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\System\Api\UserDefinedFieldsApi();
$conditions = "conditions_example"; // string | 

try {
    $result = $api_instance->systemUserDefinedFieldsCountGet($conditions);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserDefinedFieldsApi->systemUserDefinedFieldsCountGet: ', $e->getMessage(), PHP_EOL;
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

# **systemUserDefinedFieldsGet**
> \Spinen\ConnectWise\Clients\System\Model\UserDefinedField[] systemUserDefinedFieldsGet($conditions, $order_by, $childconditions, $customfieldconditions, $page, $page_size)



Get User Defined Fields

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\System\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\System\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\System\Api\UserDefinedFieldsApi();
$conditions = "conditions_example"; // string | 
$order_by = "order_by_example"; // string | 
$childconditions = "childconditions_example"; // string | 
$customfieldconditions = "customfieldconditions_example"; // string | 
$page = 56; // int | 
$page_size = 56; // int | 

try {
    $result = $api_instance->systemUserDefinedFieldsGet($conditions, $order_by, $childconditions, $customfieldconditions, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserDefinedFieldsApi->systemUserDefinedFieldsGet: ', $e->getMessage(), PHP_EOL;
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

[**\Spinen\ConnectWise\Clients\System\Model\UserDefinedField[]**](../Model/UserDefinedField.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **systemUserDefinedFieldsIdDelete**
> systemUserDefinedFieldsIdDelete($id)



Delete User Defined Field By Id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\System\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\System\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\System\Api\UserDefinedFieldsApi();
$id = 56; // int | 

try {
    $api_instance->systemUserDefinedFieldsIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling UserDefinedFieldsApi->systemUserDefinedFieldsIdDelete: ', $e->getMessage(), PHP_EOL;
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

# **systemUserDefinedFieldsIdGet**
> \Spinen\ConnectWise\Clients\System\Model\UserDefinedField systemUserDefinedFieldsIdGet($id)



Get User Defined Field By Id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\System\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\System\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\System\Api\UserDefinedFieldsApi();
$id = 56; // int | 

try {
    $result = $api_instance->systemUserDefinedFieldsIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserDefinedFieldsApi->systemUserDefinedFieldsIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\Spinen\ConnectWise\Clients\System\Model\UserDefinedField**](../Model/UserDefinedField.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **systemUserDefinedFieldsIdPatch**
> \Spinen\ConnectWise\Clients\System\Model\UserDefinedField systemUserDefinedFieldsIdPatch($id, $operations)



Update User Defined Field

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\System\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\System\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\System\Api\UserDefinedFieldsApi();
$id = 56; // int | 
$operations = array(new PatchOperation()); // \Spinen\ConnectWise\Clients\System\Model\PatchOperation[] | 

try {
    $result = $api_instance->systemUserDefinedFieldsIdPatch($id, $operations);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserDefinedFieldsApi->systemUserDefinedFieldsIdPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **operations** | [**\Spinen\ConnectWise\Clients\System\Model\PatchOperation[]**](../Model/PatchOperation.md)|  |

### Return type

[**\Spinen\ConnectWise\Clients\System\Model\UserDefinedField**](../Model/UserDefinedField.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **systemUserDefinedFieldsIdPut**
> \Spinen\ConnectWise\Clients\System\Model\UserDefinedField systemUserDefinedFieldsIdPut($id, $user_defined_field)



Replace User Defined Field

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\System\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\System\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\System\Api\UserDefinedFieldsApi();
$id = 56; // int | 
$user_defined_field = new \Spinen\ConnectWise\Clients\System\Model\UserDefinedField(); // \Spinen\ConnectWise\Clients\System\Model\UserDefinedField | 

try {
    $result = $api_instance->systemUserDefinedFieldsIdPut($id, $user_defined_field);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserDefinedFieldsApi->systemUserDefinedFieldsIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **user_defined_field** | [**\Spinen\ConnectWise\Clients\System\Model\UserDefinedField**](../Model/\Spinen\ConnectWise\Clients\System\Model\UserDefinedField.md)|  |

### Return type

[**\Spinen\ConnectWise\Clients\System\Model\UserDefinedField**](../Model/UserDefinedField.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **systemUserDefinedFieldsPost**
> \Spinen\ConnectWise\Clients\System\Model\UserDefinedField systemUserDefinedFieldsPost($user_defined_field)



Create User Defined Field

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\System\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\System\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\System\Api\UserDefinedFieldsApi();
$user_defined_field = new \Spinen\ConnectWise\Clients\System\Model\UserDefinedField(); // \Spinen\ConnectWise\Clients\System\Model\UserDefinedField | 

try {
    $result = $api_instance->systemUserDefinedFieldsPost($user_defined_field);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserDefinedFieldsApi->systemUserDefinedFieldsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_defined_field** | [**\Spinen\ConnectWise\Clients\System\Model\UserDefinedField**](../Model/\Spinen\ConnectWise\Clients\System\Model\UserDefinedField.md)|  |

### Return type

[**\Spinen\ConnectWise\Clients\System\Model\UserDefinedField**](../Model/UserDefinedField.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)
