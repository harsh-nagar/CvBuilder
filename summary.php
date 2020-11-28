<?php
session_start();
if(!isset($_SESSION['user_id'])){
    header("Location: index.php");
}
//include('connection.php');
//variables
$projectTitle1=$_POST['project1'];
$projectTitle2=$_POST['project2'];
$projectDesc1=$_POST['projectdesc1'];
$projectDesc2=$_POST['projectdesc2'];
if(isset($_POST['project'])){
    $project=$_POST['project'];
  if(isset($project[0])){
    $projectTitle3=$project[0];
   $_SESSION['project3']=$projectTitle3;
  }

  if(isset($project[1])){
    $projectTitle4=$project[0];
    $_SESSION['project4']=$projectTitle4;
  }


}
if(isset($_POST['projectdesc'])){
    $projectdesc=$_POST['projectdesc'];
    if(isset($projectdesc[0])){
        $projectDesc3=$projectdesc[0];
        $_SESSION['projectdesc3']=$projectDesc3;
    }
    if(isset($projectdesc[1])){
        $projectDesc4=$projectdesc[1];
        $_SESSION['projectdesc4']=$projectDesc4;
    }


}
//session variable
$_SESSION['project1']=$projectTitle1;
$_SESSION['project2']=$projectTitle2;
$_SESSION['projectdesc1']=$projectDesc1;
$_SESSION['projectdesc2']=$projectDesc2;
?>
<!DOCTYPE html>
<html>

<head>
    <title>Resume Builder</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <!--Stylesheet-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro:wght@600&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />

    <link rel="stylesheet" href="style.css">
    <script src="addbutton.js"></script>
</head>

<body>
    <?php include("menu.php"); ?>

    <!-- Progress Bar-->
    <div style="display: flex;flex-direction: column;text-align: center;">
        <div class="container1">
            <ul class="progressbar">
                <li class="active">About</li>
                <li class="active">Experience</li>
                <li class="active">Education</li>
                <li class="active">Skills</li>
                <li class="active">Award</li>
                <li class="active">Project</li>
                <li class="active">Summary</li>
            </ul>
        </div>

        <div class="container-fluid mb-3">
            <div class="row px-5 " style="justify-content: space-evenly;">
                <div class="col-sm-12 col-md-4 col-lg-4 bg-white box">
                    <h2 class="text-center text-primary">Summary</h2>
                    <div style="display: flex;justify-content: center; align-items: center;">
                        <img src="skill.png" alt="image" width="150px" height="150px">
                    </div>

                </div>
                <div class="col-md-8 col-sm-12 col-lg-6 bg-white box addinput  ">
                    <form class="p-2" method="post" action="final.php">
                        <div class="form-row">
                    
                            <div class="col-md-8 col-sm-4 col-lg-8">
                              <textarea class="form-control mt-2" placeholder="Summary" name="summary" required></textarea>
                            </div>
                        </div>
                       
                      
    

                        <div class="form-row ">
                            
                            <div class="col-md-8 col-sm-4 col-lg-8 "> <input class="btn btn-primary" type="submit" name="Get Resume" value="Next" id="next"></div>
                        </div>

                    </form>
                </div>

            </div>


        </div>
    </div>


    <?php include("footer.php"); ?>
    <script src="menubar.js"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>

</html>