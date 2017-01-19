# connectwise-system-php-client
ConnectWise System API

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 1.0.0
- Package version: 3.0.0-beta
- Build package: io.swagger.codegen.languages.PhpClientCodegen

## Requirements

PHP 5.6.0 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```bash
composer require spinen/connectwise-system-php-client
```

Or modify your `composer.json` file:

```json
{
    "require": {
        "spinen/connectwise-system-php-client": "^3.0.0-beta"
    }
}
```

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/connectwise-system-php-client/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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

## Documentation for API Endpoints

All URIs are relative to *https://api-na.myconnectwise.net/v4_6_release/apis/3.0*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AuditTrailApi* | [**systemAudittrailCountGet**](docs/Api/AuditTrailApi.md#systemaudittrailcountget) | **GET** /system/audittrail/count | 
*AuditTrailApi* | [**systemAudittrailGet**](docs/Api/AuditTrailApi.md#systemaudittrailget) | **GET** /system/audittrail | 
*BatchApi* | [**systemBatchPost**](docs/Api/BatchApi.md#systembatchpost) | **POST** /system/batch | 
*CallbacksApi* | [**systemCallbacksCountGet**](docs/Api/CallbacksApi.md#systemcallbackscountget) | **GET** /system/callbacks/count | 
*CallbacksApi* | [**systemCallbacksGet**](docs/Api/CallbacksApi.md#systemcallbacksget) | **GET** /system/callbacks | 
*CallbacksApi* | [**systemCallbacksIdDelete**](docs/Api/CallbacksApi.md#systemcallbacksiddelete) | **DELETE** /system/callbacks/{id} | 
*CallbacksApi* | [**systemCallbacksIdGet**](docs/Api/CallbacksApi.md#systemcallbacksidget) | **GET** /system/callbacks/{id} | 
*CallbacksApi* | [**systemCallbacksIdPatch**](docs/Api/CallbacksApi.md#systemcallbacksidpatch) | **PATCH** /system/callbacks/{id} | 
*CallbacksApi* | [**systemCallbacksIdPut**](docs/Api/CallbacksApi.md#systemcallbacksidput) | **PUT** /system/callbacks/{id} | 
*CallbacksApi* | [**systemCallbacksPost**](docs/Api/CallbacksApi.md#systemcallbackspost) | **POST** /system/callbacks | 
*ConnectWiseHostedSetupsApi* | [**systemConnectwisehostedsetupsCountGet**](docs/Api/ConnectWiseHostedSetupsApi.md#systemconnectwisehostedsetupscountget) | **GET** /system/connectwisehostedsetups/count | 
*ConnectWiseHostedSetupsApi* | [**systemConnectwisehostedsetupsGet**](docs/Api/ConnectWiseHostedSetupsApi.md#systemconnectwisehostedsetupsget) | **GET** /system/connectwisehostedsetups | 
*ConnectWiseHostedSetupsApi* | [**systemConnectwisehostedsetupsIdDelete**](docs/Api/ConnectWiseHostedSetupsApi.md#systemconnectwisehostedsetupsiddelete) | **DELETE** /system/connectwisehostedsetups/{id} | 
*ConnectWiseHostedSetupsApi* | [**systemConnectwisehostedsetupsIdGet**](docs/Api/ConnectWiseHostedSetupsApi.md#systemconnectwisehostedsetupsidget) | **GET** /system/connectwisehostedsetups/{id} | 
*ConnectWiseHostedSetupsApi* | [**systemConnectwisehostedsetupsIdPatch**](docs/Api/ConnectWiseHostedSetupsApi.md#systemconnectwisehostedsetupsidpatch) | **PATCH** /system/connectwisehostedsetups/{id} | 
*ConnectWiseHostedSetupsApi* | [**systemConnectwisehostedsetupsIdPut**](docs/Api/ConnectWiseHostedSetupsApi.md#systemconnectwisehostedsetupsidput) | **PUT** /system/connectwisehostedsetups/{id} | 
*ConnectWiseHostedSetupsApi* | [**systemConnectwisehostedsetupsPost**](docs/Api/ConnectWiseHostedSetupsApi.md#systemconnectwisehostedsetupspost) | **POST** /system/connectwisehostedsetups | 
*DocumentsApi* | [**systemDocumentsCountGet**](docs/Api/DocumentsApi.md#systemdocumentscountget) | **GET** /system/documents/count | 
*DocumentsApi* | [**systemDocumentsGet**](docs/Api/DocumentsApi.md#systemdocumentsget) | **GET** /system/documents | 
*DocumentsApi* | [**systemDocumentsIdDelete**](docs/Api/DocumentsApi.md#systemdocumentsiddelete) | **DELETE** /system/documents/{id} | 
*DocumentsApi* | [**systemDocumentsIdDownloadGet**](docs/Api/DocumentsApi.md#systemdocumentsiddownloadget) | **GET** /system/documents/{id}/download | 
*DocumentsApi* | [**systemDocumentsIdGet**](docs/Api/DocumentsApi.md#systemdocumentsidget) | **GET** /system/documents/{id} | 
*DocumentsApi* | [**systemDocumentsIdPost**](docs/Api/DocumentsApi.md#systemdocumentsidpost) | **POST** /system/documents/{id} | 
*DocumentsApi* | [**systemDocumentsPost**](docs/Api/DocumentsApi.md#systemdocumentspost) | **POST** /system/documents | 
*DocumentsApi* | [**systemDocumentsUploadsampleGet**](docs/Api/DocumentsApi.md#systemdocumentsuploadsampleget) | **GET** /system/documents/uploadsample | 
*InfoApi* | [**systemInfoGet**](docs/Api/InfoApi.md#systeminfoget) | **GET** /system/info | 
*LinksApi* | [**systemLinksCountGet**](docs/Api/LinksApi.md#systemlinkscountget) | **GET** /system/links/count | 
*LinksApi* | [**systemLinksGet**](docs/Api/LinksApi.md#systemlinksget) | **GET** /system/links | 
*LinksApi* | [**systemLinksIdDelete**](docs/Api/LinksApi.md#systemlinksiddelete) | **DELETE** /system/links/{id} | 
*LinksApi* | [**systemLinksIdGet**](docs/Api/LinksApi.md#systemlinksidget) | **GET** /system/links/{id} | 
*LinksApi* | [**systemLinksIdPatch**](docs/Api/LinksApi.md#systemlinksidpatch) | **PATCH** /system/links/{id} | 
*LinksApi* | [**systemLinksIdPut**](docs/Api/LinksApi.md#systemlinksidput) | **PUT** /system/links/{id} | 
*LinksApi* | [**systemLinksPost**](docs/Api/LinksApi.md#systemlinkspost) | **POST** /system/links | 
*MembersApi* | [**systemMembersCountGet**](docs/Api/MembersApi.md#systemmemberscountget) | **GET** /system/members/count | 
*MembersApi* | [**systemMembersGet**](docs/Api/MembersApi.md#systemmembersget) | **GET** /system/members | 
*MembersApi* | [**systemMembersMemberIdentifierGet**](docs/Api/MembersApi.md#systemmembersmemberidentifierget) | **GET** /system/members/{memberIdentifier} | 
*MembersApi* | [**systemMembersMemberIdentifierImageGet**](docs/Api/MembersApi.md#systemmembersmemberidentifierimageget) | **GET** /system/members/{memberIdentifier}/image | 
*MembersApi* | [**systemMembersMemberIdentifierTokensPost**](docs/Api/MembersApi.md#systemmembersmemberidentifiertokenspost) | **POST** /system/members/{memberIdentifier}/tokens | 
*MenuEntriesApi* | [**systemMenuentriesCountGet**](docs/Api/MenuEntriesApi.md#systemmenuentriescountget) | **GET** /system/menuentries/count | 
*MenuEntriesApi* | [**systemMenuentriesGet**](docs/Api/MenuEntriesApi.md#systemmenuentriesget) | **GET** /system/menuentries | 
*MenuEntriesApi* | [**systemMenuentriesIdDelete**](docs/Api/MenuEntriesApi.md#systemmenuentriesiddelete) | **DELETE** /system/menuentries/{id} | 
*MenuEntriesApi* | [**systemMenuentriesIdGet**](docs/Api/MenuEntriesApi.md#systemmenuentriesidget) | **GET** /system/menuentries/{id} | 
*MenuEntriesApi* | [**systemMenuentriesIdImageGet**](docs/Api/MenuEntriesApi.md#systemmenuentriesidimageget) | **GET** /system/menuentries/{id}/image | 
*MenuEntriesApi* | [**systemMenuentriesIdImagePost**](docs/Api/MenuEntriesApi.md#systemmenuentriesidimagepost) | **POST** /system/menuentries/{id}/image | 
*MenuEntriesApi* | [**systemMenuentriesIdPatch**](docs/Api/MenuEntriesApi.md#systemmenuentriesidpatch) | **PATCH** /system/menuentries/{id} | 
*MenuEntriesApi* | [**systemMenuentriesIdPut**](docs/Api/MenuEntriesApi.md#systemmenuentriesidput) | **PUT** /system/menuentries/{id} | 
*MenuEntriesApi* | [**systemMenuentriesPost**](docs/Api/MenuEntriesApi.md#systemmenuentriespost) | **POST** /system/menuentries | 
*ReportsApi* | [**systemReportsGet**](docs/Api/ReportsApi.md#systemreportsget) | **GET** /system/reports | 
*ReportsApi* | [**systemReportsReportNameColumnsGet**](docs/Api/ReportsApi.md#systemreportsreportnamecolumnsget) | **GET** /system/reports/{reportName}/columns | 
*ReportsApi* | [**systemReportsReportNameCountGet**](docs/Api/ReportsApi.md#systemreportsreportnamecountget) | **GET** /system/reports/{reportName}/count | 
*ReportsApi* | [**systemReportsReportNameGet**](docs/Api/ReportsApi.md#systemreportsreportnameget) | **GET** /system/reports/{reportName} | 
*UserDefinedFieldsApi* | [**systemUserDefinedFieldsCountGet**](docs/Api/UserDefinedFieldsApi.md#systemuserdefinedfieldscountget) | **GET** /system/userDefinedFields/count | 
*UserDefinedFieldsApi* | [**systemUserDefinedFieldsGet**](docs/Api/UserDefinedFieldsApi.md#systemuserdefinedfieldsget) | **GET** /system/userDefinedFields | 
*UserDefinedFieldsApi* | [**systemUserDefinedFieldsIdDelete**](docs/Api/UserDefinedFieldsApi.md#systemuserdefinedfieldsiddelete) | **DELETE** /system/userDefinedFields/{id} | 
*UserDefinedFieldsApi* | [**systemUserDefinedFieldsIdGet**](docs/Api/UserDefinedFieldsApi.md#systemuserdefinedfieldsidget) | **GET** /system/userDefinedFields/{id} | 
*UserDefinedFieldsApi* | [**systemUserDefinedFieldsIdPatch**](docs/Api/UserDefinedFieldsApi.md#systemuserdefinedfieldsidpatch) | **PATCH** /system/userDefinedFields/{id} | 
*UserDefinedFieldsApi* | [**systemUserDefinedFieldsIdPut**](docs/Api/UserDefinedFieldsApi.md#systemuserdefinedfieldsidput) | **PUT** /system/userDefinedFields/{id} | 
*UserDefinedFieldsApi* | [**systemUserDefinedFieldsPost**](docs/Api/UserDefinedFieldsApi.md#systemuserdefinedfieldspost) | **POST** /system/userDefinedFields | 


## Documentation For Models

 - [AuditTrailEntry](docs/Model/AuditTrailEntry.md)
 - [BatchRequest](docs/Model/BatchRequest.md)
 - [BatchResponse](docs/Model/BatchResponse.md)
 - [BoardReference](docs/Model/BoardReference.md)
 - [CalendarReference](docs/Model/CalendarReference.md)
 - [CallbackEntry](docs/Model/CallbackEntry.md)
 - [ConnectWiseHostedSetup](docs/Model/ConnectWiseHostedSetup.md)
 - [Count](docs/Model/Count.md)
 - [CountryReference](docs/Model/CountryReference.md)
 - [DictionaryStringString_](docs/Model/DictionaryStringString_.md)
 - [DocumentInfo](docs/Model/DocumentInfo.md)
 - [EndpointRequest](docs/Model/EndpointRequest.md)
 - [EndpointResponse](docs/Model/EndpointResponse.md)
 - [Error](docs/Model/Error.md)
 - [ICollection](docs/Model/ICollection.md)
 - [ICollectionString_](docs/Model/ICollectionString_.md)
 - [IEqualityComparerString_](docs/Model/IEqualityComparerString_.md)
 - [Info](docs/Model/Info.md)
 - [JObject](docs/Model/JObject.md)
 - [KeyCollection](docs/Model/KeyCollection.md)
 - [Link](docs/Model/Link.md)
 - [Member](docs/Model/Member.md)
 - [MemberReference](docs/Model/MemberReference.md)
 - [MemberTypeReference](docs/Model/MemberTypeReference.md)
 - [MenuEntry](docs/Model/MenuEntry.md)
 - [MenuLocationReference](docs/Model/MenuLocationReference.md)
 - [Metadata](docs/Model/Metadata.md)
 - [PatchOperation](docs/Model/PatchOperation.md)
 - [ProjectBoardReference](docs/Model/ProjectBoardReference.md)
 - [Report](docs/Model/Report.md)
 - [ReportDataResponse](docs/Model/ReportDataResponse.md)
 - [SecurityRoleReference](docs/Model/SecurityRoleReference.md)
 - [ServiceLocationReference](docs/Model/ServiceLocationReference.md)
 - [TimeZoneReference](docs/Model/TimeZoneReference.md)
 - [Token](docs/Model/Token.md)
 - [UserDefinedField](docs/Model/UserDefinedField.md)
 - [UserDefinedFieldOption](docs/Model/UserDefinedFieldOption.md)
 - [ValidationError](docs/Model/ValidationError.md)
 - [ValueCollection](docs/Model/ValueCollection.md)
 - [WarehouseBinReference](docs/Model/WarehouseBinReference.md)
 - [WarehouseReference](docs/Model/WarehouseReference.md)
 - [WorkRoleReference](docs/Model/WorkRoleReference.md)
 - [WorkTypeReference](docs/Model/WorkTypeReference.md)


## Documentation For Authorization


## BasicAuth

- **Type**: HTTP basic authentication


## Author

platform@connectwise.com
