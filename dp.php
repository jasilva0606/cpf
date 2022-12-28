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
                        $dni = $_SESSION['user']['dni'];

                        require('db.php');    
                        $consulta = "SELECT * FROM socios where dni='$dni'";
                        $resultado = mysqli_query($conexion, $consulta);
                        $filas = mysqli_num_rows($resultado);
                        if($filas){                       
                            $datos = mysqli_fetch_assoc($resultado); 
                            $nombre = $datos['nombre'] . " " . $datos['apellido'];
                        }
                        
                        $qr =  $dni. "#". $nombre ."#";
                        
                        require 'phpqrcode/qrlib.php';
                        $path= 'qrs/';
                        $qrcode = $path.$dni.".png";
                        QRcode :: png($qr, $qrcode, 'H', 5, 5);
                        echo '<div  class="qrsoc"><img src="'.$qrcode.'"></div>';
                        //echo "<br>";
                        //print_r($datos);
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