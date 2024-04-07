<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Студенты</title>
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
                <th>Фамилия</th>
                <th>Имя</th>
                <th>Отчество</th>
                <th>Дата рождения</th>
                <th>Номер класса</th>
                <th>Буква класса</th>
            </tr>


            <?php
            $query = pg_query($db_connect, "select * from students inner join class cl on cl.class_id = students.class_id");
            if (!$query) {
                die("Ошибка выполнения запроса");
            }

            while ($row = pg_fetch_assoc($query)) {
                echo "
                <tr>
                    <td>$row[second_name]</td>
                    <td>$row[name]</td>
                    <td>$row[first_name]</td>
                    <td>$row[date_of_birth]</td>
                    <td>$row[number_class]</td>
                    <td>$row[letter_class]</td>
                </tr>";
            }
            ?>
        </thead>
    </table>
</body>

</html>