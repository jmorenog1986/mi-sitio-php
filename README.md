# Portfolio de Habilidades PHP

Proyecto de demostración de habilidades en desarrollo web con PHP y MySQL, mostrando diferentes capacidades técnicas y buenas prácticas de programación.

## 🚀 Tecnologías Utilizadas

- **PHP** 8.2.12
- **MySQL** 8.0.42
- **Apache2** (servidor web)
- **HTML5/CSS3** (frontend)
- **JavaScript** 

## 📋 Requisitos del Sistema

- PHP 8.2 o superior
- MySQL 8.0 o superior
- Apache2 con mod_rewrite habilitado
- Git

## 🛠️ Instalación

### 1. Clonar el repositorio

```bash
git clone https://github.com/jmorenog1986/mi-sitio-php.git
cd mi-sitio-php
```

### 2. Configurar el servidor web

**En Ubuntu/WSL:**
```bash
# Copiar archivos al directorio de Apache
sudo cp -r * /var/www/html/
sudo chown -R www-data:www-data /var/www/html/

# Habilitar mod_rewrite (si es necesario)
sudo a2enmod rewrite
sudo systemctl restart apache2
```

### 3. Configurar la base de datos

```bash
# Acceder a MySQL
mysql -u root -p

# Crear la base de datos
CREATE DATABASE mi_sitio_php;
USE mi_sitio_php;

# Importar el esquema
SOURCE database/schema.sql;

# Crear usuario (opcional, recomendado)
CREATE USER 'jhon'@'localhost' IDENTIFIED BY '*******';
GRANT ALL PRIVILEGES ON portfolio_db.* TO 'jhon'@'localhost';
FLUSH PRIVILEGES;
EXIT;
```

### 4. Configurar credenciales

```bash
# Copiar archivo de configuración de ejemplo
cp config/config.example.php config/config.php

# Editar con tus credenciales
nano config/config.php
```

**Ejemplo de config.php:**
```php
<?php
define('DB_HOST', 'localhost');
define('DB_NAME', 'mi_sitio_php');
define('DB_USER', 'mi_sitio_php');
define('DB_PASS', '*********');
define('DB_CHARSET', 'utf8mb4');
?>
```

## 🎯 Características Demostradas

- ✅ **Conexión a base de datos** con PDO y prepared statements
- ✅ **CRUD completo** (Create, Read, Update, Delete)
- ✅ **Sistema de autenticación** con sesiones seguras
- ✅ **Validación de datos** en servidor
- ✅ **Prevención de SQL Injection** con consultas preparadas
- ✅ **Hash de contraseñas** con `password_hash()`
- ✅ **POO (Programación Orientada a Objetos)**
- ✅ **MVC** (Model-View-Controller) básico
- ✅ **Manejo de errores** con try-catch
- ✅ **Subida de archivos** con validación
- ✅ **Paginación** de resultados
- ✅ **Búsqueda y filtros**

## 📁 Estructura del Proyecto

```
mi-sitio-php/
│
├── config/
│   ├── config.php              # Configuración de base de datos
│   └── config.example.php      # Plantilla de configuración
│
├── database/
│   └── schema.sql              # Esquema de la base de datos
│
├── public/
│   ├── index.php               # Punto de entrada
│   ├── css/                    # Estilos
│   ├── js/                     # Scripts JavaScript
│   └── uploads/                # Archivos subidos
│
├── src/
│   ├── controllers/            # Controladores
│   ├── models/                 # Modelos
│   └── views/                  # Vistas
│
├── includes/
│   ├── db.php                  # Conexión a BD
│   └── functions.php           # Funciones auxiliares
│
├── .gitignore
└── README.md
```

## 🌐 Uso

1. Acceder a: `http://localhost/` en tu navegador

2. **Usuario de prueba** (si incluiste datos de ejemplo):
   - Usuario: `admin`
   - Contraseña: `admin123`

3. Explorar las diferentes funcionalidades del sistema

## 🔒 Seguridad Implementada

- Validación y sanitización de entradas
- Protección contra SQL Injection
- Protección contra XSS (Cross-Site Scripting)
- Hash seguro de contraseñas con bcrypt
- Sesiones con tokens CSRF
- Validación de tipos de archivo en uploads

## 📝 Ejemplos de Código

### Conexión PDO segura
```php
try {
    $pdo = new PDO(
        "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=" . DB_CHARSET,
        DB_USER,
        DB_PASS,
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
    );
} catch (PDOException $e) {
    die("Error de conexión: " . $e->getMessage());
}
```

### Consulta preparada
```php
$stmt = $pdo->prepare("SELECT * FROM usuarios WHERE email = ?");
$stmt->execute([$email]);
$usuario = $stmt->fetch(PDO::FETCH_ASSOC);
```

## 🚧 Roadmap / Mejoras Futuras

- [ ] Sistema de roles y permisos
- [ ] API RESTful
- [ ] Integración con Composer
- [ ] Tests unitarios con PHPUnit
- [ ] Panel administrativo avanzado

## 📄 Licencia

Este proyecto es de código abierto bajo la licencia MIT.

## 👤 Autor

**Tu Nombre**
- GitHub: @jmorenog1986(https://github.com/jmorenog1986/mi-sitio-php)
- LinkedIn: (https://www.linkedin.com/in/jhon-mauricio-moreno-garc%C3%ADa-944656121/)
- Email: jhonmorenogarcia@gmail.com

