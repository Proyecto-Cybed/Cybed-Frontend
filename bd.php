<?php
$bdDsn = getenv('BD_DSN');
$bdUser = getenv('BD_USER');
$bdPassword = getenv('BD_PASSWORD');

try {
		$bd = new PDO($bdDsn, $bdUser, $bdPassword);
	} catch (PDOException $e) {
		exit($e->getMessage());
	}
