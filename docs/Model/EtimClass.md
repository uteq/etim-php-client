# EtimClass

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**parms** | [**\Swagger\Client\Model\SteeringParms**](SteeringParms.md) |  | [optional] 
**code** | **string** | Class code, eg: \&quot;EC000001\&quot; | [optional] 
**version** | **int** | Class version, eg: 4 | [optional] 
**status** | **int** | Class status  2 - Under construction  3 - Ready for publication  5 - Published  9 - Deleted | [optional] 
**mutation_date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**modelling** | **bool** | Indicates if this is a modelling class | [optional] 
**dimensional_drawing_svg_url** | **string** | Dimensional Drawing Svg for modelling classes | [optional] 
**description** | **string** | Class description in the requested language | [optional] 
**synonyms** | **string[]** | Class synonyms in the requested language | [optional] 
**group** | [**\Swagger\Client\Model\EtimGroup**](EtimGroup.md) |  | [optional] 
**features** | [**\Swagger\Client\Model\EtimClassFeature[]**](EtimClassFeature.md) | ETIM Features | [optional] 
**linked_modelling_classes** | [**\Swagger\Client\Model\EtimClassMinimal[]**](EtimClassMinimal.md) | Linked modelling classes | [optional] 
**linked_regular_classes** | [**\Swagger\Client\Model\EtimClassMinimal[]**](EtimClassMinimal.md) | Linked regular classes | [optional] 
**releases** | **string[]** | ETIM Releases, \&quot;DYNAMIC\&quot;, \&quot;ETIM-8.0\&quot;, \&quot;ETIM-7.0\&quot;, \&quot;ETIM-6.0\&quot;, \&quot;ETIM-5.0\&quot;, \&quot;ETIM-4.0\&quot; | [optional] 
**translations** | [**\Swagger\Client\Model\EtimClassTranslation[]**](EtimClassTranslation.md) | Translation | [optional] 
**change_code** | [**\Swagger\Client\Model\Changecode**](Changecode.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

