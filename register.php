 <?php
  include('connection.php');
    
    $username = $_POST['username'];
    $name = $_POST['name'];
    $password = $_POST['pass'];
    
   $sql="select * from user where username='$username'";
   $result=mysqli_query($conn,$sql);
   
   if(mysqli_num_rows($result)>0){
          echo '<script>alert("Username already exist!");</script>';
          echo "<script>window.location.href='RegisterUser.php'</script>";
exit();
}
  $hashpassword=password_hash($password, PASSWORD_DEFAULT);
   $sql = "insert into user(username,name,password) values ('$username','$name','$hashpassword');";
   $result = mysqli_query($conn, $sql);

    //echo $sql;
    if ($result) {
        
        echo '<script>alert("User Registered Successfully !");</script>';
        echo "<script>window.location.href='index.php'</script>";
        
    } else {
        echo '<script>alert("Please Fill all the details !");</script>';
        echo "<script>window.location.href='RegisterUser.php'</script>";
    }

    ?>


