<?php
require_once "validate.php";
require_once "config.php";
?>



<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Smart Energy Meter </title>
    <link rel="stylesheet" href="stylis.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
        <link rel="shortcut icon" href="1.png">
    
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="sidebar">
    <div class="logo-details">
      <i href="demo_icon.gif" ><img src="2037265.png" alt="" width="50" height=auto></i>
      <span class="logo_name">Smart <br>Energy Meter</span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="#" class="active">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Dashboard</span>
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
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Voltage</div>
            <div class="number">
                       
            <?php
            
            


$sql = "SELECT Voltage FROM `updatedconsumption` WHERE Timestamp=(select max(Timestamp) from updatedconsumption)";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "Usage: <br>" . $row["Voltage"]." V";
  }
} else {
  echo "0 results";
}


  
  
            ?>
            
            </div>
            <div class="indicator">
              <i class='bx bx-up-arrow-alt'></i>
              <span class="text">Updated now</span>
            </div>
          </div>
          <i class='bx bx-bar-chart' style='font-size:50px'></i>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Current Draw</div>
            <div class="number">
            
            <?php
            
            
            

$sql = "SELECT Current FROM `updatedconsumption` WHERE Timestamp=(select max(Timestamp) from updatedconsumption)";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "Usage:     <br>" . $row["Current"]." A";
  }
} else {
  echo "0 results";
}
  
  
            ?>
            
            
            </div>
            <div class="indicator">
              <i class='bx bx-up-arrow-alt'></i>
              <span class="text">Updated Now</span>
            </div>
          </div>
          <i class='bx bxs-pie-chart-alt-2' style='font-size:50px'></i>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Power Draw</div>
            <div class="number">
            
            <?php
            
            


$sql = "SELECT Power FROM `updatedconsumption` WHERE Timestamp=(select max(Timestamp) from updatedconsumption)";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "Usage: <br>" . $row["Power"]." W";
  }
} else {
  echo "0 results";
}


  
  
            ?>
            </div>
            <div class="indicator">
              <i class='bx bx-up-arrow-alt'></i>
              <span class="text">Updated Now</span>
            </div>
          </div>
          <i class='bx bx-bolt-circle' style='font-size:50px'></i>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Frequency</div>
            <div class="number">
            <?php
            
            
   

$sql = "SELECT Frequency FROM `updatedconsumption` WHERE Timestamp=(select max(Timestamp) from updatedconsumption)";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "Usage: <br>" . $row["Frequency"]." Hz";
  }
} else {
  echo "0 results";
}


  
  
            ?>
            </div>
            <div class="indicator">
              <i class='bx bx-down-arrow-alt down'></i>
              <span class="text">Updated Now</span>
            </div>
          </div>
          <i class='bx bx-chart' style='font-size:50px'></i>
        </div>
      </div>

      <div class="sales-boxes">
        <div class="recent-sales box">
          <div class="title">Power Consumed for this month</div>
          <div id="video_pane" class="video-image">
          <div style="text-align: center;" class="number cent">

<?php

$month = idate("m");
$year = idate("Y");
$sql = "select checkusage($year,$month)";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
  $format_number1 = number_format($row["checkusage($year,$month)"], 2);
    echo "Usage: " . $format_number1." kWH";
  }
} else {
  echo "0 results";
}

mysqli_close($conn);
  
  
  

?>
</div>
         
        </div>

    </div>
  </section>

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
