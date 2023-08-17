<?php
session_start();
require_once "config.php";
?>
<?php


if((null !==$_POST["id"])&&(null !==$_POST["pwd"]))
	

//if (!isset($_SESSION["email"]) && $now > $_SESSION['expire']) 
	



{	
$id=$_POST["id"];
$pwd=$_POST["pwd"];
	$email = trim($_POST['id']);
	$password = trim($_POST['pwd']);

	$sql = "select * from users where email = '".$email."'";
	$rs = mysqli_query($conn,$sql);
	$numRows = mysqli_num_rows($rs);

	if($numRows  == 1){
		$row = mysqli_fetch_assoc($rs);
		//$usertype=$row['type'];
                if($password==$row['password']){
            
            $_SESSION["username"] = $email;
            $_SESSION["email"] = $email;
             $_SESSION['expire'] = time() + (30 * 60);
            //$_SESSION["expire"] = $_SESSION["start"] + (720 * 60);  // 12 hour session window

echo '<script>window.location.replace("checkusage.php")</script>';
}
else
{
       
    echo '<script>alert("Wrong Password")</script>';
		
	}
	}
}
	
	

?>