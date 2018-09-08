
<?php
 setcookie('hello_cookie','1234', time()+86400,'/');
 if(!isset($_COOKIE[hello_cookie]))
 {
     echo 'cookie is not set';
 }
 else {
     echo 'cookie is set';
}
echo '<br>';
$x=$_COOKIE['hello_cookie'];
echo 'the cookie value is'.$x;
echo '<br>';
//setcookie('hello_cookie','1234', time()-3600,'/');
//echo 'the cookie is deleted';


?>
    
