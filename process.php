<?php
include 'db.php';
session_start();
if(isset($_GET['user'])){
    header('location:myLearnings.php');
}


if(isset($_GET['courseId'])){
    if(isset($_SESSION['usermail'])){
        $cid= $_GET['courseId'];
        $mail =$_SESSION['usermail'];
        $_SESSION['enrolled'] = $_GET['courseId'];
        echo $_SESSION['usermail'];
        $query = "insert into course_status (Email,CourseID) 
        values ('$mail','$cid') ";
        mysqli_query($connection,$query);
        header("location: myLearnings.php");
    }else{
        session_destroy();
        header("location: Registration.php");

    }
}

?>