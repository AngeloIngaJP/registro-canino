<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Registrar Canino</title>
</head>

<body>
    <main class="sele">
        <form method="POST" action="">
            <div class="logo">
                <div>
                <img src="assets/logo.png" alt="" class="imglogo">
                </div>

            </div>
            <section class="calculator__imc">
                <div class="container" id="cards">

                    <div class="calculator__textos">
                        <h2 class="calculator__title">Sistema de Identificacion Perruno</h2>
                        <p class="calculator__copy">Para una buena identificación, necesitamos la información básica de
                            su perruno amigo</p>
                    </div>

                    <div class="calculator__container">



                        <div class="cardss__item">
                            <p class="parrafotop">Ingresar código</p>
                            <figure class="calculator__img">
                                <img src="assets/dni.svg" class="calculator__picturee">
                            </figure>
                            <div class="campo">
                                <input type="text" name="codigo" class="camp">
                            </div>
                        </div>

                        <div class="cardss__item">
                            <p class="parrafotop">Ingresar Nombre</p>
                            <figure class="calculator__img">
                                <img src="assets/name.jpg" class="calculator__picturee">
                            </figure>
                            <div class="campo">
                                <input type="text" name="nombre" class="camp">
                            </div>
                        </div>

                        <div class="cardss__item">
                            <p class="parrafotop">Fecha de nacimiento</p>
                            <figure class="calculator__img">
                                <img src="assets/calendario.svg" class="calculator__picturee">
                            </figure>
                            <div class="campo">
                                <input type="date" name="fechanac" class="camp">
                            </div>

                        </div>

                        <div class="cardss__item">
                            <p class="parrafotop">Seleccione género</p>
                            <figure class="calculator__img">
                                <img src="assets/macho.png" class="calculator__picturee">
                                <img src="assets/hembra.png" class="calculator__picturee">
                            </figure>
                            <div class="formulario">
                                <div class="radio">

                                    <input type="radio" name="sexo" id="Masculino" value="Macho">
                                    <label class="labell" for="Masculino">Macho</label>

                                    <input type="radio" name="sexo" id="Femenino" value="Hembra">
                                    <label class="labell" for="Femenino">Hembra</label>


                                </div>
                            </div>
                        </div>

                        <div class="cardss__item">
                            <p class="parrafotop">Seleccione raza</p>
                            <figure class="calculator__img">
                                <img src="assets/razas.jpg" class="calculator__picturee">
                            </figure>
                            <div class="campo">
                                <select name="raza" class="camp">
                                    <Option value="Pitbull"> Pitbull
                                    <Option value="Bulldog"> Bulldog
                                    <Option value="Shichu"> Shichu
                                    <Option value="Pequines"> Pequines
                                    <Option value="San Bernardo"> San Bernardo
                                    <Option value="Chiguahua"> Chiguahua
                                </select>
                            </div>

                        </div>

                        <div class="cardss__item">
                            <p class="parrafotop">Subir foto</p>
                            <figure class="calculator__img">
                                <img src="assets/foto.png" class="calculator__picturee">
                            </figure>
                            <div class="campo">
                                <input Type="file" name="foto" class="camp">
                            </div>

                        </div>

                    </div>
                    <?php
                        include("Registrar_perro.php");
                ?>
                    <input type="submit" name="Registrar" id="btnReg" class="butoncitoreg" value="Registrar">
                    <input type="submit" name="Cancelar" id="btnCan" class="butoncitocan" value="Cancelar">


                </div>
            </section>
        </form>
        
    </main>

    <!-- 
    <form action="" method="POST">
                <p>Sistema de Identificacion Perruno</p>
                <p>Ingresar Código</p>
                <input type="text" name="codigo">
                <p>Ingresar Nombre</p>
                <input type="text" name="nombre">
                <p>Fecha de nacimiento</p>
                <input type="date" name="fechanac">
                <p>Seleccione género</p>
                <input type="radio" name="sexo" id="Masculino" value="Masculino" checked="checked">
                <label class="labell" for="Masculino">Masculino</label>

                <input type="radio" name="sexo" id="Femenino" value="Femenino">
                <label class="labell" for="Femenino">Femenino</label>

                <p>Seleccione raza</p>
                <select name="raza">
                    <Option value="Pitbull"> Pitbull
                    <Option value="Bulldog"> Bulldog
                    <Option value="Shichu"> Shichu
                    <Option value="Pequines"> Pequines
                    <Option value="San Bernardo"> San Bernardo
                    <Option value="Chiguahua"> Chiguahua
                </select>
                <p>Subir foto</p>
                <Input Type="file" name="foto">
                <br>
                <br>
                <input type="submit" name="Registrar" id="btnReg" class="butoncitoreg" value="Registrar">
                <input type="submit" name="Cancelar" id="btnCan" class="butoncitocan" value="Cancelar">


            </form>
             -->

</body>

</html>