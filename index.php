<?php include("PHP/conexion.php"); ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>FORMULARIO</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="CSS/estilos.css" type="text/css">

    <link rel="icon" href="IMG/favicon-32x32.png" type="image/png">
</head>

<body>

    

    <!--inicio main-->
    <main>
        <div class="container">
            <h2>REGISTRO DE USUARIOS - EJERCICIO 1</h2>
            <form action="php/registro.php" id='formulario' method="post">

                <!--Inputs-->
                <div class="row">
                    <div class="col-25">
                        <label for="usuario">Nombre de Usuario:</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="usuario" name="usuario">
                    </div>
                </div>

                <div class="row">
                    <div class="col-25">
                        <label for="contrasenia">Contraseña:</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="contrasenia" name="contrasenia">
                    </div>
                </div>

                <div class="row">
                    <div class="col-25">
                        <label for="nombre">Nombre completo:</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="nombre" name="nombre">
                    </div>
                </div>

                <div class="row">
                    <div class="col-25">
                        <label for="correo">Correo electrónico:</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="correo" name="correo">
                    </div>
                </div>


                <div class="row">
                    <div class="col-25">
                        <label for="tipo_usuario">Tipo de usuario:</label>
                    </div>
                    <div class="col-75">
                        <select id="tipo_usuario" name="tipo_usuario">
                        <option value="Usuario">Usuario</option>
                        <option value="Administrador">Administrador</option>
                        <option value="Medico">Médico</option>
                        <option value="Enfermero">Enfermero</option>
                        <option value="Secretaria">Secretaria</option>
                         </select>
                    </div>
                </div>

                <div class="row">
				<ul class="error" id="error"></ul>
			    </div>

                <!--BOTÓN DE REGISTRO-->
                <div class="row">
                <input type="submit" class="btn" value="Registrarse">
                </div>
            </form>
            </div>

            <!--Listado de usuarios-->
            <div class="container-tabla"> 
             <div class="div_tabla">
                <table class="tabla">
                    <thead>
                        <tr>
                            <th>Usuario</th>
                            <th>Contraseña</th>
                            <th>Nombre</th>
                            <th>Correo Electrónico</th>
                            <th>Tipo de usuario</th>
                         
                        </tr>
                    </thead>
                    <tbody>

                        <?php
          $query = "SELECT * FROM usuarios";
          $result_tasks = mysqli_query($conexion, $query);    

          while($row = mysqli_fetch_assoc($result_tasks)) { ?>
                            <tr>
                                <td>
                                    <?php echo $row['user']; ?>
                                </td>
                                <td>
                                    <?php echo $row['pass']; ?>
                                </td>
                                <td>
                                    <?php echo $row['name']; ?>
                                </td>
                                <td>
                                    <?php echo $row['email']; ?>
                                </td>
                                <td>
                                    <?php echo $row['tipo_user']; ?>
                                </td>
                                <td>
                                  <button type="button" class="btn btn-" link="PHP/actualizar.php">ACTUALIZAR</button>
                                  <button type="button" class="btn btn-" link="PHP/eliminar.php">ELIMINAR</button>
                                </td>
                            </tr>
                            <?php } ?>
                    </tbody>
                </table>

            </div>

        </div>

        
    </main>
    <!--fin main-->
    <script src="JS/funciones.js"></script>
</body>

</html>