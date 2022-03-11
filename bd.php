<?php
$bd_env_var = getenv('bd_env_var');

try {
		$bd = new PDO($bd_env_var);
	} catch (PDOException $e) {
		exit($e->getMessage());
	}
