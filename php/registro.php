<h1> Contacto </h1>
<div id="formularioContacto">  

    <form method="post" action="php/datosRegistro.php" > 
        <table id="tablaformulario">
            <tr>
                <td> <label for="nombre"> Nombre: </label> </td>
                <!-- no se si se pueden utilizar los required, en cualquier caso he creado el script required="required"-->
                <td> <input type="text" name="nombre" id="nombre" placeholder="Introduce nombre."  autofocus="autofocus"> </input> </td>
            </tr>
            <tr>
                <td><label for="apellidos"> Apellidos: </label> </td>
                <td><input type="text" name="apellidos" id="apellidos" placeholder="Introduce apellidos." > </input> </td>
            </tr>
            <tr>
                <td><label for="dni"> DNI: </label></td>
                <td><input type="text" name="dni" id="dni" placeholder="Introduce DNI." > </input></td>
            </tr>
            <tr>
                <td><label for="usuario"> Usuario: </label> </td>
                <td><input type="text" name="usuario" id="usuario" placeholder="Introduce nombre de usuario." > </input> </td>
            </tr>
            <tr>
                <td><label for="password"> Contraseña: </label> </td>
                <td><input type="textarea" name="password" id="password" placeholder="Introduce contraseña." required="true"></input>  </td>
            </tr>
            <tr>
                <td><label for="email"> Email: </label> </td>
                <td><input type="email" name="email" id="email" placeholder="Introduce email." > </input> </td>
            </tr>

            <tr>
                <td><label for="privilegio"> Tipo de usuario: </label> </td>
                <td><select name="tipo" id="desplegable">
                        <option value="Cliente">Cliente</option>
                        <option value="Hostelero">Hostelero</option>
                </td>
            </tr>

            <tr>
                <td><button type="submit" name="submit">Enviar</button></td>
            </tr>
        </table> 

    </form>
</div>
