<?php
    session_start();
    $username=$_POST['username']; 
    $_SESSION['username']=$username;
    $pwd=$_POST['pwd'];
    
    $dbs=mysqli_connect('localhost','root','root','TEST');
    if($dbs)
    {
        if(empty($username)||empty($pwd))
        {
            echo 'invalid username or password';
            include 'Admin_login.html';
        }
        $query="select * from student where usr_id='$username'";
        $result=mysqli_query($dbs,$query);
        $x=mysqli_fetch_array($result);
        if($pwd==$x['pwd'])
        {
            header('location:adminloginsucc.php');
        }
        
    }
    else{
        header('dberror.html');
    }    
 ?>


