<?php

namespace Creaturemyst\VekaEsdeka;

class Main
{
    private $clientId;
    private $clientSecret;
    private $accessToken;

    public function __construct()
    {
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
