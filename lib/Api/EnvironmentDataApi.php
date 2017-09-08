<?php
/**
 * EnvironmentDataApi
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
 * EnvironmentDataApi Class Doc Comment
 *
 * @category Class
 * @package  Inwendo\Latex\Common
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EnvironmentDataApi
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
     * @return EnvironmentDataApi
     */
    public function setApiClient(\Inwendo\Latex\Common\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation getEnvironmentDataCollection
     *
     * Retrieves the collection of EnvironmentData resources.
     *
     * @return \Inwendo\Latex\Common\Model\EnvironmentDataResponse[]
     * @throws \Inwendo\Latex\Common\ApiException on non-2xx response
     */
    public function getEnvironmentDataCollection()
    {
        list($response) = $this->getEnvironmentDataCollectionWithHttpInfo();
        return $response;
    }

    /**
     * Operation getEnvironmentDataCollectionWithHttpInfo
     *
     * Retrieves the collection of EnvironmentData resources.
     *
     * @return Array of \Inwendo\Latex\Common\Model\EnvironmentDataResponse[], HTTP status code, HTTP response headers (array of strings)
     * @throws \Inwendo\Latex\Common\ApiException on non-2xx response
     */
    public function getEnvironmentDataCollectionWithHttpInfo()
    {
        // parse inputs
        $resourcePath = "/environment_datas";
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
                '\Inwendo\Latex\Common\Model\EnvironmentDataResponse[]',
                '/environment_datas'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Inwendo\Latex\Common\Model\EnvironmentDataResponse[]', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Inwendo\Latex\Common\Model\EnvironmentDataResponse[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getEnvironmentDataItem
     *
     * Retrieves a EnvironmentData resource.
     *
     * @param int $id  (required)
     * @return \Inwendo\Latex\Common\Model\EnvironmentDataResponse
     * @throws \Inwendo\Latex\Common\ApiException on non-2xx response
     */
    public function getEnvironmentDataItem($id)
    {
        list($response) = $this->getEnvironmentDataItemWithHttpInfo($id);
        return $response;
    }

    /**
     * Operation getEnvironmentDataItemWithHttpInfo
     *
     * Retrieves a EnvironmentData resource.
     *
     * @param int $id  (required)
     * @return Array of \Inwendo\Latex\Common\Model\EnvironmentDataResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws \Inwendo\Latex\Common\ApiException on non-2xx response
     */
    public function getEnvironmentDataItemWithHttpInfo($id)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling getEnvironmentDataItem');
        }
        // parse inputs
        $resourcePath = "/environment_datas/{id}";
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
                '\Inwendo\Latex\Common\Model\EnvironmentDataResponse',
                '/environment_datas/{id}'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Inwendo\Latex\Common\Model\EnvironmentDataResponse', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Inwendo\Latex\Common\Model\EnvironmentDataResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation putEnvironmentDataItem
     *
     * Creates a EnvironmentData resource.
     *
     * @param \Inwendo\Latex\Common\Model\EnvironmentDataRequest $environment_data The new EnvironmentData resource (optional)
     * @return \Inwendo\Latex\Common\Model\EnvironmentDataResponse
     * @throws \Inwendo\Latex\Common\ApiException on non-2xx response
     */
    public function putEnvironmentDataItem($environment_data = null)
    {
        list($response) = $this->putEnvironmentDataItemWithHttpInfo($environment_data);
        return $response;
    }

    /**
     * Operation putEnvironmentDataItemWithHttpInfo
     *
     * Creates a EnvironmentData resource.
     *
     * @param \Inwendo\Latex\Common\Model\EnvironmentDataRequest $environment_data The new EnvironmentData resource (optional)
     * @return Array of \Inwendo\Latex\Common\Model\EnvironmentDataResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws \Inwendo\Latex\Common\ApiException on non-2xx response
     */
    public function putEnvironmentDataItemWithHttpInfo($environment_data = null)
    {
        // parse inputs
        $resourcePath = "/environment_data";
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
        if (isset($environment_data)) {
            $_tempBody = $environment_data;
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
                '\Inwendo\Latex\Common\Model\EnvironmentDataResponse',
                '/environment_data'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Inwendo\Latex\Common\Model\EnvironmentDataResponse', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Inwendo\Latex\Common\Model\EnvironmentDataResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

}
