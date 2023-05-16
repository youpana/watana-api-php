<?php
namespace WatanaApi\Error;

/**
 * WatanaApi Exceptions
 */

/**
 * Base WatanaApi Exception
 */
class WatanaApiException extends \Exception {
    protected $message = "Base WatanaApi Exception";
}
/**
 * Input validation error
 */
namespace WatanaApi\Error;

class InputValidationError extends WatanaApiException {
    protected $message = "Error de validacion en los campos";
}
/**
 * Authentication error
 */
namespace WatanaApi\Error;

class AuthenticationError extends WatanaApiException {
    protected $message = "Error de autenticación";
}
/**
 * Resource not found
 */
namespace WatanaApi\Error;

class NotFound extends WatanaApiException {
    protected $message = "Recurso no encontrado";
}
/**
 * Method not allowed
 */
namespace WatanaApi\Error;

class MethodNotAllowed extends WatanaApiException {
    protected $message = "Method not allowed";
}
/**
 * Unhandled error
 */
namespace WatanaApi\Error;

class UnhandledError extends WatanaApiException {
    protected $message = "Unhandled error";
}
/**
 * Invalid API Key
 */
namespace WatanaApi\Error;

class InvalidApiToken extends WatanaApiException {
    protected $message = "API Token invalido";
}
/**
 * Unable to connect to Culqi API
 */
class UnableToConnect extends WatanaApiException {
    protected $message = "Imposible conectar a Watana API, verifique la RUTA y TOKEN";
}
/**
 * Invalid URL
 */

class InvalidApiUrl extends WatanaApiException {
    protected $message = "API URL invalido";
}