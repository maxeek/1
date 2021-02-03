
cursoLaravel
Curso de laravel | Martes y Jueves por la noche código 42630

Definición
Requisitos
Recursos
Instalación
Iniciar el server
Definición
Laravel es uno de los frameworks de código abierto más fáciles de asimilar para PHP.  El objetivo de Laravel es el de ser un framework que permita el uso de una sintaxis refinada y expresiva para crear código de forma sencilla, evitando el “código espagueti” y permitiendo multitud de funcionalidades.  Aprovecha todo lo bueno de otros frameworks y utiliza las características de las últimas versiones de PHP.  Fue creado en 2011 por Taylor Otwell y tiene una gran influencia de frameworks como Ruby on Rails, Sinatra y ASP.NET MVC. Gran parte de Laravel está formado por dependencias, especialmente de Symfony, esto implica que el desarrollo de Laravel dependa también del desarrollo de sus dependencias.

De Software

un terminal
la del sistema operativo
cmDer https://cmder.net/
Cygwin https://www.cygwin.com/
Git Bash
Composer Composer es un administrador de dependencias en PHP.
https://getcomposer.org/
https://getcomposer.org/Composer-Setup.exe
Recursos
Manual oficial de Laravel: https://laravel.com/
Laracasts_ https://laracasts.com/
Styde https://styde.net/
Laravel News https://laravel-news.com/
Instalación
Usando composer vamos a movernos al directorio de trabajo En ese directorio vamos a crear un proyecto (carpeta con toda la magia de laravel) . Con el comando "cd" nos movemos a nuestro directorio de trabajo y luego, con el comando "composer create-project" crearemos un proyecto
composer create-project laravel/laravel nombre "version"

Ejemplo para instalar laravel 6x
composer create-project laravel/laravel proyecto "6.*"

Iniciando el server
Nos tenemos que mover a la carpeta del proyecto y en la terminal hacer
cd proyecto

EL MARAVILLOSO MUNDO DE ARTISAN para iniciar al server es el comando
php artisan serve

Actualización desde un proyecto en repositorio
Cuando en un equipo de trabajo varios descargar un proyecto iniciado, la instalación es diferente.

-- Primero debemos descargar el proyecto

Para descargar el proyecto podemos clonarlo usando git, pulearlo usando git o simplemente descargando el .zip

Una vez que lo descargaste, aún no funciona, le faltan dependencias. ¿cómo las dedscargamos?

Primero nos metemos en el directorio del proyecto y luego usamos el comando:

composer update    
Este comando va a hacer que descargue todas las dependencias.
¿ya está todo listo? NO, aun falta crear el archivo de configuración

No tenemos el archivo .env, hay que crearlo. Es tan simple como hacer una copia del archivo .env.exampl y renombrarlo .env

¿ya está todo listo? NO, aun falta generar la APP_KEY. Esto se logra con el comando:

php artisan key:generate 



<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
