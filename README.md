# WatanaApi PHP


Nuestra Biblioteca PHP oficial de WatanaApi, es compatible con la [v1.0](https://ayuda.llama.pe/integracion/) de Watana API, con el cual tendrás la posibilidad de crear carpetas, consultarlas, eliminarlas, firmar pdfs, validarlos, y aplicarles sello de tiempo.


## Requisitos 

* PHP 5.6 o superiores.
* Registrate [aquí](https://watana.pe/registro).
* Una vez registrado, si vas a realizar pruebas obtén tus llaves desde [aquí](https://watana.pe/auths).

> Recuerda que para obtener tus llaves debes ingresar a tu Watana.pe > WATANA API > ***Autenticacion***.

![alt tag](https://i.imgur.com/6i1moyJ.png)



## Instalación

### 1. Vía Composer
```json
{
  "require": {
    "watana/watana-api-php": "1.0.0"
  }
}
```

Y cargar todo usando el autoloader de Composer.

```php
require 'vendor/autoload.php';
```

### 2. Manualmente

Clonar el repositorio o descargar el código fuente

```bash
git clone git@github.com:youpana/watana-api-php.git
```

Ahora, incluir en la cabecera a `watana-api-php` y también la dependencia [`Requests`](https://github.com/rmccue/requests). Debes hacer el llamado correctamente a la carpeta y/o archivo dependiendo de tu estructura.

```php
<?php
// Cargamos Requests y WatanaApi PHP
include_once dirname(__FILE__).'/libraries/Requests/library/Requests.php';
Requests::register_autoloader();
include_once dirname(__FILE__).'/libraries/watana-api-php/lib/WatanaApi.php';
```

Luego ejecuta composer install

```bash
composer install
```

## Configuración

Como primer paso hay que configurar las credenciales `$RUTA ``$TOKEN `

```php
// Configurar tu API Key y autenticación
$RUTA = "<RUTA>";
$TOKEN = "<TOKEN>";
$auth = new WatanaApi\WatanaApiAuth(array('url' => $RUTA, 'token' => $TOKEN));
```

## Enviar Carpeta

[Ver ejemplo completo](/examples/enviar_carpeta.php)

```php
$response = $auth->WatanaApi->EnviarCarpeta(
    array(
        "carpeta_codigo" => "DOC0001",
        "titulo" => "Carpeta de Prueba",
        ...
    )
);

//Respuesta
print_r($response);
```

## Consultar Carpeta

[Ver ejemplo completo](/examples/consultar_carpeta.php)

Puedes consultar el estado de una carpeta enviada a Watana App, usando el atributo "carpeta_codigo" y especificando el codigo de la carpeta enviada.

```php
// Invocamos la funcion requerida
$response = $auth->WatanaApi->ConsultarCarpeta(
       array(
        "carpeta_codigo" => "DOC0001"
    )
    );

//Respuesta
print_r($response);
```
## Descargar Carpeta

```php
$response = $auth->WatanaApi->DescargarCarpeta(
       array(
        "carpeta_codigo" => "DOC0001"
    )
    );

//Respuesta
print_r($response);
```

## Eliminar Carpeta

```php
$response = $auth->WatanaApi->EliminarCarpeta(
       array(
        "carpeta_codigo" => "DOC0001"
    )
    );

//Respuesta
print_r($response);
```

## Validar PDF

```php
$response = $auth->WatanaApi->ValidarPdf(
    array(
        "zip_base64" => "XXXXX"
    )
);

//Respuesta
print_r($response);
```

## Firmar PDF

```php
$response = $auth->WatanaApi->FirmarPdf(
    array(
        "zip_base64" => "XXXXX"
    )
);

//Respuesta
print_r($response);
```

## Sellar PDF

```php
$response = $auth->WatanaApi->SellarPdf(
    array(
        "zip_base64" => "XXXXX"
    )
);

//Respuesta
print_r($response);
```

## Pruebas

Antes de pasar tu cuenta a producción, te recomendamos realizar pruebas de integración. Así garantizarás un correcto despliegue.


Descarga los ejemplos desde:

```bash
git clone https://github.com/youpana/watana-api-php.git
composer install
cd watana-api-php/examples
php -S 0.0.0.0:8000
```

## Documentación
¿Necesitas más información para integrar `watana-api-php`? La documentación completa se encuentra en [https://ayuda.llama.pe/integracion](https://ayuda.llama.pe/integracion)


