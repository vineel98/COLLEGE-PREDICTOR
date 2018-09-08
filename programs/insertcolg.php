<?php
define('img','images/');
$colgname=$_POST['colgname'];
$estyr=$_POST['estyr'];
$rank=$_POST['rank'];
$zipcode=$_POST['zipcode'];
$city=$_POST['city'];
$landmark=$_POST['landmark'];
$landarea=$_POST['landarea'];
$pkg=$_POST['pkg'];
$hostel=$_POST['hostel'];
$type=$_POST['type'];
$affli=$_POST['affli'];
$cse=$_POST['cse'];
$ece=$_POST['ece'];
$eee=$_POST['eee'];
$civ=$_POST['civ'];
$mech=$_POST['mech'];
$chem=$_POST['chem'];
$biotech=$_POST['biotech'];
$fileloc1=$_FILES["file1"]["tmp_name"];
$filename1=$_FILES["file1"]["name"];
$target1=img.$filename1;
$fileloc2=$_FILES["file2"]["tmp_name"];
$filename2=$_FILES["file2"]["name"];
$target2=img.$filename2;
move_uploaded_file($fileloc1, $target1);
move_uploaded_file($fileloc2, $target2);
$csesec=$_POST['csesec'];$ecesec=$_POST['ecesec'];$eeesec=$_POST['eeesec'];$civsec=$_POST['civsec'];$mechsec=$_POST['mechsec'];
$chemsec=$_POST['chemsec'];$biosec=$_POST['biosec'];

$csefr=$_POST['csefr'];$ecefr=$_POST['ecefr'];$eeefr=$_POST['eeefr'];$civfr=$_POST['civfr'];$mechfr=$_POST['mechfr'];
$chemfr=$_POST['chemfr'];$biofr=$_POST['biofr'];

$cselr=$_POST['cselr'];$ecelr=$_POST['ecelr'];$eeelr=$_POST['eeelr'];$civlr=$_POST['civlr'];$mechlr=$_POST['mechlr'];
$chemlr=$_POST['chemlr'];$biolr=$_POST['biolr'];

$csear=$_POST['csear'];$ecear=$_POST['ecear'];$eeear=$_POST['eeear'];$civar=$_POST['civar'];$mechar=$_POST['mechar'];
$chemar=$_POST['chemar'];$bioar=$_POST['bioar'];

$cseyr=$_POST['cseyr'];$eceyr=$_POST['eceyr'];$eeeyr=$_POST['eeeyr'];$civyr=$_POST['civyr'];$mechyr=$_POST['mechyr'];
$chemyr=$_POST['chemyr'];$bioyr=$_POST['bioyr'];

$csestf=$_POST['csestf'];$ecestf=$_POST['ecestf'];$eeestf=$_POST['eeestf'];$civstf=$_POST['civstf'];$mechstf=$_POST['mechstf'];
$chemstf=$_POST['chemstf'];$biostf=$_POST['biostf'];

$dbs=mysqli_connect("localhost","root","root","TEST");
$query="insert into details values(777,'$colgname','$estyr','$rank','$affli','$zipcode','$city','$landmark',null,'$landarea','$hostel','$type','$pkg','$target1','$target2')";
$result=mysqli_query($dbs,$query);
if($result)
{
    include 'addsucc.php';
}
 else {
    echo "not inserted";
 }
if(!empty($cse))
{
    $query="insert into branch values(777,'$cse','$csear','$csesec','$csefr','$cselr','$cseyr','$csestf',11)";
    $result=mysqli_query($dbs,$query);
    
}
if(!empty($ece))
{
    $query="insert into branch values(777,'$ece','$ecear','$ecesec','$ecefr','$ecelr','$eceyr','$ecestf',22)";
    $result=mysqli_query($dbs,$query);
}
if(!empty($eee))
{
    $query="insert into branch values(777,'$eee','$eeear','$eeesec','$eeefr','$eeelr','$eeeyr','$eeestf',33)";
    $result=mysqli_query($dbs,$query);
}
if(!empty($civ))
{
    $query="insert into branch values(777,'$civ','$civar','$civsec','$civfr','$civlr','$civyr','$civstf',44)";
    $result=mysqli_query($dbs,$query);
}
if(!empty($mech))
{
    $query="insert into branch values(777,'$mech','$mechar','$mechsec','$mechfr','$mechlr','$mechyr','$mechstf',55)";
    $result=mysqli_query($dbs,$query);
}
if(!empty($chem))
{
    $query="insert into branch values(777,'$chem','$chemar','$chemsec','$chemfr','$chemlr','$chemyr','$chemstf',66)";
    $result=mysqli_query($dbs,$query);
}
if(!empty($biotech))
{
    $query="insert into branch values(777,'$biotech','$bioar','$biosec','$biofr','$biolr','$bioyr','$biostf',77)";
    $result=mysqli_query($dbs,$query);
}

?>


