<?php
session_start();
header('location:login.php');
$con= mysqli_connect("localhost", "root","mehakjain");
mysqli_select_db($con,"logininfo");
$user=$_POST['user'];
$password=$_POST['password'];
$email=$_POST['email'];
$s="select * from logintable where email= '$email' ";
$result=  mysqli_query($con, $s);
$num=  mysqli_num_rows($result);
if($num==0){
    $reg="insert into logintable(username,email,password)values('$user','$email','$password')";
    
    mysqli_query($con, $reg);
    
    

    echo "Registration Successfull";

}
else{
    echo"Email id already taken";
}
