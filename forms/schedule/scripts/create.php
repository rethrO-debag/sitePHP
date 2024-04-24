<?php

require_once '../../../config/connect.php';

$number_class = $_POST['number_class'];
$letter_class = $_POST['letter_class'];
$number_of_students = $_POST['number_of_students'];

$query = pg_query($connect, "INSERT INTO class (number_class, letter_class, number_of_students) VALUES ($number_class, '$letter_class', $number_of_students)");
if ($query) {
    echo "Данные из POST-запроса успешно внесены в журнал\n";
} else {
    echo "Пользователь прислал неверные данные\n";
    echo $query;
}
header('Location: /forms/class/main_class.php');
