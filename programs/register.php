cd <?php
   session_start(); 
    $username=$_SESSION['username'];
    $mobile_number=$_SESSION['phn'];
    $email=$_SESSION['email'];
    $rank=$_SESSION['rank'];
    $dob=$_SESSION['dob'];
    $gender=$_SESSION['gender'];
    $pwd=$_SESSION['pwd'];
    $name=$_SESSION['name'];
    $dbs= mysqli_connect("localhost","root","root","TEST");
    echo '$username'.$username;
    echo '$mobile_number'.$mobile_number;
    echo '$email'.$email;
    echo '$rank'.$rank;
    echo '$dob'.$dob;
    echo '$gender'.$gender;
    echo '$pwd'.$pwd;
    echo '$name'.$name;
    
    
    if(!$dbs)
    {
        echo "<html><body><p><h1>oops! connection to the data base failed....</h1></p></body></html>";
    }
    else {  
            $query="insert into student values('vineel','7396568331','vineelchamakuri99@gmail.com',2265,'13-08-1999','vineel','vineel')";
            $result= mysqli_query($dbs,$query);
              
              
            if($result)
            {
                 echo "<html><body><p style='background-color:yellow;color:red'><h1>Thankyou for registration!....</h1></p></body></html>";
            }
            else
            {
                echo '<html><body><p ><h1>Sorry Due to some technical problems we cannot proceed your registartion please try later....</h1></p></body></html>";
';
            }
        }
    mysqli_close($dbs);
 
?>


