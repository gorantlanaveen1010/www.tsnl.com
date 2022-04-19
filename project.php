<?php
mysql_connect("localhost","root","password");
mysql_selectdb("loginform");
 
 
 if (isset($_POST['submit']))
  {
     $username=$_POST['username'];
     $password=$_POST['password'];
     $sql=mysql_query("select password from login where username='$username'");
     if ($row=mysql_fetch_array($sql))
       {
           if ($password==$row['password'])
           {
             header("location:home.html");
             exit();
           }
           else
             echo "invalid password"; 

       }
       else
           echo "invalid username";
 }
?>


