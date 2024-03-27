<!DOCTYPE HTML>

<?php
print "<html>";
print "<head>";
print '<meta http-equiv="Content-Type" content="text/html; charset=utf-8">';
print "<title>";
print "Получение параметров в командной строке";
print "</title>";
print "</head>";
print "<body>";
$n=trim($_GET['name']);
$p=trim($_GET['password']);
if($n!=''&&$p!=''){
print "Имя: ".$n."<br>";
print "Пароль: ".$p."<br>";

}else{
print "Не полные данные";
}
print "</body>";

print "</html>";

?>
