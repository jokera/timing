<?php

class Competitor {

    public $var = 100;

    //var $smarty = new Smarty;

    function printCompetitors($isSign, $competitionID = NULL, $startlist = NULL) {
        global $link;
        $smarty = new Smarty();
//filter competitors only in one race
        if ($competitionID) {
            $condition = $this->filterCompetitorsOnlyInOneRace($competitionID, $isSign);
        } else {
            if ($_POST['filter'] && $_POST['filter'] != 'All') {
                $filter = $this->filterCompetitors($_POST['filter'], 0);
                $_SESSION['filterCompetitors'] = $_POST['filter'];
            } elseif ($_POST['filter'] == 'All') {
                $_SESSION['filterCompetitors'] = $_POST['filter'];
            } elseif ($_SESSION['filterCompetitors']) {
                $filter = $this->filterCompetitors($_SESSION['filterCompetitors'], 0);
            }
        }
        $orderby = $this->orderCompetitorsby($_GET['sortCompetitorsby'], $_GET['order']);
        $query = 'SELECT * FROM competitors ' . $condition . $filter . $orderby;
        $query = mysqli_query($link, $query);
        while ($res = mysqli_fetch_array($query)) {
            if (isset($startlist)) {
                $header[$res['competitor_id']] = './competitions.php?createStartList=' . $competitionID . '&deleteCompetitorID=' . $res['competitor_id'];
            } elseif ($_GET['createStartList']) {
                $header[$res['competitor_id']] = './competitions.php?createStartList=' . $competitionID . '&competitorID=' . $res['competitor_id'];
            } else {
                $header[$res['competitor_id']] = './competitors.php?competitorID=' . $res['competitor_id'];
            }
            $competitorInfo[$res['competitor_id']] = $res;
        }
        if ($_GET['createStartList']) {
            $sort = './competitions.php?createStartList=' . $competitionID . '&order=' . $_SESSION['order'] . '&sortCompetitorsby=';
        } else {
            $sort = './competitors.php?order=' . $_SESSION['order'] . '&sortCompetitorsby=';
        }
        $smarty->assign('sort', $sort);
        $smarty->assign('header', $header);
        $smarty->assign('result', $competitorInfo);
        $smarty->assign('allCompetitions', $GLOBALS['allCompetitions']);
        $smarty->assign('filter', $_SESSION['filterCompetitors']);
        $smarty->display('competitors.tpl');
    }

    function addCompetitor() {
        $smarty = new Smarty();
        if ($_GET['action'] === "createNew") {
            $smarty->assign('competitions', $GLOBALS['competitions']);
            $smarty->display('competitorAdd.tpl');
        }
        if (isset($_POST['isAdded'])) {
            addCompetitor_data($_POST['name'], $_POST['type'], $_POST['bib'], $_POST['car'], $_POST['class'], $_POST['division']);
        }
    }

