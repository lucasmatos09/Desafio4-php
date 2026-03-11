<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Mês por Extenso</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<div class="form-box">

<h2>Mês por Extenso</h2>

<form method="post">

<input type="number" name="mes" placeholder="Número do mês">

<button>Mostrar</button>

</form>

<?php

if($_POST){

$meses=[
1=>"Janeiro",
2=>"Fevereiro",
3=>"Março",
4=>"Abril",
5=>"Maio",
6=>"Junho",
7=>"Julho",
8=>"Agosto",
9=>"Setembro",
10=>"Outubro",
11=>"Novembro",
12=>"Dezembro"
];

$m=$_POST["mes"];

echo "<div class='result'>".$meses[$m]."</div>";

}

?>

<a class="voltar" href="index.php">Voltar</a>

</div>

</body>
</html>