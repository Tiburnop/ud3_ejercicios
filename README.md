## Way of working

### Requisitos tecnológicos

Para trabajar en este proyecto, necesitas:

1. **PHP** (versión 8.1 o superior).
2. **Composer** (gestor de dependencias para PHP).
3. **MySQL** (o MariaDB, versión 8.0 o superior).
4. **Node.js** (versión 16.x o superior).
5. **Git** (sistema de control de versiones).

### Pasos para configurar y ejecutar el proyecto

1. **Clonar el repositorio**
   - Usa el siguiente comando:
     ```bash
     git clone https://github.com/tu-usuario/tu-repositorio.git
     cd tu-repositorio
     ```

2. **Instalar dependencias de PHP**
   - Ejecuta:
     ```bash
     composer install
     ```

3. **Configurar el entorno**
   - Copia el archivo `.env.example` como `.env`:
     ```bash
     cp .env.example .env
     ```
   - Edita `.env` y actualiza la sección de base de datos:
     ```
     DB_DATABASE=nombre_base_datos
     DB_USERNAME=tu_usuario
     DB_PASSWORD=tu_contraseña
     ```

4. **Generar la clave de la aplicación**
   - Ejecuta:
     ```bash
     php artisan key:generate
     ```

5. **Migrar la base de datos**
   - Crea las tablas necesarias con:
     ```bash
     php artisan migrate
     ```

6. **Instalar y compilar assets front-end**
   - Ejecuta:
     ```bash
     npm install
     npm run dev
     ```

7. **Iniciar el servidor**
   - Usa el siguiente comando:
     ```bash
     php artisan serve
     ```
   - Accede a la aplicación en: [http://127.0.0.1:8000](http://127.0.0.1:8000).

8. **Pruebas con Postman**
   - Importa el archivo `postman/ud3_ejercicios_collection.json` en Postman.
   - Ejecuta las pruebas para los endpoints configurados.

---

### **Cómo Subir Cambios**

1. Asegúrate de que tus cambios están listos:
   ```bash
   git add .
   git commit -m "Actualización del proyecto y configuración de Postman"