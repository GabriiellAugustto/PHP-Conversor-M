<?php

include_once 'controlador.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">
    <title>Conversor De Unidade</title>
   
</head>

<body>

            <div id = "Forms">
                <h2 >Conversor Medidas</h2>
                <form method="POST">
                <input type="number" name="valor"  placeholder="Valor">
                <br>
                <p>De:</p>
                <select name="medida">
                    <option value="metro" selected>Metro(s)</option>
                    <option value="quilometro">Quilômetro(s)</option>
                    <option value="centimetro">Centímetro(s)</option>
                    <option value="milimetro">Milímetro(s)</option></select>
                <br>    
                <p>Para:</p>
                <select name="medida2">
                    <option value="metro" selected>Metro(s)</option>
                    <option value="quilometro">Quilômetro(s)</option>
                    <option value="centimetro">Centímetro(s)</option>
                    <option value="milimetro">Milímetro(s)</option></select>
                <br>
                <br>    
                <button type="submit">Enviar</button>
                <br>
                <br>
                <input type="number" placeholder="Resultado:" value="<?= $valorfinal ?>" name="valorfinal">

                </form>
            </div>
       
</body>

<div id="footer">
	<p>Programação Web - Todos Direitos Reservados 2023
	Created by :  
	Gabriel Augusto RM 22674
	

</div>

</html>