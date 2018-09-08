<?php
    $dbs=mysqli_connect("localhost","root","root","TEST");
    $query="select * from STUDENT";
    $x=mysqli_query($dbs,$query);
    echo "<table border='2.0'><tr><th>name</th><th>password</th><th>opt</th></tr>";
    while($result=mysqli_fetch_array($x))
    {
        echo"<tr><td>".$result['USERNAME']."</td><td>".$result['PASSWORD']."</td><td>".$result['OTP']."</td></tr>";
    }
    echo "</table>";
    mysqli_close($dbs);
    
    

?>
