<?php 
session_start();
include('connection.php');
$username=$_POST["username"];
$password=$_POST["password"];

$sql = "SELECT * FROM user WHERE username='$username'";
$result = mysqli_query($conn, $sql);
$row=mysqli_fetch_assoc($result);

if (mysqli_num_rows($result) > 0) {
$correctpass=$row["password"];
if(password_verify($password,$correctpass)){

$_SESSION['user_id']=$row['user_id'];
header("Location: home.php");

}
else{

echo "<script>alert('Invalid Username or Password');</script>";
echo "<script>window.location.href='index.php'</script>";
}
}
else{
echo "<script>alert('Username does not exist');</script>";
echo "<script>window.location.href='index.php'</script>";
}
?>
