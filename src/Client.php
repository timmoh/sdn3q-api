<?php

namespace SDN3Q;

class Client
{

    /**
     * @var string
     */
    protected $apiVersion = '2';
    /**
     * @var null|string
     */
    protected $apiKey     = null;

    /**
     * @var string
     */
    protected $apiProtocol     = 'https';
    /**
     * @var string
     */
    protected $baseUrl         = 'sdn.3qsdn.com/api';
    /**
     * @var null|string
     */
    protected $userName        = null;
    /**
     * @var null|string
     */
    protected $userPassword    = null;
    /**
     * use api key (true) as header auth
     * @var bool
     */
    protected $useHeaderApiKey = true;
    /**
     * use use user/passwort (true) as header auth
     * @var bool
     */
    protected $useHeaderUserPW = false;

    /**
     * BaseRequest constructor.
     *
     * @param string $apiKey
     * @param int    $apiVersion
     */
    public function __construct($apiKey = null, $apiVersion = 2)
    {
        $this->apiKey     = $apiKey;
        $this->apiVersion = $apiVersion;
    }


    public function __get(string $name)
    {
        $method = 'get' . ucfirst($name);
        if (method_exists($this, $method)) {
            return $this->$method();
        }
        if (property_exists($this, $name)) {
            return $this->{$name};
        } else {
            return null;
        }
    }

    public function __set(string $name, $value)
    {
        $method = 'set' . ucfirst($name);
        if (method_exists($this, $method)) {
            return $this->$method($value);
        }
        if (property_exists($this, $name)) {
            $this->{$name} = $value;
        }
    }

    /**
     * Build API Header
     *
     * @return array
     * @throws \Exception
     */
    public function apiHeader()
    {
        $header = [];
        try {
            if ($this->useHeaderApiKey) {
                $header = $this->apiKeyHeader();
            } elseif ($this->useHeaderUserPW) {
                $header = $this->apiLoginHeader();
            }
        } catch (\Exception $e) {
            throw $e;
        }
        return $header;
    }

    /**
     * @return array
     * @throws Exception\NoApiKey
     */
    private function apiKeyHeader()
    {
        if (empty($this->apiKey)) {
            throw new \SDN3Q\Exception\NoApiKey();
        }

        $header = ['X-AUTH-APIKEY' => $this->apiKey];

        return $header;
    }

    /**
     * @return array
     * @throws \SDN3Q\Exception\NoUserName
     * @throws \SDN3Q\Exception\NoUserPassword
     */
    private function apiLoginHeader()
    {
        if (empty($this->userName)) {
            throw new \SDN3Q\Exception\NoUserName();
        }
        if (empty($this->userPassword)) {
            throw new \SDN3Q\Exception\NoUserPassword();
        }

        $header = ['X-AUTH-USERNAME' => $this->userName, 'X-AUTH-PASSWD' => $this->userPassword];

        return $header;
    }
}
