<?php include('dbconnect.php');
session_start();
if(isset($_POST['login'])){
    $un=mysqli_real_escape_string($con,$_POST['uname']);
    $pw=mysqli_real_escape_string($con,$_POST['pword']);
    $sql="SELECT * FROM user WHERE username='$un' AND password='$pw'";
    $res=mysqli_query($con,$sql);
    if(mysqli_num_rows($res)>0){
        $_SESSION['user']=$un;
        header("location:home.php");
    }else{
        echo "failed to login";
    }
}
if(isset($_POST['create'])){
    $name=mysqli_real_escape_string($con,$_POST['name']);
    $regno=mysqli_real_escape_string($con,$_POST['regno']);
    $city=mysqli_real_escape_string($con,$_POST['city']);
    $sql="INSERT INTO student(name,regno,city) VALUES('$name','$regno','$city')";
    $res=mysqli_query($con,$sql);
    if($res){
        header("location:home.php");
    }else{
        echo "Failed to add students";
    }
}
if(isset($_POST['update'])){
    $id=mysqli_real_escape_string($con,$_POST['id']);
    $name=mysqli_real_escape_string($con,$_POST['name']);
    $regno=mysqli_real_escape_string($con,$_POST['regno']);
    $city=mysqli_real_escape_string($con,$_POST['city']);
    $sql="UPDATE student SET name='$name',regno='$regno',city='$city' WHERE id='$id'";
    $res=mysqli_query($con,$sql);
    if($res){
        header("location:home.php");
    }else{
        echo "Failed to update student";
    }
}
?>