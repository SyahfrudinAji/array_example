<html>
<head>
	<h2>Indexed Arrays</h2>
</head>
<body>
<?php	
	$cars = array("Bayam","Kangkung","Katu");
	echo "Macam-Macam sayuran diantaranya : " . $cars[0] . ", " . $cars[1] . " dan " . $cars[2] . ".";
?>
<br>
<br>
<?php
	
	$motor = array("Suzuki", "Honda", "Kawasaki");
	echo "Dijual : " . $motor[0] . ", " . $motor[1] . " dan " . $motor[2] . ".";

?>
<br>
<br>
<?php
	$laptop = array("Acer", "Dell", "Axus");
	echo "Pembelian pertama bebas memilih laptop, diantaranya : " . $laptop[0] . ", " . $laptop[1] . " dan " . $laptop[2] . ".";
?>
<br>
<br>
<br>
<h2>Associative Aarrays</h2>
<?php
	$age = array("Bayu"=>"19", "Guntur"=>"18", "Permana"=>"20");
	echo "Umur Guntur adalah " . $age['Guntur'] . " Years Old.";
?>
<br>
<br>
<?php
	$age = array("Mobil"=>"Merah", "Motor"=>"Trail", "Sepada"=>"Gunung");
	echo "Zanu Pergi Menggunakan Sepada " . $age['Sepada'] . ".";
?>
<br>
<br>
<?php
	$age = array("Bahasa"=>"Inggris", "Modern"=>"Tradisoanl", "Adat"=>"Istiadat");
	echo "Bahasa " . $age['Bahasa'] . " itu Menyenangkan.";
?>
</body>
</html>