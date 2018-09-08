<?php
session_start();
$username=$_SESSION['username'];
    
    $dbs=mysqli_connect('localhost','root','root','TEST');
    if($dbs)
    {
        $query="select * from student where usr_id='$username'";
        $result=mysqli_query($dbs,$query);
        if($result)
        {
            echo '';
            $a=mysqli_fetch_array($result);
        }
       else {
           echo '';
       }
    }
    
    else
    {
        echo 'not connected to the database!';
    }
    
?>

<!DOCTYPE HTML>
<html>
<head> 
    <title>
        My profile
    </title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
            
    </script>
    <script>
        
             $(document).ready(function(){
            var m=$("img");
            m.click(function(){
                                    $("#drop").slideToggle("slow");
                              });});
        
        </script>
<style>
             input[type=text]
             {
                 width: 50%;
                 border-radius: 10px;
                 padding: 10px 10px;
                 border-color:lightgrey;
                 border:solid;
                 margin:10px;
                 
             }
             input[type=text]:focus
             {
                 border-color:steelblue;
                 
             }
             input[type=password]
             {
                 width: 50%;
                 border-radius: 10px;
                 padding: 10px 10px ;
                 border-color:graytext ;
                 border:solid;
                  margin:10px;

             }
             input[type=password]:focus
             {
                 border-color:steelblue;
                 
             }
             input[type=button]
             {
                 background-color: red;;
                 border-radius: 10px;
                 border:10px;
                 padding:10px;
                  margin:10px;
             }
            .divi
             {
                 margin:20px;
                 width: 100%;
                 background-color: steelblue;
                 color: white;
                 border-radius: 20px;
                 text-align: center;
                 padding: 20px 20px
                 
                 
             }
             .header2
             {
                 background-color:steelblue;
                 color:whitesmoke;
                 text-align:center;
                 width:97%;
                 padding:20px;
                 border-radius:20px;
                 font-family:fantasy;
                 margin-top: 10px;
                 
                 
             }
             .Body
             {
                 background-color:white;
                 padding: 10px;
                 border-radius: 20px;
                 background-image:url(bg6.jpg);
                                  
             }
             .column
             {
                 float:left;
                 width:25%;
                 /*background-color:lightgrey;*/
                 margin-right:10px;
                 /*border-radius:20px;*/
                 align-content: center;
                 font-family:fantasy;
    
             }
              .column1
             {
                 float:left;
                 width:35%;
                 background-color:black;
                 border-radius:10px;
                 padding:30px;
                 opacity:0.6;
                 border-top:40px;
                 margin-top: 18px;
                 margin-right: 10px;
    
             }
             .header1
             {
                 width:97%;
                 background-color:lightcoral;
                 color:white;
                 text-align:center;
                 border-radius:20px;
                 padding:20px;
                 margin-bottom: 0px;
                 font-family: fantasy;
                 
                 
             }
             .a{
                 text-decoration: none;
             }
             
             
         </style>
    </head>
    <body class="Body">
        <table style="width:100%;" class="header1">
        <tr>
            <td>
                 <img src="logo.jpeg" alt="logo" align="right">
            </td>
            <td>
                <h1 >Engineering College Predictor</h1>
            </td>
        </tr>
        </table>
            <div class="header2" >
            <table  width='100%'>
                <tr>
                    <td width='70%'style="padding-left:300px">
                        <h1 color="white"> MY PROFILE</h1>
                    </td>
                    <td width='15%' align='right'>
                        <img src='<?php echo $a['img']?>' style='border-radius: 50%;width:50px;height:50px'>
                    </td>
                    <td width='15%' align='center'>
                        <p style='color:orange'>Hi <?php echo $a['std_name']?> !</p>
                    </td>
                </tr>
            </table>
            
        </div>
        <div style='width:100%;height:1px;position:relative;padding-left:81%'>
       <div style="width:250px;height:200px;background-color: lightcoral;display:none;border-radius: 5px" id="drop">
            <table  width="100%" height="200px" >
                <tr>
                    <td style="text-align:center" id='table'>
                        <a href="loginsucc.php" style="text-decoration: none">view profie</a><hr>
                    </td>
                </tr>
                
                <tr>
                    <td style="text-align:center" id='table'>
                        <a href="update.php" style="text-decoration: none">edit profile</a><hr>
                    </td>
                </tr>
                 <tr>
                    <td style='text-align:center' id='table'>
                        <a href="mycollege.php" style="text-decoration: none">view college</a><hr>
                    </td>
                </tr>
                <tr>
                    <td style="text-align:center" id='table'>
                        <a href="logout.php" style="text-decoration: none">logout</a>
                    </td>
                </tr>
            </table>
        </div>
        </div> 
        <div class="column">
            -
        </div>
            <div  class="column1" >
            <form  action="updateconf.php"  method="POST" id="myform"  enctype="multipart/form-data">
            <table border="0.3" style="width:100%">
                <tr>
                    <td>
                        <p style="color:orange">Name</p>
                    </td>
                    <td>
                        <input type="text" value="<?php echo $a['std_name']?>" placeholder="your name..." name="name" id="name" required pattern="[a-z,A-Z]{5,}" title="should contain only alphabets">
                    </td>
                </tr>
                <tr>
                    <td>
                        <p style="color:orange">Mobile Number</p>
                    </td>
                    <td>
                        <input type="text" value="<?php echo $a['mobile']?>" placeholder="your number" name="phn" id="phn" pattern="[1-9][0-9]{9}" title="should contain only numbers">
                    </td>
                </tr>
                <tr>
                    <td>
                        <p style="color:orange">Email</p>
                    </td>
                    <td>
                        <input type="text" value="<?php echo $a['email']?>" placeholder="your email" name="email" id="email" pattern="[a-z,A-Z,0-9]{1,}@[a-z]{5,}.[a-z]{3}" title="jhon@example.com">
                        
                </tr>
                <tr>
                    <td>
                        <p style="color:orange">Rank</p>
                    </td>
                    <td>
                        <input type="text" value="<?php echo $a['rank']?>" placeholder="your rank" name="rank" id="rank" pattern="[1-9][0-9]{0,6}" title="should contain only numbers">
                    </td>
                </tr>
                <tr>
                    <td>
                        <p style="color:orange">D-O-B</p>
                    </td>
                    <td>
                        <input type="date"  value="<?php echo $a['dob']?>" name="dob" id="dob">
                    </td>

                </tr>
                 <tr>
                    <td>
                      <p style="color:orange">Gender</p>
                    </td>
                    <td>
                        <input type="type" value="<?php echo $a['gender']?>" name="gender"> 
                    </td>
                </tr>
               
                <tr>
                    <td>
                        <P style="color:orange">UserName</p>
                    </td>
                    <td>
                        <input type="text" value="<?php echo $a['usr_id']?>" placeholder="your username..."  name="username" id="usrname" required>
                    </td>

                </tr>
                <tr>
                    <td>
                        <p style="color:orange">Password</p>
                    </td>
                    <td>
                          <input type="password" value="<?php echo $a['pwd']?>" placeholder="your password..." required  name="pwd" id="password" pattern="{8,}" title="should contain atleast 8 characters">
                    </td>

                </tr>
                   
                
                <tr>
                    <td>
                        <button value="submit" onclick=" return check()"> update</button>
                    </td> 
                </tr>
             </table>
                
            </form>
        </div>
        
            <div class="column">
                
            </div>
        
    </body>
</html>






