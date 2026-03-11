<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Conversor de Moedas</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<div class="form-box">

<h2>Conversor de Moedas</h2>

<form method="post">

<input type="number" step="0.01" name="valor" placeholder="Valor em Reais">

<select name="moeda">
<option value="dolar">Dólar</option>
<option value="euro">Euro</option>
</select>

<button>Converter</button>

</form>

<?php

if($_POST){

$valor=$_POST["valor"];
$moeda=$_POST["moeda"];

if($moeda=="dolar"){
$result=$valor/5;
echo "<div class='result'>US$ $result</div>";
}

if($moeda=="euro"){
$result=$valor/6;
echo "<div class='result'>€ $result</div>";
}

}

?>

<a class="voltar" href="index.php">Voltar</a>

</div>

</body>
</html>