# Inwendo\Latex\Common\EnvironmentDataApi

All URIs are relative to *https://latex.service.inwendo.cloud/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getEnvironmentDataCollection**](EnvironmentDataApi.md#getEnvironmentDataCollection) | **GET** /environment_datas | Retrieves the collection of EnvironmentData resources.
[**getEnvironmentDataItem**](EnvironmentDataApi.md#getEnvironmentDataItem) | **GET** /environment_datas/{id} | Retrieves a EnvironmentData resource.
[**putEnvironmentDataItem**](EnvironmentDataApi.md#putEnvironmentDataItem) | **POST** /environment_data | Creates a EnvironmentData resource.


# **getEnvironmentDataCollection**
> \Inwendo\Latex\Common\Model\EnvironmentDataResponse[] getEnvironmentDataCollection()

Retrieves the collection of EnvironmentData resources.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: password
Inwendo\Latex\Common\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Inwendo\Latex\Common\Api\EnvironmentDataApi();

try {
    $result = $api_instance->getEnvironmentDataCollection();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentDataApi->getEnvironmentDataCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Inwendo\Latex\Common\Model\EnvironmentDataResponse[]**](../Model/EnvironmentDataResponse.md)

### Authorization

[password](../../README.md#password)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/ld+json, application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEnvironmentDataItem**
> \Inwendo\Latex\Common\Model\EnvironmentDataResponse getEnvironmentDataItem($id)

Retrieves a EnvironmentData resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: password
Inwendo\Latex\Common\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Inwendo\Latex\Common\Api\EnvironmentDataApi();
$id = 56; // int | 

try {
    $result = $api_instance->getEnvironmentDataItem($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentDataApi->getEnvironmentDataItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\Inwendo\Latex\Common\Model\EnvironmentDataResponse**](../Model/EnvironmentDataResponse.md)

### Authorization

[password](../../README.md#password)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/ld+json, application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putEnvironmentDataItem**
> \Inwendo\Latex\Common\Model\EnvironmentDataResponse putEnvironmentDataItem($environment_data)

Creates a EnvironmentData resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: password
Inwendo\Latex\Common\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Inwendo\Latex\Common\Api\EnvironmentDataApi();
$environment_data = new \Inwendo\Latex\Common\Model\EnvironmentDataRequest(); // \Inwendo\Latex\Common\Model\EnvironmentDataRequest | The new EnvironmentData resource

try {
    $result = $api_instance->putEnvironmentDataItem($environment_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentDataApi->putEnvironmentDataItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **environment_data** | [**\Inwendo\Latex\Common\Model\EnvironmentDataRequest**](../Model/\Inwendo\Latex\Common\Model\EnvironmentDataRequest.md)| The new EnvironmentData resource | [optional]

### Return type

[**\Inwendo\Latex\Common\Model\EnvironmentDataResponse**](../Model/EnvironmentDataResponse.md)

### Authorization

[password](../../README.md#password)

### HTTP request headers

 - **Content-Type**: application/ld+json, application/json, text/html
 - **Accept**: application/ld+json, application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

