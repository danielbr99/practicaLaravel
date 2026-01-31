# Proyecto Laravel – Gestión de Proyectos y Alumnos

Este proyecto es una aplicación web desarrollada con **Laravel**, cuyo objetivo es gestionar proyectos y alumnos, incorporando autenticación de usuarios, soporte multilenguaje y una estructura basada en componentes Blade.

La aplicación ha sido desarrollada como parte de un trabajo académico, cumpliendo con los requisitos establecidos en el enunciado.

---

## Funcionalidades principales

- Autenticación de usuarios:
  - Registro
  - Inicio de sesión
  - Cierre de sesión
  - Verificación de correo electrónico
  - Recuperación de contraseña

- Gestión de proyectos:
  - Listado de proyectos cargados mediante seeders

- Gestión de alumnos:
  - Crear alumnos
  - Listar alumnos (con paginación)
  - Ver detalles de un alumno
  - Editar alumnos
  - Eliminar alumnos
  - Confirmación de eliminación mediante SweetAlert2
  - Mensajes de confirmación tras cada acción

- Soporte multilenguaje:
  - Castellano
  - Inglés
  - Francés
  - Selector de idioma visible en la navegación
  - El idioma seleccionado se mantiene durante la navegación

- Interfaz adaptada según el estado de autenticación del usuario

---

## Requisitos para la ejecución

Para ejecutar el proyecto es necesario contar con:

- PHP 8.1 o superior
- Composer
- Node.js y npm
- Laravel
- Base de datos SQLite o MySQL

---

## Pasos para la instalación

1. Clonar el repositorio:

git clone <url-del-repositorio>
cd nombre-del-proyecto

2. Instalar dependencias de PHP:

composer install

3. Instalar dependencias de frontend:

npm install

4. Crear el archivo de entorno:

cp .env.example .env

5. Generar la clave de la aplicación:

php artisan key:generate

6. Ejecutar migraciones y seeders:

php artisan migrate --seed

7. Compilar los assets:

npm run dev

8. Iniciar el servidor de desarrollo:

php artisan serve


La aplicación estará disponible en: http://localhost:8000

---

## Estructura del proyecto

- `resources/views/layouts`  
  Layouts principales de la aplicación.

- `resources/views/components`  
  Componentes Blade reutilizables como header, navegación y footer.

- `resources/views/auth`  
  Vistas de autenticación (login, registro, recuperación de contraseña).

- `resources/views/students`  
  CRUD completo de alumnos.

- `resources/views/projects`  
  Listado de proyectos.

- `lang/es`, `lang/en`, `lang/fr`  
  Archivos de traducción para los idiomas soportados.

- `app/Http/Controllers`  
  Controladores de la aplicación.

---

## Internacionalización

La aplicación utiliza el sistema de traducciones de Laravel.  
Todos los textos visibles se gestionan mediante archivos de idioma y se accede a ellos usando la función de traducción.

El idioma puede cambiarse desde el selector de idioma ubicado en la navegación y se mantiene durante la sesión del usuario.

---

## Notas finales

Este proyecto cumple con los requisitos solicitados:

- Uso de componentes Blade
- Autenticación completa
- CRUD de alumnos
- Proyectos cargados mediante seeders
- Confirmaciones visuales con SweetAlert2
- Traducción a tres idiomas
- Navegación clara y consistente



