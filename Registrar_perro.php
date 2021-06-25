<?php
include("con_db.php");


if(isset($_POST['Registrar'])) {
    if (strlen($_POST['codigo']) >= 1 &&
    strlen($_POST['nombre']) >= 1 &&
    strlen($_POST['foto']) >=1 &&
    strlen($_POST['sexo']) >= 1) {

        $codigo = $_POST['codigo'];
        $nombre = $_POST['nombre'];
        $fechanac = $_POST['fechanac'];
        $sexo = $_POST['sexo'];
        $raza = $_POST['raza'];
        $foto = $_POST['foto'];

        $consulta = "INSERT INTO registrocanino(DNI, Nombre, Raza, Genero, FechaNacimiento, Foto) VALUES ('$codigo','$nombre','$raza','$sexo','$fechanac','$foto')";

        $resultado = mysqli_query($connect, $consulta);
        if($resultado){
            ?> 
            <div class="container-message">
            <h3 class="ok">¡Datos registrados correctamente! </h3>
            </div>
            
            <?php
           
            
        }else{
            ?> 
            <div class="container-message">
            <h3 class="bad">¡Ha ocurrido un error!</h3>
            </div>
           
            
            <?php
           
        }


    }else{
        ?> 
        <div class="container-message">
        <h3 class="med">¡Por favor, complete los campos!</h3>
        </div>
        
        <?php  
        
    }

}
?>