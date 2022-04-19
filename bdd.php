<?php


try
{
	$bdd = new PDO('mysql:host=10.11.43.56;dbname=horarios;charset=utf8', 'root', 'chango');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

