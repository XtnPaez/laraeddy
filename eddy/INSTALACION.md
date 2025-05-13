# Instalación inicial del proyecto EDDY

Este documento describe el paso a paso completo para configurar el entorno del proyecto Laravel `EDDY` con conexión a PostgreSQL en un entorno local con Windows.

> ⚠️ Este archivo NO debe modificarse, ya que representa el estado exitoso de la instalación base.

---

## 📦 Requisitos de software ya instalados

- **Windows 10**
- **XAMPP** con Apache y PostgreSQL (modificado)
- **PHP 8.1.12**
- **Composer 2.8.8**
- **Visual Studio Code** con los siguientes plugins:
  - PHP Intelephense
  - PHP Intellicense
  - PHP Debug
  - GitHub Copilot
  - GitHub Pull Requests
  - Code Runner
- **Git instalado y configurado**

---

## 📁 Estructura de carpetas local

El proyecto se encuentra en la siguiente ubicación en la PC local:
C:\xampp\htdocs\cuis\laraeddy\eddy

---

## 🛠️ Pasos de instalación

### 1. Clonar el repositorio

```
cd C:\xampp\htdocs\cuis
git clone https://github.com/XtnPaez/laraeddy.git
```
⚠️ El repo está vacío, así que vamos a crear el proyecto dentro de él.

### 2. Crear proyecto Laravel
```
Copiar
Editar
cd laraeddy
composer create-project laravel/laravel eddy
```

### 3. Configurar archivo .env
Cambiar los valores de conexión a base de datos:

```
DB_CONNECTION=pgsql
DB_HOST=127.0.0.1
DB_PORT=5432
DB_DATABASE=sig
DB_USERNAME=postgres
DB_PASSWORD=Qatarairways
```

### 4. Habilitar PostgreSQL en PHP
Editar el archivo C:\xampp\php\php.ini y descomentar estas líneas:

```
extension=pdo_pgsql
extension=pgsql
```
Reiniciar Apache desde el panel de XAMPP.

### 5. Limpiar caché y correr migraciones

```
php artisan config:clear
php artisan config:cache
php artisan migrate
```

### 6. Iniciar el servidor de desarrollo

```
cd eddy
php artisan serve
```