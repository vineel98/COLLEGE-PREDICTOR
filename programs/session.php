<?php
    session_start();
    $_SESSION['name']='vineel';
    $_SESSION['initial']='chamakuri';
    var_dump($_SESSION);
    
    
    
?>

<html>
    <body>
        <a href="session1.php"> logout</a>
    </body>
</html>