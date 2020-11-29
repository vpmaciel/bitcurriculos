<?php
session_start();

if(isset($_SESSION['usu_int_id'])) {
    unset($_SESSION['usu_int_id']);
    session_unset(); 
    session_destroy();
    header('location:..\view\sair.php');
}else {
    header('location: ..\view\erro.php?e=OPN&msg=Usuário não está logado !');
}






