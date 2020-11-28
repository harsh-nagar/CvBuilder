<?php
session_start();
if(!isset($_SESSION['user_id'])){
    header("Location: index.html");
}
//include('connection.php');
//variables
$skill1 = $_POST['skill1'];
$skill2 = $_POST['skill2'];
$skill3 = $_POST['skill3'];

$level1 = $_POST['level1'];
$level2 = $_POST['level2'];
$level3 = $_POST['level3'];

if (isset($_POST['skill'])) {
    $skill = $_POST['skill'];
    if (isset($skill[0])) {
        $skill4 = $skill[0];
        $_SESSION['skill4'] = $skill4;
    }
    if (isset($skill[1])) {
        $skill5 = $skill[1];
        $_SESSION['skill5'] = $skill5;
    }
}

if (isset($_POST['level'])) {
    $level = $_POST['level'];
    if (isset($level[0])) {
        $level4 = $level[0];
        $_SESSION['level4'] = $level4;
    }
    if (isset($level[1])) {
        $level5 = $level[1];
        $_SESSION['level5'] = $level5;
    }
}


//session variable
$_SESSION['skill1'] = $skill1;
$_SESSION['skill2'] = $skill2;
$_SESSION['skill3'] = $skill3;

$_SESSION['level1'] = $level1;
$_SESSION['level2'] = $level2;
$_SESSION['level3'] = $level3;

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
    <script src="addbutton1.js"></script>
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
                <li>Project</li>
                <li>Summary</li>
            </ul>
        </div>

        <div class="container-fluid mb-3">
            <div class="row px-5 " style="justify-content: space-evenly;">
                <div class="col-sm-12 col-md-4 col-lg-4 bg-white box">
                    <h2 class="text-center text-primary">Awards</h2>
                    <div style="display: flex;justify-content: center; align-items: center;">
                        <img src="experience.png" alt="image" width="150px" height="150px">
                    </div>

                </div>
                <div class="col-md-8 col-sm-12 col-lg-6 bg-white box addinput  ">
                    <form class="p-2" method="post" action="project.php">
                        <div class="form-row">
                            <div class="col-md-4 col-sm-4 col-lg-4"> <input type="text" name="award1" placeholder="Award Title" required></div>
                            <div class="col-md-4 col-sm-4 col-lg-4">
                                <input type="text" name="issuer1" placeholder="Issuer" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-4 col-sm-4 col-lg-4"> <input type="text" name="award2" placeholder="Award Title" required></div>
                            <div class="col-md-4 col-sm-4 col-lg-4">
                                <input type="text" name="issuer2" placeholder="Issuer" required>
                            </div>
                        </div>


                        <div class="wrap">


                        </div>

                        <div class="form-row ">
                            <div class="col-md-4 col-sm-4 col-lg-4">
                                <input type="submit" class="btn btn-primary add_button" value="Add Awards">
                            </div>
                            <div class="col-md-4 col-sm-4 col-lg-4 "> <input class="btn btn-primary" type="submit" name="next" value="Next" id="next"></div>
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