<!DOCTYPE html>
<html>
    <head>
        <title>Test</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <script type="text/javascript">
        function codeAddress() {
            alert('ok');
        }

        </script>
    </head>
    <body onload="codeAddress();">

    </body>
</html>


<?php

include './header.php';
echo 'DISK_FREE_SPACE';
echo disk_free_space('D:')/1000000 ;


echo 'STAT';
var_dump( stat('./results.php'));


$queue = array("orange", "banana");
echo array_unshift($queue, "apple", "raspberry");
print_r($queue);

echo '\nHOST INFO  ';
echo mysqli_get_host_info($link);
$query='select* from competitors';


$result=  $link->query($query);
echo 'INSERT';
var_dump( mysqli_insert_id($link));
// $link = db_connect('localhost', 'root', 'den1', 'timing');
$query.='katerica';

var_dump($query);



