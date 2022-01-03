<?php
$menu="kalendarium";
echo "<title>Kalendarium</title>";
require_once "Database.php";
?>
<div>
<h1>Kalendar</h1><br>
<?php

?>
<table class="center">
  <tr>
    <?php
    for ($i = 1; $i <= 7; $i++) {
      echo "<td><button name='btn'>$i <img class='scale'src='present.jpg'</button></td>";
      if(isset($_POST['btn'])){
        echo "<td><button name='btn$i'><img class='scale'src='presents.jpg'</button></td>";
      }
}
?>
  </tr>
  <tr>
  <?php
    for ($i = 8; $i <= 14; $i++) {
      echo "<td><button name='btn$i'>$i <img class='scale'src='present.jpg'</button></td>";
}
?>
    

  </tr> 
  <tr>
  <?php
    for ($i = 15; $i <= 21; $i++) {
      echo "<td><button name='btn$i'>$i <img class='scale'src='present.jpg'</button></td>";
}
    ?>
  </tr> 
  <tr>
  <?php
    for ($i = 22; $i <= 24; $i++) {
      echo "<td><button name='btn$i'>$i <img class='scale'src='present.jpg'</button></td>";
}
    ?>
  </tr> 
</table>
</div>