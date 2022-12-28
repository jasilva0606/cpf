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
                <div class="logo">
                    <img src="./img/EscudoCPF-300x300.png" alt="escudo">
                </div>

            </div>
        </div>
        <div class="webinfo">
            <div class="info">
                <h1 class="titulo">Sist. Online C.P.F.</h1>
                <p id="bienvenido">Bienvenido al sistema online del Círculo Policía Federal.<br>A través del cual, usted puede registrarse en los distintos servicios.<br>Por favor complete los siguientes campos:</p>
                <form class="formulario" action="validar.php" method="post">
                    <input type="text" placeholder="Ingrese su DNI" name="dni" required>
                    <input type="password" placeholder="Ingrese su Contraseña" name="contraseña" required>
                    <input type="submit" value="Ingresar" class="btn">
                </form>
                <h4>Atención:</h4>
                <p class="clave">Si es la primera vez que accede al sistema ingrese las tres primeras letras
                    de su apellido como contraseña.<br>Por ejemplo si su apellido es GONZALEZ ingrese GON o si su apellido es DI GREGORIO ingrese DI</p>
            </div>
        </div>
        <div class="modal">
            <div class="modalinfo">
                <div class="msj">
                    <img class="x" src="./assets/x.svg"/>
                    <p class="msjerror">Error de Autenticación.</p>
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