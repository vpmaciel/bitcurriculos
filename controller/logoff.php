<?php
session_start();

unset($_SESSION['usu_int_id']);
session_unset(); 
session_destroy();
header('location:..\view\sair.php');




