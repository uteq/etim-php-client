# Swagger\Client\FeatureApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiV2FeatureDetailsPost**](FeatureApi.md#apiv2featuredetailspost) | **POST** /api/v2/Feature/Details | 
[**apiV2FeatureSearchPost**](FeatureApi.md#apiv2featuresearchpost) | **POST** /api/v2/Feature/Search | 

# **apiV2FeatureDetailsPost**
> \Swagger\Client\Model\EtimFeature apiV2FeatureDetailsPost($body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\FeatureApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EntityDetailsInput(); // \Swagger\Client\Model\EntityDetailsInput | 

try {
    $result = $apiInstance->apiV2FeatureDetailsPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeatureApi->apiV2FeatureDetailsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EntityDetailsInput**](../Model/EntityDetailsInput.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\EtimFeature**](../Model/EtimFeature.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV2FeatureSearchPost**
> \Swagger\Client\Model\FeatureSearchOutput apiV2FeatureSearchPost($body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\FeatureApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EntitySearchInput(); // \Swagger\Client\Model\EntitySearchInput | 

try {
    $result = $apiInstance->apiV2FeatureSearchPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeatureApi->apiV2FeatureSearchPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EntitySearchInput**](../Model/EntitySearchInput.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\FeatureSearchOutput**](../Model/FeatureSearchOutput.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

