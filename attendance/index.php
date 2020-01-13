<!-- // login page
// login card etc etc -->
<?php 
session_start();
if (isset($_SESSION['username'])){
    echo '<script language="javascript"> alert("LOGIN AGAIN.."); </script>';
    session_unset();
     session_destroy();
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
 body {
     margin : unset;
    font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: black;
    
    /* background-color: #9f1c32; */
}
.card {
    margin-top:50px;
    position: relative;
    /* display: -ms-flexbox; */
    display: flex;
    -ms-flex-direction: column;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 1px solid rgba(0,0,0,.125);
    border-radius: .25rem;
}
    </style>
</head>
<body>
<center>
<img src="https://raw.githubusercontent.com/deyRupak/attendance/kaustubh/logo.png?token=AKQXGH6ZY7NMDS4G2VB7QYK566JOE" class="img-fluid" alt="Responsive image" width="300rem">
</center>
<div class="d-flex justify-content-center" >
<div class="card" style="width: 18rem;" >
  <div class="card-body">
    <h4 class="card-title" style="text-align: center">Login Page</h4>
    <!-- <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6> -->
    <p class="card-text">
    <form method="POST" action="authenticate.php">
  <div class="form-group" style="align:left">
    <label for="exampleInputEmail1">Username</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Username" id="name" name="username">
    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" id="password" name="password">
  </div>
  <!-- <div class="form-group form-check"> -->
    <!-- <input type="checkbox" class="form-check-input" id="exampleCheck1"> -->
    <!-- <label class="form-check-label" for="exampleCheck1">Check me out</label> -->
  <!-- </div> -->
  <center><button type="submit"class="btn btn-primary" onsubmit="location.href='authenticate.php'">Login</button></center>
</form>
    </p>
  <center>  <a href="#" class="card-link"style="text-align: center">Forget password?</a></center>
    
  </div>
</div> 
</div>
</body>
</html>