<?php
include 'db.php';
session_start();
if(!isset($_SESSION['usermail'])){
    $myLearnigs="";
    $login="Login";
    $logout="";
    $lo="true";
}else{
  $myLearnigs="My Learnings";
    $login="";
    $logout="Logout";
}


if(isset($_GET['cid'])){

  $courseID = $_GET['cid'];
  $query1 = "SELECT * FROM course_details inner join instructor_dashboard";
  $query1.= " WHERE course_details.InstructorID = instructor_dashboard.InstructorID ";
  $query1.="and course_details.CourseID = '".$courseID."';";
  $res1 = mysqli_query($connection,$query1);
  if($row=mysqli_fetch_assoc($res1)){
    $title=$row['CourseTitle'];
    $subDesc = $row['CourseSubdesc'];
    $rating= $row['CourseRating'];
    $image = $row['CourseImage'];
    $fee = $row['CourseFee'];
    $requirements = $row['CourseRequirements'];
    $insName = $row['InsName'];
    $language = $row['CourseLanguage'];
    $desc = $row['CourseDesc'];
    $query2 = "SELECT COUNT(Rating) AS noOfRating FROM course_status WHERE course_status.CourseID='".$courseID."' AND Rating>0";
    $res2 = mysqli_query($connection,$query2);
    
    if($row1 = mysqli_fetch_assoc($res2)){
      $numOfRating = $row1['noOfRating'];

    }
  }else{
    echo 'query failed';
  }
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
<body style="background-color: #ece4db;">
    <div class="row navbar mb-3">
        <div class="col-1"></div>
        <div class="col-lg-10">
        <div class="row">
        <div class="col-lg-2 logo"><h2><a class="logoT" href="index.php">Eversity</a></h2></div>
        <div class="col-lg-4">
          <form class="form-group" action="course_page.php" method="post">
            <div class="input-group rounded mt-2">
            <input type="search" class="form-control rounded" name="searchBarval" placeholder="Search Here" aria-label="Search"
            aria-describedby="search-addon" required />
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
    <div class="container">
    <div class="row">
        
        <div class="col-8">
        <div class="row cvHeader p-3">
        <div class="col-12">
        <div class="row">
        <h2><?php echo $title; ?></h2>
        </div>
        <div class="row">
        <p style="font-size: 19px;"><?php echo $subDesc;?></p>
        </div>
        <div class="row">
        <p style="color: #e85d04;">Ratings: <?php echo $rating?>/5 (<?php echo $numOfRating;?> ratings)</p>
        </div>
        <div class="row">
        <p>Created by <?php echo $insName?></p>
        </div>
        <div class="row">
        <p>Language: English</p>
        </div>
        
        
        </div>
        </div>
        <div class="row mt-5 mb-5 p-3 courseDescription"><div class="col-12">
        <div class="row "><h3 style="border-bottom: 2px solid #10002b;">Course Description</h3></div>
        <div class="row pl-2"><p style="text-align: justify; "><?php echo $desc;?></p></div>
             <div class="row mt-3"><h3 style="border-bottom: 2px solid #10002b;">Requirements</h3></div>
             <div class="row pl-2"><p style="text-align: justify; "><?php echo $requirements;?></p></div>
                <div class="row mt-3"><h3 style="border-bottom: 2px solid #10002b;">Reviews</h3></div>


                <?php
                  $stdReviewQuery = "SELECT * from user inner JOIN course_status on user.Email = course_status.Email WHERE course_status.CourseID ='$courseID' and course_status.Rating >0";
                  $reviewResult = mysqli_query($connection,$stdReviewQuery);
                  while($row = mysqli_fetch_assoc($reviewResult)){
                    echo '<div class="row pl-5 pr-5 pt-3">
                    <div class="col-12">
                        <div class="row" ><h5> <b> '.$row['FullName'].' </b></h5></div>
                        <div class="row"><h6 style="color: #9d8189; font-weight:bold">Rated '.$row['Rating'].'/5</h6></div>
                        <div class="row"><p style="text-align: justify; ">'.$row['CourseReview'].'</p></div>
                    </div>
                </div>';
                  }
                ?>

        </div></div>
        

        </div>
        <div class="col-4">
        <div class="row d-flex justify-content-center">
        <div class="card enrollCard" style="width: 300px;">
          <img class="card-img-top" src="<?php echo $image;?>" alt="Card image cap">
          <div class="card-body">
            <h2 class="card-title" style="color:#14213d"><b> BDT <?php echo $fee;?></b></h2>
            <h6><b>This course includes:</b></h6>
            <ul>
            <li style="font-size: 13px;">  2 hours on-demand video</li>
            <li style="font-size: 13px;"> Full lifetime access</li>
            <li style="font-size: 13px;"> Access on mobile and TV</li>
            <li style="font-size: 13px;"> Certificate of completion</li>
            </ul>
            <a class="btn btn-outline-dark w-100" href="process.php?courseId=<?php echo $courseID?>" >Enroll</a>
            
          </div>
        </div>
        </div>
    
    </div>

    </div>

    
</body>
</html>