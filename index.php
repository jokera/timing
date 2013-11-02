<?php

include './header.php';
$smarty = new Smarty();
if ($_SESSION['isLogged'] && $_SESSION['userType'] == 'user') {
    $smarty->display('loggedMenu.tpl');
    logout();
    echo 'Hello ' . $_SESSION['name'];
} elseif ($_SESSION['isLogged'] && $_SESSION['userType'] == 'admin') {
    header('Location: ./admin.php');
} else {
    $smarty->display('menu.tpl');
    login();
    register();
}
///$smarty->display('adminMenu.tpl');
include './footer.php';
