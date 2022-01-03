<?php
$menu="tetelek";
echo "<title>Tételek</title>";
require_once "Database.php";
?>

<div>
<FORM action="" method="POST" enctype="multipart/form-data">
<input type="number" name="number" placeholder="nap" max="24" min="1">
<input type="file" name="image" id="image">
<input type="submit" name="send" value="Küldés">
</form>
</div>
<?php
$send=$_POST['send'];
$target_dir = "C:/xampp/htdocs/Mandly_Manuel_AdventiKalendarium/Weboldal/img";
$target_file = $target_dir . basename($_FILES["image"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
if(isset($send)){
    $number=$_POST['number'];
    $file=$_POST['image'];
    $insert="INSERT INTO napok (ID,Tartalom) 
    VALUES ('$number','$file') ";
    if ($conn->query($insert) === TRUE) {
        echo "New record created successfully";
      } else {
        echo "Error: " . $insert . "<br>" . $conn->error;
      }     
    
$conn->close();
    }
?>
