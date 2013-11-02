<?php

include './header.php';
$smarty = new Smarty();
$smarty->display('adminMenu.tpl');
$smarty->display('competitionMenu.tpl');
logout();
$competition = new Competition($link);
$competition->printCompetitions();
$competition->competitionEdit($_GET['editCompetitionID']);
$competition->addCompetition();
$competition->deleteCompetition();

createList($_GET['createStartList']);
//TODO: include footer(comment from Hristo)