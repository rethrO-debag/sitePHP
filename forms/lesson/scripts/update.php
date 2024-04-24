<?php

require_once '../../../config/connect.php';

$lesson_id = $_POST['lesson_id'];
$lesson_name = $_POST['lesson_name'];

pg_query($connect, "UPDATE lesson SET lesson_name = '$lesson_name' WHERE lesson_id = $lesson_id");

header('Location: /forms/lesson/main_lesson.php');
