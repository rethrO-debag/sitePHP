<?php

require_once '../../../config/connect.php';

$lesson_name = $_POST['lesson_name'];

$query = pg_query($connect, "INSERT INTO lesson (lesson_name) VALUES ('$lesson_name')");
if ($query) {
    echo "Данные из POST-запроса успешно внесены в журнал\n";
} else {
    echo "Пользователь прислал неверные данные\n";
    echo $query;
}
header('Location: /forms/lesson/main_lesson.php');
