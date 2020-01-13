<!DOCTYPE html>
<html lang="en">
 <?php
  include 'top.php';
    @session_start();
    include '../connect.php';
   // $username = $_SESSION['username'];
//$password = $_SESSION['password'];
  
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
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">WELCOME&nbsp;&nbsp;<?php //echo $username;?></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="./index.php">Home <span class="sr-only">(current)</span></a>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Student
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">upload attendance</a>
          <a class="dropdown-item" href="#">edit attendance</a>
          <a class="dropdown-item" href="#">update attendance</a>
          <a class="dropdown-item" href="#">add special attendance</a>
          <a class="dropdown-item" href="#">view attendance</a>
          <!-- <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a> -->
        </div>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Course
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Add Course</a>
          <a class="dropdown-item" href="#">Delete Course</a>
          <a class="dropdown-item" href="#">View Course mapping</a>
          <a class="dropdown-item" href="#">Delete Course mapping</a>
        </div>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Display 
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Display attendance</a>
          <a class="dropdown-item" href="#">Generate Defaulters</a>
          <!-- <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a> -->
        </div>
      </li>
      <li class="navbar-nav mr-auto">
        <a class="nav-link" href="#">Register Faculty</a>
      </li>
      <li class="navbar-nav mr-auto">
        <a class="nav-link" href="#">Allocate subject</a>
      </li>

    </ul>
  </div>
  <form class="form-inline">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit" onclick="location.href='../index.php'">Logout</button>
    </form>
</nav>


<!-- cards -->
<!-- row 1 -->
<div class="row"style="margin-top:70px">
    
    <div class="col-sm-4"style="padding-left:150px" >
    <a href="student/student.php" style="text-decoration: none; color: black">
        <div class="card" style="width: 12rem;">
        <div class="card-body text-center">
        <br><br>
        <center><i class="fa fa-calendar-check-o fa-3x" aria-hidden="true" style="color: #9f1c32"></i></center>
        <br>
            <h5 class="card-title">STUDENT</h5>
        </div>
        </div> 
    </a> 
    </div>

    <div class="col-sm-4"style="padding-left:150px">
    <a href="course/course.php" style="text-decoration: none; color: black">
        <div class="card" style="width: 12rem;">
        <div class="card-body text-center">
        <br><br>
        <center><i class="fa fa-book fa-3x" aria-hidden="true" style="color: #9f1c32"></i></center>
        <br>
            <h5 class="card-title">COURSE</h5>
        </div>
        </div> 
        </a> 
    </div>

    <div class="col-sm-4"style="padding-left:150px">
    <a href="student/display.php" style="text-decoration: none; color: black">
        <div class="card" style="width: 12rem;">
        <div class="card-body text-center">
        <br>
        <center><i class="fa fa-bars fa-3x" aria-hidden="true" style="color: #9f1c32"></i></center>
        <br>
            <h5 class="card-title">FACULTY</h5>
        </div>
        </div>  
        </a>
    </div>
  
</div> 
<!-- row1 ends -->





</body>
</html> 