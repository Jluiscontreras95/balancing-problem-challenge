
# Challenge de Initium Software (Balanceo)

La prueba técnica consiste en crear un endpoint que reciba un body y un token de autorización con una caracteristica especial, anexo el paso a paso con el proyecto.

A tomar en consideración lo siguiente:

• Se debe utilizar PHP con framework Symfony o Laravel.

• Es imprescindible el uso de Git como control de versiones, la entrega será el acceso al
repositorio, alojado en Github, Gitlab o Bitbucket.

• Se valorará toda buena práctica, patrones y metodologías aplicadas para que el código
sea mantenible en el tiempo.

• Buscamos una solución de la que estés orgulloso.

### Implementa una API con un solo endpoint
Definición de la api: 

    POST /api/v1/short-urls

• Recibe un body con los siguiente requisitos: 

    url: string, required|url

• Devuelve un objeto JSON con la siguiente estructura:

    {
        "url": "<https://example.com/12345>"
    }

url deberá apuntar a un acortador de urls, y al acceder deberá redireccionar a la url
original recibida en el body de la petición. En este caso se uso la API de TinyUrl para la generación del ShortUrl.

### Autorización

La autorización será tipo "Bearer Token". 

Por ejemplo: 
    
    Authorization: Bearer mytoken.

Cualquier token que cumpla con el problema de los paréntesis (descrito a continuación)
es un token válido. 

por ejemplo: 

    Authorization: Bearer []{}

### Problema de los paréntesis

Dada una cadena que contiene tan solo los caracteres {, }, [, ], ( y ) determina si la
entrada es válida.

La entrada es válida si cumple las siguientes condiciones:

• Los paréntesis/llaves/corchetes abiertos se deben cerrar con el mismo tipo.

• Los paréntesis/llaves/corchetes abiertos se deben cerrar en el orden correcto.

Nota: una cadena vacía es considerada válida.

Ejemplos:


    • {} - true
    • {}[]() - true
    • {) - false
    • [{]} - false
    • {([])} - true
    • (((((((() - false

El proyecto de realizó con:

    Laravel Framework Lumen (9.1.6) (Laravel Components ^9.36.3)
    PHP 8.0.10 (cli) (built: Aug 25 2021 08:46:03) ( ZTS Visual C++ 2019 x64 )
    Copyright (c) The PHP Group
    Zend Engine v4.0.10, Copyright (c) Zend Technologies
    flipbox/lumen-generator (9.2)

# Lumen PHP Framework

[![Build Status](https://travis-ci.org/laravel/lumen-framework.svg)](https://travis-ci.org/laravel/lumen-framework)
[![Total Downloads](https://img.shields.io/packagist/dt/laravel/lumen-framework)](https://packagist.org/packages/laravel/lumen-framework)
[![Latest Stable Version](https://img.shields.io/packagist/v/laravel/lumen-framework)](https://packagist.org/packages/laravel/lumen-framework)
[![License](https://img.shields.io/packagist/l/laravel/lumen)](https://packagist.org/packages/laravel/lumen-framework)

Laravel Lumen is a stunningly fast PHP micro-framework for building web applications with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Lumen attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as routing, database abstraction, queueing, and caching.

## Official Documentation

Documentation for the framework can be found on the [Lumen website](https://lumen.laravel.com/docs).

## Contributing

Thank you for considering contributing to Lumen! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Lumen, please send an e-mail to Taylor Otwell at taylor@laravel.com. All security vulnerabilities will be promptly addressed.

## License

The Lumen framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
"# balancing-problem-challenge" 


