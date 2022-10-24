<?php
include("../model/connect.php");
     $id=$_GET['id'];
    $name=$_POST['name'];
    $email=$_POST['email']; 
    $phone=$_POST['phone'];
    $address=$_POST['address'];
    $dateofbirth=$_POST['dateofbirth'];
    $gender=$_POST['gender'];
    $department=$_POST['department'];
    $status=$_POST['status'];
     $country=$_POST['country'];
    $jobtitle=$_POST['jobtitle'];
    $postalcode=$_POST['postalcode'];
if($name && $email && $phone && $address && $dateofbirth && $jobtitle && $postalcode ){ //not null
    $q="UPDATE `employees` SET `name`='$name',`address`='$address',`country`='$country',`phone`='$phone',`email`='$email',`dateofbirth`='$dateofbirth',`gender`='$gender',`status`='$status',`Department`='$department',`jobtitle`='$jobtitle',`postalCode`='$postalcode' WHERE `id`= '$id'";
     if($connect->query($q)){
      
        header("Location: ../view/users.php");
    }
    
}

else{  //null
 
    session_start();
    $_SESSION['error']='Can Not Be Null';
    header("Location: ../view/edituser.php");  
}
?>