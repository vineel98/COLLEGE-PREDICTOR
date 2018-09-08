<?php
    $rank=$_POST['rank'];
    $dbs=mysqli_connect('localhost','root','root','TEST');    
    if($dbs)
    {
        $query="select * from student where rank='$rank'";
        $result=mysqli_query($dbs,$query);
        $y= mysqli_fetch_array($result);   
    }
    else{
        echo "<h1> NOT CONNECTED TO THE DATABASE</h1>";
    }   
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
             .logo{
                 width:100px;
                 height:100px;
                 padding:2.5px;
                 border:solid;
                 border-color:black;
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
                    <td width='70%'>
                        <h1 align="center">STUDENT INFO</h1>
                    </td>
                </tr>
            </table>
        </div>
        <div style="padding-left:45%;padding-right: 45%;padding-top: 20px">
              <img src='<?php echo $y['img']?>' class="logo"/> 
        </div>
        
        <div class="column">
           -
        </div>
        <div  class="column1" >
           
            <table border="0" style="width:100%;" >
                <tr>
                    <td style='padding:20px'>
                        <p style="color:orange">Student Name</p>
                    </td>
                    <td>
                        <p style="color:greenyellow"><?php echo $y['std_name']?>
                    </td>
                </tr>
                <tr>
                    <td style='padding:20px'>
                        <p style="color:orange">Rank</p>
                    </td>
                    <td>
                        <p style="color:greenyellow"><?php echo $y['rank']?>

                    </td>
                </tr>
                <tr>
                    <td style='padding:20px'>
                        <p style="color:orange">Mobile Number</p>
                    </td>
                    <td>
                        <p style="color:greenyellow"><?php echo $y['mobile']?>

                    </td>
                </tr>
                <tr>
                    <td style='padding:20px'>
                        <p style="color:orange">Email</p>
                    </td>
                    <td>
                        <p style="color:greenyellow"><?php echo $y['email']?>

                    </td>
                </tr>
                <tr>
                    <td style='padding:20px'>
                        <p style="color:orange">Gender</p>
                    </td>
                    <td>
                        <p style="color:greenyellow"><?php echo $y['gender']?>

                    </td>
                </tr>
                <tr>
                    <td style='padding:20px'>
                        <p style="color:orange">Date Of Birth</p>
                    </td>
                    <td>
                       <p style="color:greenyellow"><?php echo $y['dob']?>

                    </td>

                </tr>
            </table>
        </div>
    </body>
</html>




