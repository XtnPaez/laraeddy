# Documentación del Proyecto "Gestión de CUI – LaraEddy"

## Resumen del Proyecto

Aplicación Laravel para la gestión integral de edificios educativos, con funcionalidades accesibles según el rol del usuario. Las principales funcionalidades son: Gestión de CUI (Búsqueda, Modificación, Alta, Baja), Gestión de usuarios, Listados de uso y Descargas.

## Requisitos Técnicos
- Laravel 11.x
- PHP 8.2+
- PostgreSQL (con extensión PostGIS)
- Composer
- XAMPP o Laravel Server (php artisan serve)

## Instalación del Proyecto

```
git clone https://github.com/XtnPaez/laraeddy.git
cd laraeddy/eddy
composer install
cp .env.example .env
php artisan key:generate
```

Editar .env con los valores correctos de conexión a base de datos. Luego ejecutar migraciones si corresponde o conectar a la base ya existente.

## Autenticación y Roles
- El sistema cuenta con login básico, utilizando un LoginController.
- El campo password_hash usa bcrypt (Hash::check() para login).
- Tras iniciar sesión exitosamente, el usuario accede a /inicio.
- Se implementará control de acceso por rol, comenzando con "admin" (superadmin).

## Estructura de Navegación y Vistas
- Layout Base: Se implementó un layout Blade en resources/views/layouts/app.blade.php que incluye:
- Menú de navegación superior (navbar) con:
- Accesos a los 6 módulos
- Nombre del usuario logueado
- Botón Logout a la derecha
- Footer persistente con el texto: © 2025 - UEICEE - MAPA - Gestión de CUI
- Todas las vistas futuras extienden este layout para mantener coherencia visual.
- Navbar: Se agregó un ítem "Inicio" al menú de navegación que permite volver a la vista de las tarjetas en la ruta /inicio.

## Dashboard de Inicio
- Ruta: /inicio
- Vista: resources/views/inicio.blade.php

Contiene tarjetas accesibles visualmente, con Bootstrap, que resumen los módulos disponibles:

- Buscar CUI: Ingresá un Código Único de Infraestructura (CUI) y accedé a toda la información del edificio educativo.
- Editar CUI: Modificá los datos de un edificio educativo ingresando su CUI. Ideal para mantener la información actualizada.
- Alta de CUI: Dar el Alta de un nuevo edificio educativo.
- Gestión de Tablas: Agregá o Modificá Predios, Operativos, Direcciones u Observaciones.
- Descargas: Accedé a reportes o archivos relevantes del sistema. Ideal para trabajo offline o informes.
- ABM de Usuarios: Accedé al ABM de Usuarios.


## Vista de Búsqueda de CUI
- Ruta: /buscar
- Vista: resources/views/buscar.blade.php

Esta vista permite ingresar un CUI y obtener información detallada del edificio educativo. Si el CUI existe, se muestra en un mapa interactivo con un marcador amarillo indicando la ubicación del edificio con coordenadas obtenidas de la base de datos (utilizando Leaflet).

- Mapa interactivo: El mapa está centrado en las coordenadas del edificio y se marca la ubicación con un punto amarillo, mostrando un popup con el CUI y la dirección del edificio.

## Próximos pasos
- Implementar vistas funcionales para cada módulo.
- Aplicar restricciones de acceso por rol en middleware.
- Incorporar validaciones de formularios.