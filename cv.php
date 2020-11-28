<?php
session_start();
if(!isset($_SESSION['user_id'])){
    header("Location: index.php");
}
$user_id=$_SESSION['user_id'];
include('connection.php');
ob_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>Resume | First Last</title>
	<meta name="robots" content="noindex, nofollow" />
	<style type="text/css" media="all">
		html {
			background-color: #FFF;
			padding: 0 1em;
		}

		body {
			background-color: #FFF;
			font-family: "Trebuchet MS";
			padding: 1em;
			margin: 1em auto;
			max-width: 50em;
		}

		#address {
			height: 5em;
			width: 48em;
			padding: 1em;
		}

		#address div {
			width: 13em;
			float: left;
		}

		#address h3 {
			border-bottom: none;
			font-variant: small-caps;
			margin-top: 0;
		}

		.date {
			float: right;
			font-size: .8em;
			margin-top: .4em;
			text-align: right;
		}

		abbr,
		acronym {
			border-bottom: 1px dotted #333;
			cursor: help;
		}

		address {
			font-style: italic;
			color: #333;
			font-size: .9em;
		}

		.content {
			width: 32em;
			margin: 0 0 0 16em;
		}

		.section {
			border-top: 1px solid #ccc;
			margin: 1em 0;
			padding: 1em;
		}

		ul {
			padding-left: .5em;
			margin-left: .5em;
		}

		h1 {
			margin: 1em 0 1em 9.5em;
			font-size: 1.75em;
		}

		h2 {
			width: 14em;
			float: left;
			font-size: 1em;
			font-variant: small-caps;
			letter-spacing: .06em;
		}

		h3 {
			margin-bottom: 0;
		}
	</style>
	<style type="text/css" media="print">
		body {
			background-color: #FFF;
			border-width: 0 0 0 0;
			margin: 0;
			width: 100%
		}
	</style>
</head>

<body>
	<h1><?php 
	$sql="select * from persnal_detail where user_id=$user_id";
	$result=mysqli_query($conn,$sql);
	if(mysqli_num_rows($result)>0){
	while($row=mysqli_fetch_assoc($result)){
		$fname=$row['fname'];
		$lname=$row['lname'];
		$contact=$row['contact'];
		$email=$row['email'];
		$address=$row['address'];
	}
	}
	echo $fname." ".$lname; ?></h1>
	<div id="address">
		<div>
			<h3>Local Address</h3>
			<!--335 Name Street, Unit #<br>
			Town, Province, N2H 3Y6<br>
			1-519-500-8252-->
			<?php echo $address; ?>
		</div>
		<div id="first">
			<h3>Credentials</h3>
			<?php echo $contact; ?>
			<!--3A, Your Major, <abbr title="University of Waterloo">UW</abbr>--><br />
			<a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a><br />
		<!--	<a href="http://www.YOURWEBSITE.ca">www.yourwebsite.ca</a>-->
		</div>
	<!--	<div>
			<h3>Permanent Address</h3>
			62 6th Avenue <br>
			Town, Ontario, N4N 2V6<br>
			1-519-500-4833
		</div>-->
	</div>

	<div class="section">
		<h2>Summary</h2>
		<div class="content">
		<?php 
			  $sql="select * from summary where user_id=$user_id";
			  $result=mysqli_query($conn,$sql);
			  $row=mysqli_fetch_assoc($result);
			?>
			<?php echo $row['summary_desc']; ?>
            <br/>
			<!--<ul>
				<li>Bullet one Bullet one</li>
				<li>Bullet two Bullet two</li>
				<li>Bullet three Bullet three</li>
				<li>Bullet four Bullet four</li>
				<li>Bullet five Bullet Five</li>
			</ul>-->
		</div>
	</div>

	<div class="section">
		<h2>Work Experience</h2>
		<div class="content">
			<?php 
			  $sql="select * from experience where user_id=$user_id";
			  $result=mysqli_query($conn,$sql);
			  if(mysqli_num_rows($result)){
                 while($row=mysqli_fetch_assoc($result)){
			  ?>

			<span class="date"><?php echo $row['s_month']." ".$row['s_year']; ?> &raquo; <?php if($row['e_month']=='present'){ echo "Present";}else{ echo $row['e_month']." ".$row['e_year'];}?></span>
			<h3><?php echo $row['job_title']; ?></h3>
			<address><?php echo $row['employer']; ?>,<?php echo $row['job_city'];?>,<?php echo $row['job_country']; ?></address>
			<ul>
				<li><?php echo $row['job_desc']; ?></li>
				
			</ul>
				 <?php }} ?>
			
		</div>
	</div>
	<div class="section">
		<h2>Projects</h2>
		<div class="content">
			<!--<span class="date">Start &raquo; End Year</span>-->
			<?php 
			  $sql="select * from project where user_id=$user_id";
			  $result=mysqli_query($conn,$sql);
			  if(mysqli_num_rows($result)){
                 while($row=mysqli_fetch_assoc($result)){
			  ?>
			<h3><?php echo $row['project_title']; ?></h3>
			<address><?php echo $row['project_desc']; ?></address>
		<!--	<ul>
				<li>Bullet one Bullet one</li>
				<li>Bullet two Bullet two</li>
				<li>Bullet three Bullet three</li>
			</ul>-->
				 <?php }} ?>
		</div>
	</div>
	<div class="section">
		<h2>Skills</h2>
		<div class="content">
			<!--<span class="date">Start &raquo; End Year</span>-->
			<?php 
			  $sql="select * from skill where user_id=$user_id";
			  $result=mysqli_query($conn,$sql);
			  if(mysqli_num_rows($result)){
                 while($row=mysqli_fetch_assoc($result)){
			  ?>
			<h3><?php echo $row['skill']; ?></h3>
			<address><?php echo $row['level']; ?></address>
		<!--	<ul>
				<li>Bullet one Bullet one</li>
				<li>Bullet two Bullet two</li>
				<li>Bullet three Bullet three</li>
			</ul>-->
				 <?php }} ?>
		</div>
	</div>

	<div class="section">
		<h2>Education</h2>
		<div class="content">
			<ul>
			<?php
				$sql="select * from education where user_id=$user_id";
				$result=mysqli_query($conn,$sql);
				if(mysqli_num_rows($result)>0){
				while($row=mysqli_fetch_assoc($result)){
					?>
				<li><?php echo $row['degree']; ?>, <?php echo $row['institute']; ?>, <?php echo $row['edu_city']; ?></li>
				<?php }}?>
			</ul>
		</div>
	</div>

	<div class="section">
		<h2>Academic Awards</h2>
		<div class="content">
			<ul>
				<?php
				$sql="select * from award where user_id=$user_id";
				$result=mysqli_query($conn,$sql);
				if(mysqli_num_rows($result)>0){
				while($row=mysqli_fetch_assoc($result)){
					?>
				<!--<li>Year, Year, Name of award/Scholarship</li>-->
				<li><?php echo $row['award_title']; ?>,<?php echo $row['award_issuer']; ?></li>
				<?php }} ?>
			</ul>
		</div>
	</div>

</body>

</html>
<?php
$body=ob_get_clean();
$body= iconv("UTF-8","UTF-8//IGNORE",$body);
include('mpdf/vendor/autoload.php');
//$mpdf = new \mPDF('c','A4','','',0,0,0,0,0,0);
$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML($body);

// Output a PDF file directly to the browser
$mpdf->Output('resume.pdf','D');



?>