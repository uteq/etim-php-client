# Swagger\Client\MiscApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiV2MiscLanguagesAllowedGet**](MiscApi.md#apiv2misclanguagesallowedget) | **GET** /api/v2/Misc/LanguagesAllowed | Get a list of languages.
[**apiV2MiscLanguagesGet**](MiscApi.md#apiv2misclanguagesget) | **GET** /api/v2/Misc/Languages | Get a list of languages.
[**apiV2MiscReleasesGet**](MiscApi.md#apiv2miscreleasesget) | **GET** /api/v2/Misc/Releases | Get a list of ETIM releases.

# **apiV2MiscLanguagesAllowedGet**
> \Swagger\Client\Model\Language[] apiV2MiscLanguagesAllowedGet()

Get a list of languages.

This service returns a list of all allowed languages.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\MiscApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->apiV2MiscLanguagesAllowedGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MiscApi->apiV2MiscLanguagesAllowedGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\Language[]**](../Model/Language.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV2MiscLanguagesGet**
> \Swagger\Client\Model\Language[] apiV2MiscLanguagesGet()

Get a list of languages.

This service returns a list of all languages.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\MiscApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->apiV2MiscLanguagesGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MiscApi->apiV2MiscLanguagesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\Language[]**](../Model/Language.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV2MiscReleasesGet**
> \Swagger\Client\Model\Release[] apiV2MiscReleasesGet()

Get a list of ETIM releases.

This service returns a list of all ETIM releases.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\MiscApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->apiV2MiscReleasesGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MiscApi->apiV2MiscReleasesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\Release[]**](../Model/Release.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

