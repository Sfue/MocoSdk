<?php

namespace Sfue\MocoSdk;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Sfue\MocoSdk\Request\RequestInterface;
use Sfue\MocoSdk\Response\ResponseInterface;

/**
 * Class MocoClient
 * @package Sfue\Moco
 */
class MocoClient
{
    /** @var string */
    protected $baseUrl = 'https://%s.mocoapp.com/api/v1/';

    /** @var Client */
    protected $client;

    /**
     * MocoApi constructor.
     * @param string $domain
     * @param string $apiKey
     */
    public function __construct(string $domain, string $apiKey)
    {
        $this->client = new Client([
            'base_uri' => \sprintf($this->baseUrl, $domain),
            'headers' => [
                'Authorization' => 'Token token=' . $apiKey
            ]
        ]);
    }

    /**
     * @param string $url
     * @param string $method
     */
    public function request(string $url, string $method = 'get')
    {

    }

    /**
     * @param string $url
     * @param array $options
     * @param string $method
     * @throws \GuzzleHttp\Exception\GuzzleException

    public function do(string $url, array $options = [], string $method = 'get')
    {
        try {
            $response = $this->client->request($method, $url, $options);
        } catch(GuzzleException $e) {
            dump($e);
            // @todo handle exceptions
        }




        dump($response);
    }
     */

    /**
     * @param RequestInterface $request
     * @return ResponseInterface
     */
    public function do(RequestInterface $request): ResponseInterface
    {
        try {
            // @todo do options
            $clientResponse = $this->client->request($request->getMethod(), $request->getEndpoint(), $request->getOptions());

            if($request->returnsFile()) {
                $data = [
                    'content' => $clientResponse->getBody()->getContents()
                ];
            } else {
                $data = \json_decode($clientResponse->getBody(), true);
            }
dump($clientResponse);
            $nodeName = $request->getResponseClass();
            $response = new $nodeName($data, $clientResponse->getStatusCode());
        } catch(GuzzleException $e) {
            switch($e->getCode()) {
                case 404:
                    $nodeName = $request->getResponseClass();
                    $response = new $nodeName([], $e->getCode());
                    break;
            }
        }

        return $response;
    }
}
