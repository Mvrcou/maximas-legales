# ⚖️ Máximas Legales — Sitio Web Corporativo

Sitio web corporativo desarrollado para **Máximas Legales**, asociación de abogadas chilenas. Combina una landing page estática con un módulo dinámico de noticias administrado desde un panel privado.

---

## 🖥️ Demo

> Sitio en producción: [maximaslegales.cl](https://maximaslegales.cl) *(reemplaza con tu URL real)*

---

## ✨ Características

- **Landing page** estática con diseño profesional y responsive
- **Carrusel de noticias** dinámico con scroll horizontal y modal de detalle
- **Panel de administración** protegido por contraseña para publicar noticias
- **Base de datos MySQL** con sentencias preparadas (protección contra SQL Injection)
- Soporte completo de **tildes y caracteres especiales** (UTF-8)
- Diseño adaptado a **móviles y escritorio**

---

## 🛠️ Tecnologías

| Capa | Tecnología |
|---|---|
| Frontend | HTML5, CSS3, JavaScript vanilla |
| Backend | PHP 8+ |
| Base de datos | MySQL / MariaDB |
| Servidor | Apache (cPanel / Hosting compartido) |

---

## 📁 Estructura del proyecto

```
maximas-legales/
├── index.php              # Página principal
├── admin.php              # Panel de administración de noticias
├── conexion.php           # Conexión a BD (lee variables de .env)
├── noticias_carruse.html  # Componente carrusel de noticias
├── .env.example           # Plantilla de variables de entorno
├── .env                   # ⚠️ NO incluido en Git (datos reales)
└── .gitignore
```

---

## ⚙️ Instalación local

### 1. Clona el repositorio
```bash
git clone https://github.com/tu-usuario/maximas-legales.git
cd maximas-legales
```

### 2. Configura las variables de entorno
```bash
cp .env.example .env
```
Abre `.env` y rellena con tus datos de base de datos.

### 3. Crea la base de datos
Ejecuta este SQL en tu gestor (phpMyAdmin, TablePlus, etc.):

```sql
CREATE DATABASE maximas_noticias CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

USE maximas_noticias;

CREATE TABLE noticias (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(255) NOT NULL,
    subtitulo VARCHAR(255),
    cuerpo TEXT NOT NULL,
    fecha_publicacion TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
```

### 4. Levanta un servidor PHP local
```bash
php -S localhost:8000
```
Luego abre `http://localhost:8000` en tu navegador.

---

## 🔐 Seguridad

- Las credenciales de base de datos se gestionan mediante variables de entorno (`.env`), **nunca hardcodeadas**
- El panel admin está protegido por contraseña configurable en `.env`
- Todas las consultas SQL usan **sentencias preparadas** para prevenir inyección SQL
- El archivo `.env` y `conexion.php` están excluidos del repositorio vía `.gitignore`

---

## 📦 Despliegue en hosting compartido (cPanel)

1. Sube todos los archivos vía FTP o el Administrador de Archivos de cPanel
2. Crea la base de datos desde el **Wizard de MySQL** en cPanel
3. Crea el archivo `.env` directamente en el servidor con las credenciales reales
4. Verifica que `conexion.php` tenga permisos de lectura correctos

---

## 👩‍💻 Desarrollado por

**[Tu Nombre]** — Desarrollador(a) web freelance  
[tu-portfolio.com](https://tu-portfolio.com) · [LinkedIn](https://linkedin.com/in/tu-perfil) · [GitHub](https://github.com/tu-usuario)

---

## 📄 Licencia

Proyecto desarrollado bajo encargo para uso privado del cliente. El código se comparte con fines de portafolio.
