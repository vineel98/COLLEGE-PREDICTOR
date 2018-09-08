<?php
    session_start();
    $pic=$_SESSION['username'];
    
    $dbs=mysqli_connect('localhost','root','root','TEST');
    $query="select * from student where usr_id='$pic'";
    $result=mysqli_query($dbs,$query);
    $a=mysqli_fetch_array($result);
    
?>
<!DOCTYPE HTML>
<html>
<head> 
    <title>My profile</title>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
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
                 width:40%;
                 background-color:black;
                 border-radius:10px;
                 padding:30px;
                 opacity:0.4;
                 border-top:40px;
                 
    
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
             
             
         </style>
    </head>
    <body class="Body">
        <table style="width:100%;" class="header1">
        <tr>
            <td>
                 <img src="logo.jpeg" alt="logo" align="right">
            </td>
            <td>
                <h1 >Engineering College Alloter</h1>
            </td>
        </tr>
        </table>
        <div class="header2" >
            <table  width='100%'>
                <tr>
                    <td width='70%'style="padding-left:300px">
                        <h1>COLLEGE ADDED SUCCESSFULLY TO DATA BASE!</h1>
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
                        <a href="view_student.php" style="text-decoration: none">view student info</a><hr>
                    </td>
                </tr>
                
                <tr>
                    <td style="text-align:center" id='table'>
                        <a href="add_colg.php" style="text-decoration: none">Add College</a><hr>
                    </td>
                </tr>
                 <tr>
                    <td style='text-align:center' id='table'>
                        <a href="view_colg.php" style="text-decoration: none">view colleges info</a><hr>
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
        </body>
        </html>
        
