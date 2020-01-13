<?php
session_start();
if (isset($_SESSION['username'])) {
    echo '<script language="javascript"> alert("LOGIN AGAIN!"); </script>';
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
    <title>E-Attendance</title>

    <style>
        body {
            margin: unset;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            color: black;

            /* background-color: #9f1c32; */
        }

        .card {
            /* margin-top: 50px;
            position: relative;
            display: flex;
            -ms-flex-direction: column;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
            border: 1px solid rgba(0, 0, 0, .125);
            border-radius: .25rem;

            -webkit-box-shadow: 15px 18px 36px 0px rgba(0, 0, 0, 0.85);
            -moz-box-shadow: 18px 18px 36px 0px rgba(0, 0, 0, 0.85);
            box-shadow: 18px 18px 36px 0px rgba(0, 0, 0, 0.85);
            width: 12rem;
            height: 390px; */
            -webkit-box-shadow: inset 4px -10px 27px 0px rgba(235, 226, 227, 1);
            -moz-box-shadow: inset 4px -10px 27px 0px rgba(235, 226, 227, 1);
            box-shadow: inset 4px -10px 27px 0px rgba(235, 226, 227, 1);
        }

        /* .card:hover {
            transform: scale(1.1);
        } */

        body {
            /* The image used */
            /* background-image: url("wall.png"); */

            /* Full height */
            height: 100%;
            /* Center and scale the image nicely */
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .bg {
            position: fixed;
            top: 0;
            bottom: 0;
            right: 0;
            left: 0;
            /* width: 100%;
        height: 48%; */
            background-image: url("back.png");
            /* transform: skewY(-12deg);
        transform-origin: bottom right; */

            z-index: -1;
            filter: blur(0);
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            transition: 0.4s -webkit-filter linear;
        }

        /* .form-control:focus {
            border-color: 1px solid #9f1c32;
            box-shadow: #9f1c32;
            outline : 0 none;
        } */

        .btn-primary {
            color: #fff;
            background-color: #9f1c32;
            border-color: #9f1c32;
        }

        .btn:hover {
            background-color: #9f1c32;
            border-color: #9f1c32;
        }
    </style>

    <script text="text/javascript">
        function myFunction() {
            if (document.getElementById("exampleInputEmail1").value || document.getElementById("exampleInputPassword1").value) {
                document.getElementById("bg").style.filter = "blur(12px)";
            } else if (document.getElementById("exampleInputEmail1").value == "" || document.getElementById("exampleInputPassword1").value == "") {
                document.getElementById("bg").style.filter = "blur(0)";
            }
        }
    </script>
</head>

<body>

    <div class="container">

        <div class="bg" id="bg">
        </div>
        <br>
        <div class="d-flex justify-content-center" style="margin: 5rem">

            <div class="card" id="card" style="width: 25rem; height: 150%; opacity: 0.99; border-radius: 15px">

                <div class="card-body">


                    <!-- photu -->
                    <div class="d-flex justify-content-center">
                        <div class="row">
                            <img src="logo.png" class="img-fluid" alt="College Logo" width="300rem">
                        </div>
                    </div>

                    
                    

                    <!-- form -->
                    <div class="align-self-center" style="margin-top: 3rem">
                        <div class="row">
                            <div class="col-sm-12">

                                <form method="POST" action="authenticate.php">

                                    <div class="form-group">
                                        <!-- <label for="exampleInputEmail1">Username</label> -->
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Username" name="username" onkeyup="myFunction()">
                                    </div>

                                    <div class="form-group">
                                        <!-- <label for="exampleInputPassword1">Password</label> -->
                                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" id="password" name="password" onkeyup="myFunction()">
                                    </div>
                                    <br><br>
                                    <center><button type="submit" class="btn btn-primary" onsubmit="location.href='authenticate.php'">Login</button></center>
                                    <br>

                                    <center> <a href="passReset/forgotp.php" class="card-link" style="text-align: center; color:#9f1c32">Forgot Password?</a></center>
                                    <br><br>
                                </form>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>

    </div>
</body>

</html>