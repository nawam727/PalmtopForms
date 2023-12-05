<?php
require 'sql_db_connection.php' ;
if(!empty($_SESSION["id"]))
{
  header("Location:LAP.php");
}
if(isset($_POST["submit"])){
    $uname=$_POST["username"];
    $email=$_POST["email"];
    $pass=$_POST["password"];
    $duplicate =mysqli_query($conn,"Select * from users where uname='$uname' OR email='$email'");

    if(mysqli_num_rows($duplicate)>0){
      echo
      "<script>
      alert('UserName or Email Has Already Taken');
      window.location.href='signup.html';
      </script>";
        
       
    }
    else
    {
      
        $query="Insert Into Users Values ('','$uname','$email','$pass')";
        mysqli_query($conn,$query);
        echo
        "<script>
        alert('Registration Successful');
        window.location.href='login.html';
        </script>";
        
    }
}
?>
