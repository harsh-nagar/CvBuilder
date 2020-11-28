<?php
session_start();
if(!isset($_SESSION['user_id'])){
    header("Location: index.php");
}
//include('connection.php');
//variable
$institute = $_POST['institute'];
$schoolcity = $_POST['schoolcity'];
$degree = $_POST['degree'];
$graduationYear = $_POST['graduateyear'];

//session variable
$_SESSION['institute']=$institute;
$_SESSION['schoolcity']=$schoolcity;
$_SESSION['degree']=$degree;
$_SESSION['graduateyear']=$graduationYear;
/*<!--Remaning  session variable start month and year end month and year-->*/
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
    <link rel="stylesheet" href="style.css">
   
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
                <li>Skills</li>
                <li>Award</li>
                <li>Project</li>
                <li>Summary</li>
            </ul>
        </div>

        <div class="container-fluid mb-3">
            <div class="row px-5 " style="justify-content: space-evenly;">
                <div class="col-sm-12 col-md-4 col-lg-4 bg-white box">
                    <h2 class="text-center text-primary">Education</h2>
                    <div style="display: flex;justify-content: center; align-items: center;">
                        <img src="mortarboard.png" alt="image" width="150px" height="150px">
                    </div>

                </div>
                <div class="col-md-8 col-sm-12 col-lg-6 bg-white box  ">
                    <form class="p-2" method="post" action="skills.php">
                        <div class="form-row">
                            <div class="col-md-4 col-sm-4 col-lg-4"> <input type="text" name="institute" placeholder="Institute" required></div>
                            <div class="col-md-4 col-sm-4 col-lg-4"> <input type="text" name="schoolcity" placeholder="City" required></div>
                        </div>
                        <div class="form-row">

                            <div class="col-md-4 col-sm-4 col-lg-4">
                                <select name="degree" id="" class="form-control" style="margin-top:25px;cursor:pointer;width:100%;" required>
                                    <option selected disabled>Select your degree</option>
                                    <option value="Higher Secondary">Higher Secondary</option>
                                    <option value="Senior Secondary">Senior Secondary</option>
                                    <option value="Bachelor of technology">Bachelor of Technology</option>
                                    <option value="Bachelor of engineering">Bachelor of Engineering</option>
                                    <option value="Master of technology">Master of Technology</option>
                                    <option value="Master of Business Administration">Master of Business Administration</option>
                                </select>

                            </div>
                            <div class="col-md-4 col-sm-4 col-lg-4">
                                <select id="year" name="graduateyear" class="form-control" style="margin-top:25px;cursor:pointer;width:100%;" required>
                                    <option selected disabled>Graduation year</option>
                                    <?php
                                    for ($i = 2024; $i > 1959; $i--) {
                                    ?>
                                        <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                    <?php }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-4 col-sm-4 col-lg-4"> </div>
                            <div class="col-md-4 col-sm-4 col-lg-4 "> <input id="attending" class="mt-2  " type="checkbox" name="attending"><label class="ml-2" style="font-size:12px;">I am presently attending </label></div>

                        </div>





                        <div class="form-row ">
                            <!--<div class="col-md-4 col-sm-4 col-lg-4"> <input type="submit" name="previous"
                                        value="Previous" id="previous"></div>-->
                            <div class="col-md-6 col-sm-4 col-lg-8 "> <input class="btn btn-primary" type="submit" name="next" value="Next" id="next"></div>
                        </div>

                    </form>
                </div>

            </div>


        </div>
    </div>


    <?php include("footer.php"); ?>
    <script src="menubar.js"></script>
    <script src="select2.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>

</html>