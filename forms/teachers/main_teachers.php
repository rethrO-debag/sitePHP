<?php
require_once '../../config/connect.php';
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style.css">
    <title>Учителя</title>
</head>

<body>
    <a href="../../index.php">Главное меню</a>
    <table>
        <tr>
            <th>№</th>
            <th>Фамилия</th>
            <th>Имя</th>
            <th>Отчество</th>
            <th>Дата рождения</th>
            <th>Преподает</th>
        </tr>


        <?php
        $query = pg_query($connect, "select * from teachers inner join lesson on lesson.lesson_id = teachers.lesson_id");

        if (!$query) {
            die("Ошибка выполнения запроса");
        }

        while ($row = pg_fetch_assoc($query)) {
            echo "
                <tr>
                    <td>$row[teachers_id]</td>
                    <td>$row[second_name]</td>
                    <td>$row[name]</td>
                    <td>$row[first_name]</td>
                    <td>$row[date_of_birth]</td>
                    <td>$row[lesson_name]</td>
                    <td><a href='../../vendor/form_changing.php?id= $row[teachers_id]'>Update</a></td>
                    <td><a href='../../vendor/delete.php?id= $row[teachers_id]'>Delete</a></td>
                </tr>";
        }
        ?>
    </table>
    <a href="form_adding.php">Добавить</a>
</body>

</html>