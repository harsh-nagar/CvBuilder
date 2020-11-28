<?php
session_start();
include('connection.php');
if(!isset($_SESSION['user_id'])){
    header("Location: index.php");
}
$user_id=$_SESSION['user_id'];

//personal details
$firstname = $_SESSION['fname'];
$lastname = $_SESSION['lname'];
$address = $_SESSION['address'];
$email = $_SESSION['email'];
$contact = $_SESSION['contact'];
$sql = "insert into persnal_detail (user_id,fname,lname,contact,email,address) values($user_id,'$firstname','$lastname','$contact','$email','$address')";
$result = mysqli_query($conn, $sql);


//Experience
if (isset($_SESSION['employer1'])) {
    $employer = $_SESSION['employer1'];
    $jobTitle = $_SESSION['jobtitle1'];
    $city = $_SESSION['city1'];
    $country = $_SESSION['country1'];
    $jobdesc = $_SESSION['jobdesc1'];
    $startMonth = $_SESSION['smonth1'];
    $startYear = $_SESSION['syear1'];
    if (isset($_SESSION['eyear1']) && isset($_SESSION['emonth1'])) {
       
        $endMonth = $_SESSION['emonth1'];
        $endYear = $_SESSION['eyear1'];
    }
    else{
        $endMonth="Present";
        $endYear="";
    }
$sql = "insert into experience (user_id,employer,job_title,job_city,job_country,job_desc,s_month,s_year,e_month,e_year) values($user_id,'$employer','$jobTitle','$city','$country','$jobdesc','$startMonth','$startYear','$endMonth','$endYear')";
$result = mysqli_query($conn, $sql);
}
$employer = $_SESSION['employer'];
$jobTitle = $_SESSION['jobtitle'];
$city = $_SESSION['city'];
$country = $_SESSION['country'];
$jobdesc = $_SESSION['jobdesc'];
$startMonth = $_SESSION['smonth'];
$startYear = $_SESSION['syear'];
if (isset($_SESSION['eyear']) && isset($_SESSION['emonth'])) {
    $endMonth = $_SESSION['emonth'];
    $endYear = $_SESSION['eyear'];
}
else{
    $endMonth="Present";
    $endYear="";
}
$sql = "insert into experience (user_id,employer,job_title,job_city,job_country,job_desc,s_month,s_year,e_month,e_year) values($user_id,'$employer','$jobTitle','$city','$country','$jobdesc','$startMonth','$startYear','$endMonth','$endYear')";
$result = mysqli_query($conn, $sql);

//Education
if(isset($_SESSION['institute1'])){
$institute = $_SESSION['institute1'];
$schoolcity = $_SESSION['schoolcity1'];
$degree = $_SESSION['degree1'];
if(isset($_SESSION['graduateyear1'])){
$graduationYear = $_SESSION['graduateyear1'];
}
else{
    $graduationYear="Present";
}
$sql = "insert into education (user_id,institute,edu_city,degree,graduate_year) values($user_id,'$institute','$schoolcity','$degree','$graduationYear')";
$result = mysqli_query($conn, $sql);
}
$institute = $_SESSION['institute'];
$schoolcity = $_SESSION['schoolcity'];
$degree = $_SESSION['degree'];
if(isset($_SESSION['graduateyear'])){
$graduationYear = $_SESSION['graduateyear'];
}
else{
    $graduationYear="Present";
}
$sql = "insert into education (user_id,institute,edu_city,degree,graduate_year) values($user_id,'$institute','$schoolcity','$degree','$graduationYear')";
$result = mysqli_query($conn, $sql);



//Skill
$skill1=$_SESSION['skill1'];
$level1=$_SESSION['level1'];
$sql = "insert into skill (user_id,skill,level) values($user_id,'$skill1','$level1')";
$result = mysqli_query($conn, $sql);

$skill2=$_SESSION['skill2'];
$level2=$_SESSION['level2'];
$sql = "insert into skill (user_id,skill,level) values($user_id,'$skill2','$level2')";
$result = mysqli_query($conn, $sql);

