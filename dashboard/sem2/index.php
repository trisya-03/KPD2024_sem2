<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>my first php</title>
</head>
<body>
	<?php 
    $txt= "Purata Markah";
    $bm = 80;
    $bi = 76;
    $mt = 87;
    $sc = 93;

   $jumlah = $bm + $bi + $mt + $sc;

   $purata = $jumlah/4;
   echo $txt;
   echo "<br>";
   echo "Markah BM: $bm<br>";
   echo "Markah BI: $bi<br>";
   echo "Markah Matematik: $mt<br>";
   echo "Markah Sains: $sc<br>";
   echo "Jumlah Markah: $jumlah<br>";
   echo "Purata Markah: $purata";
	?>
	

</body>
</html>