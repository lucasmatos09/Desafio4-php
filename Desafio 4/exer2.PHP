<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Área e Perímetro</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<div class="form-box">

<h2>Área e Perímetro</h2>

<form method="post">

<input type="number" name="base" placeholder="Base">

<input type="number" name="altura" placeholder="Altura">

<button>Calcular</button>

</form>

<?php

if($_POST){

$b=$_POST["base"];
$a=$_POST["altura"];

$area=$b*$a;
$perimetro=2*($b+$a);

echo "<div class='result'>Área: $area <br> Perímetro: $perimetro</div>";

}

?>

<a class="voltar" href="index.php">Voltar</a>

</div>

</body>
</html>