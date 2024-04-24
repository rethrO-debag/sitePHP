<?php
$connect = pg_connect("host=localhost dbname=school user=postgres password=1234");
if (!$connect) {
    echo "An error occured.<br>";
    exit;
}
