<?php
session_start();
include("../model/connect.php");
  $id=$_GET['id'];
if($connect){
    $sql="SELECT * FROM employees WHERE id='$id'";
    $result=$connect->query($sql);
    if($result->num_rows==0){
        header("Location: alluser.php");
    }
     
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee CRM</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <style>
      
        .helloform{
            box-shadow: 10px 10px 10px #ccc, -10px -10px 10px #ccc;
            padding: 8px 0px;
            margin: 100px auto;
            background-color: rgba(255, 255, 255, 0.603);
            width: 500px;

           
        }
    </style>
</head>
<body>

    

<?php foreach($result as $r){ ?>
  <div class="container ">
  <!-- Content here -->

    <div class="card helloform" style="width: 18rem;">
    <img src="<?= $r['image']?>" width="100%" height="300px" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Name: <?php echo $r['name']?></h5>
          <p class="card-text">Address: <?php echo $r['address'] ?></p>
          <p class="card-text">Country: <?php echo$r['country'] ?></p>
          <p class="card-text">Phone: <?php echo $r['phone'] ?></p>
          <p class="card-text">Gender: <?php echo $r['gender'] ?></p>
          <p class="card-text">Department: <?php echo $r['Department'] ?></p>
          <p class="card-text">Job Title:<?php echo $r['jobtitle'] ?></p>
          <a href="alluser.php" class="btn btn-primary">return</a>
        </div>
      </div>
      </div>
<?php } ?>


<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script> 
</body>
</html>