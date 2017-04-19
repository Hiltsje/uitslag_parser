<?php
/**
 * Created by PhpStorm.
 * User: Hillie
 * Date: 19-04-17
 * Time: 16:46
 */

$txt_file    = file_get_contents('Zutphen V15 10-4-15.txt');
$rows        = explode("\n", $txt_file);

foreach($rows as $row => $data) {

	$row_data = preg_split("/\s+/", $data);

	$info[$row]['whitespace'] = $row_data[0];
	$info[$row]['place'] = $row_data[1];
	$info[$row]['initials'] = $row_data[2];
	$info[$row]['name'] = $row_data[3];
	$info[$row]['distance'] = $row_data[4];

	echo 'Row ' . $row . ' Place: ' . $info[$row]['place'] . '<br />';
	echo 'Row ' . $row . ' Name: ' . $info[$row]['initials'] . $info[$row]['name'] . '<br />';
	echo 'Row ' . $row . ' Distance: ' . $info[$row]['distance'] . '<br />';
}