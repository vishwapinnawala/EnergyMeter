
<?php


$voltage = $_POST['voltage'];
echo $voltage;


$current = $_POST['current'];
echo $current;



$power = $_POST['power'];
echo $power;


$energy = $_POST['energy'];
echo $energy;



$frequency=$_POST['frequency'];
echo $frequency;



$pf = $_POST['pf'];
echo $pf;


	$con =  mysqli_connect('fdb31.biz.nf','3898493_energymeter','Gh5f4cgF43yKO/3}','3898493_energymeter');

	if (!$con){
		echo 'Error occurred...';
		}else{
			

                       $query = "INSERT INTO consumption (Voltage, Current, Power, Energy, Frequency, PF)
                        VALUES ('$voltage', '$current', '$power', '$energy' , '$frequency','$pf')";

		if (mysqli_query($con,$query)){
                              
			echo 'Insertion Successfull';
			


			}else{
			echo "error";
		}
		}

		

?>
