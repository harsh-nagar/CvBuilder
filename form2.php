<?php
session_start();
if(!isset($_SESSION['user_id'])){
    header("Location: index.php");
}

//include('connection.php');
//Variables
$firstname = $_POST['fname'];
$lastname = $_POST['lname'];
$add1 = $_POST['address'];
$add2 = $_POST['address2'];
$address = $add1 . " " . $add2;
$email = $_POST['email'];
$contact = $_POST['contact'];
//session variables
$_SESSION['fname'] = $firstname;
$_SESSION['lname'] = $lastname;
$_SESSION['address'] = $address;
$_SESSION['email'] = $email;
$_SESSION['contact'] = $contact;
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
    <script src="addbutton3.js"></script>
</head>

<body>
    <?php include("menu.php"); ?>

    <!-- Progress Bar-->
    <div style="display: flex;flex-direction: column;text-align: center;">
        <div class="container1">
            <ul class="progressbar">
                <li class="active">About</li>
                <li class="active">Experience</li>
                <li>Education</li>
                <li>Skills</li>
                <li>Award</li>
                <li>Project</li>
                <li>Summary</li>
            </ul>
        </div>

        <div class="container-fluid mb-3">
            <div class="row px-5 " style="justify-content: space-evenly;">
                <div class="col-sm-12 col-md-4 col-lg-4 bg-white box">
                    <h2 class="text-center text-primary">Experience</h2>
                    <div style="display: flex;justify-content: center; align-items: center;">
                        <img src="experiment-results.png" alt="image" width="150px" height="150px">
                    </div>

                </div>
                <div class="col-md-8 col-sm-12 col-lg-6 bg-white box  ">
                    <form class="p-2" method="post" id="form1" action="education.php">
                        <div class="form-row">
                            <div class="col-md-4 col-sm-4 col-lg-4"> <input type="text" name="employer" placeholder="Employer" required></div>
                            <div class="col-md-4 col-sm-4 col-lg-4"> <input type="text" name="jobtitle" placeholder="Job Title" required></div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-4 col-sm-4 col-lg-4"> <input type="text" name="city" placeholder="City" required></div>
                            <div class="col-md-4 col-sm-4 col-lg-4">
                                <select name="country" class="form-control" style="margin-top:10px;cursor:pointer;width:100%;">
                                    <option value="India">India</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-row">


                            <div class="col-md-4 col-sm-4 col-lg-4">

                                <select name="smonth" class="form-control mt-2">
                                    <option selected disabled>Start Month</option>
                                    <option value="January">January</option>
                                    <option value="Feburary">Feburary</option>
                                    <option value="March">March</option>
                                    <option value="April">April</option>
                                    <option value="May">May</option>
                                    <option value="June">June</option>
                                    <option value="July">July</option>
                                    <option value="August">August</option>
                                    <option value="September">September</option>
                                    <option value="October">October</option>
                                    <option value="November">November</option>
                                    <option value="December">December</option>

                                </select>
                            </div>
                            <div class="col-md-4 col-sm-4 col-lg-4 ">
                                <select name="syear" class="form-control mt-2">
                                    <option selected disabled>Start year</option>
                                    <?php
                                    for ($i = 2020; $i > 1959; $i--) {
                                    ?>
                                        <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                    <?php }
                                    ?>
                                </select>

                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-md-4 col-sm-4 col-lg-4">

                                <select id="monthselect" name="emonth" class="form-control mt-2">
                                    <option selected disabled>End month</option>
                                    <option value="January">January</option>
                                    <option value="Feburary">Feburary</option>
                                    <option value="March">March</option>
                                    <option value="April">April</option>
                                    <option value="May">May</option>
                                    <option value="June">June</option>
                                    <option value="July">July</option>
                                    <option value="August">August</option>
                                    <option value="September">September</option>
                                    <option value="October">October</option>
                                    <option value="November">November</option>
                                    <option value="December">December</option>
                                </select>
                            </div>
                            <div class="col-md-4 col-sm-4 col-lg-4 ">
                                <select id="yearselect" name="eyear" class="form-control mt-2">
                                    <option selected disabled>End year</option>
                                    <?php
                                    for ($i = 2020; $i > 1959; $i--) {
                                    ?>
                                        <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                    <?php }
                                    ?>
                                </select>

                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-4 col-sm-4 col-lg-4"> </div>
                            <div class="col-md-4 col-sm-4 col-lg-4 "> <input class="mt-2 " id="working" type="checkbox" name="working"><label class="ml-2" style="font-size:15px;">I am presently working</label></div>

                        </div>
                        <div class="form-row">
                            <div class="col-md-8 col-sm-8 col-lg-8">
                                <textarea name="jobdescription" placeholder="Job Description" class="form-control mt-2"></textarea>
                            </div>
                        </div>
                        <div class="wrap">

                        </div>
                        <div class="form-row ">
                            <div class="col-md-4 col-sm-4 col-lg-4"> <button name="addbutton" class="btn btn-primary add_button" style="margin-top: 20px;">Add more</button></div>
                            <div class="col-md-4 col-sm-4 col-lg-4 "> <input class="btn btn-primary" type="submit" name="submit" value="Next" id="next"></div>
                        </div>

                    </form>
                </div>

            </div>


        </div>

    </div>


    <?php include("footer.php"); ?>
    <script src="selection.js"></script>
    <script src="menubar.js"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>

</html>