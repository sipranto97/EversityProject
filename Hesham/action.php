<?php

$con = mysqli_connect('localhost','root');

if($con){
    echo "Connection Successful WOW!";
}
else{
    echo "Connection Failed!";
}

mysqli_select_db($con, 'cse3100eversity');
$CourseTitle        = $_POST['CourseTitle'];
$CourseCategory     = $_POST['CourseCategory'];
$CourseLearn        = $_POST['CourseLearn'];
$Description        = $_POST['Description'];
$TargetStudent      = $_POST['TargetStudent'];
$Prereq             = $_POST['Prereq'];

$query = " INSERT INTO course_information (CourseTitle , CourseCategory, CourseLearn, Descriptions, TargetStudent, Prereq)
           VALUES (
           '$CourseTitle',
           '$CourseCategory',
           '$CourseLearn',
           '$Description',
           '$TargetStudent',
           '$Prereq')";

mysqli_query($con,$query);

echo "<br>$query";

header('location: courselanding.php');

?>