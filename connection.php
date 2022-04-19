<?php

    $con=mysqli_connect('localhost','root','','dbase');

    if(!$con)
    {
        die(' Please Check Your Connection'.mysqli_error($con));
    }
?>