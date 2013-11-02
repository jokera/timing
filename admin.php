<?php

include './header.php';
$smarty = new Smarty();
if ($_SESSION['isLogged'] && $_SESSION['userType'] == 'admin') {
    $smarty->display('adminMenu.tpl');
    logout();
    $smarty->display('admin.tpl');
} else {
    header('Location: ./index.php');
}
