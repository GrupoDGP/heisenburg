API REST - Heisenburg
=====================

##Configuración
###Servidor
Para configurar tu propia api rest para heisenburg sigue estos sencillos pasos:
1. Ejecuta `a2enmod rewrite` y `ervice `apache2 restart`
2. Modifica la configuración del sitio de apache (/etc/apache2/apache2.conf)
    * Busca <Directory /var/www/>
    * Modifica dentro de esa sección AllowOverride (pon ALL en lugar de NONE)
3. Reza
###Cliente
Para configurar tu bonito cliente, comprueba el ejemplo (rest/test.php)
1. Instala php5-curl (`sudo apt-get install php5-curl`)
2. Tomate un café
3. Prueba el cliente

##API
La api de heisenburg admite dos operaciones:
* GET: "../heisenburg/rest/hotel/[TipoHabitacion]/[FechaInicio]/[FechaFin]"  -  Devuelve los hoteles disponibles
* POST: "../heisenburg/rest/reserva/[TipoHabitacion]/[FechaInicio]/[FechaFin]/[NombreUsuario]/[idHotel]"  -  Reserva la habitacion, devuelve false si hubo algun error y true si se reservó con exito 
