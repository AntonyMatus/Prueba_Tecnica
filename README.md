<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## Como Ejecutar el Proyecto.

Instalaremos con Composer, el manejador de dependencias para PHP, las dependencias definidos en el archivo composer.json. Para ello abriremos una terminal en la carpeta del proyecto y ejecutaremos:


- composer install (Esto te generara una carpeta llamada Vendor).

Debemos instalar las dependencias de NPM definidas en el archivo package.json con:
- npm install (Este comando te genera una carpeta llamada node_modules).

Crear una base de datos: En este proyecto utilize la BD MySQL llamada Prueba_tecnica adjunto entre los archivos el script de las tablas.

- Importar Script a la DB Creada.
- Crear Archivo env, duplicar el archivo .env.example y renombrarlo .env y configurar las credenciales de nuestro motor DB.
-  Ejemplo :
        DB_CONNECTION=mysql
        DB_HOST=localhost
        DB_PORT=3306
        DB_DATABASE=laravel_project
        DB_USERNAME=root
        DB_PASSWORD=secret
        .....

Generar una Clave de Aplicacion con el comando: 
- php artisan key:generate

Ejecutamos las migraciones con los Seeders con el comando: 
- php artisan migrate:refresh --seed 

Levantamos el Servidor de la aplicacion con el comando:
- php artisan serve

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
