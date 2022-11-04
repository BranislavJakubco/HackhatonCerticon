<?php
	if (isset($_GET['stranka']))
		$stranka = $_GET['stranka'];
	else
		$stranka = 'uvod';
	if (preg_match('/^[a-z0-9]+$/', $stranka))
	{
		$vlozeno = include('./inc/' . $stranka . '.inc.php');
		if (!$vlozeno)
			echo('Podstránka nenalezena');
	}
	else
		echo('Neplatný parametr.');
        ?>