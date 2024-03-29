<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная</title>
</head>

<body>
    <?php
        $connection = pg_connect("host=localhost dbname=school user=postgres password=1234");
        if (!$connection){
            echo "An error occured.<br>";
            exit;
        }
        $result = pg_query($connection, "Select * from students");
        if (!$result){
            echo "An error occured.<br>";
            exit;
        }
    ?>

<table>
        <tr>
            <td>student_id</td>
            <td>name</td>
            <td>first_name</td>
            <td>second_name</td>
            <td>date_of_birth</td>
            <td>class_id</td>
        </tr>

        <?php
            while($row = pg_fetch_assoc($result)){
                echo "
                <tr>
                    <td>$row[student_id]</td>
                    <td>$row[name]</td>
                    <td>$row[first_name]</td>
                    <td>$row[second_name]</td>
                    <td>$row[date_of_birth]</td>
                    <td>$row[class_id]</td>
                </tr>
                ";
            }
        ?>
    </table>
</body>

</html>