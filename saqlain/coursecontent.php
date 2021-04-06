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
                <li><a href="/Eversity/courselanding.php">Fill up course details</a></li>
            </ul> 

            <h6>Plan your course</h6>
            <ul>
                <li><a href="/Eversity/courselanding.php">Target your Students</a></li>
            </ul> 

            <h6>Create your content</h6>
            <ul>  
                <li><a href="/Eversity/coursecontent.php">Curriculum</a></li>
            </ul>

            <h6>Choose Pricing</h6>
            <ul>  
                <li><a href="/Eversity/courselanding.php">Pricing</a></li>
            </ul>

            <ul>  
                <button type="submit" class="btn btn-info" id="myBtn2" name="save1">Submit Course</button>
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

                        <h4></br>Upload your course curriculum:</h4>
                        
                        <div class="mb-3">
                            
                            <div class="mb-3">
                                <label for="CourseContentUploadField">Content Name : </label>
                                <input type="text" name="ContentName" value="<?php echo $ContentName;?>" autocomplete="off" class="form-control" placeholder="Example: Introduction to this course!">
                            </div> 

                            <?php if(isset($messageforname)){ ?>
                                
                                <div class="alert alert-danger">

                                    <?php echo $messageforname; ?>
                                
                                </div>

                            <?php } ?>

                            <div class="file" id="CourseContentUploadField">
                                <input type="file" class="form-control" id="file" name="file">
                            </div>

                            <?php if(isset($success)){ ?>
                                
                                <div class="alert alert-success">

                                    <?php echo $success; ?>
                                
                                </div>

                            <?php } ?>

                            <?php if(isset($failed)){ ?>
                                
                                <div class="alert alert-danger">

                                    <?php echo $failed; ?>
                                
                                </div>

                            <?php } ?>

                            <?php if(isset($messageforvideo)){ ?>
                                
                                <div class="alert alert-danger">

                                    <?php echo $messageforvideo; ?>
                                
                                </div>

                            <?php } ?>

                            <?php if(isset($messagefordup)){ ?>
                                
                                <div class="alert alert-danger">

                                    <?php echo $messagefordup; ?>
                                
                                </div>

                            <?php } ?>

                        </div>
                        
                        </br></br>

                        <button type="submit" class="btn btn-success" id="myBtn5" name="savecourse">Save</button>
                        
                        <div class="container pt-3">
                            
                            <div class="toast"><div class="toast-header">Information Saved!</div></div> 
                            
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


        $(".custom-file-input").on("change", function() {
            var fileName = $(this).val().split("\\").pop();
            $(this).siblings(".custom-file-label").addClass("selected").html(CourseCurriculumfile);
        });



        $(document).ready(function(){
            $("#myBtn5").click(function(){
                $('.toast').toast('show');
            });
        });

        
        $(document).ready(function(){

            var html = '';

            var x=1 , mx=2;

            $("#add").click(function(){

                if(x<=mx){
                    $("#CourseContentUploadField").append(html);
                    x++;
                }else{
                    alert('You cannot add more than 3 content files!');
                }
                
            });

            $("#CourseContentUploadField").on('click','#remove',function(){
                $(this).closest('div').remove();
                x--;
            });

    
        });
        
    </script>


</body>

</html>