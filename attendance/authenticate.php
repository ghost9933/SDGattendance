<!-- // verify login 
// decide if co-ord or faculty -->
<?php
    @session_start();
    include 'connect.php';

    $username = $_POST['username'];
    $password = $_POST['password'];
    //check if the user is admin
    $query = "select * from admin_details where username = '$username' and password = '$password'";
    $res = mysqli_query($conn, $query);
    if(mysqli_num_rows($res) > 0){
        $_SESSION['username']=$username;
        $_SESSION['password']=$password;
        header('Location: admin/index.php');
    }
    ////check if the user is faculty
    else{
        $query = "select * from faculty where sdrn = '$username' and password = '$password'";
        $res = mysqli_query($conn, $query);
        if(mysqli_num_rows($res) > 0){
        $_SESSION['username']=$username;
        $_SESSION['password']=$password;
        header('Location: faculty/index.php');

        }
        //if the user is not an admin or faculty
        else {
            echo "User Not Found";
            header('Location: index.php');
        }
    }
    

?>