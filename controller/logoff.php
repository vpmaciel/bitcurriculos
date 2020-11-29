<?php
session_start();

if (!isset($_SESSION["usu_int_id"])) {
	header('location:..\view\erro.php?erro=SNI');
} else {
    unset($_SESSION['usu_int_id']);
    header('location:..\view\sair.php');
}



