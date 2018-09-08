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
            include 'student_login.html';
        }
        $query="select * from student where usr_id='$username'";
        $result=mysqli_query($dbs,$query);
        $x=mysqli_fetch_array($result);
        if($pwd==$x['pwd'])
        {
            setcookie($username,$pwd, time()+86400,'/');
            header('location:loginsucc.php');
        }
        else{
            echo 'invalid username or password';
            include 'student_login.html';
        }
       
    }
    else{
        header('dberror.html');
    }
    
 ?>

