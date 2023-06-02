<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Calculadora Simples</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <form action='<?php $_SERVER["PHP_SELF"] ?>' method="post">
        <h1> Média  </h1>
        <br>
        <br>
        <label for="nota1">Nota 1: </label>
        <input type="number" max="10" name="nota1">
        <br>
        <label for="nota2">Nota 2: </label>
        <input type="text" name="nota2">
        <br>
        <label for="nota3">Nota 3: </label>
        <input type="text" name="nota3">
        <br>
        <label for="nota4">Nota 4: </label>
        <input type="text" name="nota4">
        <br>

        <input type="submit"> <input type="reset" value="reset">
    </form>

    <?php
        function getMedia(){
            //Variavel
            $soma = 0;

            for($i = 1; $i < 5; $i++){
                if(isset($_POST["nota" .$i])){
                    $soma += $_POST["nota" .$i];
                }
            }
            return $soma/4;
        }
        $media = getMedia();

        if($media >= 7.5){
            //Saída
            echo "<br> <br> <br>";
            echo "<h2>", "Média Bimestral: "  .$media. " Aprovado", "</h2>";
        }
        if($media < 3){
            //Saída
            echo "<br> <br> <br>";
            echo "<h2>", "Média Bimestral: "  .$media. " Reprovado", "</h2>";
        }
        if($media >= 3 && $media < 7.5){
            //Saída
            echo "<br> <br> <br>";
            echo "<h2>", "Média Bimestral: "  .$media. " Recuperação", "</h2>";
        }
    ?>
    
</body>
</html>