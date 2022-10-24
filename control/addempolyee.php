<?php

include("../model/connect.php");
if($_SERVER['REQUEST_METHOD']=='POST'){
    if($_POST['name']&& $_POST['email'] &&$_POST['phone'] &&$_POST['address'] &&$_POST['jobtitle'] &&$_POST['postalcode']){      

            $name=$_POST['name'];
            $email=$_POST['email'];
            $phone=$_POST['phone'];
            $address=$_POST['address'];
            $myimage=$_FILES['myimage'];
            $dateofbirth=$_POST['dateofbirth'];
            $gender=$_POST['gender'];
            $department=$_POST['department'];
            $status=$_POST['status'];
            $country=$_POST['country'];
            $jobtitle=$_POST['jobtitle'];
            $postalcode=$_POST['postalcode'];

 
            if($_FILES['myimage']['error']>"0"){
                $imgNewLocation="../images/default.jpg";
                $q="INSERT INTO `employees`(`name`, `address`, `country`, `phone`, `email`, `image`, `dateofbirth`, `gender`, `status`,`Department`, `jobtitle`, `postalCode`, `date`) 
                VALUES('$name','$address','$country','$phone','$email','$imgNewLocation','$dateofbirth','$gender','$status', '$department','$jobtitle','$postalcode',Now())";
                $result=$connect->query($q);
                if($result){
                        header("Location: ../view/loginform.php");
                }
            }
            else if($_FILES['myimage']['type']!="image/jpg"&& $_FILES['myimage']['type']!="image/png"&& $_FILES['myimage']['type']!="image/jpeg")
                {
                    echo "image type not support";
                }
            

            else{
                $imgName=$_FILES['myimage']['name'];
                $imgOldLocation=$_FILES['myimage']['tmp_name'];
                $t=time();
                $imgNewLocation="../images/$imgName";
                move_uploaded_file($imgOldLocation,$imgNewLocation);
                $q="INSERT INTO `employees`(`name`, `address`, `country`, `phone`, `email`, `image`, `dateofbirth`, `gender`, `status`,`Department`, `jobtitle`, `postalCode`, `date`) 
                VALUES('$name','$address','$country','$phone','$email','$imgNewLocation','$dateofbirth','$gender','$status', '$department','$jobtitle','$postalcode',Now())";
                $result=$connect->query($q);
                if($result){
                    header("Location: ../view/loginform.php");
                }
             } // end of else image
    
 }//end of isset
    else{  // null value
        session_start();
        $_SESSION['error']='All FIELDS MUST BE FILLED';
        header("Location: ../index.php");
    }

}


else{  // not request method
    session_start();
    $_SESSION['error']='YOU MUST BE LOGINED';
    header("Location: ../view/loginform.php");
}


