# EntitySearchInput

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**from** | **int** | Startposition for paging.  From must be less than or equal to 19000. From + size must be less than or equal to 20000 | 
**size** | **int** | Total records per page  Size must be less than or equal to 1000. From + size must be less than or equal to 20000 | 
**languagecode** | **string** | Language of the output description fields.   Language of the input SearchString if used | 
**search_string** | **string** | Search with a specific text in description or synonym | [optional] 
**deprecated** | **bool** | Some entities (features, values and units) can be deprecated. This means they may not be used anymore in future.  If not set, return both deprecated and not deprecated entities  If Deprecated &#x3D; true, return only deprecated entities  If Deprecated &#x3D; false, return only entities that are not deprecated  Only applicable for features, values and units | [optional] 
**modelling** | **bool** | Some classes are special Modelling classes. Modelling classes start with MC******  If not set, return both Modelling (MC) and Regular (EC) classes  If Modelling &#x3D; true, return only modelling classes  If Modelling &#x3D; false, return only regular classes  Only applicable for classes | [optional] 
**include** | [**\Swagger\Client\Model\IncludeModel**](IncludeModel.md) |  | [optional] 
**filters** | [**\Swagger\Client\Model\FilterModel[]**](FilterModel.md) | Use filters to filter the results | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

