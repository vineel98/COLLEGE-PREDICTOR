<?php
    $colgname=$_POST['colgname'];
    $dbs=mysqli_connect('localhost','root','root','TEST');    
    if($dbs)
    {
        $query="select * from details where colg_name='$colgname'";
        $result=mysqli_query($dbs,$query);
        $y= mysqli_fetch_array($result);
        $query1="select * from branch where colg_id =(select colg_id from details where colg_name='$colgname')";
        
        $result1=mysqli_query($dbs,$query1);
       
        
        
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
             .imagediv{
                 width:100%;
                 height:200px;
                 text-align: center;
                 
                 padding:10px;
             }
             .image{
                 width:500px;
                 height:150px;
                 padding:5px;
                 border:solid;
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
                        <h1 align="center">COLLEGE INFO</h1>
                    </td>
                </tr>
            </table>
        </div>
        <table border="0px" width="100%" style="margin-top:20px"> 
                <td  align="right" width="30%">
                    <img src='<?php echo $y['img']?>' class="logo"/> 
                </td>
                <td style="padding-left:120px">
                    <h3><?php echo $y['colg_name']?></h3>
                </td>
            </table>
        
        <div class="imagediv">
            <img src='<?php echo $y['main_img']?>' alt="logo" class="image"/>
        </div>
        <div class="column">
           -
        </div>
        <div  class="column1" >
            <p style="color:orange">COLLEGE DETAILS</p>
            <table border="0" style="width:100%;" >
                <tr>
                    <td style='padding:20px'>
                        <p style="color:orange">CollegeName</p>
                    </td>
                    <td>
                        <p style="color:greenyellow"><?php echo $y['colg_name']?>
                    </td>
                </tr>
                <tr>
                    <td style='padding:20px'>
                        <p style="color:orange">Affiliated to</p>
                    </td>
                    <td>
                        <p style="color:greenyellow"><?php echo $y['affli']?>

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
                        <p style="color:orange">City</p>
                    </td>
                    <td>
                        <p style="color:greenyellow"><?php echo $y['city']?>

                    </td>
                </tr>
                <tr>
                    <td style='padding:20px'>
                        <p style="color:orange">Landmark</p>
                    </td>
                    <td>
                       <p style="color:greenyellow"><?php echo $y['land_mark']?>

                    </td>

                </tr>
                 <tr>
                    <td style='padding:20px'>
                      <p style="color:orange">LandArea</p>
                    </td>
                    <td>
                        <p style="color:greenyellow"><?php echo $y['landarea']?>

                    </td>
                </tr>
                <tr>
                    <td style='padding:20px'>
                        <p style='color:orange'>Established year</p>
                    </td>
                    <td>
                        <p style="color:greenyellow"><?php echo $y['est_yr']?>

                    </td>
                </tr>
                <tr>
                    <td style='padding:20px'>
                        <P style="color:orange">ZipCode</p>
                    </td>
                    <td>
                         <p style="color:greenyellow"><?php echo $y['zip']?>

                    </td>

                </tr>
                <tr>
                    <td style='padding:20px'>
                        <p style="color:orange">HostelFacility</p>
                    </td>
                    <td>
                          <p style="color:greenyellow"><?php echo $y['hstl']?>

                    </td>

                </tr>
                <tr>
                <td style='padding:20px'>
                    <p style='color:orange'>Coed</p>
                </td>   
                
                
                    <td>
                        <p style="color:greenyellow"><?php echo $y['coed_girl']?>

                    </td>
                    
                </tr>
                <tr>
                <td style='padding:20px'>
                    <p style='color:orange'>AvgPackage</p>
                </td>   
                
                
                    <td>
                        <p style="color:greenyellow"><?php echo $y['avg_sal_pk']?>

                    </td>
                    
                </tr>
                 
                
            </table>
            <p style="color:orange;">BRANCH DETAILS</p>
            <table width="100%" border="0.8">
               <?php 
                  while( $x=mysqli_fetch_array($result1))
                  {
                    echo "<tr><td style='padding:20px'> <p style='color:orange'>Branch name </td>";
                    echo '<td><p style="color:greenyellow">'.$x['branch'].'</td></tr>';
                    echo "<tr><td style='padding:20px'> <p style='color:orange'>Accediation </td>";
                    echo '<td><p style="color:greenyellow">'.$x['accr'].'</td></tr>';
                    echo "<tr><td style='padding:20px'> <p style='color:orange'>Number of sections </td>";
                    echo '<td><p style="color:greenyellow">'.$x['no_sec'].'</td></tr>';
                    echo "<tr><td style='padding:20px'> <p style='color:orange'>First Rank </td>";
                    echo '<td><p style="color:greenyellow">'.$x['first_rnk'].'</td></tr>';
                    echo "<tr><td style='padding:20px'> <p style='color:orange'>Last Rank </td>";
                    echo '<td><p style="color:greenyellow">'.$x['last_rnk'].'</td></tr>';
                    echo "<tr><td style='padding:20px'> <p style='color:orange'>Year of introduction </td>";
                    echo '<td><p style="color:greenyellow">'.$x['yr'].'</td></tr>';
                    echo "<tr><td style='padding:20px'> <p style='color:orange'>number of staff </td>";
                    echo '<td><p style="color:greenyellow">'.$x['no_staff'].'</td></tr>';
                    echo '<tr><td><p style="color:greenyellow">*****************************</p></td>';
                    echo '<td><p style="color:greenyellow">******************************</p></td></tr>';
                    
                    
                  }
                 
               ?>
            </table>
        </div>
    </body>
</html>


