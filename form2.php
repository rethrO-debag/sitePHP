<!DOCTYPE HTML>

<?php
print "<html>";
print "<head>";
print '<meta http-equiv="Content-Type" content="text/html; charset=utf-8">';
print "<title>";
print "Получение параметров в запросе";
print "</title>";
print "</head>";
print "<body>";
$z=trim($_REQUEST['name']);
$t=trim($_REQUEST['area']);
print 'Заголовок:<br>';
print $z.'<br>';
print 'Текст:<br>';
print $t.'<br>';

print "</body>";

print "</html>";

?>
