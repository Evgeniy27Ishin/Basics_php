<?php
	header('Content-Type: txt/html; charset=utf-8');
	$chislo = file_get_contents('3.txt');
	file_put_contents('3.txt', $chislo*$chislo);
?>