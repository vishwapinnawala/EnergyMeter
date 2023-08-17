<?php
require_once "validate.php";
require_once "config.php";
?>

<?php

$year = idate("Y");
$jan=0;
$sql = "select checkusage($year,1)";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
  if($row["checkusage($year,1)"]==!0){
  $format_number1 = number_format($row["checkusage($year,1)"], 2);
    $jan=$format_number1;}
  }
}

$feb=0;
$sql = "select checkusage($year,2)";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
  if($row["checkusage($year,2)"]==!0){
  $format_number1 = number_format($row["checkusage($year,2)"], 2);
    $feb=$format_number1;}
  }
}

$mar=0;
$sql = "select checkusage($year,3)";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
  if($row["checkusage($year,3)"]==!0){
  $format_number1 = number_format($row["checkusage($year,3)"], 2);
    $mar=$format_number1;}
  }
}

$apr=0;
$sql = "select checkusage($year,4)";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
  if($row["checkusage($year,4)"]==!0){
  $format_number1 = number_format($row["checkusage($year,4)"], 2);
    $apr=$format_number1;}
  }
}

$may=0;
$sql = "select checkusage($year,5)";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
  if($row["checkusage($year,5)"]==!0){
  $format_number1 = number_format($row["checkusage($year,5)"], 2);
    $may=$format_number1;}
  }
}

$jun=0;
$sql = "select checkusage($year,6)";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
  if($row["checkusage($year,6)"]==!0){
  $format_number1 = number_format($row["checkusage($year,6)"], 2);
    $jun=$format_number1;}
  }
}


$sql = "select checkusage($year,7)";
$result = mysqli_query($conn, $sql);
$jul=0;
if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
  if($row["checkusage($year,7)"]==!0){
  $format_number1 = number_format($row["checkusage($year,7)"], 2);
    $jul=$format_number1;}
  }
}

$aug=0;
$sql = "select checkusage($year,8)";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
  if($row["checkusage($year,8)"]==!0){
  $format_number1 = number_format($row["checkusage($year,8)"], 2);
    $aug=$format_number1;}
  }
}

$sep=0;
$sql = "select checkusage($year,9)";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
  if($row["checkusage($year,9)"]==!0){
  $format_number1 = number_format($row["checkusage($year,9)"], 2);
    $sep=$format_number1;}
  }
}

$oct=0;
$sql = "select checkusage($year,10)";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
  if($row["checkusage($year,10)"]==!0){
  $format_number1 = number_format($row["checkusage($year,10)"], 2);
    $oct=$format_number1;}
  }
}

$nov=0;
$sql = "select checkusage($year,11)";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
  if($row["checkusage($year,11)"]==!0){
  $format_number1 = number_format($row["checkusage($year,11)"], 2);
    $nov=$format_number1;}
  }
}

$dec=0;
$sql = "select checkusage($year,12)";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
  if($row["checkusage($year,12)"]==!0){
  $format_number1 = number_format($row["checkusage($year,12)"], 2);
    $dec=$format_number1;}
  }
}






?>
<script>
<?php


echo "const chartdata =['$jan','$feb','$mar','$apr','$may','$jun','$jul','$aug','$sep','$oct','$nov','$dec'];";
?>
</script>






<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    
    <link rel="stylesheet" href="Styles/chart2.css">
    <title> Smart Energy Meter </title>
    <link rel="stylesheet" href="Styles/stylis.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
        <link rel="shortcut icon" href="Images/2037265.png">
    
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="sidebar">
    <div class="logo-details">
      <i href="demo_icon.gif" ><img src="Images/2037265.png" alt="" width="50" height=auto></i>
      <span class="logo_name">Smart <br>Energy Meter</span>
    </div>
      <ul class="nav-links">
         <li>
          <a href="checkusage.php" class="">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="Page2.php" class="active">
            
            <i class='bx bx-line-chart'></i>
            <span class="links_name">Records</span>
          </a>
        </li>
        
        
        <li class="log_out">
          <a href="logout.php">
            <i class='bx bx-log-out'></i>
            <span class="links_name">Log Out</span>
          </a>
        </li>
      </ul>
  </div>
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Dashboard</span>
      </div>
      
    </nav>

    <div class="home-content">
      <div class="overview-boxes">
              
        <div class="box" style="width:100%; height:80vh;" >
          <div class="right-side">
            <div class="box-topic">Yearly Usage</div>
            <div class="number"  >
           
           
      <div class="chart">
        <canvas id="myChart"></canvas>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.8.0/chart.min.js"
    integrity="sha512-sW/w8s4RWTdFFSduOTGtk4isV1+190E/GghVffMA9XczdJ2MDzSzLEubKAs5h0wzgSJOQTRYyaz73L3d6RtJSg=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer"></script>
    <script src="Styles/chart2.js"></script>     
           
        
            </div>
           
          </div>
          
        </div>
        
            

     
          
        








        
  

  <script>
   let sidebar = document.querySelector(".sidebar");
let sidebarBtn = document.querySelector(".sidebarBtn");
sidebarBtn.onclick = function() {
  sidebar.classList.toggle("active");
  if(sidebar.classList.contains("active")){
  sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
}else
  sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
}
 </script>

</body>
</html>
