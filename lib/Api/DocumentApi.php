<?php
/**
 * DocumentApi
 * PHP version 5
 *
 * @category Class
 * @package  Inwendo\Latex\Common
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Inwendo Latex To PDF
 *
 * No descripton provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 0.0.1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Inwendo\Latex\Common\Api;

use \Inwendo\Latex\Common\Configuration;
use \Inwendo\Latex\Common\ApiClient;
use \Inwendo\Latex\Common\ApiException;
use \Inwendo\Latex\Common\ObjectSerializer;

/**
 * DocumentApi Class Doc Comment
 *
 * @category Class
 * @package  Inwendo\Latex\Common
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DocumentApi
{

    /**
     * API Client
     *
     * @var \Inwendo\Latex\Common\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \Inwendo\Latex\Common\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\Inwendo\Latex\Common\ApiClient $apiClient = null)
    {
        if ($apiClient == null) {
            $apiClient = new ApiClient();
            $apiClient->getConfig()->setHost('https://latex.service.inwendo.cloud');
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \Inwendo\Latex\Common\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \Inwendo\Latex\Common\ApiClient $apiClient set the API client
     *
     * @return DocumentApi
     */
    public function setApiClient(\Inwendo\Latex\Common\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation getDocumentCollection
     *
     * Retrieves the collection of Document resources.
     *
     * @return \Inwendo\Latex\Common\Model\DocumentResponse[]
     * @throws \Inwendo\Latex\Common\ApiException on non-2xx response
     */
    public function getDocumentCollection()
    {
        list($response) = $this->getDocumentCollectionWithHttpInfo();
        return $response;
    }

    /**
     * Operation getDocumentCollectionWithHttpInfo
     *
     * Retrieves the collection of Document resources.
     *
     * @return Array of \Inwendo\Latex\Common\Model\DocumentResponse[], HTTP status code, HTTP response headers (array of strings)
     * @throws \Inwendo\Latex\Common\ApiException on non-2xx response
     */
    public function getDocumentCollectionWithHttpInfo()
    {
        // parse inputs
        $resourcePath = "/documents";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/ld+json', 'application/json', 'text/html'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array());

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Inwendo\Latex\Common\Model\DocumentResponse[]',
                '/documents'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Inwendo\Latex\Common\Model\DocumentResponse[]', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Inwendo\Latex\Common\Model\DocumentResponse[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getDocumentItem
     *
     * Retrieves a Document resource.
     *
     * @param int $id  (required)
     * @return \Inwendo\Latex\Common\Model\DocumentResponse
     * @throws \Inwendo\Latex\Common\ApiException on non-2xx response
     */
    public function getDocumentItem($id)
    {
        list($response) = $this->getDocumentItemWithHttpInfo($id);
        return $response;
    }

    /**
     * Operation getDocumentItemWithHttpInfo
     *
     * Retrieves a Document resource.
     *
     * @param int $id  (required)
     * @return Array of \Inwendo\Latex\Common\Model\DocumentResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws \Inwendo\Latex\Common\ApiException on non-2xx response
     */
    public function getDocumentItemWithHttpInfo($id)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling getDocumentItem');
        }
        // parse inputs
        $resourcePath = "/documents/{id}";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/ld+json', 'application/json', 'text/html'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array());

        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Inwendo\Latex\Common\Model\DocumentResponse',
                '/documents/{id}'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Inwendo\Latex\Common\Model\DocumentResponse', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Inwendo\Latex\Common\Model\DocumentResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation postDocumentCollection
     *
     * Creates a Document resource.
     *
     * @param \Inwendo\Latex\Common\Model\DocumentRequest $document The new Document resource (optional)
     * @return \Inwendo\Latex\Common\Model\DocumentResponse
     * @throws \Inwendo\Latex\Common\ApiException on non-2xx response
     */
    public function postDocumentCollection($document = null)
    {
        list($response) = $this->postDocumentCollectionWithHttpInfo($document);
        return $response;
    }

    /**
     * Operation postDocumentCollectionWithHttpInfo
     *
     * Creates a Document resource.
     *
     * @param \Inwendo\Latex\Common\Model\DocumentRequest $document The new Document resource (optional)
     * @return Array of \Inwendo\Latex\Common\Model\DocumentResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws \Inwendo\Latex\Common\ApiException on non-2xx response
     */
    public function postDocumentCollectionWithHttpInfo($document = null)
    {
        // parse inputs
        $resourcePath = "/documents";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/ld+json', 'application/json', 'text/html'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/ld+json','application/json','text/html'));

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($document)) {
            $_tempBody = $document;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Inwendo\Latex\Common\Model\DocumentResponse',
                '/documents'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Inwendo\Latex\Common\Model\DocumentResponse', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Inwendo\Latex\Common\Model\DocumentResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation putDocumentItem
     *
     * Replaces the Document resource.
     *
     * @param int $id  (required)
     * @param \Inwendo\Latex\Common\Model\DocumentRequest $document The updated Document resource (optional)
     * @return \Inwendo\Latex\Common\Model\DocumentResponse
     * @throws \Inwendo\Latex\Common\ApiException on non-2xx response
     */
    public function putDocumentItem($id, $document = null)
    {
        list($response) = $this->putDocumentItemWithHttpInfo($id, $document);
        return $response;
    }

    /**
     * Operation putDocumentItemWithHttpInfo
     *
     * Replaces the Document resource.
     *
     * @param int $id  (required)
     * @param \Inwendo\Latex\Common\Model\DocumentRequest $document The updated Document resource (optional)
     * @return Array of \Inwendo\Latex\Common\Model\DocumentResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws \Inwendo\Latex\Common\ApiException on non-2xx response
     */
    public function putDocumentItemWithHttpInfo($id, $document = null)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling putDocumentItem');
        }
        // parse inputs
        $resourcePath = "/documents/{id}";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/ld+json', 'application/json', 'text/html'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/ld+json','application/json','text/html'));

        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($document)) {
            $_tempBody = $document;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'PUT',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Inwendo\Latex\Common\Model\DocumentResponse',
                '/documents/{id}'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Inwendo\Latex\Common\Model\DocumentResponse', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Inwendo\Latex\Common\Model\DocumentResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

}
