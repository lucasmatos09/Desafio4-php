<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Média</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<div class="form-box">

<h2>Média de Valores</h2>

<form method="post">

<input type="number" name="n1">
<input type="number" name="n2">
<input type="number" name="n3">

<button>Calcular</button>

</form>

<?php

if($_POST){

$m=($_POST["n1"]+$_POST["n2"]+$_POST["n3"])/3;

echo "<div class='result'>Média: $m</div>";

}

?>

<a class="voltar" href="index.php">Voltar</a>

</div>

</body>
</html>