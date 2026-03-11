<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Maior e Menor</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<div class="form-box">

<h2>Maior e Menor</h2>

<form method="post">

<input type="number" name="n1">
<input type="number" name="n2">
<input type="number" name="n3">

<button>Verificar</button>

</form>

<?php

if($_POST){

$nums=[ $_POST["n1"],$_POST["n2"],$_POST["n3"] ];

echo "<div class='result'>Maior: ".max($nums)."<br>Menor: ".min($nums)."</div>";

}

?>

<a class="voltar" href="index.php">Voltar</a>

</div>

</body>
</html>