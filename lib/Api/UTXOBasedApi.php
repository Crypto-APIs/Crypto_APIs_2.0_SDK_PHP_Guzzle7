<?php
/**
 * UTXOBasedApi
 * PHP version 7.3
 *
 * @category Class
 * @package  CryptoAPIs
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * CryptoAPIs
 *
 * Crypto APIs 2.0 is a complex and innovative infrastructure layer that radically simplifies the development of any Blockchain and Crypto related applications. Organized around REST, Crypto APIs 2.0 can assist both novice Bitcoin/Ethereum enthusiasts and crypto experts with the development of their blockchain applications. Crypto APIs 2.0 provides unified endpoints and data, raw data, automatic tokens and coins forwardings, callback functionalities, and much more.
 *
 * The version of the OpenAPI document: 2.0.0
 * Contact: developers@cryptoapis.io
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.0.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace CryptoAPIs\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use CryptoAPIs\ApiException;
use CryptoAPIs\Configuration;
use CryptoAPIs\HeaderSelector;
use CryptoAPIs\ObjectSerializer;

/**
 * UTXOBasedApi Class Doc Comment
 *
 * @category Class
 * @package  CryptoAPIs
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class UTXOBasedApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @var int Host index
     */
    protected $hostIndex;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $hostIndex = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $hostIndex;
    }

    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex($hostIndex): void
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation listUnspentTransactionOutputsByAddress
     *
     * List Unspent Transaction Outputs By Address
     *
     * @param  string $blockchain Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc. (required)
     * @param  string $network Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \&quot;mainnet\&quot; is the live network with actual data while networks like \&quot;testnet\&quot;, \&quot;ropsten\&quot; are test networks. (required)
     * @param  string $address Represents the public address, which is a compressed and shortened form of a public key. (required)
     * @param  string $context In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. &#x60;context&#x60; is specified by the user. (optional)
     * @param  int $limit Defines how many items should be returned in the response per page basis. (optional, default to 50)
     * @param  int $offset The starting index of the response items, i.e. where the response should start listing the returned items. (optional, default to 0)
     *
     * @throws \CryptoAPIs\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \CryptoAPIs\Model\ListUnspentTransactionOutputsByAddressR|\CryptoAPIs\Model\InlineResponse40052|\CryptoAPIs\Model\InlineResponse40152|\CryptoAPIs\Model\InlineResponse402|\CryptoAPIs\Model\InlineResponse40352|\CryptoAPIs\Model\InlineResponse409|\CryptoAPIs\Model\InlineResponse415|\CryptoAPIs\Model\InlineResponse422|\CryptoAPIs\Model\InlineResponse429|\CryptoAPIs\Model\InlineResponse500
     */
    public function listUnspentTransactionOutputsByAddress($blockchain, $network, $address, $context = null, $limit = 50, $offset = 0)
    {
        list($response) = $this->listUnspentTransactionOutputsByAddressWithHttpInfo($blockchain, $network, $address, $context, $limit, $offset);
        return $response;
    }

    /**
     * Operation listUnspentTransactionOutputsByAddressWithHttpInfo
     *
     * List Unspent Transaction Outputs By Address
     *
     * @param  string $blockchain Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc. (required)
     * @param  string $network Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \&quot;mainnet\&quot; is the live network with actual data while networks like \&quot;testnet\&quot;, \&quot;ropsten\&quot; are test networks. (required)
     * @param  string $address Represents the public address, which is a compressed and shortened form of a public key. (required)
     * @param  string $context In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. &#x60;context&#x60; is specified by the user. (optional)
     * @param  int $limit Defines how many items should be returned in the response per page basis. (optional, default to 50)
     * @param  int $offset The starting index of the response items, i.e. where the response should start listing the returned items. (optional, default to 0)
     *
     * @throws \CryptoAPIs\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \CryptoAPIs\Model\ListUnspentTransactionOutputsByAddressR|\CryptoAPIs\Model\InlineResponse40052|\CryptoAPIs\Model\InlineResponse40152|\CryptoAPIs\Model\InlineResponse402|\CryptoAPIs\Model\InlineResponse40352|\CryptoAPIs\Model\InlineResponse409|\CryptoAPIs\Model\InlineResponse415|\CryptoAPIs\Model\InlineResponse422|\CryptoAPIs\Model\InlineResponse429|\CryptoAPIs\Model\InlineResponse500, HTTP status code, HTTP response headers (array of strings)
     */
    public function listUnspentTransactionOutputsByAddressWithHttpInfo($blockchain, $network, $address, $context = null, $limit = 50, $offset = 0)
    {
        $request = $this->listUnspentTransactionOutputsByAddressRequest($blockchain, $network, $address, $context, $limit, $offset);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\CryptoAPIs\Model\ListUnspentTransactionOutputsByAddressR' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\CryptoAPIs\Model\ListUnspentTransactionOutputsByAddressR', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 400:
                    if ('\CryptoAPIs\Model\InlineResponse40052' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\CryptoAPIs\Model\InlineResponse40052', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 401:
                    if ('\CryptoAPIs\Model\InlineResponse40152' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\CryptoAPIs\Model\InlineResponse40152', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 402:
                    if ('\CryptoAPIs\Model\InlineResponse402' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\CryptoAPIs\Model\InlineResponse402', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 403:
                    if ('\CryptoAPIs\Model\InlineResponse40352' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\CryptoAPIs\Model\InlineResponse40352', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 409:
                    if ('\CryptoAPIs\Model\InlineResponse409' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\CryptoAPIs\Model\InlineResponse409', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 415:
                    if ('\CryptoAPIs\Model\InlineResponse415' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\CryptoAPIs\Model\InlineResponse415', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 422:
                    if ('\CryptoAPIs\Model\InlineResponse422' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\CryptoAPIs\Model\InlineResponse422', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 429:
                    if ('\CryptoAPIs\Model\InlineResponse429' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\CryptoAPIs\Model\InlineResponse429', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 500:
                    if ('\CryptoAPIs\Model\InlineResponse500' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\CryptoAPIs\Model\InlineResponse500', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\CryptoAPIs\Model\ListUnspentTransactionOutputsByAddressR';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\CryptoAPIs\Model\ListUnspentTransactionOutputsByAddressR',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\CryptoAPIs\Model\InlineResponse40052',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\CryptoAPIs\Model\InlineResponse40152',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 402:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\CryptoAPIs\Model\InlineResponse402',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\CryptoAPIs\Model\InlineResponse40352',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 409:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\CryptoAPIs\Model\InlineResponse409',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 415:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\CryptoAPIs\Model\InlineResponse415',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 422:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\CryptoAPIs\Model\InlineResponse422',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 429:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\CryptoAPIs\Model\InlineResponse429',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\CryptoAPIs\Model\InlineResponse500',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation listUnspentTransactionOutputsByAddressAsync
     *
     * List Unspent Transaction Outputs By Address
     *
     * @param  string $blockchain Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc. (required)
     * @param  string $network Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \&quot;mainnet\&quot; is the live network with actual data while networks like \&quot;testnet\&quot;, \&quot;ropsten\&quot; are test networks. (required)
     * @param  string $address Represents the public address, which is a compressed and shortened form of a public key. (required)
     * @param  string $context In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. &#x60;context&#x60; is specified by the user. (optional)
     * @param  int $limit Defines how many items should be returned in the response per page basis. (optional, default to 50)
     * @param  int $offset The starting index of the response items, i.e. where the response should start listing the returned items. (optional, default to 0)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listUnspentTransactionOutputsByAddressAsync($blockchain, $network, $address, $context = null, $limit = 50, $offset = 0)
    {
        return $this->listUnspentTransactionOutputsByAddressAsyncWithHttpInfo($blockchain, $network, $address, $context, $limit, $offset)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation listUnspentTransactionOutputsByAddressAsyncWithHttpInfo
     *
     * List Unspent Transaction Outputs By Address
     *
     * @param  string $blockchain Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc. (required)
     * @param  string $network Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \&quot;mainnet\&quot; is the live network with actual data while networks like \&quot;testnet\&quot;, \&quot;ropsten\&quot; are test networks. (required)
     * @param  string $address Represents the public address, which is a compressed and shortened form of a public key. (required)
     * @param  string $context In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. &#x60;context&#x60; is specified by the user. (optional)
     * @param  int $limit Defines how many items should be returned in the response per page basis. (optional, default to 50)
     * @param  int $offset The starting index of the response items, i.e. where the response should start listing the returned items. (optional, default to 0)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listUnspentTransactionOutputsByAddressAsyncWithHttpInfo($blockchain, $network, $address, $context = null, $limit = 50, $offset = 0)
    {
        $returnType = '\CryptoAPIs\Model\ListUnspentTransactionOutputsByAddressR';
        $request = $this->listUnspentTransactionOutputsByAddressRequest($blockchain, $network, $address, $context, $limit, $offset);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'listUnspentTransactionOutputsByAddress'
     *
     * @param  string $blockchain Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc. (required)
     * @param  string $network Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \&quot;mainnet\&quot; is the live network with actual data while networks like \&quot;testnet\&quot;, \&quot;ropsten\&quot; are test networks. (required)
     * @param  string $address Represents the public address, which is a compressed and shortened form of a public key. (required)
     * @param  string $context In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. &#x60;context&#x60; is specified by the user. (optional)
     * @param  int $limit Defines how many items should be returned in the response per page basis. (optional, default to 50)
     * @param  int $offset The starting index of the response items, i.e. where the response should start listing the returned items. (optional, default to 0)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function listUnspentTransactionOutputsByAddressRequest($blockchain, $network, $address, $context = null, $limit = 50, $offset = 0)
    {
        // verify the required parameter 'blockchain' is set
        if ($blockchain === null || (is_array($blockchain) && count($blockchain) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $blockchain when calling listUnspentTransactionOutputsByAddress'
            );
        }
        // verify the required parameter 'network' is set
        if ($network === null || (is_array($network) && count($network) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $network when calling listUnspentTransactionOutputsByAddress'
            );
        }
        // verify the required parameter 'address' is set
        if ($address === null || (is_array($address) && count($address) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $address when calling listUnspentTransactionOutputsByAddress'
            );
        }

        $resourcePath = '/blockchain-data/{blockchain}/{network}/addresses/{address}/unspent';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($context !== null) {
            if('form' === 'form' && is_array($context)) {
                foreach($context as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['context'] = $context;
            }
        }
        // query params
        if ($limit !== null) {
            if('form' === 'form' && is_array($limit)) {
                foreach($limit as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['limit'] = $limit;
            }
        }
        // query params
        if ($offset !== null) {
            if('form' === 'form' && is_array($offset)) {
                foreach($offset as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['offset'] = $offset;
            }
        }


        // path params
        if ($blockchain !== null) {
            $resourcePath = str_replace(
                '{' . 'blockchain' . '}',
                ObjectSerializer::toPathValue($blockchain),
                $resourcePath
            );
        }
        // path params
        if ($network !== null) {
            $resourcePath = str_replace(
                '{' . 'network' . '}',
                ObjectSerializer::toPathValue($network),
                $resourcePath
            );
        }
        // path params
        if ($address !== null) {
            $resourcePath = str_replace(
                '{' . 'address' . '}',
                ObjectSerializer::toPathValue($address),
                $resourcePath
            );
        }


        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('x-api-key');
        if ($apiKey !== null) {
            $headers['x-api-key'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
