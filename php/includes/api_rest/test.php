<?php
//simple test for REST API using Phalcon
//http://docs.phalconphp.com/pt/latest/reference/tutorial-rest.html
/*htaccess file example:
<IfModule mod_rewrite.c>
    RewriteEngine On
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteRule ^(.*)$ index.php?_url=/$1 [QSA,L]
</IfModule>
*/

//change this route for something...
$app = new \Phalcon\Mvc\Micro();
//define the routes here



//retrieves all hotels (when route is /api/alojamientos
$app->get('/api/alojamientos', function() {

});
//Searches for alojamientos with given name
$app->get('/api/alojamientos/search/{name}', function($name) {

});
//Adds a new hotel
$app->post('/api/alojamiento', function() {

});
//Deletes hotel based on primary key
$app->delete('/api/alojamiento/{id:[0-9]+}', function() {

});
$app->handle();
?>
