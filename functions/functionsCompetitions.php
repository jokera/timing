<?php

//ob_start();

class Competition {

    function printCompetitions($disabledEdit = NULL) {
        global $link;

        $smarty = new Smarty();
        if ($_POST['filter']) {
            $filter = $this->filterCompetitions($_POST['filter']);
        } else {
            $filter = $this->filterCompetitions($_SESSION['filterCompetitions']);
        }
        $orderby = $this->orderCompetitionsby($_GET['sortCompetitionsBy'], $_GET['order']);
        $query = 'SELECT *  FROM competitions ' . $filter . $orderby;
        $query = mysqli_query($link, $query);
        while ($result = mysqli_fetch_array($query)) {
            $competitions[] = $result;
        }

        $sortby = './competitions.php?order=' . $_SESSION['order'] . '&sortCompetitionsBy=';
        $smarty->assign('competitions', $competitions);
        $smarty->assign('sortby', $sortby);
        $smarty->assign('disabledEdit', $disabledEdit);
        $smarty->assign('allCompetitions', $GLOBALS['allCompetitions']);
        $smarty->assign('filter', $_SESSION['filterCompetitions']);
        $smarty->
                display('competitions.tpl');
    }

    function addCompetition() {
        global $link;
        $smarty = new Smarty ( );
        if ($_GET['action'] === "createNew") {
            $smarty->assign('competitions', $GLOBALS['competitions']);
            $smarty->assign('filter', $_SESSION['filterCompetitions']);
            $smarty->display('addCompetition.tpl');
        }
        if ($_POST['isAdded']) {
            $query = 'INSERT INTO `timing`.`competitions`'
                    . '(`name`, `place`, `date`, `type`,`dateAdded`) '
                    . 'VALUES ('
                    . '"' . mysqli_real_escape_string($link, $_POST['name']) . '", '
                    . '"' . mysqli_real_escape_string($link, $_POST['place']) . '", '
                    . '"' . mysqli_real_escape_string($link, $_POST['date']) . '", '
                    . '"' . mysqli_real_escape_string($link, $_POST['type']) . '", '
                    . '"' . mysqli_real_escape_string($link, date('Y-m-d')) . '");';
            mysqli_query($link, $query);
            echo mysqli_error($link);
            header(
                    'Location: competitions.php');
        }
    }

    function competitionEdit($id) {
        if ($_SESSION['userType'] == 'admin') {
            global $link;
            $smarty = new Smarty();
            if ($id) {
                $query = 'SELECT *
                        FROM `competitions`
                        WHERE competition_id = ' . mysqli_real_escape_string($link, $id) . '; ';
                $query = mysqli_query($link, $query);
                $smarty->assign('result', mysqli_fetch_array($query));
                $smarty->assign('id', $id);
                $smarty->assign('competitions', $GLOBALS['competitions']);
                $smarty->display('competitionEdit.tpl');
            }
            if ($_POST['isSubmited']) {
                $query = 'UPDATE `timing`.`competitions`
                        SET
                        name = "' . mysqli_real_escape_string($link, $_POST['name']) . '",
                        place = "' . mysqli_real_escape_string($link, $_POST['place']) . '",
                        date = "' . mysqli_real_escape_string($link, $_POST['date']) . '",
                        type = "' . mysqli_real_escape_string($link, $_POST['type']) . '"
                        WHERE `competitions`.`competition_id` = ' . trim($_POST['isSubmited']);
                header('Location: competitions.php');
                mysqli_query($link, $query);
            }
        } elseif ($_SESSION['userType'] == 'user') {
            loggedMenu();
        }
    }

    function deleteCompetition() {
        global $link;
        if ($_GET['delete']) {
            $query = 'DELETE
        FROM `timing`.`competitions`
        WHERE `competitions`.`competition_id` = ' . $_GET ['delete'];
            mysqli_query($link, $query);
            header(
                    'Location: ./competitions.php');
        }
    }

    function filterCompetitions($type, $addition = NULL) {
        global $link;

        if ($addition) {
            $addition = ' AND ';
        } else {
            $addition = ' WHERE ';
        }
        if ($type && $type != "All") {
            $query = $addition . ' `competitions`.`type`=\'' . mysqli_escape_string($link, $type) . '\'';
            $_SESSION['filterCompetitions'] = $type;
        } elseif ($type === 'All') {
            $_SESSION['filterCompetitions'] = 'All';
        }
        return $query;
    }

    function orderCompetitionsby($type) {
        global $link;
        if ($type == $_SESSION['orderCompetitionsby']) {
            if ($_SESSION['order'] == 'desc' || !$_SESSION['order']) {
                $_SESSION['order'] = 'asc';
            } else {
                $_SESSION['order'] = 'desc';
            }
        } elseif ($type != $_SESSION['orderCompetitionsby']) {
            $_SESSION['order'] = 'asc';
        }
        if ($type) {
            $_SESSION['orderCompetitionsby'] = $type;
        }
        if ($_SESSION['orderCompetitionsby']) {
            $orderby = ' ORDER BY ' . mysqli_escape_string($link, $_SESSION ['orderCompetitionsby']) . ' ' . $_SESSION['order'];
        }
        return $orderby;
    }

//ob_flush();
}
