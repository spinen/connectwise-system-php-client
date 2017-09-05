# UserDefinedField

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | ID of the custom user defined field | [optional] 
**pod_id** | **int** | Id of the Pod where the custom field will be placed | 
**caption** | **string** | Field caption | 
**sequence_number** | **int** | Must be between 1 and 50.  This defines the order in which the custom fields will appear | 
**help_text** | **string** | Help text to accompany the custom field | [optional] 
**field_type_identifier** | **string** |  | 
**number_decimals** | **int** | Only valid for Number or percent | [optional] 
**entry_type_identifier** | **string** |  | [optional] 
**required_flag** | **bool** |  | [optional] 
**display_on_screen_flag** | **bool** |  | [optional] 
**read_only_flag** | **bool** |  | [optional] 
**list_view_flag** | **bool** | Denotes that this custom field is included on a list view | [optional] 
**button_url** | **string** | Only available with Button Field Type. Required when entryTypeIdentifier is button | [optional] 
**options** | [**\Spinen\ConnectWise\Clients\System\Model\UserDefinedFieldOption[]**](UserDefinedFieldOption.md) |  | [optional] 
**business_unit_ids** | **int[]** |  | [optional] 
**location_ids** | **int[]** |  | [optional] 
**add_all_business_units** | **bool** |  | [optional] 
**remove_all_business_units** | **bool** |  | [optional] 
**add_all_locations** | **bool** |  | [optional] 
**remove_all_locations** | **bool** |  | [optional] 
**date_created** | [**\DateTime**](\DateTime.md) | Date in UTC the custom field was created | [optional] 
**_info** | [**\Spinen\ConnectWise\Clients\System\Model\Metadata**](Metadata.md) | Metadata of the entity | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


