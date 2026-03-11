<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Calculadora</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<div class="form-box">

<h2>Calculadora</h2>

<form method="post">

<input type="number" name="n1" placeholder="Número 1">

<input type="number" name="n2" placeholder="Número 2">

<select name="op">
<option value="+">+</option>
<option value="-">-</option>
<option value="*">*</option>
<option value="/">/</option>
</select>

<button>Calcular</button>

</form>

<?php

if($_POST){

$n1=$_POST["n1"];
$n2=$_POST["n2"];
$op=$_POST["op"];

switch($op){

case "+": $r=$n1+$n2; break;
case "-": $r=$n1-$n2; break;
case "*": $r=$n1*$n2; break;
case "/": $r=$n1/$n2; break;

}

echo "<div class='result'>Resultado: $r</div>";

}

?>

<a class="voltar" href="index.php">Voltar</a>

</div>

</body>
</html>