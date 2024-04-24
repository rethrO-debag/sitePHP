<?php
require_once '../../config/connect.php';
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style.css">
    <title>Расписание</title>
</head>

<body>
    <a href="../../index.php">Главное меню</a>
    <table>
        <tr>
            <th>№</th>
            <th>Номер класса</th>
            <th>Буква класса</th>
            <th>Предмет</th>
        </tr>


        <?php
        $query = pg_query($connect, "select * from schedule inner join class on class.class_id = schedule.class_id inner join lesson on lesson.lesson_id = schedule.lesson_id");
        if (!$query) {
            die("Ошибка выполнения запроса");
        }

        while ($row = pg_fetch_assoc($query)) {
            echo "
                <tr>
                    <td>$row[schedule_id]</td>
                    <td>$row[number_class]</td>
                    <td>$row[letter_class]</td>
                    <td>$row[lesson_name]</td>
                    <td><a href='../../vendor/form_changing.php?id= $row[schedule_id]'>Update</a></td>
                    <td><a href='../../vendor/delete.php?id= $row[schedule_id]'>Delete</a></td>
                </tr>";
        }
        ?>
    </table>
    <a href="form_adding.php">Добавить</a>
</body>

</html>