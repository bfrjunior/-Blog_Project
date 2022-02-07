<?php
	require_once 'usuario.php';

	$usuario = new usuario();
	$usuario->setNome('Benedito');

	echo $usuario->getNome();


?>