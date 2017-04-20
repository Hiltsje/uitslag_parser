<?php
/**
 * Created by PhpStorm.
 * User: Hillie
 * Date: 19-04-17
 * Time: 16:46
 */

$txt_file    = file_get_contents('Zutphen V15 10-4-15.txt');
$rows        = explode("\n", $txt_file);

foreach($rows as $row) {

	$row_data = preg_match("/^\s+(\d+)\s(.{20})\s*(\d*|\d*[,]\d*)\s+(\d*|\d*.\d*)\s+(\d*)\s(.+?[A-Z{1}]?)\s+(\d+[.]\d+[.]\d+)\s*(\d*[,]\d*)\s+(\d+[,]\d)\s*$/", $row, $matches);

		$info[$row]['plaats'] = $matches[1];
		$info[$row]['naam'] = $matches[2];
		$info[$row]['afstand'] = $matches[3];
		$info[$row]['adap'] = $matches[4];
		$info[$row]['getekend'] = $matches[5];
		$info[$row]['ring'] = $matches[6];
		$info[$row]['tijd'] = $matches[7];
		$info[$row]['snelheid'] = $matches[8];
		$info[$row]['punten'] = $matches[9];


	echo ' Plaats: ' . $info[$row]['plaats'] . '<br />';
	echo ' Naam: ' . $info[$row]['naam'] . '<br />';
	echo ' Afstand: ' . $info[$row]['afstand'] . '<br />';
	echo ' AD/AP: ' . $info[$row]['adap'] . '<br />';
	echo ' Getekend: ' . $info[$row]['getekend'] . '<br />';
	echo ' Ring: ' . $info[$row]['ring'] . '<br />';
	echo ' Tijd: ' . $info[$row]['tijd'] . '<br />';
	echo ' Snelheid: ' . $info[$row]['snelheid'] . '<br />';
	echo ' Punten: ' . $info[$row]['punten'] . '<br />';
	echo '<br />';

}