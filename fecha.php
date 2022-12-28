<?php
    if(!isset($_SESSION))
        session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistemas CPF</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Acme&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="./css/normalize.css">
    <link rel="stylesheet" type="text/css" href="./css/estilos.css">
    <link rel="stylesheet" href="./calendar/css/calendar.css">
    <link rel="stylesheet" type="text/css" href="./css/nav-bars.css">
</head>
<body>
    <div class="web">
        <div class="header">
            <div class="menuhead">
                <div class="logo"><img src="./img/EscudoCPF-300x300.png" alt="escudo"></div>
                <div class="nav-bar">
                    <div class="icon"><a href="./home.php"><div class="img"><img src="./assets/home.svg" title="Inicio"></i></div></a></div>
                    <div class="icon"><a href="./dp.php"><div class="img"><img src="./assets/user.svg" title="Datos per."></i></div></a></div>
                    <div class="icon"><a href="./misres.php"><div class="img"><img src="./assets/calendar.svg" title="Mis reservas"></i></div></a></div>
                    <div class="icon"><a href="./close.php"><div class="img"><img src="./assets/cerrar.svg" title="Cerrar"></i></div></a></div>
                </div>
            </div>
        </div>
        <div class="webinfo">
            <div class="info">
                <?php

                    if(!isset($_POST['error'])){
                        require("funciones.php");
                        $_SESSION['user']['inst'] = botonPulsado($_POST);
                    }

                    $inst = $_SESSION['user']['inst'];
                    if (strcmp($inst, "pad") == 0) {
                        echo '<h2 class="h2tipo" id="pad">Seleccione fecha</h2>';
                    } else if (strcmp($inst, "sal")== 0) {
                        echo '<h2 class="h2tipo" id="sal">Seleccione fecha</h2>';
                    } else if (strcmp($inst, "qui")== 0) {
                        echo '<h2 class="h2tipo" id="qui">Seleccione fecha</h2>';
                    } else if (strcmp($inst, "gim")== 0) {
                        echo '<h2 class="h2tipo" id="gim">Seleccione fecha</h2>';
                    } else if (strcmp($inst, "ten")== 0) {
                        echo '<h2 class="h2tipo" id="ten">Seleccione fecha</h2>';
                    } else if ( (strcmp($inst, "golf")== 0 )  || (strcmp($inst, "golfd")== 0) ){
                        echo '<h2 class="h2tipo" id="golf">Seleccione fecha</h2>';
                    } 

                ?>
                <div class="root">
                    <div class="calendar" id="calendar"></div>
                </div>
                <script  type="text/javascript" src="./calendar/js/moment.min.js"></script>
                <script  type="text/javascript" src="./calendar/js/es.js"></script>
                <script  type="text/javascript" src="./calendar/js/calendar.js"></script>
                <script  type="text/javascript" src="./js/fecha.js"></script>
            </div>
        </div>
        <div class="modal">
            <div class="modalinfo">
                <div class="msj">
                    <img class="x" src="./assets/x.svg"/>
                    <p class="msjerror">Error de fecha no válida.</p>
                </div>
            </div>
        </div>
    
        <div class="footer">
            <div class="icon">
            <a href="https://www.facebook.com/circulopoliciafederalargentina"><div class="img"><img src="./assets/facebook.svg"></i></div></a>
            </div>
            <div class="icon">
            <a href="https://www.instagram.com/circulopoliciafederal/"><div class="img"><img src="./assets/instagram.svg"></i></div></a>
            </div>
            <div class="icon">
            <a href="https://twitter.com/circuloPFA"><div class="img"><img src="./assets/twitter.svg"></i></div></a>
            </div>
            <div class="icon">
                <a href="https://www.youtube.com/channel/UCPBmQTS05R47uRA_SbhRycA"><div class="img"><img src="./assets/youtube.svg"></i></div></a>
            </div>
        </div> 
    </div>
</body>
</html>