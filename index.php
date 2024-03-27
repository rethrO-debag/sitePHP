<!DOCTYPE HTML>

<?php
print "<html>";
print "<head>";
print '<meta http-equiv="Content-Type" content="text/html; charset=utf-8">';
print "<title>";
print "Работа с формами!";
print "</title>";
print "</head>";
print "<body>";
print "<h1>Примеры использования формы</h1>";
print "<form method='get' action='form1.php'>";
print "<h2>Передача параметров в командной строке</h2>";
print "<input type='text' name='name' size = '12' maxlength='10'> ";
print "<input type='password' name='password' size = '12' maxlength='10'> ";
print "<input name='btn' type='submit' value='Ввод' title='Для ввода имени и пароля нажми кнопку'>";
print "</form>";

print "<form method='post' action='form2.php'>";
print "<h2>Передача параметров в запросе</h2>";
print "<input type='text' name='name' size = '30' > <br>";
print "<textarea name='area' cols='22' rows='10' ></textarea> <br>";
print "<input name='btn' type='submit' value='Ввод' title='Отправить'>";
print "</form>";
print "</body>";
print "</html>";

?>
