<?php

require_once '../../../config/connect.php';

$id = $_GET['id'];

pg_query($connect, "DELETE FROM class WHERE class_id = $id");

header('Location: /forms/class/main_class.php');
