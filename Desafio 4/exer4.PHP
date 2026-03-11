<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Situação do Aluno</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<div class="form-box">

<h2>Situação do Aluno</h2>

<form method="post">

<input type="number" step="0.1" name="nota" placeholder="Nota">

<button>Verificar</button>

</form>

<?php

if($_POST){

$n=$_POST["nota"];

if($n>=7){
echo "<div class='result'>Aprovado</div>";
}else{
echo "<div class='result'>Reprovado</div>";
}

}

?>

<a class="voltar" href="index.php">Voltar</a>

</div>

</body>
</html>