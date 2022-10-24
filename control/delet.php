    <?php
    
    session_start();    
    include("../model/connect.php");
    $id=$_GET['id'];
    $q="DELETE FROM `employees` WHERE `id`= $id";
    if($connect->query($q)){
        header("Location: ../view/users.php");

    }
