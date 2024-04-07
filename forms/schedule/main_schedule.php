<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Расписание</title>
</head>

<body>
    <?php
    $connection_data = "host=localhost port=5432 dbname=school user=postgres password=1234";

    $db_connect = pg_connect($connection_data);

    if (!$db_connect) {
        echo "An error occured.<br>";
        exit;
    }
    ?>

    <table>
        <thead>
            <tr>
                <th>Номер класса</th>
                <th>Буква класса</th>
                <th>Предмет</th>
            </tr>


            <?php
            $query = pg_query($db_connect, "select * from schedule inner join class on class.class_id = schedule.class_id inner join lesson on lesson.lesson_id = schedule.lesson_id");
            if (!$query) {
                die("Ошибка выполнения запроса");
            }

            while ($row = pg_fetch_assoc($query)) {
                echo "
                <tr>
                    <td>$row[number_class]</td>
                    <td>$row[letter_class]</td>
                    <td>$row[lesson_name]</td>
                </tr>";
            }
            ?>
        </thead>
    </table>
</body>

</html>