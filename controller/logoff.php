<?php
session_start();

if(isset($_SESSION['usu_id'])) {
    unset($_SESSION['usu_id']);
    session_destroy();
    header('location:..\view\sucesso.php?msg=Logoff realizado com sucesso !');
    exit;
}else {
    header('location:..\view\erro.php?e=OPN&msg=Usuário não está logado !');
    exit;
}






