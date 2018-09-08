<?php 
    $name=$_POST['name'];
    $email=$_POST['email'];
    $dob=$_POST['dob'];
    $rank=$_POST['rank'];
    $gender=$_POST['gender'];
    $mobile=$_POST['phn'];
    $username=$_POST['username'];
    $pwd=$_POST['pwd'];
    define('img','studentimages/');
    $fileloc=$_FILES["file1"]["tmp_name"];
    $filename=$_FILES["file1"]["name"];
    $target=img.$filename;
    move_uploaded_file($fileloc, $target);
    $dbs=mysqli_connect('localhost','root','root','TEST');
    if($dbs)
    {
        $query="insert into student values('$name',$mobile,'$email','$rank','$dob','$username','$pwd','$target','$gender')";
        $result=mysqli_query($dbs,$query);
        if($result)
        {
            require'PHPMailer-5.2.25/PHPMailerAutoload.php'; 
            $mail=new PHPMailer();
            $mail->isSMTP();
            $mail->SMTPDebug = 0;
            $mail->SMTPAuth = true;
            $mail->SMTPSecure = 'tls';
            $mail->Host ='smtp.gmail.com';
            $mail->Port = '587';
            $mail->isHTML(true);
            $mail->Username = 'wtproject115@gmail.com';
            $mail->Password = 'wtproject160116733115';
            $mail->SetFrom('wtproject115@gmail.com');
            $mail->Subject = 'ENGINEERING COLLEGE ALLOTER';
      	    $mail->Body = "thank you $name for registering.Your username is :$username<br>password is:$pwd";
            $mail->AddAddress($email);
           
            if($mail->send()){
                include 'regsucc.html';
            }
        }
      
    }
    else
    {
        echo 'not connected to the database!';
    }
    
?>