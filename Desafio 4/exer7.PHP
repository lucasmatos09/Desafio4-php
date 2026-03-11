<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Dias da Semana</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<div class="form-box">

<h2>Dia da Semana</h2>

<form method="post">

<input type="number" name="dia" placeholder="Número (1-7)">

<button>Mostrar</button>

</form>

<?php

if($_POST){

$d=$_POST["dia"];

switch($d){

case 1: $res="Domingo"; break;
case 2: $res="Segunda"; break;
case 3: $res="Terça"; break;
case 4: $res="Quarta"; break;
case 5: $res="Quinta"; break;
case 6: $res="Sexta"; break;
case 7: $res="Sábado"; break;
default: $res="Número inválido";

}

echo "<div class='result'>$res</div>";

}

?>

<a class="voltar" href="index.php">Voltar</a>

</div>

</body>
</html>