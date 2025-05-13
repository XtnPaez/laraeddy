
# Documentación del proyecto EDDY

Este archivo se irá completando y actualizando a medida que avancemos en el desarrollo de la app EDDY.

---

## 📌 Propósito

EDDY es una aplicación Laravel que tiene como objetivo gestionar edificios educativos mediante una interfaz moderna y conectada a una base PostgreSQL. Incluye funcionalidades de consulta, carga, edición y descarga de datos geográficos y administrativos.

---

## 📁 Estructura del proyecto

Ubicación en disco: `C:\xampp\htdocs\cuis\laraeddy\eddy`

Repositorio GitHub: [https://github.com/XtnPaez/laraeddy](https://github.com/XtnPaez/laraeddy)

---

## ✔️ Inicio del proyecto
- Laravel instalado en `C:\xampp\htdocs\cuis\laraeddy\eddy`
- Proyecto conectado a PostgreSQL (`sig`)
- Repositorio vinculado: https://github.com/XtnPaez/laraeddy
- Migraciones iniciales ejecutadas
- Servidor en funcionamiento con `php artisan serve`

## 📂 Convenciones

- El esquema de base de datos usado es `sig`
- Las migraciones personalizadas se crearán con el prefijo `create_`
- Se utilizarán controladores tipo recurso (`--resource`) para los modelos CRUD

## ✔️ Sistema de login
Formulario en /login con autenticación por email y password.
Contraseñas en formato bcrypt (password_hash).
Al loguearse con éxito, se redirige a /inicio, pantalla de bienvenida.
Logout disponible en /logout.

## ✔️ Control de sesión
Sesión basada en Laravel session.
Middleware personalizado auth.session para proteger rutas.
Redirección al login si el usuario no está autenticado.

## ✔️ Roles definidos
Por ahora existen los siguientes roles:
admin (Superadmin) – sin restricciones
editor – permisos acotados (a implementar)
visualizador – acceso sólo de lectura (a implementar)

## 📌 Próximo paso
Diseño de funcionalidades completas para el rol admin (Superadmin), quien tendrá acceso total a los ABMs, configuración, control de usuarios, etc.

