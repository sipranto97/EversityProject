<?php
include 'db.php';
session_start();
$imageSrc = "https://ssvassgje.in/upload/salon-profile-image/demo/profile.png";
    if(isset($_SESSION['usermail'])){
      $user = $_SESSION['usermail'];
      $logout="Logout";
      $login="";
      $myLearnigs="My Learnings";
      $lo="false";
    }
    $query = "SELECT * FROM course_details INNER JOIN course_status on "; 
    $query .="course_details.CourseID = course_status.CourseID ";
    $query .="and course_status.Email='$user'";
    
    $res = mysqli_query($connection,$query);
    $nameQuery = "SELECT * FROM user where Email = '".$user."'";
    $nameRes = mysqli_query($connection,$nameQuery);
    if($nameRow = mysqli_fetch_assoc($nameRes)){
      $name = $nameRow['FullName'];
    }

    if(isset($_POST['upload'])){
      //the path to store the uploaded image
      $target = "images/".basename($_FILES['image']['name']);

      //connect ot the database 
      $image = $_FILES['image']['name'];
      $imageQuery = "update user set Picture = '".$image."' where Email = '".$user."'" ;
      mysqli_query($connection,$imageQuery);

      if(move_uploaded_file($_FILES['image']['tmp_name'],$target)){

      }else{
        echo "upload failed";
      }


    }
    
    $imageSrcQuery = "Select Picture from user where Email = '".$user."'";
    $imgRes = mysqli_query($connection,$imageSrcQuery);
    if($imgRow=mysqli_fetch_assoc($imgRes)){
      if($imgRow['Picture']){
        $imageSrc = "./images/".$imgRow['Picture'];
      }
    }
    $recommendationCatagoryQuery= "SELECT CourseCategory, COUNT(DISTINCT course_details.CourseID) as number FROM course_details ";
    $recommendationCatagoryQuery.="INNER JOIN course_status ON course_details.CourseID = course_status.CourseID and";
    $recommendationCatagoryQuery.=" course_status.Email = '".$user."' GROUP by CourseCategory ORDER by COUNT(DISTINCT CourseCategory) DESC LIMIT 1";

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

    
    <div class="row contents" style="margin-top: 20px;">
      <div class="col-2" style="border-right: 2px solid gray;">
      <div class="row">
        <div class="col-2"></div>
      <div class="col-8">
        <div class="row"  >
      <img style="border-radius: 25px; box-shadow: 2px 2px 2px 2px grey" src="<?php echo $imageSrc;?>" class="w-100" alt="Cinque Terre">
      </div>
     
      </div>
      <div class="col-2"></div>
      
      </div>
      
      
      <div class="row pl-4 mt-3">
        <div class="col-12">
          <div class="row w-100">
          <form  method="POST" action="myLearnings.php" enctype="multipart/form-data">
        <input type="hidden" name="size" value="1000000">
        <div>
          <input class="w-100" type="file" name="image" id="">
        </div > 
        <div>
          <input class="btn btn-dark mt-1"  type="submit" name="upload" value="Update Image">
        </div>
          
        </form>
          </div>
        </div>
        
      </div>
      <div class="row w-100 d-flex justify-content-center">

          <h3 class="ml-4 mt-4"><b><?php echo $name?></b></h3>
      </div>
      </div>
      <div class="col-10">
      <div class="row ml-4 mb-4" style="border-bottom: 2px solid grey;">
      <h2 class="mt-3">My Learnings </h2><br>
      </div>
      

        <div class="row ml-2" >
          
          
          <!-- <a href="#" class="btn btn-outline-secondary">Start Course</a> -->
         <?php
         $count= 0;
         while($row = mysqli_fetch_assoc($res)){
           $count++;

          $queryforCourseIns = "SELECT InsName FROM instructor_dashboard WHERE InstructorID =".$row['InstructorID'];
          $result =  mysqli_query($connection,$queryforCourseIns);
          if($row1 = mysqli_fetch_assoc($result)){
            $insName = $row1['InsName'];
          }
          
          echo '<div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 form-group">
          <div class="card" style="width: 16rem; margin-bottom: 20px;background: #f6f4d2;">
          <form action="play_video.php" method="post">
                <img class="card-img-top" src="'.$row['CourseImage'].'" alt="Card image cap">
                <div class="card-body">
                   <h6 class="card-title">'.$row['CourseTitle'].'</h5>
                      <p class="card-text">'.$insName.'</p>
                      <a href="play_video.php?cId='.$row['CourseID'].'&learningUser='.$user.'" class="btn btn-secondary">Go To Course</a>
                </div>
                </form>
            </div>
          </div>';
      }
      if($count == 0)
      {
        echo '<h6 style="margin-left:20px">You don\'t have any course enrolled.</h6>';
      }else{

        

      }

         ?>
         
         
        </div>

        <div class="row ml-4 mb-4" style="border-bottom: 2px solid grey;">
      <h2 class="mt-3"> You may also like </h2><br>
      </div>
      <div class="row ml-2">
      <?php
      
      if($count>0){

        $reccomendCategory = mysqli_query($connection,$recommendationCatagoryQuery);
        if($rRow = mysqli_fetch_assoc($reccomendCategory)){
          $rVal = $rRow['CourseCategory'];
          $recommendCourseQuery = "SELECT * FROM course_details WHERE CourseCategory = '".$rVal."' and CourseID NOT IN";
          $recommendCourseQuery .=" (SELECT CourseID FROM course_status WHERE course_status.Email = '".$_SESSION['usermail']."') ORDER BY CourseRating DESC LIMIT 4";
        
          $recommendCourseResult = mysqli_query($connection,$recommendCourseQuery);

          while($course = mysqli_fetch_assoc($recommendCourseResult)){

            $queryforCourseIns = "SELECT InsName FROM instructor_dashboard WHERE InstructorID =".$course['InstructorID'];
            $result =  mysqli_query($connection,$queryforCourseIns);
            if($row1 = mysqli_fetch_assoc($result)){
              $insName = $row1['InsName'];
            }
            echo '<a href="course_view.php?cid='.$course['CourseID'].'" style="text-decoration:none;color:#212529;">
            <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 form-group ">
            <div class="card coursePageContent" style="width: 16rem; margin-bottom: 20px;">
            <form action="play_video.php" method="post">
                  <img class="card-img-top" src="'.$course['CourseImage'].'" alt="Card image cap">
                  <div class="card-body">
                     <h6 class="card-title">'.$course['CourseTitle'].'</h5>
                        <p class="card-text">'.$insName.'</p>
                        <p style="font-size: 13px;color:darkslategrey; line-height: 13px;margin-bottom:2px;"> <b>Rating: '.$course['CourseRating'].'/5</b> </p>
                        
                  </div>
                  </form>
              </div>
            </div>
            </a>'
            ;


          }
        
        
        }



      }
      
      
      
      
      
      ?>
      
      
      
      </div>

      </div>
    </div>
    <?php
    if(isset($_SESSION['enrolled'])){
      echo '<script>alert("You have enrolled a new course !!!")</script>';
      $_SESSION['enrolled']=null;
    }
    ?>
</body>
</html>