    function addCompetitor_data($name, $type, $bib, $field1 = NULL, $field2 = NULL, $field3 = NULL) {
        global $link;
        $query = '     INSERT INTO `timing`.`competitors`
            ( `name`, `type`, `bib`)
            VALUES (
            "' . mysqli_real_escape_string($link, $name) . '",
            "' . mysqli_real_escape_string($link, $type) . '",
            "' . mysqli_real_escape_string($link, $i++) . '") ';
        mysqli_query($link, $query);
        if ($type) {
            $insert_into = ' INSERT INTO `timing`.`' . mysqli_real_escape_string($link, $type) . '` ';

            if ($type === 'Раликрос' || $type === 'Автокрос' || $type === 'Планинско') {
                $values = '(competitor_id, Car, Class, Division )
            VALUES ("' . mysqli_insert_id($link) . '", "'
                        . mysqli_real_escape_string($link, $field1) . '", "'
                        . mysqli_real_escape_string($link, $field2) . '", "'
                        . mysqli_real_escape_string($link, $field3) . '")';
                $query = $insert_into . $values;
                mysqli_query($link, $query);
                // header(' Location: competitors.php');
            } elseif ($type === 'Ски' || $type === 'Лека атлетика') {
                $values = '(competitor_id, age, sex )
            VALUES ("' . mysqli_insert_id($link) . '", "'
                        . mysqli_real_escape_string($link, $field1) . '", "'
                        . mysqli_real_escape_string($link, $field2) . '", ")';
                //. mysqli_real_escape_string($link, $field3) . '")';
                $query = $insert_into . $values;
                mysqli_query($link, $query);
            }
        }
    }

    function deleteCompetitor() {
        global $link;
        if ($_GET['delete']) {
            $query = 'DELETE
            FROM `timing`.`competitors`
            WHERE `competitors`.`competitor_id` = ' . mysqli_real_escape_string($link, $_GET['delete']);
            mysqli_query($link, $query);
            header('Location: competitors.php');
        }
    }

    function competitorEdit($id) {
        global $link;
        $smarty = new Smarty();
        if ($_SESSION['userType'] === 'admin') {
            if ($id) {
                $query = 'SELECT *
            FROM `competitors`
            WHERE competitor_id = ' . mysqli_escape_string($link, $id);
                $query = mysqli_query($link, $query);
                $result = mysqli_fetch_array($query);
                $smarty->assign('result', $result);
                $smarty->assign('id', $id);
                $smarty->assign('competitions', $GLOBALS['competitions']);
                $smarty->display('competitorEdit.tpl');
            }
            if ($_POST['isSubmited']) {
                $query = 'UPDATE `timing`.`competitors`
            SET
            bib = "' . mysqli_real_escape_string($link, $_POST['bib']) . '",
            name = "' . mysqli_real_escape_string($link, $_POST['name']) . '",
            type = "' . mysqli_real_escape_string($link, $_POST['type']) . '"
            WHERE `competitors`.`competitor_id` = ' . mysqli_real_escape_string($link, $_POST['isSubmited']);
                header('Location: competitors.php');
                mysqli_query($link, $query);
            }
        }
    }

    function filterCompetitors($type, $addition = NULL) {
        global $link;
        if ($addition) {
            $addition = 'AND';
        } else {
            $addition = 'WHERE';
        }
        if ($type && $type != "All") {
            $query = $addition . ' `competitors`.`type` = \'' . mysqli_escape_string($link, $type) . '\'';
            $_SESSION['filterCompetitors'] = $type;
        } elseif ($type === 'All') {
            $_SESSION['filterCompetitors'] = 'All';
        }
        return $query;
    }

    function filterCompetitorsOnlyInOneRace($competitionID, $isSign) {
        global $link;
        if ($competitionID) {
            $condition = ' WHERE competitors.competitor_id ' . mysqli_escape_string($link, $isSign) .
                    ' IN (SELECT racelist.competitor_id
                    FROM racelist
                    WHERE competition_id=' . mysqli_escape_string($link, $competitionID) . ')
                    AND competitors.`type` IN (SELECT competitions.`type`
                    FROM competitions
                    WHERE competitions.competition_id=' . mysqli_escape_string($link, $competitionID) . ') ';
        }
        return $condition;
    }

    function orderCompetitorsby($type, $order = NULL) {
        global $link;
        if ($type == $_SESSION['orderCompetitorsby']) {
            if ($_SESSION['order'] == 'desc' || !$_SESSION['order']) {
                $_SESSION['order'] = 'asc';
            } else {
                $_SESSION['order'] = 'desc';
            }
        } elseif ($type != $_SESSION['orderCompetitorsby']) {
            $_SESSION['order'] = 'asc';
        }
        if ($type) {
            $_SESSION['orderCompetitorsby'] = $type;
        }
        if ($_SESSION['orderCompetitorsby']) {
            $orderby = ' ORDER BY ' . mysqli_escape_string($link, $_SESSION['orderCompetitorsby']) . ' ' . $_SESSION['order'];
        }
        return $orderby;
    }

    function competitorTypeData() {
        $s = 'It works';
        return $s;
    }

}
