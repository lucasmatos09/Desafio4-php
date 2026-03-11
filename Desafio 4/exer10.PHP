<!DOCTYPE html>
<html>
<head>

<meta charset="UTF-8">
<title>Fatorial</title>
<link rel="stylesheet" href="style.css">

</head>

<body>

<div class="form-box">

<h2>Cálculo de Fatorial</h2>

<form method="post">

<input type="number" name="num" placeholder="Digite um número">

<button>Calcular</button>

</form>

<?php

if($_POST){

$n=$_POST["num"];

$f=1;

for($i=1;$i<=$n;$i++){

$f*=$i;

}

echo "<div class='result'>Fatorial: $f</div>";

}

?>

<a class="voltar" href="index.php">Voltar</a>

</div>

</body>
</html>