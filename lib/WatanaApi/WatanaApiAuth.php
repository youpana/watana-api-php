<?php
namespace WatanaApi;

use WatanaApi\Error as Errors;
/**
 * Class WatanaApiAuth
 *
 * @package WatanaApi
 */
class WatanaApiAuth
{
    public $token;
    public $url;
    public $WatanaApi;
    

    /**
    * La versión de API usada
    */
    const API_VERSION = "v1.0";

    /**
     * Constructor.
     *
     * @param array|null $options
     *
     * @throws Error\InvalidApiKey Or Error\InvalidApiUrl
     *
     * @example array('token' => "{token}")
     *
     */
    public function __construct($options)
    {
        $this->url = $options["url"];
        if (!$this->url) {
            throw new Errors\InvalidApiUrl();
          }
        $this->token = $options["token"];
        if (!$this->token) {
          throw new Errors\InvalidApiKey();
        }
        $this->WatanaApi = new WatanaApi($this);
        
    }
}