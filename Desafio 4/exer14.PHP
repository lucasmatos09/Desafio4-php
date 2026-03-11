<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Lista</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<div class="form-box">

<h2>Lista de Compras</h2>

<form method="post">

<input type="text" name="i1">
<input type="text" name="i2">
<input type="text" name="i3">

<button>Mostrar</button>

</form>

<?php

if($_POST){

$lista=[ $_POST["i1"],$_POST["i2"],$_POST["i3"] ];

echo "<div class='result'>";

foreach($lista as $i){
echo "$i <br>";
}

echo "</div>";

}

?>

<a class="voltar" href="index.php">Voltar</a>

</div>

</body>
</html>