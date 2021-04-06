<?php

session_start();

$con = mysqli_connect('localhost','root');

mysqli_select_db($con, 'eversity');

$CourseID = $CourseName = $CourseTitle = $CourseContent = $CourseRequirements = $CourseReview = "";

$CourseLearn = $Prereq = $TargetStudent = $Description = "";

$CourseCategory = "Choose a category";

$CourseLevel = "Choose a level";

$CourseLanguage = "Choose a language";

$CourseSubdesc = "";

$fileDestination = $filetype = $tempName = $fileSize = "";

$Coursefee = "Choose your course fee";

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}


if(isset($_POST['proceed'])){

    $status = 0;

    if (empty($_POST["CourseName"])) {
        $CourseNameError = "Course Name is a required field!";
        $status=1;
    } else {

        $CourseName = test_input($_POST["CourseName"]);
        $CourseID = $CourseName.rand();
    }

    if (empty($_POST["CourseTitle"])) {
        $CourseTitleError = "Course Title is a required field!";
        $status=1;
    } else {
        $CourseTitle = test_input($_POST["CourseTitle"]);
    }

    if($status == 0){
        echo 'hello';
        $query = " INSERT INTO `course_details`(`CourseID`          , `CourseTitle`     , `CourseDesc`  ,                                             
                                                `CourseLanguage`    , `CourseCategory`  , `CourseLevel` ,
                                                `InstructorID`      , `CourseFee`       , `CourseRating`, 
                                                `CourseImage`      , `CourseSubdesc`   , `CourseRequirements`, 
                                                `CourseReview`      , `Prereq`          , `TargetStudents`    ,
                                                `LearningTopic`) 

        VALUES ('$CourseID' , '$CourseTitle', '', '',  '',  '', '', '' , '',  '',  '',  '',  '',  '',  '',  '')";

        if(mysqli_query($con,$query)){

            $success = "Succeeded!"; 
            
            $_SESSION['CourseID'] = $CourseID;

            $_SESSION['CourseTitle'] = $CourseTitle;

            header('location: courselanding.php');
            
        }
        else{
            $failed = "Fill again!";
            echo $CourseID;
            echo $CourseTitle;
        }
    }
}









if (isset($_POST['save'])) {


    $status=0;

    if (empty($_POST["CourseLearn"])) {
        $CourseLearnError = "This is a required field!";
        $status=1;
    } else {
        $CourseLearn = test_input($_POST["CourseLearn"]);
    }


    if (empty($_POST["Prereq"])) {
        $PrereqError = "This is a required field!";
        $status=1;
    } else {
        $Prereq = test_input($_POST["Prereq"]);
    }

        
    if (empty($_POST["TargetStudent"])) {
        $TargetStudentError = "This is a required field!";
        $status=1;
    } else {
        $TargetStudent = test_input($_POST["TargetStudent"]);
    }

    
    if (empty($_POST["CourseTitle"])) {
        $CourseTitleError = "This is a required field!";
        $status=1;
    } else {
        $CourseTitle = test_input($_POST["CourseTitle"]);
    }
    
    
    if (empty($_POST["CourseCategory"]) ||  $_POST["CourseCategory"] == "Choose a category") {
        $CourseCategoryError = "This is a required field!";
        $status=1;
    } else {
        $CourseCategory = test_input($_POST["CourseCategory"]);
    }


    if (empty($_POST["CourseLevel"]) || $_POST["CourseLevel"] == "Choose a level") {
        $CourseLevelError = "This is a required field!";
        $status=1;
    } else {
        $CourseLevel = test_input($_POST["CourseLevel"]);
    }


    if (empty($_POST["CourseLanguage"])  || $_POST["CourseLanguage"] == "Choose a language") {
        $CourseLanguageError = "This is a required field!";
        $status=1;
    } else {
        $CourseLanguage = test_input($_POST["CourseLanguage"]);
    }


    if (empty($_POST["Description"])) {
        $DescriptionError = "This is a required field!";
        $status=1;
    } else {
        $Description = test_input($_POST["Description"]);
    }


    if (empty($_POST["Coursefee"]) || $_POST["Coursefee"] =="Choose your course fee") {
        $CoursefeeError = "This is a required field!";
        $status=1;
    } else {
        $Coursefee = test_input($_POST["Coursefee"]);
    }

    
    if($status==0){

        $name = $_FILES['fileimage'];
        //echo "<pre>";
        //print_r($name);

        $fileName = $_FILES['fileimage']['name'];
        $filetype = $_FILES['fileimage']['type'];
        $tempName = $_FILES['fileimage']['tmp_name'];
        $fileSize = $_FILES['fileimage']['size'];

        $fileDestination = "saqlain/Flie Upload PHP-MyAdmin/".$fileName;

        if(isset($_SESSION['CourseID'])){
            $CourseID = $_SESSION['CourseID'];
        }

        if(move_uploaded_file($tempName,$fileDestination)){

            $query1 =  " UPDATE `course_details` SET `CourseTitle`='$CourseTitle',`CourseDesc`='$Description',

                `CourseLanguage`='$CourseLanguage',`CourseCategory`='$CourseCategory',`CourseLevel`='$CourseLevel',

                `InstructorID`='7',`CourseFee`='$Coursefee',`CourseRating`='0',`CourseImage`='$fileDestination',

                `Prereq`='$Prereq',`TargetStudents`='$TargetStudent',`LearningTopic`='$CourseLearn' 
                
                WHERE `CourseID`='$CourseID';" ;
                
            if(mysqli_query($con,$query1)){
                $success = "Upload Successful!";
            }
            else{
                $failed = "Upload Failed!"; 
            }
        }else{
            $message = "Please select a video to upload!";
        }
        

        //mysqli_query($con,$query);
    }
}


$ContentName = "";
$ContentID = "";

if(isset($_POST['savecourse'])){

    $status = 0;

    if( empty($_POST['ContentName']) ){
        $messageforname = "Please fillup the Content Name!";
        $status=1;
    }

    $name = $_FILES['file'];
    //echo "<pre>";
    //print_r($name);

    $ContentName = $_POST['ContentName'];

    $fileName = $_FILES['file']['name'];
    $filetype = $_FILES['file']['type'];
    $tempName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];

    $fileDestination = "saqlain/Flie Upload PHP-MyAdmin/".$fileName;

    if(isset($_SESSION['CourseID'])){
        $CourseID = $_SESSION['CourseID'];
        $ContentID  = $CourseID."@Content";
    }

    if(move_uploaded_file($tempName,$fileDestination) && $status==0){

        $queryCheck = "SELECT * FROM `course_content` WHERE `ContentID` = '$ContentID'";

        $result  = $con->query($queryCheck);

        if($result){

            $data = mysqli_fetch_assoc($result);

            if(!empty($data['CourseID'])){
                $match = $data['CourseID'];
            }
            //echo $match."<br>";

            if($match == $CourseID){
                $status = 3;
                //echo "YEs! ".$ContentID." and ".$CourseID;
            }
        }else{
            //echo "NO! ".$ContentID." and ".$CourseID;
        }

        if($status == 3){

            $messagefordup = "Aleady uploaded course content!";
            //echo "Failed already";

        }else{

            $query1 = "INSERT INTO `course_content`(`ContentID` , `CourseID`, `ContentName`, `ContentResource`) VALUES ( '$ContentID','$CourseID','$ContentName','$fileDestination')";

            if(mysqli_query($con,$query1)){
                $success = "Upload Successful!";
                
            }
            else{
                //echo "Failed";
                $failed = "Upload Failed!";
            }
        }
    }else{
        $messageforvideo = "Please select a video to upload!";
    }

}







?>