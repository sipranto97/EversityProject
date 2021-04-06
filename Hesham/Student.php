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
                <h1 style="font-size:xx-large;">Enrolled Students</h1>
            </div> 

            <section class="my-5">

                <div class="container p-3 my-3 border">
        
                    <form action="" method="post">


<div class= "row" >
<div class="col-4">                  <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="/Eversity/Images/C5.jpg" alt="Card image cap">
  <div class="card-body">
    <h5>Python</h5>
    <h6>Enrolled by 34</h6>
    
  </div>
</div>
</div>

<div class="col-4">                    <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="/Eversity/Images/C6.jpg" alt="Card image cap">
  <div class="card-body">
  <h5>Ethical Hacking</h5>
    <h6>Enrolled by 47</h6>
  </div>
</div>
 </div>
<div class="col-4">              <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="/Eversity/Images/C8.jpg" alt="Card image cap">
  <div class="card-body">
  <h5>HTML 5</h5>
    <h6>Enrolled by 23</h6>
  </div>
</div> 
</div>
</div>

<div class= "row" >
<div class="col-4">                  <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="/Eversity/Images/C11.jpg" alt="Card image cap">
  <div class="card-body">
  <h5>SEO</h5>
    <h6>Enrolled by 44</h6>
  </div>
</div>
</div>

<div class="col-4">                    <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="/Eversity/Images/C9.jpg" alt="Card image cap">
  <div class="card-body">
  <h5>Photoshop CC</h5>
    <h6>Enrolled by 42</h6>
  </div>
</div>
 </div>
<div class="col-4">              <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="/Eversity/Images/C10.jpg" alt="Card image cap">
  <div class="card-body">
  <h5>Photography</h5>
    <h6>Enrolled by 12</h6>
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
