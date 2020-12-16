# Swagger\Client\ValueApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiV2ValueDetailsPost**](ValueApi.md#apiv2valuedetailspost) | **POST** /api/v2/Value/Details | 
[**apiV2ValueSearchPost**](ValueApi.md#apiv2valuesearchpost) | **POST** /api/v2/Value/Search | 

# **apiV2ValueDetailsPost**
> \Swagger\Client\Model\EtimValue apiV2ValueDetailsPost($body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ValueApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EntityDetailsInput(); // \Swagger\Client\Model\EntityDetailsInput | 

try {
    $result = $apiInstance->apiV2ValueDetailsPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ValueApi->apiV2ValueDetailsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EntityDetailsInput**](../Model/EntityDetailsInput.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\EtimValue**](../Model/EtimValue.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV2ValueSearchPost**
> \Swagger\Client\Model\ValueSearchOutput apiV2ValueSearchPost($body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ValueApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EntitySearchInput(); // \Swagger\Client\Model\EntitySearchInput | 

try {
    $result = $apiInstance->apiV2ValueSearchPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ValueApi->apiV2ValueSearchPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EntitySearchInput**](../Model/EntitySearchInput.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\ValueSearchOutput**](../Model/ValueSearchOutput.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

