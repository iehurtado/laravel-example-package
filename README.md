# Comments
Paquete de Ejemplo para Laravel 8.x

## Información General
El propósito de este repositorio es ejemplificar la creación de un paquete para Laravel 8.
Se creó siguiendo la guía que puede encontrarse en https://laravelpackage.com/

## Contenido
### 1. Estructura Básica
La estructura básica es la de un paquete composer típico, con el manifiesto `composer.json` y un directorio `/src` mapeado al namespace `iehurtado\Comments` mediante PSR-4
### 2. Service Provider
Es la clase que bootea el paquete al cargar Laravel. En ella se registra la funcionalidad ofrecida por el paquete y se inicializa todo lo necesario.
Nótese que se incluye una entrada `"extra": {"laravel": {...}}` en `composer.json` en la que se hace referencia a nuestro ServiceProvider.
Esta entrada es la que permite que Laravel cargue automáticamente el ServiceProvider provisto por nuestro paquete.

## Notas
En general, para el desarrollo de extensiones con Composer, se prefiere evitar el uso de `.gitignore` ya que carece de utilidad para el usuario final. 
En este caso lo utilizamos por simplicidad pero hay que mencionar que es más conveniente el uso de la configuración local del repo (en `.git/exclude`) para ignorar archivos en el versionado.
