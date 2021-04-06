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
                <a class="nav-link" href="/Eversity/profile.php">Profile</a>
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
                <li><a href="/Eversity/Student.php">students</a></li>
                <li><a href="/Eversity/Review.php">Reviews</a></li>
            </ul>

            <h6>Terms and Conditions</h6>
            <ul>
                <li><a href="/Eversity/works.php">How Eversity works</a></li>
                <li><a href="/Eversity/terms.php">Instructor Terms</a></li>
            </ul>   

        </div>

        <div class="main_content">

            <div class="container p-3 my-3 border">
                <h1 style="font-size:xx-large;">Profile and Settings</h1>
            </div> 

            <section class="my-5">

                <div class="container p-3 my-3 border">
        
                    <form action="" method="post">

                        <!---------------------------------------------------------------->

                        

                        <div class="form-group"> 
                            <label>First Name</label>
                        <input type="text" name="firstname" value="<?php echo  $CourseLearn; ?>" autocomplete="off" class="form-control" placeholder="Example: Walter">
                        </div>

                        <div class="form-group"> 
                            <label>Last Name</label>
                        <input type="text" name="lastname" value="<?php echo  $Prereq; ?>" autocomplete="off" class="form-control" placeholder="Example: White">
                        </div>

                        <div class="form-group"> 
                            <label>Headline</label>
                        <input type="text" name="headline" value="<?php echo  $TargetStudent; ?>" autocomplete="off" class="form-control" placeholder="Example: Engineer or Coder">
                        </div>
                        <div class="mb-3">
                            <label for="biography" class="form-label">Biography</label>
                            <textarea class="form-control" id="Biography" rows="3" placeholder="Your biography should have at least 50 characters, links and coupon codes are not permitted." name = "Biography" value="<?php echo  $Description; ?>"></textarea>
                        </div>
            
                        <h4>Links</h4>
                        <div class="form-group"> 
                            <label>Twitter</label>
                        <input type="text" name="twitter" value="<?php echo  $TargetStudent; ?>" autocomplete="off" class="form-control" placeholder="Example: http://www.twitter.com/">
                        </div>
                        <div class="form-group"> 
                            <label>Facebook</label>
                        <input type="text" name="facebook" value="<?php echo  $TargetStudent; ?>" autocomplete="off" class="form-control" placeholder="Example: http://www.Facebook.com/">
                        </div>
                        <div class="form-group"> 
                            <label>LinkedIn</label>
                        <input type="text" name="linkedin" value="<?php echo  $TargetStudent; ?>" autocomplete="off" class="form-control" placeholder="Example: http://www.LinkedIn.com/">
                        </div>

                        <!---------------------------------------------------------------->

                     

                        <!---------------------------------------------------------------->
                        
                        


                        <div class="form-group">
                            <label for="Language">Language</label>
                            <select class="form-control" id="language" name="CourseCategory" value="<?php echo  $CourseCategory; ?>">
                                <option selected>Select Language</option>
                                <option value="English">English</option>
                                <option value="Bengali">Bengali</option>
                                <option value="Nederlands">Nederlands</option>
                                <option value="Polski">Polski</option>
                                <option value="Chinese">Chinese</option>
                                <option value="Espanol">Espanol</option>
                            </select>
                        </div>

                       
                        <button type="Save" class="btn btn-info" id="savebtn" name="save">Save</button>

                        <div class="container pt-3">
                            
                            <div class="toast">
                                <div class="toast-header">
                                    Information Saved!
                                </div>
                            </div> 
                            
                        </div> 

                        <!---------------------------------------------------------------->

                        
            
                    </form> 

                </div>  

            </section>
        </div>
    </div>




</body>

</html>
