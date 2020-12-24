# Comments
Paquete de Ejemplo para Laravel 8.x

## Información General
El propósito de este repositorio es ejemplificar la creación de un paquete para Laravel 8.
Se creó siguiendo la guía que puede encontrarse en https://laravelpackage.com/

## Contenido
### Estructura Básica
La estructura básica es la de un paquete composer típico, con el manifiesto `composer.json` y un directorio `/src` mapeado al namespace `iehurtado\Comments` mediante PSR-4
### Service Provider
Es la clase que bootea el paquete al cargar Laravel. En ella se registra la funcionalidad ofrecida por el paquete y se inicializa todo lo necesario.
Nótese que se incluye una entrada `"extra": {"laravel": {...}}` en `composer.json` en la que se hace referencia a nuestro ServiceProvider.
Esta entrada es la que permite que Laravel cargue automáticamente el ServiceProvider provisto por nuestro paquete.
### Modelo
En src/Models podemos encontrar el modelo Comment, que tiene una particularidad: sus relaciones `author` y `commentable` son polimórficas; esto quiere decir que la clase
con la que se relacionan no está predefinida de antemano. El único requisito es que la clase target tenga un id númerico.
Se incluyen Traits de PHP para utilizar en las clases objetivo: `IsCommentable` provee el lado 'toMany' de la relación para los objetos sobre los que se hacen los comentarios
y `AuthorsComments` provee el lado 'toMany' de la relación con los autores de comentarios.
### Tests
Se incluyen algunos tests básicos para la clase Comment.
