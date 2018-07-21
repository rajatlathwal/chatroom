 <?php
 
 include 'dbh.php';
 $uname=$_POST['uname'];
 $email=$_POST['email'];
 $pass=$_POST['password'];
 
 $sql="insert into signup(username,email,password)
 values ('$uname','$email','$pass')";
 $result= $conn->query($sql);
 header("Location:start.php");
 ?>