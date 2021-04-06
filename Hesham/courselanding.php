<!DOCTYPE html>
<html>

<head>
    <title></title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>


<body>

<?php

$CourseLearn        = "";
$Prereq             = "";
$TargetStudent      = "";

$CourseCurriculumfile;

$CourseTitle        = "";
$CourseCategory     = "";
$CourseLevel        = "";
$CourseLanguage     = "";

$Description        = "";
$SubDescription     = "";
$CourseImage        = "";

$Coursefee          = "";

?>
    
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">

            <a class="navbar-brand" href="/Eversity/index.php">

            <img src="/Eversity/Images/E1.png" alt="" width="100" height="40" class="d-inline-block align-top">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>

            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto mb-2 mb-lg-0">

                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/Eversity/index.php">Home</a>
                </li>
                
                <li class="nav-item">
                <a class="nav-link" href="#">About</a>
                </li>     
                <li class="nav-item">
                <a class="nav-link" href="#">Profile</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Logout</a>
                </li>     
            </div>
        </div>
    </nav>
    
    <div class="wrapper">
        <div class="sidebar">

            <h6>Create an Engaging Course</h6>
            <ul>
                <li><a href="/Eversity/Dashboard.php">Create Courses</a></li>
            </ul> 

            <h6>Performance</h6>
            <ul>  
                <li><a href="#">students</a></li>
                <li><a href="#">Reviews</a></li>
            </ul>

            <h6>Terms and Conditions</h6>
            <ul>
                <li><a href="/Eversity/works.php">How Eversity works</a></li>
                <li><a href="/Eversity/terms.php">Instructor Terms</a></li>
            </ul>   

        </div>

        <div class="main_content">

            <div class="container p-3 my-3 border">
                <h1 style="font-size:xx-large;">Manage your course</h1>
            </div> 

            <section class="my-5">

                <div class="container p-3 my-3 border">
        
                    <form action="" method="post">

                        <!---------------------------------------------------------------->

                        <h4 id="targetyourstudents">Target your students:</h4>

                        <div class="form-group"> 
                            <label>What will students learn in your course?</label>
                        <input type="text" name="CourseLearn" value="<?php echo  $CourseLearn; ?>" autocomplete="off" class="form-control" placeholder="Example: Node.Js Development">
                        </div>

                        <div class="form-group"> 
                            <label>Are there any course requirements or prerequisites?</label>
                        <input type="text" name="Prereq" value="<?php echo  $Prereq; ?>" autocomplete="off" class="form-control" placeholder="Example: Be able to write basic program/codes">
                        </div>

                        <div class="form-group"> 
                            <label>Who are your target students?</label>
                        <input type="text" name="TargetStudent" value="<?php echo  $TargetStudent; ?>" autocomplete="off" class="form-control" placeholder="Example: Beginer web-developers who wants to learn Node.Js">
                        </div>

                        <!---------------------------------------------------------------->

                        <div class="mb-3">
                            <h4></br>Upload your course curriculum:</h4>
                            <div class="custom-file" id="CourseContentUploadField">
                                <input type="file" class="custom-file-input" id="customFile" name="CourseCurriculumfile[]">
                                <label class="custom-file-label" for="customFile">Choose file</label>
                                <button type="button" class="btn btn-success" id="add" name="add">Add</button> 
                            </div>
                        </div>
                        </br>

                        <!---------------------------------------------------------------->
                        
                        <h4 id="fillupcoursedetails">Fill up your course details:</h4>
                        
                        <div class="form-group">  
                            <label for="sel1">Enter Course Title:</label>
                            <input type="text" name="CourseTitle" value="<?php echo  $CourseTitle; ?>" autocomplete="off" class="form-control" placeholder="Example: Learn Node.Js from scratch">
                        </div>


                        <div class="form-group">
                            <label for="sel1">Select Course Category:</label>
                            <select class="form-control" id="sel1" name="CourseCategory" value="<?php echo  $CourseCategory; ?>">
                                <option selected>Choose a category</option>
                                <option value="IT & Software">IT & Software</option>
                                <option value="Web Development">Web Development</option>
                                <option value="Digital Marketing">Digital Marketing</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="sel1">Select Course Level:</label>
                            <select class="form-control" id="sel1" name="CourseLevel" value="<?php echo  $CourseLevel; ?>">
                                <option selected>Choose a level</option>
                                <option value="Beginner Level">Beginner Level</option>
                                <option value="Intermediate Level">Intermediate Level</option>
                                <option value="Advanced Level">Advanced Level</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="sel1">Select Course Language:</label>
                            <select class="form-control" id="sel1" name="CourseLanguage" value="<?php echo  $CourseLanguage; ?>">
                                <option selected>Choose a language</option>
                                <option value="English">English</option>
                                <option value="Bangla">Bangla</option>
                                <option value="Arabic">Arabic</option>
                                <option value="Russian">Russian</option>
                                <option value="French">French</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Course Description</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Describe about your course in 50 words." name = "Description" value="<?php echo  $Description; ?>"></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Course Sub-Description</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Summarize your course description." name = "SubDescription" value="<?php echo  $SubDescription; ?>"></textarea>
                        </div>
                        
                        <div class="row">

                            <div class="col-lg-6 col-md-6 col-12">
                                <img src="/Eversity/Images/E5.png" class="rounded" class="img-fluid" style="height: 250px!important; width: 100%;" alt="Cinque Terre">
                            </div>

                            <div class="col-lg-6 col-md-6 col-12">

                                <h3>Upload your course image</h3>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="customFile" name="fileimage" value="<?php echo  $fileimage; ?>">
                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                </div>

                                <p></br>Photo should have the resolution within 1920*1080 and maximum size of 2 MB (2048 KB).</p>
                            
                            </div>
                            
                        </div> 

                        

                        <!---------------------------------------------------------------->
                         
                        <h4 id="fillupcoursedetails"></br>Select your pricing:</h4>
                        
                        <div class="form-group">  
                            <div class="form-group">
                            <select class="form-control" id="sel2" name="Coursefee" value="<?php echo  $Coursefee; ?>" type="number">
                                <option selected>Choose your course fee</option>
                                <option value="Free">Free</option>
                                <option value="19.99$">19.99$</option>
                                <option value="49.99$">49.99$</option>
                            </select>
                        </div>
                        
                        <!---------------------------------------------------------------->

                        <div>
                            <h4>Course Instructor: 
                                <?php
                                    echo "Saqlain!";
                                ?>
                            </h4>
                            </br>
                        </div>

                        <!---------------------------------------------------------------->

                        <button type="submit" class="btn btn-info" id="myBtn1" name="save">Submit for Review</button>

                        <div class="container pt-3">
                            
                            <div class="toast">
                                <div class="toast-header">
                                    Information Saved!
                                </div>
                            </div> 
                            
                        </div> 

                        <!---------------------------------------------------------------->

                        <?php 
                        
                            $con = mysqli_connect('localhost','root');

                            if($con){
                                echo "Connection Successful!";
                            }
                            else{
                                echo "Connection Failed!";
                            }

                            mysqli_select_db($con, 'cse3100eversity');

                                $CourseLearn            = $_POST['CourseLearn'];
                                $Prereq                 = $_POST['Prereq'];
                                $TargetStudent          = $_POST['TargetStudent'];

                                $CourseCurriculumfile;

                                $CourseTitle        = $_POST['CourseTitle'];
                                $CourseCategory     = $_POST['CourseCategory'];
                                $CourseLevel        = $_POST['CourseLevel'];
                                $CourseLanguage     = $_POST['CourseLanguage'];

                                $Description        = $_POST['Description'];
                                $SubDescription     = $_POST['SubDescription'];
                                $CourseImage        = $_POST['fileimage'];

                                $Coursefee          = $_POST['Coursefee'];

                                if( empty($CourseLearn)     || empty($Prereq)           || empty($TargetStudent)    || 
                                    empty($CourseTitle)     || empty($CourseCategory)   || empty($CourseLevel)      || 
                                    empty($CourseLanguage)  || empty($Description)      || empty($SubDescription)   || 
                                    empty($CourseImage)     || empty($Coursefee)){

                                    echo "Empty";
                                }else{

                                    if(isset($_POST['save'])){

                                    /*$CourseLearn        = "";
                                    $Prereq             = "";
                                    $TargetStudent      = "";
                                                                        
                                    $CourseTitle        = "";
                                    $CourseCategory     = "";
                                    $CourseLevel        = "";
                                    $CourseLanguage     = "";
                                    
                                    $Description        = "";
                                    $SubDescription     = "";
                                    $CourseImage        = "";
                                    
                                    $Coursefee          = "";*/

                                    $query = " INSERT INTO `Course_Details`(`CourseTitle`, `CourseDesc`,                                             
                                                        `CourseSubDesc` , `CourseLanguage`  , `CourseCategory`, 
                                                        `CourseLevel`   , `InstructorID`    , `CourseFee`, 
                                                        `CourseRating`  , `Course_Image`    , `Prereq`, 
                                                        `TargetStudents`, `LearningTopic`) 

                                                VALUES ('$CourseTitle',     '$Description',     '$SubDescription',
                                                        '$CourseLanguage',  '$CourseCategory',  '$CourseLevel',
                                                        '1','$Coursefee',   '0',                '$CourseImage',
                                                        '$Prereq',          '$TargetStudent',   '$CourseLearn')";

                                
                                    mysqli_query($con,$query);
                                    }
                                }
                        
                        ?>
            
                    </form> 

                </div>  

            </section>
        </div>
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        
        // Add the following code if you want the name of the file appear on select
        $(".custom-file-input").on("change", function() {
            var fileName = $(this).val().split("\\").pop();
            $(this).siblings(".custom-file-label").addClass("selected").html(fileimage);
        });



        $(".custom-file-input").on("change", function() {
            var fileName = $(this).val().split("\\").pop();
            $(this).siblings(".custom-file-label").addClass("selected").html(CourseCurriculumfile);
        });



        $(document).ready(function(){
            $("#myBtn1").click(function(){
                $('.toast').toast('show');
            });
        });

        
        $(document).ready(function(){

            var html = '<div class="custom-file" id="CourseContentUploadField"><input type="file" class="custom-file-input" id="customFile" name="CourseCurriculumfile[]"><label class="custom-file-label" for="customFile">Choose file</label><button type="button" class="btn btn-warning" id="remove" name="remove">Remove</button></div>';

            var x=1 , mx=2;

            $("#add").click(function(){

                if(x<=mx){
                    $("#CourseContentUploadField").append(html);
                    x++;
                }else{
                    alert('You cannot add more than 3 content files!');
                }
                
            });

            $("#CourseContentUploadField").on('click','#remove',function(){
                $(this).closest('div').remove();
                x--;
            });

    
        });
        
    </script>


</body>

</html>
