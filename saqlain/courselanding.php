<?php 

include("action.php");

if(isset($_SESSION['CourseID'])){
    //echo $_SESSION['CourseID'];
}

?>


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
            </div>
        </div>
    </nav>






    
    <div class="wrapper">
        <div class="sidebar">

            <h6>Publish your course</h6>
            <ul>
                <li><a href="#fillupcoursedetails">Fill up course details</a></li>
            </ul> 

            <h6>Plan your course</h6>
            <ul>
                <li><a href="#targetyourstudents">Target your Students</a></li>
            </ul> 

            <h6>Create your content</h6>
            <ul>  
                <li><a href="/Eversity/saqlain/coursecontent.php">Curriculum</a></li>
            </ul>

            <h6>Choose Pricing</h6>
            <ul>  
                <li><a href="#CourseFeeSection">Pricing</a></li>
            </ul>
            
        </div>






        <div class="main_content">

            <div class="container p-3 my-3 border">
                <h1 style="font-size:xx-large;">Manage your course</h1>
            </div> 

            <section class="my-5">

                <div class="container p-3 my-3 border">
        
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data">

                        <!---------------------------------------------------------------->                      

                        <h4 id="fillupcoursedetails">Fill up your course details:</h4>
                        
                        <div class="form-group">  
                            <label for="sel1">Enter Course Title: </label>
                            <input type="text" name="CourseTitle" value = "<?php echo $CourseTitle;?>" autocomplete="off" class="form-control" placeholder="Example: Learn Node.Js from scratch">

                            <?php if(isset($CourseTitleError)){ ?>
                                
                                <div class="alert alert-danger">

                                    <?php echo $CourseTitleError; ?>
                                
                                </div>

                            <?php } ?>

                        </div>


                        <div class="form-group">
                            <label for="sel1">Select Course Category:</label>
                            <select class="form-control" id="sel1" name="CourseCategory" value = "<?php echo $CourseCategory;?>">
                                <option selected><?php echo $CourseCategory;?></option>
                                <option value="Programming">Programming</option>
                                <option value="IT & Software">IT & Software</option>
                                <option value="Web Development">Web Development</option>
                                <option value="Digital Marketing">Digital Marketing</option>
                            </select>
                            
                            <?php if(isset($CourseCategoryError)){ ?>
                                
                                <div class="alert alert-danger">

                                    <?php echo $CourseCategoryError; ?>
                                
                                </div>

                            <?php } ?>

                        </div>

                        
                        <div class="form-group">
                            <label for="sel1">Select Course Level:</label>
                            <select class="form-control" id="sel1" name="CourseLevel" value = "<?php echo $CourseLevel;?>">
                                <option selected><?php echo $CourseLevel;?></option>
                                <option value="Beginner Level">Beginner Level</option>
                                <option value="Intermediate Level">Intermediate Level</option>
                                <option value="Advanced Level">Advanced Level</option>
                            </select>

                            <?php if(isset($CourseLevelError)){ ?>
                                
                                <div class="alert alert-danger">

                                    <?php echo $CourseLevelError; ?>
                                
                                </div>

                            <?php } ?>
                        </div>

                        
                        
                        <div class="form-group">
                            <label for="sel1">Select Course Language:</label>
                            <select class="form-control" id="sel1" name="CourseLanguage" value = "<?php echo $CourseLanguage;?>">
                                <option selected><?php echo $CourseLanguage;?></option>
                                <option value="English">English</option>
                                <option value="Bangla">Bangla</option>
                                <option value="Arabic">Arabic</option>
                                <option value="Russian">Russian</option>
                                <option value="French">French</option>
                            </select>

                            <?php if(isset($CourseLanguageError)){ ?>
                                
                                <div class="alert alert-danger">

                                    <?php echo $CourseLanguageError; ?>
                                
                                </div>

                            <?php } ?>

                        </div>

                        
                        <div class="mb-3">
                            <label for="Description" class="form-label">Course Description</label>
                            <textarea class="form-control" id="Description" name = "Description"  value = "<?php echo $Description?>" rows="3" placeholder="Describe about your course in 50 words." ></textarea>

                            <?php if(isset($DescriptionError)){ ?>
                                
                                <div class="alert alert-danger">

                                    <?php echo $DescriptionError; ?>
                                
                                </div>

                            <?php } ?>

                        </div>                        
                        
                        <div class="row">

                            <div class="col-lg-12 col-md-12 col-12">

                                <h3>Upload your course image</h3>
                                <div class="file">
                                    <input type="file" class="form-control" id="file" name="fileimage">

                                    <?php if(isset($fileimageError)){ ?>
                                
                                    <div class="alert alert-danger">

                                    <?php echo $fileimageError; ?>
                                
                                    </div>

                                    <?php } ?>                             
                                </div>
                                
                                <p></br>Photo should have the resolution within 1920*1080 and maximum size of 2 MB (2048 KB).</p>
                        
                            </div>                            
                            
                        </div> 


                        <!---------------------------------------------------------------->


                        <h4 id="targetyourstudents">Target your students:</h4>

                        
                        <div class="form-group"> 
                            <label>What will students learn in your course? </label>

                        <input type="text" name="CourseLearn" value = "<?php echo $CourseLearn;?>" autocomplete="off" class="form-control" placeholder="Example: Node.Js Development">
                        
                        <?php if(isset($CourseLearnError)){ ?>
                                
                                <div class="alert alert-danger">

                                    <?php echo $CourseLearnError; ?>
                                
                                </div>

                        <?php } ?>

                        </div>


                        <div class="form-group"> 
                            <label>Are there any course requirements or prerequisites?</label>
                        <input type="text" name="Prereq" value = "<?php echo $Prereq;?>" autocomplete="off" class="form-control" placeholder="Example: Be able to write basic program/codes">
                        
                        <?php if(isset($PrereqError)){ ?>
                                
                                <div class="alert alert-danger">

                                    <?php echo $PrereqError; ?>
                                
                                </div>

                        <?php } ?>


                        </div>


                        <div class="form-group"> 
                            <label>Who are your target students?</label>
                        <input type="text" name="TargetStudent" value = "<?php echo $TargetStudent;?>" autocomplete="off" class="form-control" placeholder="Example: Beginer web-developers who wants to learn Node.Js">
                        
                        <?php if(isset($TargetStudentError)){ ?>
                                
                                <div class="alert alert-danger">

                                    <?php echo $TargetStudentError; ?>
                                
                                </div>

                        <?php } ?>
                        
                        </div>


                        

                        
                        <!---------------------------------------------------------------->
                         
                        
                        
                        
                        <h4 id="CourseFeeSection"></br>Select your pricing:</h4>
                        
                        <div class="form-group">  
                            <div class="form-group">
                            <select class="form-control" id="sel2" name="Coursefee" type="number" value = "<?php echo $Coursefee;?>">
                                <option selected><?php echo $Coursefee;?></option>
                                <option value="Free">Free</option>
                                <option value="19.99$">19.99$</option>
                                <option value="29.99$">29.99$</option>
                                <option value="39.99$">39.99$</option>
                            </select>

                            <?php if(isset($CoursefeeError)){ ?>
                                
                                <div class="alert alert-danger">

                                <?php echo $CoursefeeError; ?>
                            
                                </div>

                            <?php } ?>

                        </div>
                        
                        
                        
                        <!---------------------------------------------------------------->

                        
                        
                        <div> <h4>Course Instructor: <?php echo "Saqlain!";?></h4> </br></div>

                        
                        
                        <!---------------------------------------------------------------->

                        <button type="submit" class="btn btn-success" id="myBtn1" name="save">Save</button>

                        <div class="container pt-3">
                            <div class="toast"> <div class="toast-header"> Information Saved!  </div>  </div> 
                        </div> 
                        
                        <!---------------------------------------------------------------->

                    
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


        $(document).ready(function(){
            $("#myBtn1").click(function(){
                $('.toast').toast('show');
            });
        });
    
        
    </script>


</body>

</html>
