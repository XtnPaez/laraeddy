
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

## ✔️ Tabla de usuarios
Usamos la tabla `cuis.usuarios` con los campos:

```
CREATE TABLE IF NOT EXISTS cuis.usuarios (
    id integer PRIMARY KEY,
    nombre text NOT NULL,
    email text UNIQUE NOT NULL,
    password_hash text NOT NULL,
    rol text NOT NULL CHECK (rol IN ('admin', 'editor', 'visualizador')),
    fecha_creacion timestamp DEFAULT now(),
    estado boolean DEFAULT true
);
```