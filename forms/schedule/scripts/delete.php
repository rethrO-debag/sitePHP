<?php

require_once '../../../config/connect.php';

$id = $_GET['id'];

pg_query($connect, "DELETE FROM schedule WHERE schedule_id = $id");

header('Location: /forms/schedule/main_schedule.php');
