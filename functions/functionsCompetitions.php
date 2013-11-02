<?php

//ob_start();


class Competition {

    private $link;
    private $smarty;

    function __construct($db_connection) {

        $this->link = $db_connection;
        $this->smarty = new Smarty();
    }

    function printCompetitions($disabledEdit = NULL) {

        if ($_POST['filter']) {
            $filter = $this->filterCompetitions($_POST['filter']);
        } else {
            $filter = $this->filterCompetitions($_SESSION['filterCompetitions']);
        }
        $orderby = $this->orderCompetitionsby($_GET['sortCompetitionsBy'], $_GET['order']);
        $query = 'SELECT *  FROM competitions ' . $filter . $orderby;
        $query = mysqli_query($this->link, $query);
        while ($result = mysqli_fetch_array($query)) {
            $competitions[] = $result;
        }

        $sortby = './competitions.php?order=' . $_SESSION['order'] . '&sortCompetitionsBy=';
        $this->smarty->assign('competitions', $competitions);
        $this->smarty->assign('sortby', $sortby);
        $this->smarty->assign('disabledEdit', $disabledEdit);
        $this->smarty->assign('allCompetitions', $GLOBALS['allCompetitions']);
        $this->smarty->assign('filter', $_SESSION['filterCompetitions']);
        $this->smarty->
                display('competitions.tpl');
    }

    function addCompetition() {

        if ($_GET['action'] === "createNew") {
            $this->smarty->assign('competitions', $GLOBALS['competitions']);
            $this->smarty->assign('filter', $_SESSION['filterCompetitions']);
            $this->smarty->display('addCompetition.tpl');
        }
        if ($_POST['isAdded']) {
            $query = 'INSERT INTO `timing`.`competitions`'
                    . '(`name`, `place`, `date`, `type`,`dateAdded`) '
                    . 'VALUES ('
                    . '"' . mysqli_real_escape_string($this->link, $_POST['name']) . '", '
                    . '"' . mysqli_real_escape_string($this->link, $_POST['place']) . '", '
                    . '"' . mysqli_real_escape_string($this->link, $_POST['date']) . '", '
                    . '"' . mysqli_real_escape_string($this->link, $_POST['type']) . '", '
                    . '"' . mysqli_real_escape_string($this->link, date('Y-m-d')) . '");';
            mysqli_query($this->link, $query);
            echo mysqli_error($this->link);
            header(
                    'Location: competitions.php');
        }
    }

    function competitionEdit($id) {
        if ($_SESSION['userType'] == 'admin') {

            if ($id) {
                $query = 'SELECT *
                        FROM `competitions`
                        WHERE competition_id = ' . mysqli_real_escape_string($this->link, $id) . '; ';
                $query = mysqli_query($this->link, $query);
                $this->smarty->assign('result', mysqli_fetch_array($query));
                $this->smarty->assign('id', $id);
                $this->smarty->assign('competitions', $GLOBALS['competitions']);
                $this->smarty->display('competitionEdit.tpl');
            }
            if ($_POST['isSubmited']) {
                $query = 'UPDATE `timing`.`competitions`
                        SET
                        name = "' . mysqli_real_escape_string($this->link, $_POST['name']) . '",
                        place = "' . mysqli_real_escape_string($this->link, $_POST['place']) . '",
                        date = "' . mysqli_real_escape_string($this->link, $_POST['date']) . '",
                        type = "' . mysqli_real_escape_string($this->link, $_POST['type']) . '"
                        WHERE `competitions`.`competition_id` = ' . trim($_POST['isSubmited']);
                header('Location: competitions.php');
                mysqli_query($this->link, $query);
            }
        } elseif ($_SESSION['userType'] == 'user') {
            loggedMenu();
        }
    }

    function deleteCompetition() {

        if ($_GET['delete']) {
            $query = 'DELETE
        FROM `timing`.`competitions`
        WHERE `competitions`.`competition_id` = ' . $_GET ['delete'];
            mysqli_query($this->link, $query);
            header(
                    'Location: ./competitions.php');
        }
    }

    function filterCompetitions($type, $addition = NULL) {

        if ($addition) {
            $addition = ' AND ';
        } else {
            $addition = ' WHERE ';
        }
        if ($type && $type != "All") {
            $query = $addition . ' `competitions`.`type`=\'' . mysqli_escape_string($this->link, $type) . '\'';
            $_SESSION['filterCompetitions'] = $type;
        } elseif ($type === 'All') {
            $_SESSION['filterCompetitions'] = 'All';
        }
        return $query;
    }

    function orderCompetitionsby($type) {
        //  global $this->link;
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
            $orderby = ' ORDER BY ' . mysqli_escape_string($this->link, $_SESSION ['orderCompetitionsby']) . ' ' . $_SESSION['order'];
        }
        return $orderby;
    }

//ob_flush();
}
