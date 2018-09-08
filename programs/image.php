
<?php
    define('img','images/');
    $fileloc=$_FILES["file1"]["tmp_name"];
    echo $fileloc;
    echo "<br>";
    $filename=$_FILES['file1']['name'];
    echo $filename;
    echo "<br>";
    $target=img.$filename;
    echo $target;
    echo "<br>";
    move_uploaded_file($fileloc, $target);
    $dbs=mysqli_connect('localhost','root','root','TEST');
    if($dbs)
    {
        $query="select * from student where pwd='rahas'";
        $result=mysqli_query($dbs,$query);
        $x=mysqli_fetch_array($result);
        if($result)
        {
            echo 'query executed';
        }
        else{
            echo 'query not executed';
        }
        
    }
    echo '"<img src="'.$x[7].'" />"';
?>


