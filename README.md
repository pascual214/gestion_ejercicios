<p align="center"><img src="public/images/HoopLab_recortada.png" width="250" alt="HoopLab logo"></p>

<p align="center">
  <img src="https://img.shields.io/badge/Laravel-10-red">
  <img src="https://img.shields.io/badge/PHP-8.2-blue">
  <img src="https://img.shields.io/badge/TailwindCSS-4.1-teal">
  <img src="https://img.shields.io/badge/DaisyUI-5.5-purple">
  <img src="https://img.shields.io/badge/MySQL-8.0-orange">
  <img src="https://img.shields.io/badge/License-MIT-green">
</p>


# HOOPLAB 🏀

Aplicación web desarrollada con **Laravel** para crear, gestionar y organizar ejercicios de baloncesto.
Permite a entrenadores y jugadores **crear, editar, eliminar y visualizar ejercicios**.

---

##  Funcionalidades

- ✅ Autenticación de usuarios
- ✅ CRUD completo de ejercicios
- ✅ Listado de ejercicios en tarjetas
- ✅ Paginación de resultados
- ✅ Diseño responsive con Tailwind y DaisyUI
- ✅ Cambio de idioma (ES / EN / FR)
- ✅ Layout reutilizable con componentes Blade

---

##  Tecnologías utilizadas 🛠️

- **<a href="https://laravel.com" target="_blank">Laravel:</a>** Framework PHP utilizado para la estructura del proyecto y la lógica del backend.
- **<a href="https://laravel.com/docs/5.1/blade" target="_blank">Blade:</a>** Motor de plantillas para crear vistas, layouts y componentes reutilizables.
- **<a href="https://tailwindcss.com" target="_blank">Tailwind CSS:</a>** Framework CSS utility-first para el diseño rápido y consistente de la interfaz.
- **<a href="https://daisyui.com" target="_blank">DaisyUI:</a>** Librería de componentes UI basada en Tailwind CSS.
- **<a href="https://sweetalert2.github.io" target="_blank">SweetAlert2:</a>** Librería para alertas y confirmaciones interactivas.
- **<a href="https://www.mysql.com" target="_blank">MySQL:</a>** Base de datos relacional utilizada para almacenar la información del proyecto.
- **<a href="https://laravel.com/docs/10.x/starter-kits" target="_blank">Laravel Breeze:</a>** Starter kit de autenticación con login, registro y verificación de usuarios.


---


## Instalación ⚙️

1. Clona el repositorio:

```bash
git clone https://github.com/tu-usuario/basketball-drill-manager.git
cd basketball-drill-manager
```

2. Instala dependencias:

```bash
composer install
npm install
npm run build
```

3. Configura el entorno:

```bash
cp .env.example .env
php artisan key:generate
```

4. Configura la base de datos en .env:
```bash
DB_DATABASE=nombre_bd
DB_USERNAME=usuario
DB_PASSWORD=contraseña
```

5. Ejecuta las migraciones:
```bash
php artisan migrate
```

6. Inicia el servidor:
```bash
php artisan serve
```

## Licencia 📄

Este proyecto está licenciado bajo la **Licencia MIT**, lo que permite su uso, copia, modificación y distribución, incluso con fines comerciales, siempre que se mantenga el aviso de copyright original.
