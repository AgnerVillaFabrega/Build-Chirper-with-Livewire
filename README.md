<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

# 🚀 Build-Chirper-with-Livewire
- Este proyecto es una implementación del bootcamp Build Chirper with Livewire, utilizando **Laravel** y **Livewire** para demostrar prácticas modernas de desarrollo backend y frontend.
---

## 📌 Convenciones de Commits (Gitmoji)

Usamos emojis para identificar rápidamente el propósito de cada commit:

| Emoji | Código                 | Descripción                                      |
|:-----:|------------------------|--------------------------------------------------|
| 🎨    | `:art:`                | Mejora del estilo de código (formato, etc.)     |
| 🐛    | `:bug:`                | Corrección de errores o bugs                    |
| ✨    | `:sparkles:`           | Implementación de una nueva funcionalidad       |
| ♻️    | `:recycle:`            | Refactorización del código                      |
| ✅    | `:white_check_mark:`   | Agregar pruebas o validaciones                  |
| 🔥    | `:fire:`               | Eliminación de código o archivos innecesarios   |
| 📝    | `:memo:`               | Cambios en la documentación                     |
| 🚀    | `:rocket:`             | Preparación para despliegue                     |

---

## 🌲 Estructura de Ramas

Adoptamos una estructura de ramas clara y mantenible:

| Rama            | Descripción                                                                 |
|-----------------|-----------------------------------------------------------------------------|
| `main`          | Versión estable y lista para producción                                     |
| `dev`           | Rama principal de desarrollo e integración de nuevas funcionalidades        |
| `feature/*`     | Nuevas funcionalidades en desarrollo                                        |
| `bugfix/*`      | Correcciones de errores durante el desarrollo                              |
| `hotfix/*`      | Parches críticos para producción                                            |

### 🧱 Ejemplos de ramas

#### ✨ Funcionalidades Nuevas
- `feature/add-cart`  
- `feature/add-product-endpoint`  
- `feature/create-auth-module`

#### 🐛 Corrección de Errores
- `bugfix/fix-login`  
- `bugfix/fix-product-dto`  
- `bugfix/fix-validation-error`

#### 🚨 Parche Urgente en Producción
- `hotfix/fix-env-vars`  
- `hotfix/fix-payment-gateway`


## Uso del proyecto
```bash
# Levantar el proyecto
php artisan serve
# Ejecutar el worker de colas para las notificaciones
php artisan queue:work
```