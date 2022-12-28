<?php
    if(!isset($_SESSION))
        session_start();

    $inst = $_SESSION['user']['inst'];

    require("funciones.php");
    $_SESSION['user']['ubi'] = botonPulsado($_POST);
    $lugar = new Instalacion($inst);
    $diaMin = "+" . $lugar->getDiaMin() . " days";
    $diaMax = "+" . $lugar->getDiaMax() . " days";

    $fecha = $_POST['fecha'];
    $_SESSION['user']['fech'] = $fecha;
    
    $fechaactual = date("Y") . "-" . date("m") . "-" . date("d");

    if(($fecha >= date("Y-m-d", strtotime($diaMin))) && ($fecha <= date("Y-m-d", strtotime($diaMax)))){
        header("location:evento.php"); 
    }
    else {
        ?>
        <?php
            $_POST['error']=1;
            require("fecha.php");

            if ((strcmp($inst, "pad") == 0) ||  (strcmp($inst, "ten")== 0) || (strcmp($inst, "golf")== 0) || (strcmp($inst, "golfd")== 0)) {
                $plazo = "Error: el plazo mínimo para reservar es 1 día y el plazo máximo 7 días";
            } else if (strcmp($inst, "sal")== 0) {
                $plazo = "Error: el plazo mínimo para reservar es 1 día y el plazo máximo 365 días";
            } else if (strcmp($inst, "qui")== 0) {
                $plazo = "Error: el plazo mínimo para reservar es 1 día y el plazo máximo 30 días";
            } else if (strcmp($inst, "gim")== 0) {
                $plazo = "Error: el plazo mínimo para reservar es 1 día y el plazo máximo 3 días";
            }
            echo '<script type="text/javascript">var error = "' . $plazo .'";</script><script src="./js/validfech.js"></script>';
       ?>
       
       <?php
    }
?>