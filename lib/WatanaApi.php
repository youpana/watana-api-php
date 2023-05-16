<?php
/**
 * WATANA API PHP SDK
 *
 * Init, cargamos todos los archivos necesarios
 *
 * @version 1.0.0
 * @package WatanaApi
 * @copyright Copyright (c) 2023 LLAMA.PE S.A
 * @license MIT
 * @license https://opensource.org/licenses/MIT MIT License
 * @link https://ayuda.llama.pe.com/integracion Watana Documentacion
 */

//utils

// Errors
include_once dirname(__FILE__).'/WatanaApi/Error/Errors.php';
include_once dirname(__FILE__).'/WatanaApi/Client.php';
include_once dirname(__FILE__).'/WatanaApi/Resource.php';

// Watana API
include_once dirname(__FILE__).'/WatanaApi/WatanaApi.php';
include_once dirname(__FILE__).'/WatanaApi/WatanaApiAuth.php';