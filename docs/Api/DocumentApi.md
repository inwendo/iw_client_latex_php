# Inwendo\Latex\Common\DocumentApi

All URIs are relative to *https://latex.service.inwendo.cloud/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getDocumentCollection**](DocumentApi.md#getDocumentCollection) | **GET** /documents | Retrieves the collection of Document resources.
[**getDocumentItem**](DocumentApi.md#getDocumentItem) | **GET** /documents/{id} | Retrieves a Document resource.
[**postDocumentCollection**](DocumentApi.md#postDocumentCollection) | **POST** /documents | Creates a Document resource.
[**putDocumentItem**](DocumentApi.md#putDocumentItem) | **PUT** /documents/{id} | Replaces the Document resource.


# **getDocumentCollection**
> \Inwendo\Latex\Common\Model\DocumentResponse[] getDocumentCollection()

Retrieves the collection of Document resources.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: password
Inwendo\Latex\Common\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Inwendo\Latex\Common\Api\DocumentApi();

try {
    $result = $api_instance->getDocumentCollection();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->getDocumentCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Inwendo\Latex\Common\Model\DocumentResponse[]**](../Model/DocumentResponse.md)

### Authorization

[password](../../README.md#password)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/ld+json, application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDocumentItem**
> \Inwendo\Latex\Common\Model\DocumentResponse getDocumentItem($id)

Retrieves a Document resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: password
Inwendo\Latex\Common\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Inwendo\Latex\Common\Api\DocumentApi();
$id = 56; // int | 

try {
    $result = $api_instance->getDocumentItem($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->getDocumentItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\Inwendo\Latex\Common\Model\DocumentResponse**](../Model/DocumentResponse.md)

### Authorization

[password](../../README.md#password)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/ld+json, application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postDocumentCollection**
> \Inwendo\Latex\Common\Model\DocumentResponse postDocumentCollection($document)

Creates a Document resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: password
Inwendo\Latex\Common\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Inwendo\Latex\Common\Api\DocumentApi();
$document = new \Inwendo\Latex\Common\Model\DocumentRequest(); // \Inwendo\Latex\Common\Model\DocumentRequest | The new Document resource

try {
    $result = $api_instance->postDocumentCollection($document);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->postDocumentCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **document** | [**\Inwendo\Latex\Common\Model\DocumentRequest**](../Model/\Inwendo\Latex\Common\Model\DocumentRequest.md)| The new Document resource | [optional]

### Return type

[**\Inwendo\Latex\Common\Model\DocumentResponse**](../Model/DocumentResponse.md)

### Authorization

[password](../../README.md#password)

### HTTP request headers

 - **Content-Type**: application/ld+json, application/json, text/html
 - **Accept**: application/ld+json, application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putDocumentItem**
> \Inwendo\Latex\Common\Model\DocumentResponse putDocumentItem($id, $document)

Replaces the Document resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: password
Inwendo\Latex\Common\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Inwendo\Latex\Common\Api\DocumentApi();
$id = 56; // int | 
$document = new \Inwendo\Latex\Common\Model\DocumentRequest(); // \Inwendo\Latex\Common\Model\DocumentRequest | The updated Document resource

try {
    $result = $api_instance->putDocumentItem($id, $document);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->putDocumentItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **document** | [**\Inwendo\Latex\Common\Model\DocumentRequest**](../Model/\Inwendo\Latex\Common\Model\DocumentRequest.md)| The updated Document resource | [optional]

### Return type

[**\Inwendo\Latex\Common\Model\DocumentResponse**](../Model/DocumentResponse.md)

### Authorization

[password](../../README.md#password)

### HTTP request headers

 - **Content-Type**: application/ld+json, application/json, text/html
 - **Accept**: application/ld+json, application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

