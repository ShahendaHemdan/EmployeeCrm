<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    

include("../model/connect.php");
    session_start();

        // check if data enterd belongs to Admin or not
        $q="SELECT * FROM employees WHERE id=1";
        $result=$connect->query($q);
    
        foreach($result as $r){
            $_SESSION['adminname']=$r['name'];
            $_SESSION['adminemail']=$r['email'];
            }
 
    $name=$_POST['name'];
    $email=$_POST['email'];


    
        
        $sql="SELECT * FROM employees WHERE `name`='$name' AND `email`='$email' ";
        $result=$connect->query($sql);

        if($result->num_rows>0){  
            if($name==$_SESSION['adminname']&&$email==$_SESSION['adminemail'])      // check if user is admin or not
                header("Location: ../view/users.php");

            else  // the user not admin
                {  header("Location: ../view/alluser.php");} 
        
    }  //end if of  checking rows
        
    else{   // NOT USER OR ADMIN    
        $_SESSION['error']='Name Or Email Not Found';
        header("Location: ../view/loginform.php");
    } 


 } //end of REQUESE_METHOD

 else{  // not request method
    session_start();
    $_SESSION['error']='YOU MUST BE  REGISTERD';
    header("Location: ../index.php");
}
