<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
        <link rel="stylesheet" type="text/css" href="./css/main.css">
        <link rel="stylesheet" type="text/css" href="./css/competitions.css">
        <link rel="stylesheet" type="text/css" href="./css/competitors.css">
        <link rel="stylesheet" type="text/css" href="./css/menues.css">
        <link rel="stylesheet" type="text/css" href="./css/results.css">
        <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
        <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
        <script src="js/main.js"></script>
        <title></title>
    </head>
    <body>
        <?php
        session_start();
        error_reporting(E_ALL ^ E_NOTICE);
        mb_internal_encoding('UTF-8');
        require './libs/SmartyBC.class.php';
        include './constants.php';
        include './functions/functionsCommon.php';
        include './functions/functionsCompetitions.php';
        include './functions/functionsCompetitors.php';
        include './functions/functionsResults.php';
        $link = db_connect('hristostoyanov.info', 'jokera', 'katerica', 'timing');
        