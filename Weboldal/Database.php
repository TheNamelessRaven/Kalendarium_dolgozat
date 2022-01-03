<?php

$conn = new mysqli('localhost','root','','kalendarium');
if($conn->errno > 0){
    die('Az adatbázis nem elérhető!');
} 
else
{
$conn->set_charset("utf8");
}
?>
