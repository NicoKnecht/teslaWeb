<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/styles.css">

    <script src="https://kit.fontawesome.com/8d2a6304f1.js" crossorigin="anonymous"></script>
    <title>Careers</title>
</head>

<body>
    <!--Comienzo Menu-->
    <!--Comienzo Menu-->
    <header class="headerContainer">
        <nav class="navWrapper">
            <div class="navLogo">
                <a href="index.html"><img src="img/tesla.png" alt="logo tesla"></a>
            </div>
            <a class="navBurguerMenu" href="#"><i class="fas fa-bars btnBurguer"></i></a>
            <ul class="navMenuWrapper ">
                <li class="navItem navItemCareers">
                    <a class="navLink" class="" href="careers.html">CARRERAS</a>
                    <ul class="careersList">
                        <li class="career">
                            <a href="#">Metematicas</a>
                        </li>
                        <li class="career">
                            <a href="#">Física</a>
                        </li>
                        <li class="career">
                            <a href="#">Sistemas</a>
                        </li>
                        <li class="career">
                            <a href="#">Diseño Multimedial</a>
                        </li>
                        <li class="career">
                            <a href="#">Desarrollo de Videojuegos</a>
                        </li>
                        <li class="career">
                            <a href="#">Automatiozación y Robótica</a>
                        </li>
                    </ul>
                </li>
                <li class="navItem navItemCourses">
                    <a class="navLink" href="courses.html">CURSOS</a>
                    <ul class="coursesList">
                        <li class="course">
                            <a href="#">Front-end</a>
                        </li>
                        <li class="course">
                            <a href="#">Back-end</a>
                        </li>
                        <li class="course">
                            <a href="#">UI/UX</a>
                        </li>
                        <li class="course">
                            <a href="#">Iot</a>
                        </li>
                        <li class="course">
                            <a href="#">Marketing Digital</a>
                        </li>
                        <li class="course">
                            <a href="#">Quehacer matemático</a>
                        </li>
                    </ul>
                </li>
                <li class="navItem">
                    <a class="navLink" href="inConstruction.html">INSTITUCIONAL</a>
                </li>
                <li class="navItem">
                    <a class="navLink" href="inConstruction.html">EVENTOS</a>
                </li>
                <li class="navItem">
                    <a class="navLink" href="inConstruction.html">BLOG</a>
                </li>
                <li class="navItem ">
                    <a class="navLink" href="contact.php">CONTACTO</a>
                </li>
                <li class="navItem enter">
                    <a class="navLink" href="inConstruction.html">Ingresá</a>
                </li>
                <li class="navItem login">
                    <a class="navLink" class="lastItem" href="inConstruction.html">Registrate</a>
                </li>
            </ul>
        </nav>
    </header>
    <!--Main-->
    <main class="mainContainerContact">
        <h2 class="mainTitle">consultanos</h2>
        <div class="mainWrapper">
            <!--networks-->
            <div class="netWrapper">
                <a href="" class="netLink">
                    <div class="netLogo">
                        <img class="logo" src="https://image.flaticon.com/icons/png/512/356/356045.png" alt="Logo LinkedIn">
                    </div>
                    <div class="netText">
                        <p>
                            LinkedIn
                        </p>
                    </div>
                </a>
                <a href="" class="netLink">
                    <div class="netLogo">
                        <img class="logo" src="https://image.flaticon.com/icons/png/512/2111/2111342.png" alt="Logo Facebook">
                    </div>
                    <div class="netText">
                        <p>
                            Facebook
                        </p>
                    </div>
                </a>
                <a href="" class="netLink">
                    <div class="netLogo">
                        <img class="logo" src="https://image.flaticon.com/icons/png/512/2111/2111421.png" alt="Logo Instagram">
                    </div>
                    <div class="netText">
                        <p>
                            Instagram
                        </p>
                    </div>
                </a>
                <a href="" class="netLink">
                    <div class="netLogo">
                        <img class="logo" src="https://image.flaticon.com/icons/png/512/889/889242.png" alt="Logo Youtube">
                    </div>
                    <div class="netText">
                        <p>
                            YouTube
                        </p>
                    </div>
                </a>
                <a href="" class="netLink">
                    <div class="netLogo">
                        <img class="logo" src="https://image.flaticon.com/icons/png/512/2111/2111310.png" alt="Logo Discord">
                    </div>
                    <div class="netText">
                        <p>
                            Discord
                        </p>
                    </div>
                </a>
            </div>
            <!--Form-->
            <div class="formContainer">




                <?php
                // var_dump($_GET);

                if (!empty($_GET['nombre']) && !empty($_GET['apellido']) && !empty($_GET['mail']) && !empty($_GET['mensaje']) && !empty($_GET['telefono'])) {
                ?>

                    <p class="successful">Gracias <?php echo $_GET['nombre'] ?> pronto nos estaremos comunicando!</p>

                    <?php

                } else { //errores
                    //name
                    if (isset($_GET['status']) && $_GET['status'] == 'errorEmpty_name') {
                    ?>
                        <p class="error">*Por favor ingrese su nombre</p>
                    <?php
                    } elseif (isset($_GET['status']) && $_GET['status'] == 'errorLength_name') {
                    ?>
                        <p class="error"> *El nombre ingresado tiene menos de 2 caracteres. verifica por favor</p>
                    <?php
                        //lastname
                    } elseif (isset($_GET['status']) && $_GET['status'] == 'errorEmpty_lastName') {
                    ?>
                        <p class="error"> *Por favor ingrese su apellido</p>
                    <?php
                    } elseif (isset($_GET['status']) && $_GET['status'] == 'errorlength_lastName') {
                    ?>
                        <p class="error"> *El apellido ingresado tiene menos de 2 caracteres. verifica por favor</p>
                    <?php
                        //mail
                    } elseif (isset($_GET['status']) && $_GET['status'] == 'errorEmpty_mail') {
                    ?>
                        <p class="error"> *Por favor ingrese un e-mail</p>
                    <?php
                    } elseif (isset($_GET['status']) && $_GET['status'] == 'errorNotValidate_mail') {
                    ?>
                        <p class="error"> *El e-mail ingresado no es válido</p>
                    <?php
                        //telefono
                    } elseif (isset($_GET['status']) && $_GET['status'] == 'errorEmpty_telefono') {
                    ?>
                        <p class="error"> *Por favor ingrese un teléfono</p>
                    <?php
                    } elseif (isset($_GET['status']) && $_GET['status'] == 'errorNotNumber_telefono') {
                    ?>
                        <p class="error"> *El teléfono ingresado no es válido</p>
                    <?php
                        //mensaje
                    } elseif (isset($_GET['status']) && $_GET['status'] == 'errorEmpty_mensaje') {
                    ?>
                        <p class="error"> *Escribe un mensaje para que te podamos asesorar</p>
                    <?php
                    } elseif (isset($_GET['status']) && $_GET['status'] == 'errorLength_mensaje') {
                    ?>
                        <p class="error"> *El mensaje debe tener de mas entre 10 caracteres 130 caracteres y escribiste <?php echo strlen($_GET['mensaje']) ?> caracteres</p>
                    <?php
                    }
                    ?>

                    <form class="formInputsWrapper" action="processes/action.php" method="post">
                        <div class="namesWrapper">
                            <input class="inputName" type="text" name="nombre" placeholder="Nombre" required>
                            <input class=" inputLastName" type="text" name="apellido" placeholder="Apellido" required>
                        </div>
                        <div class="mailPhoneWrapper">
                            <input class="inputMail" type="text" name="mail" placeholder="Mail" required>
                            <input class="inputPhone" type="text" name="telefono" placeholder="Teléfono">
                        </div>
                        <div class="inputTextArea">
                            <p class="pIn">Dejanos tu mensaje</p>
                            <textarea class="textarea" name="mensaje" id="" cols="" rows=""></textarea>

                        </div>
                        <div class="submitWrapper">
                            <button type="submit" name="Enviar" class="btnSubmit">Enviar</button>
                        </div>
                    </form>

                <?php
                }
                ?>

            </div>
        </div>
        </section>

    </main>
    <!-- Footer-->
    <footer class="footer">
        <div class="logoLocationWrapper">
            <a href="index.html" class="logoFooterLink">
                <img src="img/tesla2.png" alt="logo tesla footer" class="logoFooter">
            </a>
            <p class="legal">©2021 TESLA</p>
            <a class="locationWrapper" href="https://goo.gl/maps/kPQ1UhNFViuuuidS8" target="_blank">
                <img class="mapIcon" src="img/mapa.png" alt="icono de mapa">
                <p class="location">Calle falsa 123/9 - CABA</p>
            </a>
        </div>
        <div class="redesWrapper">
            <a class="linkImg" href="https://discord.com/" target="_blank">
                <img class="netImg" src="img/discord.png" alt="logo discord">
            </a>
            <a class=" linkImg" href="https://www.linkedin.com/" target="_blank">
                <img class="netImg" src="img/linkedin (2).png" alt="linkedin logo">
            </a>
            <a class="linkImg" href="https://www.facebook.com/" target="_blank">
                <img class="netImg" src="img/facebook.png" alt="facebook logo">
            </a>
            <a class="linkImg" href="https://www.instagram.com/" target="_blank">
                <img class="netImg" src="img/instagram.png" alt="instagram logo">
            </a>
            <a class="linkImg" href="https://www.youtube.com/" target="_blank">
                <img class="netImg" src="img/youtube.png" alt="youtube logo">
            </a>
        </div>


    </footer>
    <!--Final Footer-->
</body>

</html>