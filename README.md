# Proyecto-Maya
Proyecto Maya, donde se podrá aprender mucho sobre la cosmovisión maya, esto consta de 2 plataformas para usar y es el de web y escritorio

#Despliegue plataforma web para hacer contribuciones
<p align="center">
  <img src="https://www.php.net/images/logos/php-logo.svg" alt="PHP" width="50"/>
  <img src="https://www.apachefriends.org/images/xampp-logo-ac49aefb.svg" alt="XAMPP" width="50"/>
  <img src="https://git-scm.com/images/logos/downloads/Git-Logo-2Color.png" alt="Git" width="50"/>
</p>

## Requisitos Previos
Antes de comenzar con el despliegue del proyecto, asegúrate de tener instalados los siguientes componentes en tu sistema:

1. **XAMPP para Linux**: Puedes descargar XAMPP desde su [sitio oficial](https://www.apachefriends.org/es/index.html).
2. **Git**: Para clonar el repositorio del proyecto. Puedes instalar Git siguiendo las instrucciones en su [sitio oficial](https://git-scm.com/book/en/v2/Getting-Started-Installing-Git).

## Pasos para Desplegar el Proyecto

Sigue estos pasos para desplegar el proyecto en entorno local:

### 1. Instalar XAMPP

1. Descargar el instalador de XAMPP desde el [sitio oficial](https://www.apachefriends.org/es/index.html).
2. Abrir una terminal y navegar hasta el directorio donde se descargo el instalador.
3. Ejecutar el siguiente comando para dar permisos de ejecución al instalador:

    ```bash
    chmod +x xampp-linux-x64-x.x.x-installer.run
    ```

4. Ejecutar el instalador:

    ```bash
    sudo ./xampp-linux-x64-x.x.x-installer.run
    ```

5. Seguir las instrucciones del instalador para completar la instalación.

### 2. Clonar el Repositorio del Proyecto

1. Abrir una terminal y navegar al directorio donde desea clonar el proyecto.
2. Ejecutar el siguiente comando para clonar el repositorio:

    ```bash
    git clone https://github.com/9601dani/Ts2Fork-Proyecto-Tiempo-Maya
    ```

3. Navegar al directorio del proyecto clonado:

    ```bash
    cd Ts2Fork-Proyecto-Tiempo-Maya
    ```

### 3. Configurar el Proyecto en XAMPP

1. Copiar el directorio del proyecto clonado al directorio `htdocs` de XAMPP:

    ```bash
    sudo cp -r /ruta/al/proyecto/ /opt/lampp/htdocs/
    ```

2. Si el proyecto requiere una base de datos, iniciar XAMPP y crea la base de datos:

    - Inicia XAMPP ejecutando el siguiente comando:

        ```bash
        sudo /opt/lampp/lampp start
        ```

    - Abrir el navegador web y navegar a `http://localhost/phpmyadmin`.
    - Crea una nueva base de datos para el proyecto.
    - Utilizando el script en ../Web/BaseDatos/TiempoMaya-EntregableFinal.sql

3. Configurar el archivo de conexión a la base de datos del proyecto con los detalles de la base de datos que se creo.

### 4. Acceder al Proyecto

1. Abrir el navegador web.
2. Navega a `http://localhost/Tss2Fork-Proyecto-Tiempo-Maya` para acceder a la aplicación web.
