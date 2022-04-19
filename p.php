<?php 
require_once('connection.php');
session_start();
    if(isset($_POST['submit']))
    {
       if(empty($_POST['username']) || empty($_POST['password']))
       {
            echo 'enter password and username';
       }
       else
       {
            $query="select * from db where username='".$_POST['']."' and Password='".$_POST['password']."'";
            $result=mysqli_query($con,$query);

            if(mysqli_fetch_assoc($result))
            {
                $_SESSION['User']=$_POST['username'];
                header("location:projectwebsite.html");
                echo '<a href="project.html">logout <br><br><br</a>';

            }
            else
            {
                header("location:project.html?Invalid= Please Enter Correct User Name and password ");
            }
       }
    }
    else
    {
        echo 'Not Working Now Guys';
    }

?>