<html !DOCTYPE>
<head>
	<title>Soma</title>

	<meta charset="UTF-8">
</head>
<body>

<h1>Soma de 2 n&uacute;meros com formul&aacute;rio POST</h1>

<form action="index.php" method="POST">
	<p>N1<input type="text" name="n1" /></p>
	<p>N2<input type="text" name="n2" /></p>
	<input type="submit" value="Soma, porra!" />
</form>

<?php 
$n1 = isset($_POST['n1']) ? $_POST['n1'] : '';
$n2 = isset($_POST['n2']) ? $_POST['n2'] : '';
if ($n1 == '' or $n2 == '') {
	echo 'N1 + N2 = Soma';
} else {
	echo $n1.' + '.$n2.' = '.($n1 + $n2);
}
?>
</body>
</html>