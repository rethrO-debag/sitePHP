<?php
require_once '../../config/connect.php';
?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style.css">
    <title>Классы</title>
</head>

<body>
    <a href="../../index.php">Главное меню</a>
    <?php
    $result = pg_query($connect, "select * from class");
    if (!$result) {
        echo "An error occured.<br>";
        exit;
    }
    ?>

    <table class="table">
        <tr>
            <th>№</th>
            <td>Номер класса</td>
            <td>Буква класса</td>
            <td>Количество учащихся</td>
        </tr>

        <?php
        while ($row = pg_fetch_assoc($result)) {
            echo "
                <tr>
                    <td>$row[class_id]</td>
                    <td>$row[number_class]</td>
                    <td>$row[letter_class]</td>
                    <td>$row[number_of_students]</td>
                    <td><a href='form_changing.php?id= $row[class_id]'>Update</a></td>
                    <td><a href='scripts/delete.php?id= $row[class_id]'>Delete</a></td>
                </tr>
                ";
        }
        ?>
    </table>
    <a href="form_adding.php">Добавить</a>
</body>

</html>