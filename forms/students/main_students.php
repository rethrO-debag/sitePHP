<?php
require_once '../../config/connect.php';
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style.css">
    <title>Студенты</title>
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
            <th>Номер класса</th>
            <th>Буква класса</th>
        </tr>


        <?php
        $query = pg_query($connect, "select * from students inner join class on class.class_id = students.class_id");
        if (!$query) {
            die("Ошибка выполнения запроса");
        }

        while ($row = pg_fetch_assoc($query)) {
            echo "
                <tr>
                    <td>$row[students_id]</td>
                    <td>$row[second_name]</td>
                    <td>$row[name]</td>
                    <td>$row[first_name]</td>
                    <td>$row[date_of_birth]</td>
                    <td>$row[number_class]</td>
                    <td>$row[letter_class]</td>
                    <td><a href='../../vendor/form_changing.php?id= $row[students_id]'>Update</a></td>
                    <td><a href='../../vendor/delete.php?id= $row[students_id]'>Delete</a></td>
                </tr>";
        }
        ?>
    </table>
    <a href="form_adding.php">Добавить</a>
</body>

</html>