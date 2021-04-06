<?php
include 'db.php';
session_start();
$myLearnigs="";
$login="Login";
$logout="";
$lo="true";
$BeAIns="";
if(isset($_SESSION['usermail'])){
    $logout="Logout";
    $BeAIns="Become an Instructor";
    $login="";
    $usermail= $_SESSION['usermail'];
    $myLearnigs="My Learnings";
    $lo="false";
    $top4query = "SELECT * FROM course_details WHERE CourseID not in (SELECT CourseID FROM course_status WHERE Email = '$usermail') ORDER BY CourseRating DESC LIMIT 4";
    $topResults = mysqli_query($connection,$top4query);


    $nameQuery = "SELECT * FROM user where Email = '".$usermail."'";
    $nameRes = mysqli_query($connection,$nameQuery);
    if($nameRow = mysqli_fetch_assoc($nameRes)){
      $name = $nameRow['FullName'];
      $_SESSION['name']=$name;

      
    }
}else{
    $top4query = "SELECT * FROM course_details ORDER BY CourseRating DESC LIMIT 4";
    $topResults = mysqli_query($connection,$top4query);
}
if(isset($_GET['logout'])){
    $login="Login";
    $myLearnigs="";
    $logout="";
    $lo="true";
    $_SESSION['usermail']=null;
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
            <div class="item"><a href="./Hesham/Dashboard.php"  class="navItem"><h6><?php echo $BeAIns?></h6></a></div>
            <div class="item"><a href="index.php"  class="navItem"><h6>Home</h6></a></div>
            <div class="item"><a href="process.php?user='<?php echo $usermail;?>'" class="navItem"><h6><?php echo $myLearnigs?></h6></a></div>
            <div class="item"><a href=""  class="navItem"><h6>About</h6></a></div>
            <div class="item"><a href="registration.php"  class="navItem"><h6><?php echo $login?></h6></a></div>
            <div class="item"><a href="index.php?logout=true"  class="navItem"><h6><?php echo $logout?></h6></a></div>
        </div> 
        </div>
          </div>
        <div class="col-1"></div>
    </div>
    <div class="row d-flex justify-content-center catagory_home" style="margin-left: -50px;">
    
            <div class="item_catagory"><a href="course_page.php?val=Development&lo=<?php echo $lo?>"  class="catagory_home_item"><h6>Development</h6></a></div>
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

    <div class="row" style="margin-top: 5px;">
        <div class="col-1"></div>
        <div class="col-lg-10 home_front_image" style="border-radius: 10px; box-shadow: 2px 2px 2px 2px grey" >
            <div class="row">
                <div class="col-4" style="margin-left : 40px;margin-top:60px; background-color:whitesmoke; border-radius: 10px; box-shadow: 2px 2px 2px 2px grey">
                <div style="padding: 10px; ">
                <h1>Learn from the best</h1><br>
                <h5>Real-world experts teaching real-world skills, from $11.99 — through Mar. 25.</h5>
            </div>
                </div>
            </div>
        </div>
        <div class="col-1"></div>
    </div>

    <div class="row" style="margin-top: 20px; ">
        <div class="col-1"></div>
        <div class="col-10">
            <div class="row" style="margin-bottom: 20px;" >
            <h1 style="border-bottom: 2px solid gray;">Our Top Rated Courses </h1>
            </div>
            <div class="row d-flex justify-content-center">
            <?php
        
         while($row = mysqli_fetch_assoc($topResults)){
            $queryforCourseIns = "SELECT InsName FROM instructor_dashboard WHERE InstructorID =".$row['InstructorID'];
            $result =  mysqli_query($connection,$queryforCourseIns);
            if($row1 = mysqli_fetch_assoc($result)){
              $insName = $row1['InsName'];
            }
            echo '<a href="course_view.php?cid='.$row['CourseID'].'" style="text-decoration:none;color:#212529;">
            <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 form-group ">
            <div class="card coursePageContent" style="width: 16rem; margin-bottom: 20px;">
            <form action="play_video.php" method="post">
                  <img class="card-img-top" src="'.$row['CourseImage'].'" alt="Card image cap">
                  <div class="card-body">
                     <h6 class="card-title">'.$row['CourseTitle'].'</h5>
                        <p class="card-text">'.$insName.'</p>
                        <p style="font-size: 13px;color:darkslategrey; line-height: 13px;margin-bottom:2px;"> <b>Rating: '.$row['CourseRating'].'/5</b> </p>
                        
                  </div>
                  </form>
              </div>
            </div>
            </a>'
            ;
         }
         

    ?>
            </div>
        </div>
        <div class="col-1"></div>
    </div>

    
</body>
</html>