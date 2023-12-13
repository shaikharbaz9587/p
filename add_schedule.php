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
    <link rel="stylesheet" href="styles.css">
    <title>College Schedule</title>
</head>
<body>

    <div class="container">
        <h1>College Schedule</h1>

        <?php
        include 'conn.php';

        // Display the schedule
        $sql = "SELECT schedule.id, courses.name AS course_name, instructors.name AS instructor_name, day_of_week, start_time, end_time
                FROM schedule
                JOIN courses ON schedule.course_id = courses.id
                JOIN instructors ON courses.instructor_id = instructors.id";
        $result = $con->query($sql);

        if ($result->num_rows > 0) {
            echo "<table class='schedule-table'>";
            echo "<tr><th>Course</th><th>Instructor</th><th>Day</th><th>Start Time</th><th>End Time</th></tr>";
            while ($row = $result->fetch_assoc()) {
                echo "<tr><td>{$row['course_name']}</td><td>{$row['instructor_name']}</td><td>{$row['day_of_week']}</td><td>{$row['start_time']}</td><td>{$row['end_time']}</td></tr>";
            }
            echo "</table>";
        } else {
            // echo "No schedule available.";
        }

        $con->close();
        ?>

        <!-- Add Schedule Form -->
        <div class="add-schedule-form-container">
            <h2>Add Schedule</h2>
            <form action="add_schedule.php" method="post" class="add-schedule-form">
                <label for="course">Course:</label>
                <select name="course_id" id="course">
                    <!-- Populate with available courses from your database -->
                    <option value="1">C</option>
                    <option value="2">PHP</option>
                    <option value="2">RDBMS</option>
                    <option value="2">JAVA</option>
                    <option value="2">PYTHON</option>
                    <!-- Add more options as needed -->
                </select><br>

                <label for="Division">Division:</label>
                <select name="Division" id="Division">
                    <option value="1">A</option>
                    <option value="2">B</option>
                    <option value="2">C</option>
                    <option value="2">D</option>
                    <option value="2">E</option>
                    <option value="2">F</option>
                    </select> <br>

                <label for="day">Day of Week:</label>
                <input type="text" name="day_of_week" id="day"><br>

                <label for="start_time">Start Time:</label>
                <input type="text" name="start_time" id="start_time"><br>

                <label for="end_time">End Time:</label>
                <input type="text" name="end_time" id="end_time"><br>

                <
                <input type="submit" value="Add Schedule">
            </form>
        </div>
    </div>

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

.schedule-table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

.schedule-table, th, td {
    border: 1px solid #ddd;
}

th, td {
    padding: 12px;
    text-align: left;
}

th {
    background-color: #f2f2f2;
}

.add-schedule-form-container {
    margin-top: 20px;
}

.add-schedule-form {
    max-width: 400px;
    margin: 0 auto;
}

.add-schedule-form label {
    display: block;
    margin-bottom: 5px;
}

.add-schedule-form select,
.add-schedule-form input {
    width: 100%;
    padding: 8px;
    margin-bottom: 10px;
    box-sizing: border-box;
}

.add-schedule-form input[type="submit"] {
    background-color: #4caf50;
    color: #fff;
    cursor: pointer;
}

.add-schedule-form input[type="submit"]:hover {
    background-color: #45a049;
}


</style>