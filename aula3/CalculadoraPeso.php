<?php
require_once("classes/calculadora.class.php");

$peso = $_POST["peso"];
$altura = $_POST["altura"];

$ob1 = new calculadora();
if(isset($peso) && isset($altura)){
    $ob1->setImc($peso, $altura);
}
echo $ob1->getImc();
echo "<br>". $ob1->getStatus();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

    <link href="./calculadora.css" rel="stylesheet">
    <title>Calculadora de IMC</title>
</head>
<body>
    <div class="calculadora">
        <div class="row">
            <div class="col-3">
                <h3 class="tituloBox">Peso</h3>
                <input class="inputs">
            </div>
            <div class="col-3">
                <h3 class="tituloBox">Altura</h3>
                <input class="inputs">
            </div>
            <div class="col-2">
                <h3 class="tituloBox">IMC</h3>
                <input class="inputs">
            </div>
            <button type="button" class="btn-dark">Calcular</button>
        </div>
    </div>    
    
</body>
</html>