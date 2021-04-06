<?php
include("action.php");
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
    
    
    
    
    <div class="main_content">

        <div class="container p-3 my-3 border">
            <h1 style="font-size:xx-large; ">Enter Course Name and Title</h1>
        </div> 

        <section class="my-5">

            <div class="container p-3 my-3 border">

                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data">

                    <!---------------------------------------------------------------->                      
                    
                    <div class="form-group">  
                        <label for="sel1">Enter Course Name:</label>
                        <input type="text" name="CourseName" value = "<?php echo $CourseName;?>" autocomplete="off" class="form-control" placeholder="Example: Node.Js Development">

                        <?php if(isset($CourseNameError)){ ?>
                            
                            <div class="alert alert-danger">

                                <?php echo $CourseNameError; ?>
                            
                            </div>

                        <?php } ?>

                    </div>

                    <div class="form-group">  
                        <label for="sel1">Enter Course Title:</label>
                        <input type="text" name="CourseTitle" value = "<?php echo $CourseTitle;?>" autocomplete="off" class="form-control" placeholder="Example: Learn Node.Js from scratch">

                        <?php if(isset($CourseTitleError)){ ?>
                            
                            <div class="alert alert-danger">

                                <?php echo $CourseTitleError; ?>
                            
                            </div>

                        <?php } ?>

                    </div>
                    
                    <button type="submit" class="btn btn-success" id="myBtn1" name="proceed">Proceed</button>

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




                </form>

            </div>

        </section>

    </div>

</body>

</html>