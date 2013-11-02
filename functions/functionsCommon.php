<?php

session_start();

function login() {
    if ($_GET['action'] === 'login') {
        $smarty = new Smarty();
        $smarty->display('login.tpl');
    }
    if (isset($_POST['logged'])) {
        global $link;
        $userName = mysqli_real_escape_string($link, $_POST['user']);
        $password = md5($_POST['pass']);
        $query = 'SELECT *
                   FROM  `users`
                   WHERE username=\'' . $userName . '\'   AND password=\'' . $password . '\'  ';
        $userInfo = mysqli_query($link, $query);
        if (mysqli_num_rows($userInfo)) {
            $userInfo = mysqli_fetch_assoc($userInfo);
            $_SESSION['isLogged'] = TRUE;
            $_SESSION['userType'] = $userInfo['type'];
            $_SESSION['name'] = $userInfo['name'];
        }
        if ($_SESSION['isLogged'] && $_SESSION['userType'] === 'admin') {
            header('Location: ./admin.php');
        } else {
            header('Location: ./index.php');
        }
    }
}

function register() {
    global $link;
    mysqli_set_charset($link, 'UTF-8');
    if ($_GET['action'] === 'register') {
        $smarty = new Smarty();
        $smarty->display('register.tpl');
    }
    if ($_POST['isSubmited']) {
        $query = 'INSERT INTO `timing`.`users` (`user_id`, `password`, `username`, `hint`,`type`,`name`,`mail`)'
                . ' VALUES (NULL,'
                . '"' . md5($_POST['pass']) . '",'
                . '"' . mysqli_real_escape_string($link, $_POST['user']) . '",'
                . '"' . mysqli_real_escape_string($link, $_POST['hint']) . '",'
                . '"' . mysqli_real_escape_string($link, $_POST['type']) . '",'
                . '"' . mysqli_real_escape_string($link, $_POST['name']) . '",'
                . '"' . mysqli_real_escape_string($link, $_POST['mail']) . '");';
        mysqli_query($link, $query);
    }
}

function logout() {
    if ($_GET['action'] == 'logout') {
        session_destroy();
        header('Location: ./index.php');
        exit();
    }
}

function selectCompetitionType($selected = NULL, $autoSubmit = NULL) {
    global $competitionsArray;
    $smarty = new Smarty();
    $smarty->assign('competitionsArray', $competitionsArray);
    $smarty->assign('autoSubmit', $autoSubmit);
    $smarty->assign('selected', $selected);
    $smarty->display('selectCompetitionType.tpl');
}

function db_connect($host, $user, $password, $database) {
    $link = mysqli_connect($host, $user, $password, $database, 3306);
    mysqli_set_charset($link, 'utf8');
    if (mysqli_error($link)) {
        echo 'Database Error';
        echo mysqli_error($link);
    } else {
        return $link;
    }
}
