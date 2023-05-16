<?php
namespace WatanaApi;

use WatanaApi\Error as Errors;
use WpOrg\Requests\Requests as Requests;
/**
 * Class Client
 *
 * @package WatanaApi
 */
class Client {
    public function request($url, $token, $data = NULL)
    {
        try {
            
            
            $headers= array("Authorization" => $token, "Content-Type" => "application/json", "Accept" => "application/json");
            $options = array(
                'timeout' => 120
            ); 
            $response = Requests::post($url, $headers, json_encode($data), $options);
           
        } catch (\Exception $e) {
            throw new Errors\UnableToConnect();
        }
        if ($response->status_code >= 200 && $response->status_code <= 206) {
            return json_decode($response->body);
        }
        if ($response->status_code == 400) {
            throw new Errors\UnhandledError($response->body, $response->status_code);
        }
        if ($response->status_code == 401) {
            throw new Errors\AuthenticationError();
        }
        if ($response->status_code == 404) {
            throw new Errors\NotFound();
        }
        if ($response->status_code == 403) {
            throw new Errors\InvalidApiKey();
        }
        if ($response->status_code == 405) {
            throw new Errors\MethodNotAllowed();
        }
        throw new Errors\UnhandledError($response->body, $response->status_code);
    }
}