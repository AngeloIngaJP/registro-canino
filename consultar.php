<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/stylecon.css">
    <title>Consultar Canino</title>
</head>

<body>
    <!-- <form action="" method="POST">
        <p>Sistema de Identificación Perruno</p>
        <p>Ingresar Nombre a buscar</p>
        <input type="text" name="nombre">
        <br>
        <input type="submit" name="Buscar" id="btnbus" class="butoncitobus" value="Buscar">
    </form> -->

    <form action="" method="POST">
        <div class="logo">
            <div>
                <img src="assets/logo.png" alt="" class="imglogo">
            </div>

        </div>
        <section class="calculator__imc">
            <div class="container" id="cards">

                <div class="calculator__textos">
                    <h2 class="calculator__title">Sistema de Identificacion Perruno</h2>
                    <!-- <p class="calculator__copy">Ingresar Nombre a buscar</p> -->
                </div>

                <div class="calculator__container">



                    <div class="cardss__item">
                        <p class="parrafotop">Ingresar nombre a buscar</p>
                        <figure class="calculator__img">
                            <img src="assets/dni." class="calculator__picturee">
                        </figure>
                        <div class="campo">
                            <input type="text" name="nombre">
                        </div>
                    </div>
                </div>
            </div>
            <input type="submit" name="Buscar" id="btnbus" class="butoncitobus" value="Buscar">

        </section>
    </form>
    <?php
      include("consultar_perro.php");
    ?>
</body>

</html>