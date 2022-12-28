<?php
    $dni = $_POST['dni'];
    $contraseña = $_POST['contraseña'];
    if((strlen($dni) <7) || (strlen($dni) >8)){
        ?>
        <?php
            require("index.php");
       ?>
       <script type="text/javascript">
            var error = "Error: en DNI.";
        </script>
       <script src="./js/login.js"></script>
       <?php

    }
    else {
     if (strlen($dni)==7){
        $dni = "0".$dni;
     }
        require('db.php');
        
        $consulta = "SELECT * FROM socios where dni='$dni' and contrasena='$contraseña'";

        $resultado = mysqli_query($conexion, $consulta);

        $filas = mysqli_num_rows($resultado);
        if($filas){

            if(!isset($_SESSION))
                session_start();

            $_SESSION['user'] = array();
            $_SESSION['user']['dni']=$dni;
            
            $datos = mysqli_fetch_assoc($resultado); 
            $_SESSION['user']['nombre']= $datos['nombre'];

            header("location:./home.php");
        }
        else{
            ?>
            <?php
                require("index.php");
            ?>
        <script type="text/javascript">
            var error = "Error: con DNI o clave.";
        </script>
        <script src="./js/login.js"></script>
        <?php

        }
        mysqli_free_result($resultado);
        mysqli_close($conexion);
    }
