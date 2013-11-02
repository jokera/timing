<?php

include './header.php';
$smarty = new Smarty();
$competition = new Competition();


if ($_SESSION['isLogged']) {
    if ($_SESSION['userType'] == 'admin') {
        $smarty->display('adminMenu.tpl');
    } elseif ($_SESSION['userType'] == 'user') {
        $smarty->display('loggedMenu.tpl');
    }
} else {
    $smarty->display('menu.tpl');
}

if (!$_GET['competitionID']) {
    $competition->printCompetitions('disabledEdit');
}
printResults($_GET['competitionID']);

