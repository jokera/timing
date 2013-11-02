<?php

include './header.php';
$smarty = new Smarty();
$smarty->display('adminMenu.tpl');
$smarty->display('competitorsMenu.tpl');
$competitor = new Competitor();
$competitor->printCompetitors('');
$competitor->competitorEdit($_GET['competitorID']);
$competitor->addCompetitor();
$competitor->deleteCompetitor();
