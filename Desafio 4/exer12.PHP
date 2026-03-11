<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Pares</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<div class="form-box">

<h2>Números Pares</h2>

<form method="post">

<input type="number" name="num" placeholder="Até qual número">

<button>Mostrar</button>

</form>

<?php

if($_POST){

$n=$_POST["num"];

$txt="";

for($i=0;$i<=$n;$i+=2){
$txt.=$i." ";
}

echo "<div class='result'>$txt</div>";

}

?>

<a class="voltar" href="index.php">Voltar</a>

</div>

</body>
</html>