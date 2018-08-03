<?php

namespace SDN3Q;


class Client {
   protected $apiVersion = '2';
   protected $apiKey     = null;

   protected $apiProtocol  = 'https';
   protected $baseUrl      = 'sdn.3qsdn.com/api';
   protected $userName     = null;
   protected $userPassword = null;
   protected $useApiKey    = true; //use api key (true) or use user/passwort (false)

   /**
    * BaseRequest constructor.
    *
    * @param string $apiKey
    * @param int    $apiVersion
    */
   public function __construct($apiKey = null, $apiVersion = 2) {
      $this->apiKey     = $apiKey;
      $this->apiVersion = $apiVersion;
   }

   public function __get(string $name) {
      $method = 'get' . ucfirst($name);
      if (method_exists($this, $method)) {
         return $this->$method();
      }
      if (property_exists($this, $name)) {
         return $this->{$name};
      } else return null;
   }

   public function __set(string $name, $value) {
      echo $method = 'set' . ucfirst($name);
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
    * @throws NoApiKey
    */
   public function apiHeader() {
      try {
         if ($this->useApiKey) {
            return $this->apiKeyHeader();
         } else {
            return $this->apiLoginHeader();
         }
      } catch (\Exception $e) {
         throw $e;
      }
   }

   /**
    * @return array
    * @throws NoApiKey
    */
   private function apiKeyHeader() {
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
   private function apiLoginHeader() {
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