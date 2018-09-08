<?php
    session_start();
    session_destroy();
    session_unset();
    $_SESSION=array();
    include 'homepage.html';
?>
<html>
    <head>
        <script>
                history.pushState("null","null",document.title);
                window.addEventListener('popstate',function(){history.pushState("null","null",document.title);});
        </script>
    </head>
    
</html>
