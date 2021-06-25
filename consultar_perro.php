<?php
include("con_db.php");


if(strlen($_POST['nombre']) >= 1){
    $v2 = $_POST['nombre'];
    //conuslta SQL
    $sql = "SELECT * FROM registrocanino WHERE Nombre LIKE '".$v2."'";
    $result = mysqli_query($connect, $sql);
    //cuantos reultados hay en la busqueda
    $num_resultados = mysqli_num_rows($result);
    echo "<center><p class=dise>Número de perros encontrados: ".$num_resultados."</p></center>";
    //mostrando informacion de los perros y detalle
    ?> 
        <div class="container-message">
        <h3 class="ok">Datos encontrados</h3>
        </div>
        
        <?php  
    for ($i=0; $i <$num_resultados; $i++) {
    $row = mysqli_fetch_array($result); echo ($i+1);

    echo " <center><p class=dise>  DNI: ".$row["DNI"]." <p></center>";
    echo " <center><p class=dise> Nombre: ".$row["Nombre"]." <p></center>";
    echo " <center><p class=dise>Raza: ".$row["Raza"]." <p></center>";
    echo " <center><p class=dise>Género: ".$row["Genero"]." <p></center>";
    echo " <center><p class=dise>Nació el: ".$row["FechaNacimiento"]."<p></center>";
    echo "</p>";
    
    }

    ?> 
        <div class="espacio"></div>
        
        <?php  

}else{
    ?> 
        <div class="container-message">
        <h3 class="med">¡Por favor, complete el campo!</h3>
        </div>
        
        <?php  
}
?>