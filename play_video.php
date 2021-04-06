<?php
include 'db.php';
session_start();
$selectedColor="";
$setColor="background-color: #6b705c; color: white;";



if(isset($_GET['cId']) or isset($_SESSION['courseId'])){
  if(isset($_GET['cId'])){
    $courseId = $_GET['cId'];
    $_SESSION['courseId'] = $courseId;
  }else{
     $courseId=$_SESSION['courseId'] ;
     $_SESSION['courseId'] = null;
  }



  if(isset($_POST['reviewSubmit'])){
    $rat = $_POST['inlineRadioOptions'] ;
    $rev = $_POST['review']; 
    $_POST['inlineRadioOptions']=null;
    $_POST['review']=null; 

    $reviewQuery = "UPDATE course_status set Rating ='$rat' , CourseReview = '".$rev."' WHERE Email = '".$_SESSION['usermail']."' AND CourseID = '$courseId'";
   if( mysqli_query($connection,$reviewQuery)){
   }else{
     mysqli_error($connection);
   }
    $courseAverageQuery = "SELECT AVG(Rating) AS average FROM course_status WHERE CourseID='$courseId' and Rating>0";
    $average = mysqli_query($connection,$courseAverageQuery);
    if($row = mysqli_fetch_assoc($average)){
      $updateCourseRatingQuery = "UPDATE course_details SET CourseRating = ".$row['average']." WHERE CourseID = '$courseId'";
      mysqli_query($connection,$updateCourseRatingQuery);
    }
    
      echo '<script>alert("Review has been submitted successfully !!!")</script>';
      $_POST['reviewSubmit']=null;
  }



  $courseDeatailsQuery = "SELECT * FROM course_details WHERE CourseID = '$courseId'";
  $courseDeatails = mysqli_query($connection,$courseDeatailsQuery);
  $contentQuery = "SELECT * FROM course_content WHERE CourseID ='$courseId' ORDER by ContentID";
  $totalStdQuery = "SELECT COUNT(CourseID) as totalStudent FROM course_status WHERE CourseID ='$courseId'";
  $reviewCheckQuery = "SELECT Rating,CourseReview FROM course_status WHERE Email = '".$_SESSION['usermail']."' and CourseId='$courseId'";
  $review = mysqli_query($connection,$reviewCheckQuery);
  $totalstd = mysqli_query($connection,$totalStdQuery);
  $content = mysqli_query($connection,$contentQuery);

  if($row = mysqli_fetch_assoc($review)){
    $rating=  $row['Rating'];
    $stdReview = $row['CourseReview'];
  }
  if($row0 = mysqli_fetch_assoc($courseDeatails)){
    $title = $row0['CourseTitle'];
    $level = $row0['CourseLevel'];
    $language = $row0['CourseLanguage'];
    $description = $row0['CourseDesc'];
  }
  $firstContent = mysqli_query($connection,$contentQuery);
  if($row = mysqli_fetch_assoc($firstContent)){
    $firstContentUrl = $row['ContentResource'];
    if(isset($_GET['contentSrc'])){
      $firstContentUrl = $_GET['contentSrc'];
      $_SESSION['file'] = $firstContentUrl;
    }else if(isset($_SESSION['file'])){
      $firstContentUrl= $_SESSION['file'];
    }
  }
  if($row1 = mysqli_fetch_assoc($totalstd)){
    $noOfStd = $row1['totalStudent'];
  }
  $numOfContent = mysqli_num_rows($content);

  
  

}else{
  echo "not found";
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
<body style="background: whitesmoke; margin:5px">
<div class="row navbar mb-3">
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
            <div class="item"><a href=""  class="navItem"><h6>Home</h6></a></div>
            <div class="item"><a href="myLearnings.php" class="navItem"><h6>My Learnings</h6></a></div>
            <div class="item"><a href=""  class="navItem"><h6>About</h6></a></div>
            <div class="item"><a href="index.php?logout=true"  class="navItem"><h6>Logout</h6></a></div>
        </div> 
        </div>
          </div>
        <div class="col-1"></div>
    </div>

  <div class="container">
  <div class="row">
        <div class="col-7">
        <div class="row"  >
        <div class="iframe-container" style="margin-left: -35px;">
        <iframe width="600" style=" border-radius:10px;box-shadow: 2px 2px 2px 2px grey" height="380" src="<?php echo $firstContentUrl;?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
        </div>
          <div class="row mt-5"><h3>About this course</h3></div>
        <div class="row mt-2" style="border-bottom: 1px ridge grey;">
          <h5><?php echo $title;?></h5>
        </div>
        <div class="row pt-3 pb-3" style="border-bottom: 1px ridge grey;">
          <div class="col-4"><h6>By the numbers</h6></div>
          <div class="col-4">
            <div class="row"><h6>Skill Level: <?php echo " ".$level; ?></h6></div>
            <div class="row"><h6>Students:<?php echo " ".$noOfStd;?></h6></div>
            <div class="row"><h6>Language: <?php echo " ".$language; ?></h6></div>
          </div>
          <div class="col-4">
            <div class="row"><h6>Lectures:<?php echo " ".$numOfContent;?></h6></div>
            <div class="row"><h6>Video: Total 1 hour</h6></div>
          </div>
        </div>
        <div class="row pt-3 pb-3" style="border-bottom: 1px ridge grey;">
          <div class="col-4"><h6>Description</h6></div>
          <div class="col-8" style="margin-left: -15px;">
          <div style="text-align: justify;">
            <h6><?php echo $description; ?></h6>
            </div>
          </div>
          
        </div>
        <?php
        if($rating==0){

        
          echo  '<div class="row mt-5"><h3>Rate this course</h3></div>
          <div class="row mt-3 reviewBlock">
          <h6>Out of 5 : </h6>
          <form class="form-group pl-4" action="play_video.php" method="post">
              <div class="form-check form-check-inline pb-2">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="1">
                <label class="form-check-label" for="inlineRadio1">1</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="2">
                <label class="form-check-label" for="inlineRadio2">2</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="3">
                <label class="form-check-label" for="inlineRadio3">3</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio4" value="4">
                <label class="form-check-label" for="inlineRadio4">4</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio5" value="5">
                <label class="form-check-label" for="inlineRadio5">5</label>
              </div>
              <textarea class="form-control reviewBox" type="text" name="review" id="review" placeholder="Say something about this course.." required></textarea>
              <button class="btn btn-info mt-4"  type="submit" name="reviewSubmit" id="reviewSubmit">Done</button>

              </form>
          
          </div>';
        }
          ?>

         </div>
        <div class="col-5" >
          <div class="row course_content" style="justify-content: center; margin-bottom:10px;border-radius:5px" >
            <h2 style="color: #fff3b0; ">Course Content</h2>
          </div>
          <div  style= "height: 450px;width:fit-content; overflow-y: scroll;">

          <?php
              while($row = mysqli_fetch_assoc($content)){
                if($row['ContentResource']== $firstContentUrl){
                  $selectedColor = $setColor;
                }
                echo '<a href="play_video.php?cId='.$courseId.'&contentSrc='.$row['ContentResource'].'" style="text-decoration: none;">
                <div class="row contentList mb-2" style="border-radius:5px;'.$selectedColor.'">
                <div class="col-3" ><img style="width: 120px;margin-left:-14px" src="https://www.pngkit.com/png/full/267-2678423_bacteria-video-thumbnail-default.png" alt=""></div>
                <div class="col-9 pt-2 "><h6>'.$row['ContentName'].'</h6></div>
                </div>
                </a>';

                $selectedColor="";
              }

        ?>
         </div>
        </div>
        </div>
  </div>
  <?php
    
    ?>
</video>

</body>
</html>