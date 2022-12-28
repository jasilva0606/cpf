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
                        echo '<h2>Bienvenido: ' . $_SESSION['user']['nombre']  . '</h2>';                    
                    ?>
                </div>
            <form action="" method="post" class="menugrafico">          
                <input type="image" src="./assets/bx-dumbbell.svg" alt="Gimnasio" class="btngrafico" name="btnGgim">
                <input type="image" src="./assets/bx-flag.svg" alt="Golf" class="btngrafico" name="btnGgolf">
                <input type="image" src="./assets/bx-tennis-ball.svg" alt="Tennis/Paddle" class="btngrafico" name="btnGpadten">
                <input type="image" src="./assets/bx-party.svg" alt="Salones/Quinchos" class="btngrafico"name="btnGsalqui">
            </form>

            <div class="btnGsig">
                <?php
                    require("funciones.php");

                    if (isset($_POST['btnGrug_x'])) {
                    echo "g_rug";
                    } else if (isset($_POST['btnGfut_x'])) {
                        echo "g_fut";
                    } else if (isset($_POST['btnGgolf_x'])) {
                        echo '<input type="submit" value="Golf" class="btGsig"><input type="submit" value="Golf Driving" class="btGsig">';
                    } else if (isset($_POST['btnGsalqui_x'])) {
                        echo '<input type="submit" value="Salones" class="btGsig"><input type="submit" value="Quinchos" class="btGsig">';
                    } else if (isset($_POST['btnGgim_x'])) {
                        echo '<input type="submit" value="Sede" class="btGsig"><input type="submit" value="Campo" class="btGsig">';
                    } else if (isset($_POST['btnGpadten_x'])) {
                        echo '<input type="submit" value="Paddle" class="btGsig"><input type="submit" value="Tenis" class="btGsig">';
                    }
                ?>
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