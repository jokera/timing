<?php
include './header.php';
$smarty = new Smarty();
if ($_SESSION['isLogged']) {
    if ($_SESSION['userType'] == 'admin') {
        $smarty->display('adminMenu.tpl');
    } elseif ($_SESSION['userType'] == 'user') {
        $smarty->display('loggedMenu.tpl');
    }
} else {
    $smarty->display('menu.tpl');
}
?>
<div id="forumContainer">
    <?php
    echo 'Under construction';
    ?>
</div>