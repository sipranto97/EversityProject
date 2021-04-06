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
session_start();
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

            <img src="/Eversity/Hesham/Images/E1.png" alt="" width="100" height="40" class="d-inline-block align-top">
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
                <a class="nav-link" href="/Eversity/Hesham/profile.php">Profile</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Logout</a>
                </li>     
            </div>
        </div>
    </nav>
    
    <div class="wrapper">
   
        <div class="sidebar">
            <h4 style="color:white; padding-left:35px"><?php if(isset($_SESSION['name']))echo $_SESSION['name'];?></h4>
            <h6>Create an Engaging Course</h6>
            <ul>
                <li><a href="/Eversity/saqlain/index.php">Create Courses</a></li>
            </ul> 

            <h6>Performance</h6>
            <ul>  
                <li><a href="/Eversity/Student.php">students</a></li>
            </ul>

            <h6>Terms and Conditions</h6>
            <ul>
                <li><a href="/Eversity/Hesham/works.php">How Eversity works</a></li>
                <li><a href="/Eversity/Hesham/terms.php">Instructor Terms</a></li>
            </ul>   

        </div>
    

        <div class="main_content">

            <div class="container p-3 my-3 border">
                <h1 style="font-size:xx-large;">Dashboard</h1>
            </div> 

            <section class="my-5">

                <div class="container p-3 my-3 border">
        
                    <form action="" method="post">


<div class= "row" >
<div class="col-4">                  <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="/Eversity/Hesham/Images/C5.jpg" alt="Card image cap">
  <div class="card-body">
    <h5>Python</h5>
    <p class="card-text">Let's get started learning one of the most easiest coding languages out there right now. There's no need to fret if you haven't coded before. By the time you finish this course, you'll be a pro at Python!</p>
    
  </div>
</div>
</div>

<div class="col-4">                    <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="/Eversity/Hesham/Images/C6.jpg" alt="Card image cap">
  <div class="card-body">
  <h5>Ethical Hacking</h5>
  <p class="card-text">This course contain Real World examples and hands on practicals without neglecting the basics. We will guide you step by step so that you can understand better. This course will allow you to work on Real World as a professional.</p>
  </div>
</div>
 </div>
<div class="col-4">              <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="/Eversity/Hesham/Images/C8.jpg" alt="Card image cap">
  <div class="card-body">
  <h5>HTML 5</h5>
  <p class="card-text">Learning these language will help you to achieve a higher milestone in life, and I will make you able to create any website.

Web designing is not rocket science.. Therefore you will fall in love with the subject very soon.</p>
  </div>
</div> 
</div>
</div>

<div class= "row" >
<div class="col-4">                  <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="/Eversity/Hesham/Images/C11.jpg" alt="Card image cap">
  <div class="card-body">
  <h5>SEO</h5>
  <p class="card-text">This course, SEO for Beginners: Technical SEO Factors for Websites, course is all about Technical SEO (Search Engine Optimization) factors. </p>
  </div>
</div>
</div>

<div class="col-4">                    <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="/Eversity/Hesham/Images/C9.jpg" alt="Card image cap">
  <div class="card-body">
  <h5>Photoshop CC</h5>
  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>
 </div>
<div class="col-4">              <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="/Eversity/Hesham/Images/C10.jpg" alt="Card image cap">
  <div class="card-body">
  <h5>Photography</h5>
  <p class="card-text">Everything from the basics of how your camera works and correct technique through to setting your AF mode, AF points, resolution and everything will be shown here</p>
  </div>
</div> 
</div>
</div>
 
 

                      

                        

                        

                        
                    </form> 

                </div>  

            </section>
        </div>
    </div>


    

   


</body>

</html>
