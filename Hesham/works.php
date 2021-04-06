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
                <h1 style="font-size:xx-large;">How Eversity works</h1>
            </div> 

            <section class="my-5">

                <div class="container p-3 my-3 border">
        
                    <form action="" method="post">

                        <!---------------------------------------------------------------->

                      

                        <div > 
                            <h4>Our motive</h4>
                            <p>
                            Eversity's mission is to improve lives through learning. 
                            Our global marketplace features an extensive, multi-language library, which includes thousands of courses taught by expert instructors.  
                            You can take courses across a wide range of categories, some of which include: business & entrepreneurship, programming, academics, the arts, health & fitness, language, music and much more! 
                            Below are answers to some of the frequently asked questions we receive about how Eversity works.
                        </p>
                        </div>
                        <br>

                        <div> 
                            <h4>What do Eversity courses include?</h4>
                        <p>
                         Each Eversity course is created, owned and managed by the instructor(s). 
                         The foundation of each Eversity course are its lectures, which can include videos, slides, and text.
                         In addition, instructors can add resources and various types of practice activities, as a way to enhance the learning experience of students. 
                         Additional information on Eversity’s platforms and features can be reviewed here. 
                        
                        </p>
                        </div>
                        <br>


                        <div> 
                            <h4>How do you make an Eversity course? </h4>
                            <br>
                        <h6> Aim for high ratings to succeed in this topic </h6> 
                       
                       <p>To create a successful Udemy course, you first need to decide what you’ll teach. When choosing your topic, 
                       it can be important to know what students are most interested in.</p>
                       

                        <br>

                        <h6> Have a marketing strategy to succeed in this topic </h6> 
                       
                       <p>For maximum impact in this topic area, make sure your course stands out from others with high ratings from students.
                          To compete among the top courses in this topic area you’ll need to implement effective marketing strategies.</p>

                          <br>

                         <h6> Differentiate your course to succeed in this topic </h6> 

                       <p>Although there might be a lot of courses in this topic area, still you can think about how you can make your course stand out from the rest.
 There are many ways to approach each topic and we have students who appreciate unique perspectives that are relevant to them. 
So focus on your true specialty within this broader topic area.</p>  
                        </div>
                        <br>
                        <div > 
                            <h4>Do I have to start my Eversity course at a certain time? And how long do I have to complete it?</h4>
                            <p>
                            As noted above, there are no deadlines to begin or complete the course. Even after you complete the course you will continue to have access to it, provided that your account’s in good standing, and Eversity continues to have a license to the course.
                        </p>
                        </div>
                        
                        <br>
                        <div> 
                            <h4>Is Eversity an accredited institution? Do I receive anything after I complete a course?</h4>
                        <p>
                        While Eversity is not an accredited institution, we offer skills-based courses taught by experts in their field, and every approved, paid course features a certificate of completion to document your accomplishment. 
                        
                        </p>
                        </div>
                        <br>
                        <div> 
                            <h4>How can I pay for a course?</h4>
                        <p>
                        Eversity supports several different payment methods, depending on your account country and location.
                        
                        </p>
                        </div>
                        <br>
                        <div> 
                            <h4>What if I don’t like a course I purchased?</h4>
                        <p>
                        We want you to be satisfied, so all eligible courses purchased on Eversity can be refunded within 30 days. If you are unhappy with a course, you can request a refund, provided the request meets the guidelines in our refund policy.
                        
                        </p>
                        </div>

                        

                        
                    </form> 

                </div>  

            </section>
        </div>
    </div>


    

   


</body>

</html>
