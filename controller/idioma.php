<?php
session_start();
if (!isset($_SESSION["usuario_id"]))
{
	//header("location: erro.php?erro=1");
}