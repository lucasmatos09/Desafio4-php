<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Somatório</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<div class="form-box">

<h2>Somatório</h2>

<form method="post">

<input type="number" name="num" placeholder="Número">

<button>Calcular</button>

</form>

<?php

if($_POST){

$n=$_POST["num"];

$s=0;

for($i=1;$i<=$n;$i++){
$s+=$i;
}

echo "<div class='result'>Somatório: $s</div>";

}

?>

<a class="voltar" href="index.php">Voltar</a>

</div>

</body>
</html>