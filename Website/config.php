
<?php
$servername = "fdb31.biz.nf";
$username = "3898493_energymeter";
$password = "Gh5f4cgF43yKO/3}";
$dbname = "3898493_energymeter";


$conn = mysqli_connect($servername, $username, $password, $dbname);
 

if($conn === false){
    die("ERROR E01: Database Connection Broken !" . mysqli_connect_error());
}
?>