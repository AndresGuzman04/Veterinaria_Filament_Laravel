<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Proyecto Laravel con Filament

Este proyecto utiliza [Laravel](https://laravel.com/) como framework de backend y [Filament](https://filamentphp.com/) como panel administrativo.

## Requisitos Previos
- **PHP** >= 8.1
- **Composer**
- **Node.js** y **NPM**
- **Base de datos** (MySQL, PostgreSQL, etc.)

## Instalación
```bash
   
# Clona el repositorio
   git clone https://github.com/AndresGuzman04/Veterinaria_Filament_Laravel.git
   cd Veterinaria_Filament_Laravel

# Instalar dependencias de Composer y NPM

composer install

npm install


# Ejecutar migraciones y seeders

php artisan migrate --seed

# Compilar recursos de frontend

npm run build

# Iniciar el servidor de desarrollo

php artisan serve

