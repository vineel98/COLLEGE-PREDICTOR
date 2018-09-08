<?php 
    session_start();
    $username=$_SESSION['username'];

    $name=$_POST['name'];
    $email=$_POST['email'];
    $dob=$_POST['dob'];
    $rank=$_POST['rank'];
    $gender=$_POST['gender'];
    $mobile=$_POST['phn'];
    $usrname=$_POST['username'];
    $pwd=$_POST['pwd'];
    echo $fileloc;
    echo '<br>';
    echo $filename;
    echo '<br>';
    $dbs=mysqli_connect('localhost','root','root','TEST');
    if($dbs)
    {
        $query="update student set std_name='$name',email='$email',dob='$dob',mobile='$mobile',rank='$rank',gender='$gender',usr_id='$usrname',pwd='$pwd' where usr_id='$username'";
        $result=mysqli_query($dbs,$query);
        if($result)
        {
            include 'updatesucc.php';
        }
       else {
           echo 'query not executed';
       }
    }
    else
    {
        echo 'not connected to the database!';
    }
    
?>
