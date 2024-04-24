<?php

require_once '../../../config/connect.php';

$class_id = $_POST['class_id'];
$number_class = $_POST['number_class'];
$letter_class = $_POST['letter_class'];
$number_of_students = $_POST['number_of_students'];

pg_query($connect, "UPDATE class SET number_class = $number_class, letter_class = '$letter_class', number_of_students = $number_of_students WHERE class_id = $class_id");

header('Location: /forms/class/main_class.php');
