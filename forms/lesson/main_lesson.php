<?php
require_once '../../config/connect.php';
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style.css">
    <title>Уроки</title>
</head>

<body>
    <a href="../../index.php">Главное меню</a>
    <table>
        <tr>
            <th>№</th>
            <th>Предмет</th>
        </tr>


        <?php
        $query = pg_query($connect, "select * from lesson");
        if (!$query) {
            die("Ошибка выполнения запроса");
        }

        while ($row = pg_fetch_assoc($query)) {
            echo "
                <tr>
                    <td>$row[lesson_id]</td>
                    <td>$row[lesson_name]</td>
                    <td><a href='form_changing.php?id= $row[lesson_id]'>Update</a></td>
                    <td><a href='scripts/delete.php?id= $row[lesson_id]'>Delete</a></td>
                </tr>";
        }
        ?>
    </table>
    <a href="form_adding.php">Добавить</a>
</body>

</html>