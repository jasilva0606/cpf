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

                    $esTenis=0;
                    $tenishs = [];
                    $fecha = $_SESSION['user']['fech'];
                    $inst = $_SESSION['user']['inst'];
                    $ubi = $_SESSION['user']['ubi'];

                    require("funciones.php");
                    iniciarForm($inst, $fecha, "confirmar.php", 1, $ubi);
                    $lugar = new Instalacion($inst);
                    $codigo = $lugar->getCodigo();
                    $tabla = $lugar->getTabla();

                    $esTenis = ( (strcmp($inst, "pad") == 0 ) || (strcmp($inst, "ten")== 0) ) ? 1 : 0;

                    require('db.php');
                    $consulta = "select * from $codigo WHERE (codigo NOT IN (SELECT codigo FROM $tabla WHERE fecha=\"$fecha\" && area=\"$ubi\") && inactivo=0)  ORDER by nombre asc";

                    $resultado = mysqli_query($conexion, $consulta);
                    $filas = mysqli_num_rows($resultado);
                    if($filas){
                            
                        for ( $i = 0; $i < $filas ; $i++){
                            $datos = mysqli_fetch_assoc($resultado);

                            $nombreInstalacion = quitaEspacios($datos['nombre']);
                                
                            if( (strcmp($inst, "golf") == 0) || (strcmp($inst, "golfd") == 0) ){
                                $instalacion = substr( $nombreInstalacion,0, 5);
                            }
                            else if( (strcmp($inst, "gim") == 0) ){
                                $instalacion = substr( $nombreInstalacion,3, 14);
                            }
                            else if( (strcmp($inst, "ten")== 0) || (strcmp($inst, "pad") == 0) ){
                                $tenishs[$i] = substr( $nombreInstalacion, 12, 13);
                            }
                            else {
                                $instalacion = $nombreInstalacion;
                            }
                            if($esTenis==0){
                                echo '<input type="submit" class="btnlistado" class="grid_item" name="' . $instalacion  . '" value="' . $instalacion . '">';
                            }
                        }
                        if($esTenis==1){
                            $tenishoras = array_values(array_unique($tenishs));
                            foreach($tenishoras as $key => $link) 
                            { 
                                if($link === '') 
                                { 
                                    unset($tenishoras[$key]); 
                                } 
                            } 
                            foreach($tenishoras as $key) 
                            { 
                                echo '<input type="submit" class="btnlistado" class="grid_item" name="' . $key  . '" value="' . $key . '">';
                            }
                        }
                        cerrarForm();
                    }
                    else{
                        cerrarForm();
                        ?>
                        <?php
                            include("index.php");
                        ?>
                        <script type="text/javascript">
                            var error = "Error: desconocido.";
                        </script>
                        <script src="./js/login.js"></script>
                        <?php
                    }
                        mysqli_free_result($resultado);
                        mysqli_close($conexion);
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