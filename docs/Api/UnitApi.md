# Swagger\Client\UnitApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiV2UnitDetailsPost**](UnitApi.md#apiv2unitdetailspost) | **POST** /api/v2/Unit/Details | 
[**apiV2UnitSearchPost**](UnitApi.md#apiv2unitsearchpost) | **POST** /api/v2/Unit/Search | 

# **apiV2UnitDetailsPost**
> \Swagger\Client\Model\EtimUnit apiV2UnitDetailsPost($body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UnitApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EntityDetailsInput(); // \Swagger\Client\Model\EntityDetailsInput | 

try {
    $result = $apiInstance->apiV2UnitDetailsPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UnitApi->apiV2UnitDetailsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EntityDetailsInput**](../Model/EntityDetailsInput.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\EtimUnit**](../Model/EtimUnit.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV2UnitSearchPost**
> \Swagger\Client\Model\UnitSearchOutput apiV2UnitSearchPost($body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UnitApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EntitySearchInput(); // \Swagger\Client\Model\EntitySearchInput | 

try {
    $result = $apiInstance->apiV2UnitSearchPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UnitApi->apiV2UnitSearchPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EntitySearchInput**](../Model/EntitySearchInput.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\UnitSearchOutput**](../Model/UnitSearchOutput.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

