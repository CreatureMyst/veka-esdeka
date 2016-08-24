<?php

namespace Creaturemyst\VekaEsdeka;

use GuzzleHttp\Client;

class Main
{
    const
        ENDPOINT_AUTH = 'https://oauth.vk.com/',
        ENDPOINT_API = 'https://api.vk.com/';

    private $clientId;
    private $clientSecret;
    private $accessToken;

    /** @var Client */
    protected $apiClient;

    /** @var Client */
    protected $authClient;

    public function __construct()
    {
        $this->apiClient = new Client(['base_uri' => self::ENDPOINT_API]);
        $this->authClient = new Client(['base_uri' => self::ENDPOINT_AUTH]);
    }

    /**
     * @param mixed $clientId
     * @return Main
     */
    public function setClientId($clientId)
    {
        $this->clientId = $clientId;
        return $this;
    }

    /**
     * @param mixed $clientSecret
     * @return Main
     */
    public function setClientSecret($clientSecret)
    {
        $this->clientSecret = $clientSecret;
        return $this;
    }

    /**
     * @param mixed $accessToken
     * @return Main
     */
    public function setAccessToken($accessToken)
    {
        $this->accessToken = $accessToken;
        return $this;
    }
}