$skill3=$_SESSION['skill3'];
$level3=$_SESSION['level3'];
$sql = "insert into skill (user_id,skill,level) values($user_id,'$skill3','$level3')";
$result = mysqli_query($conn, $sql);

if(isset($_SESSION['skill4']) && isset($_SESSION['level4'])){
$skill4=$_SESSION['skill4'];
$level4=$_SESSION['level4'];
$sql = "insert into skill (user_id,skill,level) values($user_id,'$skill4','$level4')";
$result = mysqli_query($conn, $sql);
}

if(isset($_SESSION['skill5']) && isset($_SESSION['level5'])){
$skill5=$_SESSION['skill5'];
$level5=$_SESSION['level5'];
$sql = "insert into skill (user_id,skill,level) values($user_id,'$skill5','$level5')";
$result = mysqli_query($conn, $sql);
}



//Award
$award1 = $_SESSION['award1'];
$issuer1 = $_SESSION['issuer1'];

$sql = "insert into award (user_id,award_title,award_issuer) values($user_id,'$award1','$issuer1')";
$result = mysqli_query($conn, $sql);

$award2 = $_SESSION['award2'];
$issuer2 = $_SESSION['issuer2'];

$sql = "insert into award (user_id,award_title,award_issuer) values($user_id,'$award2','$issuer2')";
$result = mysqli_query($conn, $sql);


if(isset($_SESSION['award3']) && isset($_SESSION['issuer3'])){
    $award3=$_SESSION['award3'];
    $issuer3=$_SESSION['issuer3'];
$sql = "insert into award (user_id,award_title,award_issuer) values($user_id,'$award3','$issuer3')";
$result = mysqli_query($conn, $sql);
}

if(isset($_SESSION['award4']) && isset($_SESSION['issuer4'])){
    $award3=$_SESSION['award4'];
    $issuer3=$_SESSION['issuer4'];
$sql = "insert into award (user_id,award_title,award_issuer) values($user_id,'$award4','$issuer4')";
$result = mysqli_query($conn, $sql);
}

if(isset($_SESSION['award5']) && isset($_SESSION['issuer5'])){
    $award3=$_SESSION['award5'];
    $issuer3=$_SESSION['issuer5'];
$sql = "insert into award (user_id,award_title,award_issuer) values($user_id,'$award5','$issuer5')";
$result = mysqli_query($conn, $sql);
}


//project
$projectTitle1=$_SESSION['project1'];
$projectDesc1=$_SESSION['projectdesc1'];

$sql = "insert into project (user_id,project_title,project_desc) values($user_id,'$projectTitle1','$projectDesc1')";
$result = mysqli_query($conn, $sql);

$projectTitle2=$_SESSION['project2'];
$projectDesc2=$_SESSION['projectdesc2'];

$sql = "insert into project (user_id,project_title,project_desc) values($user_id,'$projectTitle2','$projectDesc2')";
$result = mysqli_query($conn, $sql);

if(isset($_SESSION['project3']) && isset($_SESSION['projectdesc3'])){
$projectTitle3=$_SESSION['project3'];
$projectDesc3=$_SESSION['projectdesc3'];
$sql = "insert into project (user_id,project_title,project_desc) values($user_id,'$projectTitle3','$projectDesc3')";
$result = mysqli_query($conn, $sql);
}
if(isset($_SESSION['project4']) && isset($_SESSION['projectdesc4'])){
    $projectTitle4=$_SESSION['project3'];
    $projectDesc4=$_SESSION['projectdesc3'];
    $sql = "insert into project (user_id,project_title,project_desc) values($user_id,'$projectTitle4','$projectDesc4')";
$result = mysqli_query($conn, $sql);
}
    



//summary
$summary=$_POST['summary'];
$_SESSION['summary']=$summary;
$sql="insert into summary (user_id,summary_desc) values($user_id,'$summary')";
$result=mysqli_query($conn,$sql);

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
<body >
    <?php include('menu.php') ?>
    <div class="container box ">
      <div class="row justify-content-center p-3"><button class="btn btn-primary mt-2" onclick="window.open('cv.php','_blank')" >Get your Resume</button></div>
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