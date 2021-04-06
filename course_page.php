<?php
include 'func.php';
include 'db.php';
session_start();
if(!isset($_SESSION['usermail'])){
    $category="";
    $myLearnigs="";
    $login="Login";
    $logout="";
    $lo="true";
}else{
  $myLearnigs="My Learnings";
    $login="";
    $logout="Logout";
}
if(isset($_GET['val'])){
  $category=urldecode($_GET['val']);
  if(isset($_SESSION['usermail'])){
  $logout="Logout";
    $login="";
    $usermail= $_SESSION['usermail'];
    $myLearnigs="My Learnings";
     $categoryCoursesQuery = "SELECT * FROM course_details WHERE CourseCategory = '".$category."' and CourseID NOT IN (SELECT CourseID FROM course_status WHERE course_status.Email = '".$_SESSION['usermail']."')";
  }else{
    $categoryCoursesQuery ="SELECT * FROM course_details WHERE 	CourseCategory = '".$category."'";
  }
  $category.= " Courses";
  $courseResult = mysqli_query($connection,$categoryCoursesQuery);
}elseif(isset($_POST['search'])){
  $category=strtolower($_POST['searchBarval']);
  if(isset($_SESSION['usermail'])){
    $categoryCoursesQuery = "SELECT * FROM course_details WHERE LOWER(CourseTitle) LIKE '%".$category."%' and CourseID NOT IN (SELECT CourseID FROM course_status WHERE course_status.Email = '".$_SESSION['usermail']."')";
  }else{
    $categoryCoursesQuery ="SELECT * FROM course_details WHERE LOWER(CourseTitle) LIKE '%".$category."%'";
  }
  $courseResult = mysqli_query($connection,$categoryCoursesQuery);
    $num = mysqli_num_rows($courseResult);
    $category="Found '$num' results for '$category'";
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eversity</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="parent"></div>
    <div class="row navbar">
        <div class="col-1"></div>
        <div class="col-lg-10">
        <div class="row">
        <div class="col-lg-2 logo"><h2><a class="logoT" href="index.php">Eversity</a></h2></div>
        <div class="col-lg-4">
          <form class="form-group" action="course_page.php" method="post">
            <div class="input-group rounded mt-2">
            <input type="search" class="form-control rounded" name="searchBarval" placeholder="Search Here" aria-label="Search"
            aria-describedby="search-addon" />
            <button class="fas fa-search" name="search" type="submit"></button>
          <!-- <span class="input-group-text border-0" id="search-addon">
            <i class="fas fa-search"></i>
          </span> -->
         </div>
        
        </form>
        
        </div>
        <div class="col-lg-6 d-flex justify-content-end pt-4" >
            <div class="item"><a href="index.php"  class="navItem"><h6>Home</h6></a></div>
            <div class="item"><a href="myLearnings.php" class="navItem"><h6><?php echo $myLearnigs?></h6></a></div>
            <div class="item"><a href=""  class="navItem"><h6>About</h6></a></div>
            <div class="item"><a href="registration.php"  class="navItem"><h6><?php echo $login?></h6></a></div>
            <div class="item"><a href="index.php?logout=true"  class="navItem"><h6><?php echo $logout?></h6></a></div>
        </div> 
        </div>
          </div>
        <div class="col-1"></div>
    </div>
    <div class="searchResults">
  

    </div>

    <div class="row d-flex justify-content-center catagory_home" style="margin-left: -50px;">
    
    
            <div class="item_catagory"><a href="course_page.php?val=Development&lo=".$lo  class="catagory_home_item"><h6>Development</h6></a></div>
            <div class="item_catagory"><a href="course_page.php?val=Business&lo=" class="catagory_home_item"><h6>Business</h6></a></div>
            <div class="item_catagory"><a href="course_page.php?val=<?php echo urlencode("Finance & Accounting")?>&lo=".$lo class="catagory_home_item"><h6>Finance & Accounting</h6></a></div>
            <div class="item_catagory"><a href="course_page.php?val=<?php echo urlencode("IT & Software")?>&lo="  class="catagory_home_item"><h6>IT & Software</h6></a></div>
            <div class="item_catagory"><a href="course_page.php?val=Design&lo=" class="catagory_home_item"><h6>Design</h6></a></div>
            <div class="item_catagory"><a href="course_page.php?val=<?php echo urlencode("Personal Development")?>&lo="  class="catagory_home_item"><h6>Personal Development</h6></a></div>
            <div class="item_catagory"><a href="course_page.php?val=<?php echo urlencode("Office Productivity")?>&lo="  class="catagory_home_item"><h6>Office Productivity</h6></a></div>
            <div class="item_catagory"><a href="course_page.php?val=<?php echo urlencode("Health & Fitness")?>&lo=" class="catagory_home_item"><h6>Health & Fitness</h6></a></div>
            <div class="item_catagory"><a href="course_page.php?val=Marketing&lo="  class="catagory_home_item"><h6>Marketing</h6></a></div>
            
        
          </div>

    </div>

    <div class="row" style="margin-top: 5px; ">
        <div class="col-2"></div>
        <div class="col-lg-9" style="border-bottom: 2px solid #006d77;">
        <div class="row">
        <h2><?php echo $category?></h2>
        </div>
            
        </div>
        <div class="col-1"></div>
    </div>

    <div class="row" style="margin-top: 20px; ">
        <div class="col-lg-2"></div>
            <div class="col-lg-9" >
                <?php
                

                  while($row = mysqli_fetch_assoc($courseResult)){
                    $queryforCourseIns = "SELECT InsName FROM instructor_dashboard WHERE InstructorID =".$row['InstructorID'];
                         $result =  mysqli_query($connection,$queryforCourseIns);
                         if($row1 = mysqli_fetch_assoc($result)){
                           $insName = $row1['InsName'];
                           
                         }
                          echo '<div class="container">
                          <div class="row" style="margin-bottom: 20px;" >
                          <a href="course_view.php?cid='.$row['CourseID'].'" style="text-decoration:none;color:#212529;background: #f8edeb;">
                          <div class="card coursePageContent">
                            <div class="row" style="width:1050px;">
                              <div class="col-3">
                                  <img src="'.$row['CourseImage'].'" style="width:270px;" >
                                </div>
                                <div class="col-7 d-flex justify-content-center" style="padding-left:20px">
                                  <div class="card-block px-3">
                                    <h5 class="card-title" style="margin-bottom: 2px;margin-top:10px"><b>'.$row['CourseTitle'].'</b></h5>
                                    <p class="card-text" style="line-height: 18px;margin-bottom:2px;color:#212229">'.$row['CourseSubdesc'].' </p>
                                    <p style="font-size: 13px;color:darkslategrey; line-height: 18px;margin-bottom:2px;"> <b>'.$insName.'</b> </p>
                                    <p style="font-size: 13px;color:darkslategrey; line-height: 18px;margin-bottom:2px;"> <b>Rating: '.$row['CourseRating'].'/5</b> </p>
                                    <p style="font-size: 13px;color:darkslategrey; line-height: 18px;margin-bottom:2px;"> '.$row['CourseLevel'].' </p>
                                   </div>
                                </div>
                                <div class="col-2 d-flex justify-content-center" >
                                      <h6 style="padding-top:20%">BDT. '.$row['CourseFee'].'</h6>
                                </div>

                              </div>
                            </div>
                          </div>
                          </div>';
                  }
                
                ?>
                </a>
                </div>
            <div class="col-lg-1"></div>
    </div>

    
</body>
</html>