# Member

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**admin_flag** | **bool** |  | [optional] 
**allow_expenses_entered_against_companies_flag** | **bool** |  | [optional] 
**allow_in_cell_entry_on_time_sheet** | **bool** |  | [optional] 
**billable_forecast** | **double** |  | [optional] 
**calendar** | [**\Spinen\ConnectWise\Clients\System\Model\CalendarReference**](CalendarReference.md) |  | [optional] 
**calendar_sync_integration_flag** | **bool** |  | [optional] 
**country** | [**\Spinen\ConnectWise\Clients\System\Model\CountryReference**](CountryReference.md) |  | [optional] 
**daily_capacity** | **double** |  | [optional] 
**days_tolerance** | **int** |  | [optional] 
**default_department_id** | **int** |  | 
**default_email** | **string** |  | 
**default_location_id** | **int** |  | 
**default_phone** | **string** |  | 
**disable_online_flag** | **bool** |  | [optional] 
**enable_ldap_authentication_flag** | **bool** |  | [optional] 
**enable_mobile_flag** | **bool** |  | [optional] 
**enable_mobile_gps_flag** | **bool** |  | [optional] 
**enter_time_against_company_flag** | **bool** |  | [optional] 
**expense_approver** | [**\Spinen\ConnectWise\Clients\System\Model\MemberReference**](MemberReference.md) |  | 
**first_name** | **string** |  | 
**hide_member_in_dispatch_portal_flag** | **bool** |  | [optional] 
**hire_date** | [**\DateTime**](\DateTime.md) |  | 
**home_email** | **string** |  | [optional] 
**home_extension** | **string** |  | [optional] 
**home_phone** | **string** |  | [optional] 
**hourly_cost** | **double** |  | [optional] 
**hourly_rate** | **double** |  | [optional] 
**id** | **int** |  | [optional] 
**identifier** | **string** |  | 
**inactive_date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**inactive_flag** | **bool** |  | [optional] 
**include_in_utilization_reporting_flag** | **bool** |  | [optional] 
**last_login** | **string** |  | [optional] 
**last_name** | **string** |  | 
**license_class** | **string** | F &#x3D; Regular Member, A &#x3D; API Member, C &#x3D; StreamlineIT Member, X &#x3D; Subcontractor Member | 
**mapi_name** | **string** |  | [optional] 
**middle_initial** | **string** |  | [optional] 
**minimum_hours** | **double** |  | [optional] 
**mobile_email** | **string** |  | [optional] 
**mobile_extension** | **string** |  | [optional] 
**mobile_phone** | **string** |  | [optional] 
**notes** | **string** |  | [optional] 
**office_email** | **string** |  | [optional] 
**office_extension** | **string** |  | [optional] 
**office_phone** | **string** |  | [optional] 
**project_default_board** | [**\Spinen\ConnectWise\Clients\System\Model\ProjectBoardReference**](ProjectBoardReference.md) |  | [optional] 
**project_default_department_id** | **int** |  | [optional] 
**project_default_location_id** | **int** |  | [optional] 
**reports_to** | [**\Spinen\ConnectWise\Clients\System\Model\MemberReference**](MemberReference.md) |  | [optional] 
**require_expense_entry_flag** | **bool** |  | [optional] 
**require_start_and_end_time_on_time_entry_flag** | **bool** |  | [optional] 
**require_time_sheet_entry_flag** | **bool** |  | [optional] 
**restrict_default_sales_territory_flag** | **bool** |  | [optional] 
**restrict_default_warehouse_bin_flag** | **bool** |  | [optional] 
**restrict_default_warehouse_flag** | **bool** |  | [optional] 
**restrict_department_flag** | **bool** |  | [optional] 
**restrict_location_flag** | **bool** |  | [optional] 
**restrict_project_default_department_flag** | **bool** |  | [optional] 
**restrict_project_default_location_flag** | **bool** |  | [optional] 
**restrict_schedule_flag** | **bool** |  | [optional] 
**restrict_service_default_department_flag** | **bool** |  | [optional] 
**restrict_service_default_location_flag** | **bool** |  | [optional] 
**sales_default_location_id** | **int** |  | 
**schedule_capacity** | **double** |  | [optional] 
**schedule_default_department_id** | **int** |  | [optional] 
**schedule_default_location_id** | **int** |  | [optional] 
**security_level** | **string** |  | [optional] 
**security_location_id** | **int** |  | [optional] 
**security_role** | [**\Spinen\ConnectWise\Clients\System\Model\SecurityRoleReference**](SecurityRoleReference.md) |  | [optional] 
**service_default_board** | [**\Spinen\ConnectWise\Clients\System\Model\BoardReference**](BoardReference.md) |  | [optional] 
**service_default_department_id** | **int** |  | [optional] 
**service_default_location_id** | **int** |  | [optional] 
**service_location** | [**\Spinen\ConnectWise\Clients\System\Model\ServiceLocationReference**](ServiceLocationReference.md) |  | [optional] 
**service_teams** | **int[]** |  | [optional] 
**time_approver** | [**\Spinen\ConnectWise\Clients\System\Model\MemberReference**](MemberReference.md) |  | 
**time_reminder_email_flag** | **bool** |  | [optional] 
**time_sheet_start_date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**time_zone** | [**\Spinen\ConnectWise\Clients\System\Model\TimeZoneReference**](TimeZoneReference.md) |  | 
**title** | **string** |  | [optional] 
**type** | [**\Spinen\ConnectWise\Clients\System\Model\MemberTypeReference**](MemberTypeReference.md) |  | [optional] 
**vendor_number** | **string** |  | [optional] 
**warehouse** | [**\Spinen\ConnectWise\Clients\System\Model\WarehouseReference**](WarehouseReference.md) |  | [optional] 
**warehouse_bin** | [**\Spinen\ConnectWise\Clients\System\Model\WarehouseBinReference**](WarehouseBinReference.md) |  | [optional] 
**work_role** | [**\Spinen\ConnectWise\Clients\System\Model\WorkRoleReference**](WorkRoleReference.md) |  | 
**work_type** | [**\Spinen\ConnectWise\Clients\System\Model\WorkTypeReference**](WorkTypeReference.md) |  | [optional] 
**_info** | [**\Spinen\ConnectWise\Clients\System\Model\Metadata**](Metadata.md) | Metadata of the entity | [optional] 
**system_flag** | **bool** |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


