<?php
session_start();
include('conn.php');

if(isset($_POST['adduser'])){
    
    $name = $_POST['name'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $comment = $_POST['comment'];
 
    $user_query = "INSERT INTO form (name,address,email,comment) VALUES ('$name','$address','$email','$comment')";
    $user_query_run = mysqli_query($con, $user_query);
 
    if($user_query_run){

        $_SESSION['status'] = "Submited sucessfully";
        header("Location:index.php");
    }
    
    else{

        $_SESSION['status'] = "Submission failed";
        header("Location:index.php");
    }   

}
?>