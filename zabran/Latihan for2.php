<?php

$jumBaris =10;
$jumKolom =6;

echo "<table border='1'>";

for ($baris=1; $baris <=5 ; $baris++) 
{ 
	echo "<tr>";
	for ($kolom=1; $kolom <=4 ; $kolom++) 
	{ 
		echo "<td>Baris".$baris."Kolom".$kolom."</td>"
;	}
	echo "</tr>";
}
echo "</table>";
?>