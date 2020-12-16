# Swagger\Client\ClassApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiV2ClassDetailsDiffPost**](ClassApi.md#apiv2classdetailsdiffpost) | **POST** /api/v2/Class/DetailsDiff | Get a specific class by class code and version, and show changes with previous version.
[**apiV2ClassDetailsForReleasePost**](ClassApi.md#apiv2classdetailsforreleasepost) | **POST** /api/v2/Class/DetailsForRelease | Get a specific class by class code and release.
[**apiV2ClassDetailsManyPost**](ClassApi.md#apiv2classdetailsmanypost) | **POST** /api/v2/Class/DetailsMany | Get multiple classes by class code and version.
[**apiV2ClassDetailsPost**](ClassApi.md#apiv2classdetailspost) | **POST** /api/v2/Class/Details | Get a specific class by class code and version.
[**apiV2ClassSearchPost**](ClassApi.md#apiv2classsearchpost) | **POST** /api/v2/Class/Search | Get a list of all classes that meet the input filters.

# **apiV2ClassDetailsDiffPost**
> \Swagger\Client\Model\EtimClass apiV2ClassDetailsDiffPost($body)

Get a specific class by class code and version, and show changes with previous version.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ClassApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\ClassDetailsInput(); // \Swagger\Client\Model\ClassDetailsInput | Object of type Etim.Models.Elastic.ClassDetailsInput.

try {
    $result = $apiInstance->apiV2ClassDetailsDiffPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClassApi->apiV2ClassDetailsDiffPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ClassDetailsInput**](../Model/ClassDetailsInput.md)| Object of type Etim.Models.Elastic.ClassDetailsInput. | [optional]

### Return type

[**\Swagger\Client\Model\EtimClass**](../Model/EtimClass.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV2ClassDetailsForReleasePost**
> \Swagger\Client\Model\EtimClass apiV2ClassDetailsForReleasePost($body)

Get a specific class by class code and release.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ClassApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\ClassDetailsReleaseInput(); // \Swagger\Client\Model\ClassDetailsReleaseInput | Object of type Etim.Models.Elastic.ClassDetailsReleaseInput.

try {
    $result = $apiInstance->apiV2ClassDetailsForReleasePost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClassApi->apiV2ClassDetailsForReleasePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ClassDetailsReleaseInput**](../Model/ClassDetailsReleaseInput.md)| Object of type Etim.Models.Elastic.ClassDetailsReleaseInput. | [optional]

### Return type

[**\Swagger\Client\Model\EtimClass**](../Model/EtimClass.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV2ClassDetailsManyPost**
> \Swagger\Client\Model\EtimClass[] apiV2ClassDetailsManyPost($body)

Get multiple classes by class code and version.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ClassApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\ClassListInput(); // \Swagger\Client\Model\ClassListInput | Objects of type Etim.Models.Elastic.ClassListInput.

try {
    $result = $apiInstance->apiV2ClassDetailsManyPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClassApi->apiV2ClassDetailsManyPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ClassListInput**](../Model/ClassListInput.md)| Objects of type Etim.Models.Elastic.ClassListInput. | [optional]

### Return type

[**\Swagger\Client\Model\EtimClass[]**](../Model/EtimClass.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV2ClassDetailsPost**
> \Swagger\Client\Model\EtimClass apiV2ClassDetailsPost($body)

Get a specific class by class code and version.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ClassApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\ClassDetailsInput(); // \Swagger\Client\Model\ClassDetailsInput | Object of type Etim.Models.Elastic.ClassDetailsInput.

try {
    $result = $apiInstance->apiV2ClassDetailsPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClassApi->apiV2ClassDetailsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ClassDetailsInput**](../Model/ClassDetailsInput.md)| Object of type Etim.Models.Elastic.ClassDetailsInput. | [optional]

### Return type

[**\Swagger\Client\Model\EtimClass**](../Model/EtimClass.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV2ClassSearchPost**
> \Swagger\Client\Model\ClassSearchOutput apiV2ClassSearchPost($body)

Get a list of all classes that meet the input filters.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ClassApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\EntitySearchInput(); // \Swagger\Client\Model\EntitySearchInput | Object of type Etim.Models.Elastic.EntitySearchInput.

try {
    $result = $apiInstance->apiV2ClassSearchPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClassApi->apiV2ClassSearchPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EntitySearchInput**](../Model/EntitySearchInput.md)| Object of type Etim.Models.Elastic.EntitySearchInput. | [optional]

### Return type

[**\Swagger\Client\Model\ClassSearchOutput**](../Model/ClassSearchOutput.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

