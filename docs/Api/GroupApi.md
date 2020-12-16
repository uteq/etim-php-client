# Swagger\Client\GroupApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiV2GroupDetailsPost**](GroupApi.md#apiv2groupdetailspost) | **POST** /api/v2/Group/Details | 
[**apiV2GroupSearchPost**](GroupApi.md#apiv2groupsearchpost) | **POST** /api/v2/Group/Search | 

# **apiV2GroupDetailsPost**
> \Swagger\Client\Model\EtimGroup apiV2GroupDetailsPost($body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EntityDetailsInput(); // \Swagger\Client\Model\EntityDetailsInput | 

try {
    $result = $apiInstance->apiV2GroupDetailsPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->apiV2GroupDetailsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EntityDetailsInput**](../Model/EntityDetailsInput.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\EtimGroup**](../Model/EtimGroup.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV2GroupSearchPost**
> \Swagger\Client\Model\GroupSearchOutput apiV2GroupSearchPost($body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\GroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EntitySearchInput(); // \Swagger\Client\Model\EntitySearchInput | 

try {
    $result = $apiInstance->apiV2GroupSearchPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupApi->apiV2GroupSearchPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EntitySearchInput**](../Model/EntitySearchInput.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\GroupSearchOutput**](../Model/GroupSearchOutput.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

