# 🎓 Instituto Dr. Facundo de Zuviría - Sitio Web Oficial

Este repositorio contiene el código fuente del sitio web institucional del **Instituto Superior de Formación Docente Dr. Facundo de Zuviría (N° 8037)**.

El proyecto ha sido modernizado recientemente para ofrecer una experiencia de usuario responsive, limpia y profesional, alineada con las tendencias actuales de diseño web.

## 🚀 Tecnologías Utilizadas

*   **Frontend**: HTML5, CSS3 (Moderno: Flexbox, CSS Grid, Variables).
*   **Backend**: PHP (Estructurado).
*   **Base de Datos**: MySQL / MariaDB (vía XAMPP).
*   **Diseño**: Estilo personalizado, sin frameworks pesados, optimizado para rendimiento.

## ✨ Características Principales

*   **Diseño UI/UX Moderno**:
    *   Uso de tipografía **Poppins** para mejor legibilidad.
    *   Paleta de colores institucional (Azul Profundo & Azul Vibrante).
    *   Elementos visuales modernos: Tarjetas (Card UI), sombras suaves (`box-shadow`), y bordes redondeados.
*   **Responsividad Total**: Diseño adaptable que se ve perfecto en móviles, tablets y escritorio.
*   **Secciones Clave**:
    *   **Inicio**: Carrusel hero, accesos rápidos a ofertas académicas.
    *   **Instituto**: Historia institucional integrada con la nueva sección *"Nuestro Equipo"*.
    *   **Oferta Académica**: Páginas dedicadas para Profesorado y Tecnicaturas con planes de estudio claros y buscadores de correlativas.
    *   **Contacto**: Nueva vista con grilla de contacto, botones de acción rápida (WhatsApp, Llamar) y mapa interactivo a pantalla completa.

## 🛠️ Instalación y Configuración

Este proyecto está diseñado para correr en un servidor local como **XAMPP** o **WAMP**.

1.  **Clonar/Copiar archivos**:
    *   Coloca la carpeta del proyecto en el directorio público de tu servidor web (e.g., `C:\xampp\htdocs\www.IFZ2025.com`).

2.  **Base de Datos**:
    *   Abre phpMyAdmin (o tu gestor SQL preferido).
    *   Crea una base de datos (por defecto el sistema espera conectar a una DB específica, revisar `conexion.php`).
    *   Importa el archivo `ifz2025 (1).sql` ubicado en la raíz o carpeta `db/`.

3.  **Configuración de Conexión**:
    *   Revisa el archivo `conexion.php` y `db_adapter.php` para asegurar que las credenciales de la base de datos (usuario, contraseña, host) sean correctas para tu entorno.

4.  **Ejecución**:
    *   Abre tu navegador y ve a `http://localhost/www.IFZ2025.com` (o la ruta correspondiente).

## 📂 Estructura del Proyecto

*   `css/`: Hojas de estilo separadas por módulos (`styles.css`, `contacto.css`, `profesorado.css`, etc.) para facilitar el mantenimiento.
*   `images/`: Recursos gráficos, logos y fotografías.
*   `js/`: Scripts para interactividad (menú móvil, validaciones).
*   `*.php`: Archivos principales de las vistas (`inicio.php`, `tecnicatura.php`, etc.) y componentes reutilizables (`menu.php`, `footer.php`).

---
*Diseñado y desarrollado para el Instituto Dr. Facundo de Zuviría.*
*Última actualización: 2026*
