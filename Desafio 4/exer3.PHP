<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Consumo Combustível</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<div class="form-box">

<h2>Consumo de Combustível</h2>

<form method="post">

<input type="number" name="distancia" placeholder="Distância (km)">

<input type="number" name="litros" placeholder="Litros gastos">

<button>Calcular</button>

</form>

<?php

if($_POST){

$d=$_POST["distancia"];
$l=$_POST["litros"];

$c=$d/$l;

echo "<div class='result'>$c km/l</div>";

}

?>

<a class="voltar" href="index.php">Voltar</a>

</div>

</body>
</html>