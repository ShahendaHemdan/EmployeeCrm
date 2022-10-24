<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee CRM</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <style>
        body{
            background-image: url('images/body.jpeg');
            background-size: cover;
            background-position: center;
        }
        .helloform{
            box-shadow: 10px 10px 10px #ccc, -10px -10px 10px #ccc;
            padding: 20px 50px;
            margin: 100px auto;
            background-color: rgba(255, 255, 255, 0.603);
           
        }
       
    </style>
</head>
<body>


    
    <div class="container w-50 mt-5 helloform">
             <?php session_start();
            if(isset($_SESSION['error'])){ ?>
            <div class="alert alert-danger text-center" role="alert">
                <?php echo $_SESSION['error'];
                session_destroy(); ?>
              </div>
              <?php } ?>

              <!-- login error-->

              <?php  
            if(isset($_SESSION['loginerror'])){ ?>
            <div class="alert alert-danger text-center" role="alert">
                <?php echo $_SESSION['error'];
                session_destroy(); ?>
              </div>
              <?php } ?>
        <div class="">
            <h1 class="text-center mb-5">Login Form</h1>
         </div>
        <form class="  mx-auto " action="../control/login.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" name="name">
            </div>

            <div class="form-group">
                <label>Email Address</label>
                <input type="email" class="form-control" name="email">
            </div>
        
            <button type="submit" class=" w-100 btn btn-success"> Submit</button>
          </form>
          <div class="text-center">
            <a href="../index.php" class="btn btn-primary mt-5 ">Register</a>
          </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script> 
</body>
</html>