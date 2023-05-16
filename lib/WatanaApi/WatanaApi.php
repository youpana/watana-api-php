<?php

namespace WatanaApi;

/**
 * Class Tokens
 *
 * @package WatanaApi
 */
use WatanaApi\Error as Errors;
class WatanaApi extends Resource {

  

    /**
     * @param array $data
     *
     * @return ConsultarCarpeta Consultar carpeta
     */
    public function ConsultarCarpeta($data) {
        if(!array_key_exists("operacion",$data)){
            $data += ['operacion' => "consultar_carpeta"];
          }
          if(!array_key_exists("carpeta_codigo",$data)){
            throw new Errors\InputValidationError('carpeta_codigo es necesario');
          }
        return $this->request($url = $this->WatanaApiAuth->url, $token = $this->WatanaApiAuth->token, $data);
    }

    /**
     * @param array $data
     *
     * @return DescargarCarpeta Lista de archivos de una carpeta
     */
    public function DescargarCarpeta($data) {
      if(!array_key_exists("operacion",$data)){
          $data += ['operacion' => "descargar_carpeta"];
        }
        if(!array_key_exists("carpeta_codigo",$data)){
          throw new Errors\InputValidationError('carpeta_codigo es necesario');
        }
      return $this->request($url = $this->WatanaApiAuth->url, $token = $this->WatanaApiAuth->token, $data);
  }

  /**
     * @param array $data
     *
     * @return EliminarCarpeta Eliminar carpeta
     */
    public function EliminarCarpeta($data) {
      if(!array_key_exists("operacion",$data)){
          $data += ['operacion' => "eliminar_carpeta"];
        }
        if(!array_key_exists("carpeta_codigo",$data)){
          throw new Errors\InputValidationError('carpeta_codigo es necesario');
        }
      return $this->request($url = $this->WatanaApiAuth->url, $token = $this->WatanaApiAuth->token, $data);
  }

  /**
     * @param array $data
     *
     * @return EnviarCarpeta Token response.
     */
    public function EnviarCarpeta($data) {
      if(!array_key_exists("operacion",$data)){
          $data += ['operacion' => "enviar_carpeta"];
        }
        if(!array_key_exists("carpeta_codigo",$data)){
          throw new Errors\InputValidationError('carpeta_codigo es necesario');
        }
        if(!array_key_exists("titulo",$data)){
          throw new Errors\InputValidationError('titulo es necesario');
        }
        if(!array_key_exists("firmante",$data)){
          throw new Errors\InputValidationError('firmante es necesario');
        }
        if(!array_key_exists("archivos",$data)){
          throw new Errors\InputValidationError('archivos es necesario');
        }
      return $this->request($url = $this->WatanaApiAuth->url, $token = $this->WatanaApiAuth->token, $data);
  }

  /**
     * @param array $data
     *
     * @return ValidarPdf pdf validado
     */
    public function ValidarPdf($data) {
      if(!array_key_exists("operacion",$data)){
          $data += ['operacion' => "validar_pdf"];
        }
        if(!array_key_exists("zip_base64",$data)){
          throw new Errors\InputValidationError('zip_base64 es necesario');
        }
      return $this->request($url = $this->WatanaApiAuth->url, $token = $this->WatanaApiAuth->token, $data);
  }

   /**
     * @param array $data
     *
     * @return FirmarPdf pdf firmado
     */
    public function FirmarPdf($data) {
      if(!array_key_exists("operacion",$data)){
          $data += ['operacion' => "firmar_pdf"];
        }
        if(!array_key_exists("zip_base64",$data)){
          throw new Errors\InputValidationError('zip_base64 es necesario');
        }
      return $this->request($url = $this->WatanaApiAuth->url, $token = $this->WatanaApiAuth->token, $data);
  }

    /**
     * @param array $data
     *
     * @return SellarPdf pdf sellado
     */
    public function SellarPdf($data) {
      if(!array_key_exists("operacion",$data)){
          $data += ['operacion' => "sellar_pdf"];
        }
        if(!array_key_exists("zip_base64",$data)){
          throw new Errors\InputValidationError('zip_base64 es necesario');
        }
      return $this->request($url = $this->WatanaApiAuth->url, $token = $this->WatanaApiAuth->token, $data);
  }

    
}