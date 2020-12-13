<?php
session_start();

if(isset($_SESSION['usu_int_id'])) {
    unset($_SESSION['usu_int_id']);
    session_unset(); 
    session_destroy();
    header('location:..\view\sucesso.php?msg=Logoff realizado com sucesso !');
}else {
    header('location:..\view\erro.php?e=OPN&msg=Usuário não está logado !');
}






