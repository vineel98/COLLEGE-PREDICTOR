<?php
    $email=$_POST['email'];
    $dbs=mysqli_connect('localhost','root','root','TEST');
    $query="select email from student ";
    $result=mysqli_query($dbs,$query);
    $b=0;

    while($a=mysqli_fetch_array($result))
    {
        
        if($a[0]==$email)
        { 
          $b=1;
          break;
        }
    }
    if($b)
    {
        $query="select pwd from student where email='$email'";
        $result=mysqli_query($dbs,$query);
        $a=mysqli_fetch_array($result);
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
      	    $mail->Body = "Hi! $name Your password is:   $a[0]";
            $mail->AddAddress($email);
            $mail->Send();
            echo 'password sent to your mail';
            include 'student_login.html';
   	               
	   
	
    }
    else
    {
        echo 'this email is not registered';
        include'forgotpwd.html';
    }

?>