<?php

namespace WatanaApi;

/**
 * Class Resource
 *
 * @package WatanaApi
 */
class Resource extends Client {

    /**
     * Constructor.
     */
    public $WatanaApiAuth;
    
    public function __construct($WatanaApiAuth)
    {
        $this->WatanaApiAuth = $WatanaApiAuth;
    }

}