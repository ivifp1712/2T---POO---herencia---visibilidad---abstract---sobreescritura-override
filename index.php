<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SitioHerencia</title>
</head>
<body>
    <h2>POO - herencia - visibilidad - abstract - sobreescritura / override</h2>
    <?php
        require_once("subclass/Gato.php");
        require_once("subclass/Perro.php");

        //instanciar
        $perro = new Perro();
        $gato = new Gato();

        $perro->comer();
        $perro->dormirperro();
        $gato->comer();
        $gato->dormirgato();

    ?>
</body>
</html>