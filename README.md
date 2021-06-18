# Ecommerce with laravel

jetstream
glider


- Install project


```
composer install
```
```
npm install
```
```
php artisan migrate:fresh
```
```
php artisan db:seed
```
- Compilar ajustes de tailwind
```
npm run dev
```
- Publicar vistas de jetstream
```
php artisan vendor:publish --tag=jetstream-views
```
-Crear componente livewire
```
php artisan make:livewire search
```


- Instalar glider

> `https://cdnjs.com/libraries/glider-js`
Agregar  en app.blade.php

```
<script src="https://cdnjs.cloudflare.com/ajax/libs/glider-js/1.7.7/glider.min.js" integrity="sha512-tHimK/KZS+o34ZpPNOvb/bTHZb6ocWFXCtdGqAlWYUcz+BGHbNbHMKvEHUyFxgJhQcEO87yg5YqaJvyQgAEEtA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/glider-js/1.7.7/glider.min.css" integrity="sha512-YM6sLXVMZqkCspZoZeIPGXrhD9wxlxEF7MzniuvegURqrTGV2xTfqq1v9FJnczH+5OGFl5V78RgHZGaK34ylVg==" crossorigin="anonymous" referrerpolicy="no-referrer" />


```

