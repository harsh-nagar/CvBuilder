<?php
session_start();
if(!isset($_SESSION['user_id'])){
    header("Location: index.php");
}

//include('connection.php');
?>
<!DOCTYPE html>
<html>
<head>
    <title>Resume Builder</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <!--Stylesheet-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro:wght@600&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php include("menu.php"); ?>
        <div style="display: flex;flex-direction: column;text-align: center;">
            <div class="container1">
                <ul class="progressbar">
                    <li class="active">About</li>
                    <li>Experience</li>
                    <li>Education</li>
                    <li>Skills</li>
                    <li>Award</li>
                    <li>Project</li>
                    <li>Summary</li>
                </ul>
            </div>

            <div class="container-fluid mb-3">
                <div class="row px-5 " style="justify-content: space-evenly;">
                    <div class="col-sm-12 col-md-3 col-lg-4 bg-white box">
                        <h2 class="text-center text-primary">About</h2>
                        <div style="display: flex;justify-content: center; align-items: center;">
                            <img src="cv.png" alt="image" width="150px" height="150px">
                        </div>

                    </div>
                    <div class="col-md-8 col-sm-12 col-lg-6 bg-white box  ">
                        <form class="p-2" method="post" action="form2.php">
                            <div class="form-row">
                                <div class="col-md-4 col-sm-4 col-lg-4"> <input type="text" name="fname"
                                        placeholder="First Name" required></div>
                                <div class="col-md-4 col-sm-4 col-lg-4"> <input type="text" name="lname"
                                        placeholder="Last Name" required></div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-4 col-sm-4 col-lg-4"> <input type="text" name="contact"
                                        placeholder="Contact" required></div>
                                <div class="col-md-4 col-sm-4 col-lg-4"> <input type="email" name="email"
                                        placeholder="Email" required></div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-8 col-sm-8 col-lg-8"> <input type="text" name="address"
                                        placeholder="Address Line 1" required></div>
                               
                            </div>
                            <div class="form-row">
                                <div class="col-md-8 col-sm-8 col-lg-8"> <input type="text" name="address2"
                                        placeholder="Address Line 2"></div>
                               
                            </div>
                            <div class="form-row ">
                               <!--<div class="col-md-4 col-sm-4 col-lg-4"> <input type="submit" name="previous"
                                        value="Previous" id="previous"></div>-->
                                <div class="col-md-6 col-sm-4 col-lg-8"> <input  class="btn btn-primary" type="submit" name="next"
                                value="Next" id="next"></div>
                            </div>

                        </form>
                    </div>

                </div>


            </div>
        </div>
        <?php include("footer.php"); ?>

<script src="menubar.js"></script>

       
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
            crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
            integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
            crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
            integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s"
            crossorigin="anonymous"></script>
</body>

</html>