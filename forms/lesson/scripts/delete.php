<?php

require_once '../../../config/connect.php';

$id = $_GET['id'];

pg_query($connect, "DELETE FROM lesson WHERE lesson_id = $id");

header('Location: /forms/lesson/main_lesson.php');
