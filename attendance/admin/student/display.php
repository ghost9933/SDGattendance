<!DOCTYPE html>
<html lang="en">
<?php
include '../top.php';
    @session_start();
    // include '../connect.php';
    // $username = $_SESSION['username'];
    // $password = $_SESSION['password'];
  
?>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<!-- icon cdn -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
        .card {
            -webkit-box-shadow: 18px 13px 18px -1px rgba(0,0,0,0.75);
            -moz-box-shadow: 18px 13px 18px -1px rgba(0,0,0,0.75);
            box-shadow: 18px 13px 18px -1px rgba(0,0,0,0.75);
            width: 12rem; height: 260px; 
        }
    </style> 


</head>
<body>
<br>
<nav class="navbar navbar-light bg-light justify-content-between">
  <a class="navbar-brand">WELCOME&nbsp;&nbsp;&nbsp;<?php echo $username;?></a>
  <form class="form-inline">
   
  <button type="button" class="btn btn-outline-danger">BACK</button>

  </form>
</nav>

<!-- cards -->

<!-- row1 -->
<div class="row"style="margin-top:70px; margin-bottom:30px">
    


    <div class="col-sm-4"style="padding-left:10rem">
        <div class="card" style="width: 12rem;">
        <div class="card-body text-center">
        <br>
        <i class="fa fa-bars fa-3x" aria-hidden="true"style="color: #9f1c32"></i>
       <br><br>
            <h5 class="card-title">DISPLAY ATTENDANCE</h5>
        </div>
        </div>  
    </div>

    

    <div class="col-sm-4"style="padding-left:8rem">
        <div class="card" style="width: 12rem;">
        <div class="card-body text-center">
        <br>
        <i class="fa fa-times fa-3x" aria-hidden="true"style="color: #9f1c32"></i>
       <br><br>
            <h5 class="card-title">GENERATE DEFAULTERS</h5>
        </div>
        </div>  
    </div>

   <div class="col-sm-4"style="padding-left:8rem">
        <div class="card" style="width: 12rem;">
        <div class="card-body text-center">
        <br>
        <i class="fa fa-address-card fa-3x" aria-hidden="true"style="color: #9f1c32"></i>
       <br><br>
            <h5 class="card-title">REGISTER FACULTY</h5>
        </div>
        </div>  
    </div>
    

</div> 
<!-- row1 ends -->

</body>
</html> 