<?php
  session_start();
  if(!ISSET($_SESSION['fname'])){
     header('location:login.html');
     exit; // It's a good practice to exit after a redirect
  }
   ?>


<!DOCTYPE html>
<html lang="en">

<head>
   <!-- basic -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <!-- mobile metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="viewport" content="initial-scale=1, maximum-scale=1">
   <!-- site metas -->
   <title>Faculty-Dashboard</title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <!-- site icon -->
   <link rel="icon" href="images/logo/logo_small.png" type="image/png" />
   <!-- bootstrap css -->
   <link rel="stylesheet" href="css/bootstrap.min.css" />
   <!-- site css -->
   <link rel="stylesheet" href="style.css" />
   <!-- responsive css -->
   <link rel="stylesheet" href="css/responsive.css" />
   <!-- color css -->
   <link rel="stylesheet" href="css/colors.css" />
   <!-- select bootstrap -->
   <link rel="stylesheet" href="css/bootstrap-select.css" />
   <!-- scrollbar css -->
   <link rel="stylesheet" href="css/perfect-scrollbar.css" />
   <!-- custom css -->
   <link rel="stylesheet" href="css/custom.css" />
   <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
</head>

<body class="dashboard dashboard_1">
   <div class="full_container">
      <div class="inner_container">
         <!-- Sidebar  -->
         <?php
         require('f_sidebar.php');
         ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Timetable</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <div class="container">
        <h1>Timetable Generator</h1>
        <!-- <?php include 'generate_timetable.php'; ?> -->
    </div>

    <?php
$daysOfWeek = ['TIME', 'MCA_A', 'MCA_B','MCA_C','MCA_D','MCA_E','MCA_F'];
$timeSlots = ['8:00 AM - 9:00 AM', '9:00 AM - 10:00 AM', '10:00 AM - 11:00 AM', '11:00 AM - 12:00 PM', '<tr><th><center>BREAK</center></th></tr>' ,'1:00 PM - 2:00 PM', '2:00 PM - 3:00 PM', '3:00 PM - 4:00 PM', '4:00 PM - 5:00 PM'];

$courses = ['C', 'PHP', 'RDBMS', 'JAVA', 'PYTHON'];
$instructors = ['BHAVIN SIR', 'URJA MAM', 'NISHA MAM', 'JINAL MAM', 'PUNITA MAM'];

// Randomly assign courses to instructors
$assignments = [];
foreach ($courses as $course) {
    $assignments[$course] = $instructors[array_rand($instructors)];
}

// Generate timetable
echo "<table class='timetable'>";
echo "<tr><center>DATE</center></tr>";
//  echo "<tr><th>BREAK</th>";

foreach ($daysOfWeek as $day) {
    echo "<th>$day</th>";
   
}

echo "</tr>";


foreach ($timeSlots as $timeSlot) {
    echo "<tr><td>$timeSlot</td>";

   

    foreach ($daysOfWeek as $day) {
        $course = $courses[array_rand($courses)];
        $instructor = $assignments[$course];
        echo "<td>$course<br>($instructor)</td>";
    }
    
    echo "</tr>";
   
}

echo "</table>";
?>




</body>
</html>



<style>

body {
    font-family: 'Arial', sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
}

.container {
    width: 80%;
    margin: 20px auto;
    background-color: #fff;
    padding: 20px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h1 {
    color: #333;
}

.timetable {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

.timetable, th, td {
    border: 1px solid #ddd;
}

th, td {
    padding: 12px;
    text-align: left;
}

th {
    background-color: #f2f2f2;
}


</style>
