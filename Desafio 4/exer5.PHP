<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Verificador de Idade</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<div class="form-box">

<h2>Verificador de Idade</h2>

<form method="post">

<input type="number" name="idade" placeholder="Digite sua idade">

<button>Verificar</button>

</form>

<?php

if($_POST){

$i=$_POST["idade"];

if($i>=18){
echo "<div class='result'>Maior de idade</div>";
}else{
echo "<div class='result'>Menor de idade</div>";
}

}

?>

<a class="voltar" href="index.php">Voltar</a>

</div>

</body>
</html>