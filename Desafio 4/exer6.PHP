<!DOCTYPE html>
<html>
<head>

<meta charset="UTF-8">
<title>Par ou Ímpar</title>
<link rel="stylesheet" href="style.css">

</head>

<body>

<div class="form-box">

<h2>Verificador de Número</h2>

<form method="post">

<input type="number" name="numero" placeholder="Digite um número">

<button type="submit">Verificar</button>

</form>

<?php

if($_POST){

$n=$_POST["numero"];

if($n%2==0){

echo "<div class='result'>Número PAR</div>";

}else{

echo "<div class='result'>Número ÍMPAR</div>";

}

}

?>

<a class="voltar" href="index.php">Voltar ao Menu</a>

</div>

</body>
</html>