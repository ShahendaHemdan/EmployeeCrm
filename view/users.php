<?php
session_start();
include "../model/connect.php";
$q="SELECT * FROM  employees";
$result=$connect->query($q);



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee CRM</title>
    <link rel="stylesheet" href="../css/all.css">
    <link rel="stylesheet" href="../css/all.min.css">
    <link rel="stylesheet" href="../js/all.js">
    <link rel="stylesheet" href="../js/all.min.js">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <style>
       
        .helloform{
            box-shadow: 10px 10px 10px #ccc, -10px -10px 10px #ccc;
            padding: 20px 50px;
            margin: 100px auto;
            background-color: rgba(255, 255, 255, 0.603);
           
        }

        i{
  color: #1c1f21;
  padding-left: 0px;
}
    </style>
</head>
<body>


    
    <div class="container-fluid w-100 mt-5 helloform text-center">
        <h1 class="mb-5 ">Show All Empolyee </h1>
        <a href="../view/adduser.html" class="btn btn-primary mb-5">+ADD NEW USER</a>
        
        <table class="table table-striped">
            <thead>
              <th>image</th>
              <th>Name</th>
              <th>address</th>
              <th>phone</th>
              <th>email</th>
              <th>country</th>
              <th>gender</th>
               <th>Department</th>
              <th>jobtitle</th>
              <th>dateofbirth</th>
              <th>status</th>
              <th>postalCode</th>
              <th>Action</th>
               
            </thead>
            <tbody>

<?php 
foreach($result as $r){
 

?>
              <tr>
                <td><img src="<?= $r['image'] ?>" width="100%" height="50px" alt="image"></td>
                <td><?php echo $r['name'] ?></td>
                <td><?php echo $r['address'] ?></td>
                <td><?php echo $r['phone'] ?></td>
                <td><?php echo $r['email'] ?></td>
                <td><?php echo $r['country'] ?></td>
                <td><?php echo $r['gender'] ?></td>
                <td><?php echo $r['Department'] ?></td>
                <td><?php echo $r['jobtitle'] ?></td>
                <td><?php echo $r['dateofbirth'] ?></td>
                <td><?php echo $r['status'] ?></td>
                <td><?php echo $r['postalCode'] ?></td>
                
                <td><a href="../view/show.php?id=<?= $r['id'] ?>"><i class="fa fa-eye" aria-hidden="true"></i></a> 
                <a href="../view/edituser.php?id=<?= $r['id'] ?>" ><i class="fa-sharp fa-solid fa-pen"></i></a>
                <a href="../control/delet.php?id=<?= $r['id'] ?>" ><i class="fa-sharp fa-solid fa-trash"> </i></a>

               </td>
                 
              </tr>
            <?php } ?>
              
            </tbody>
          </table>
          <a href="../control/logout.php" class="btn btn-danger">Log out</a>

        
    </div>



    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script> 
</body>
</html>