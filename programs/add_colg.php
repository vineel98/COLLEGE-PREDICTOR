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
    function hi(x)
    {
        if(x.name=="cse")
        {
            if(x.checked)
            {
                document.getElementsByName("csehidden")[0].style.display="";
                document.getElementsByName("csehidden")[1].style.display="";
                document.getElementsByName("csehidden")[2].style.display="";
                document.getElementsByName("csehidden")[3].style.display="";
                document.getElementsByName("csehidden")[4].style.display="";
                document.getElementsByName("csehidden")[5].style.display="";
                document.getElementsByName("csehidden")[6].style.display="";
                
            }
            else
            {
               document.getElementsByName("csehidden")[0].style.display="none";
                document.getElementsByName("csehidden")[1].style.display="none";
                document.getElementsByName("csehidden")[2].style.display="none";
                document.getElementsByName("csehidden")[3].style.display="none";
                document.getElementsByName("csehidden")[4].style.display="none";
                document.getElementsByName("csehidden")[5].style.display="none";
                document.getElementsByName("csehidden")[6].style.display="none";
                
            }
        }
        if(x.name=="ece")
        {
            if(x.checked)
            {
                document.getElementsByName("ecehidden")[0].style.display="";
                document.getElementsByName("ecehidden")[1].style.display="";
                document.getElementsByName("ecehidden")[2].style.display="";
                document.getElementsByName("ecehidden")[3].style.display="";
                document.getElementsByName("ecehidden")[4].style.display="";
                document.getElementsByName("ecehidden")[5].style.display="";
                document.getElementsByName("ecehidden")[6].style.display="";
                
            }
            else
            {
               document.getElementsByName("ecehidden")[0].style.display="none";
                document.getElementsByName("ecehidden")[1].style.display="none";
                document.getElementsByName("ecehidden")[2].style.display="none";
                document.getElementsByName("ecehidden")[3].style.display="none";
                document.getElementsByName("ecehidden")[4].style.display="none";
                document.getElementsByName("ecehidden")[5].style.display="none";
                document.getElementsByName("ecehidden")[6].style.display="none";
                
            }
        }
        if(x.name=="eee")
        {
            if(x.checked)
            {
                document.getElementsByName("eeehidden")[0].style.display="";
                document.getElementsByName("eeehidden")[1].style.display="";
                document.getElementsByName("eeehidden")[2].style.display="";
                document.getElementsByName("eeehidden")[3].style.display="";
                document.getElementsByName("eeehidden")[4].style.display="";
                document.getElementsByName("eeehidden")[5].style.display="";
                document.getElementsByName("eeehidden")[6].style.display="";
                
            }
            else
            {
               document.getElementsByName("eeehidden")[0].style.display="none";
                document.getElementsByName("eeehidden")[1].style.display="none";
                document.getElementsByName("eeehidden")[2].style.display="none";
                document.getElementsByName("eeehidden")[3].style.display="none";
                document.getElementsByName("eeehidden")[4].style.display="none";
                document.getElementsByName("eeehidden")[5].style.display="none";
                document.getElementsByName("eeehidden")[6].style.display="none";
                
            }
        }
        if(x.name=="civ")
        {
            if(x.checked)
            {
                document.getElementsByName("civhidden")[0].style.display="";
                document.getElementsByName("civhidden")[1].style.display="";
                document.getElementsByName("civhidden")[2].style.display="";
                document.getElementsByName("civhidden")[3].style.display="";
                document.getElementsByName("civhidden")[4].style.display="";
                document.getElementsByName("civhidden")[5].style.display="";
                document.getElementsByName("civhidden")[6].style.display="";
                
            }
            else
            {
               document.getElementsByName("civhidden")[0].style.display="none";
                document.getElementsByName("civhidden")[1].style.display="none";
                document.getElementsByName("civhidden")[2].style.display="none";
                document.getElementsByName("civhidden")[3].style.display="none";
                document.getElementsByName("civhidden")[4].style.display="none";
                document.getElementsByName("civhidden")[5].style.display="none";
                document.getElementsByName("civhidden")[6].style.display="none";
                
            }
        }
         if(x.name=="mech")
        {
            if(x.checked)
            {
                document.getElementsByName("mechhidden")[0].style.display="";
                document.getElementsByName("mechhidden")[1].style.display="";
                document.getElementsByName("mechhidden")[2].style.display="";
                document.getElementsByName("mechhidden")[3].style.display="";
                document.getElementsByName("mechhidden")[4].style.display="";
                document.getElementsByName("mechhidden")[5].style.display="";
                document.getElementsByName("mechhidden")[6].style.display="";
                
            }
            else
            {
               document.getElementsByName("mechhidden")[0].style.display="none";
                document.getElementsByName("mechhidden")[1].style.display="none";
                document.getElementsByName("mechhidden")[2].style.display="none";
                document.getElementsByName("mechhidden")[3].style.display="none";
                document.getElementsByName("mechhidden")[4].style.display="none";
                document.getElementsByName("mechhidden")[5].style.display="none";
                document.getElementsByName("mechhidden")[6].style.display="none";
                
            }
        }
         if(x.name=="chem")
        {
            if(x.checked)
            {
                document.getElementsByName("chemhidden")[0].style.display="";
                document.getElementsByName("chemhidden")[1].style.display="";
                document.getElementsByName("chemhidden")[2].style.display="";
                document.getElementsByName("chemhidden")[3].style.display="";
                document.getElementsByName("chemhidden")[4].style.display="";
                document.getElementsByName("chemhidden")[5].style.display="";
                document.getElementsByName("chemhidden")[6].style.display="";
                
            }
            else
            {
               document.getElementsByName("chemhidden")[0].style.display="none";
                document.getElementsByName("chemhidden")[1].style.display="none";
                document.getElementsByName("chemhidden")[2].style.display="none";
                document.getElementsByName("chemhidden")[3].style.display="none";
                document.getElementsByName("chemhidden")[4].style.display="none";
                document.getElementsByName("chemhidden")[5].style.display="none";
                document.getElementsByName("chemhidden")[6].style.display="none";
                
            }
        }
         if(x.name=="biotech")
        {
            if(x.checked)
            {
                document.getElementsByName("biohidden")[0].style.display="";
                document.getElementsByName("biohidden")[1].style.display="";
                document.getElementsByName("biohidden")[2].style.display="";
                document.getElementsByName("biohidden")[3].style.display="";
                document.getElementsByName("biohidden")[4].style.display="";
                document.getElementsByName("biohidden")[5].style.display="";
                document.getElementsByName("biohidden")[6].style.display="";
                
            }
            else
            {
               document.getElementsByName("biohidden")[0].style.display="none";
                document.getElementsByName("biohidden")[1].style.display="none";
                document.getElementsByName("biohidden")[2].style.display="none";
                document.getElementsByName("biohidden")[3].style.display="none";
                document.getElementsByName("biohidden")[4].style.display="none";
                document.getElementsByName("biohidden")[5].style.display="none";
                document.getElementsByName("biohidden")[6].style.display="none";
                
            }
        }
        
    }
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
                 background-size: cover;
                                  
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
                        <h1>ADD COLLEGE</h1>
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
        <div class="column">
            ________
        </div>
        <div class="column1" style="margin-top: 20px">
            <form action="insertcolg.php" method="POST" enctype="multipart/form-data">
            <table width="100%">
                <tr>
                    <td>
                        <p style="color:orange">College Name:</p>
                    </td>
                    <td>
                        <input type="text" placeholder="colg name..." name="colgname" id="colgname" required pattern="[a-z,A-Z]{10,}">
                    </td>
                </tr>
                <tr>
                    <td>
                        <p style="color:orange">Upload College Logo:</p>
                    </td>
                    <td>
                        <input type="file"  required name="file1"/>
                    </td>

                </tr>
                <tr>
                    <td>
                        <p style="color:orange">Upload College Photo:</p>
                    </td>
                    <td>
                          <input type="file" required name="file2"/>
                    </td>

                </tr>
                <tr>
                    <td>
                        <p style="color:orange">Established Year:</p>
                    </td>
                    <td>
                        <input type="text" placeholder="established year..." name="estyr" id="estyr" required pattern="[1-9][0-9]{3}">
                    </td>
                </tr>
                <tr>
                    <td>
                        <p style="color:orange">Rank:</p>
                    </td>
                    <td>
                        <input type="text" required placeholder="rank..." name="rank" required pattern="[1-9][0-9]{0,}">
                    </td>
                </tr>
                <tr>
                    <td>
                        <p style="color:orange">ZipCode:</p>
                    </td>
                    <td>
                        <input type="text" placeholder="Zipcode..." name="zipcode" required pattern="[1-9][0-9]{4}">
                    </td>
                </tr>
                <tr>
                    <td>
                        <p style="color:orange">City:</p>
                    </td>
                    <td>
                        <input type="text" placeholder="city..." name="city" required pattern="[a-z,A,Z]{5,}">
                    </td>
                </tr>
                <tr>
                    <td>
                        <p style="color:orange">land mark:</p>
                    </td>
                    <td>
                        <input type="text" placeholder="landmark..." name="landmark" required pattern="[a-z,A-Z]{5,}">
                    </td>
                </tr>
                <tr>
                    <td>
                        <p style="color:orange">land area:</p>
                    </td>
                    <td>
                        <input type="text" placeholder="area in acre" name="landarea" required pattern="[1,9][0-9]{0,}">
                    </td>
                </tr>
                <tr>
                    <td>
                        <p style="color:orange">AvgSalPackage:</p>
                    </td>
                    <td>
                        <input type="text" placeholder="avgsal in lakhs" name="pkg" required pattern="[1-9][0-9]{0,}">
                    </td>
                </tr>
                <tr>
                    <td>
                        <p style="color:orange">Hostel:</p>
                    </td>
                    <td>
                        <input type="radio"  name="hostel" value="yes">Yes
                    </td>
                    
                </tr>
                <tr>
                    <td>
                        
                    </td>
                    <td>
                        <input type="radio"  name="hostel" value="no"> No
                    </td>
                </tr>
                
                <tr>
                    <td>
                        <p style="color:orange">Co-ed <input type="radio" value="coed" name="type"></p>
                    </td>
                    <td>
                        <p style="color:orange">girls <input type="radio"  name="type" value="girls"></p>
                    </td>
                    
                </tr>
               
                <tr>
                    <td>
                        <p style="color:orange" required >Affliation:</p>
                    </td>
                    <td>
                        <select name="affli">
                            <option>osmania_university</option>
                            <option>Jawaharlal_Nehru_Technological_University</option>
                            <option>Kakatiya_university</option>
                            <option>Andhra_university</option>
                            
                        </select>
                    </td>
                </tr>  
                <tr>
                    <td>
                        <p style="color:orange">Branches:</p>
                    </td>
                    <td>
                        <p style="color:orange"><input type="checkbox" name="cse" value="cse" onclick="hi(this)"> cse </p>
                    </td>
                </tr>
                <tr style="display:none" name="csehidden">
                    <td>
                        <p style="color:orange"> sections</p>
                    </td>
                    <td>
                        <input type="number" pattern="[0-9]{,2}" name="csesec">
                    </td>
                </tr>
                 <tr style="display:none" name="csehidden">
                    <td>
                        <p style="color:orange">firstrank</p>
                    </td>
                    <td>
                        <input type="number"  pattern="[0-9]{,5}" name="csefr">
                    </td>
                </tr>
                <tr style="display:none" name="csehidden">
                    <td>
                        <p style="color:orange">lastrank</p>
                    </td>
                    <td>
                        <input type="number"  pattern="[0-9]{,5}" name="cselr">
                    </td>
                </tr>
                <tr style="display:none" name="csehidden">
                    <td>
                        <p style="color:orange">accreditation</p>
                    </td>
                    <td>
                        <input type="text"   pattern="[a-f,A-F][+]{0,}" name="csear">
                    </td>
                </tr>
                <tr style="display:none" name="csehidden">
                    <td>
                        <p style="color:orange">year of establishment</p>
                    </td>
                    <td>
                        <input type="number"  pattern="[1-9][0-9]{3}" name="cseyr">
                    </td>
                </tr>
                <tr style="display:none" name="csehidden">
                    <td>
                        <p style="color:orange">no of staff</p>
                    </td>
                    <td>
                        <input type="number"  pattern="[0-9]{1,2}" name="csestf">
                    </td>
                </tr>
                <tr>
                    <td>
                       
                    </td>
                    <td>
                        <p style="color:orange"><input type="checkbox" name="ece" value="ece" onclick="hi(this)">ece </p>
                    </td>
                </tr>
                <tr style="display:none" name="ecehidden">
                    <td>
                        <p style="color:orange"> sections</p>
                    </td>
                    <td>
                        <input type="number" pattern="[0-9]{,2}" name="ecesec">
                    </td>
                </tr>
                 <tr style="display:none" name="ecehidden">
                    <td>
                        <p style="color:orange">firstrank</p>
                    </td>
                    <td>
                        <input type="number"  pattern="[0-9]{,5}" name="ecefr">
                    </td>
                </tr>
                <tr style="display:none" name="ecehidden">
                    <td>
                        <p style="color:orange">lastrank</p>
                    </td>
                    <td>
                        <input type="number"  pattern="[0-9]{,5}" name="ecelr">
                    </td>
                </tr>
                <tr style="display:none" name="ecehidden">
                    <td>
                        <p style="color:orange">accreditation</p>
                    </td>
                    <td>
                        <input type="text"   pattern="[a-f,A-F][+]{0,}" name="ecear">
                    </td>
                </tr>
                <tr style="display:none" name="ecehidden">
                    <td>
                        <p style="color:orange">year of establishment</p>
                    </td>
                    <td>
                        <input type="number"  pattern="[1-9][0-9]{3}" name="eceyr">
                    </td>
                </tr>
                <tr style="display:none" name="ecehidden">
                    <td>
                        <p style="color:orange">no of staff</p>
                    </td>
                    <td>
                        <input type="number"  pattern="[0-9]{1,2}" name="ecestf">
                    </td>
                </tr>
                <tr>
                    <td>
                       
                    </td>
                    <td>
                        <p style="color:orange"><input type="checkbox" name="civ" value="civ" onclick="hi(this)"> civ</p>
                    </td>
                </tr>
                <tr style="display:none" name="civhidden">
                    <td>
                        <p style="color:orange"> sections</p>
                    </td>
                    <td>
                        <input type="number" pattern="[0-9]{,2}" name="civsec">
                    </td>
                </tr>
                 <tr style="display:none" name="civhidden">
                    <td>
                        <p style="color:orange">firstrank</p>
                    </td>
                    <td>
                        <input type="number"  pattern="[0-9]{,5}" name="civfr">
                    </td>
                </tr>
                <tr style="display:none" name="civhidden">
                    <td>
                        <p style="color:orange">lastrank</p>
                    </td>
                    <td>
                        <input type="number"  pattern="[0-9]{,5}" name="civlr">
                    </td>
                </tr>
                <tr style="display:none" name="civhidden">
                    <td>
                        <p style="color:orange">accreditation</p>
                    </td>
                    <td>
                        <input type="text"   pattern="[a-f,A-F][+]{0,}" name="civar">
                    </td>
                </tr>
                <tr style="display:none" name="civhidden">
                    <td>
                        <p style="color:orange">year of establishment</p>
                    </td>
                    <td>
                        <input type="number"  pattern="[1-9][0-9]{3}" name="civyr">
                    </td>
                </tr>
                <tr style="display:none" name="civhidden">
                    <td>
                        <p style="color:orange">no of staff</p>
                    </td>
                    <td>
                        <input type="number"  pattern="[0-9]{1,2}" name="civstf">
                    </td>
                </tr>
                <tr>
                    <td>
                       
                    </td>
                    <td>
                        <p style="color:orange"><input type="checkbox" name="eee" value="eee" onclick="hi(this)"> eee</p>
                    </td>
                </tr>
                <tr style="display:none" name="eeehidden">
                    <td>
                        <p style="color:orange"> sections</p>
                    </td>
                    <td>
                        <input type="number" pattern="[0-9]{,2}" name="eeesec">
                    </td>
                </tr>
                 <tr style="display:none" name="eeehidden">
                    <td>
                        <p style="color:orange">firstrank</p>
                    </td>
                    <td>
                        <input type="number"  pattern="[0-9]{,5}" name="eeefr">
                    </td>
                </tr>
                <tr style="display:none" name="eeehidden">
                    <td>
                        <p style="color:orange">lastrank</p>
                    </td>
                    <td>
                        <input type="number"  pattern="[0-9]{,5}" name="eeelr">
                    </td>
                </tr>
                <tr style="display:none" name="eeehidden">
                    <td>
                        <p style="color:orange">accreditation</p>
                    </td>
                    <td>
                        <input type="text"   pattern="[a-f,A-F][+]{0,}" name="eeear">
                    </td>
                </tr>
                <tr style="display:none" name="eeehidden">
                    <td>
                        <p style="color:orange">year of establishment</p>
                    </td>
                    <td>
                        <input type="number"  pattern="[1-9][0-9]{3}" name="eeeyr">
                    </td>
                </tr>
                <tr style="display:none" name="eeehidden">
                    <td>
                        <p style="color:orange">no of staff</p>
                    </td>
                    <td>
                        <input type="number"  pattern="[0-9]{1,2}" name="eeestf">
                    </td>
                </tr>
                <tr>
                    <td>
                       
                    </td>
                    <td>
                        <p style="color:orange"><input type="checkbox" name="mech" value="mech" onclick="hi(this)"> mech</p>
                    </td>
                </tr>
                <tr style="display:none" name="mechhidden">
                    <td>
                        <p style="color:orange"> sections</p>
                    </td>
                    <td>
                        <input type="number" pattern="[0-9]{,2}" name="mechsec">
                    </td>
                </tr>
                 <tr style="display:none" name="mechhidden">
                    <td>
                        <p style="color:orange">firstrank</p>
                    </td>
                    <td>
                        <input type="number"  pattern="[0-9]{,5}" name="mechfr">
                    </td>
                </tr>
                <tr style="display:none" name="mechhidden">
                    <td>
                        <p style="color:orange">lastrank</p>
                    </td>
                    <td>
                        <input type="number"  pattern="[0-9]{,5}" name="mechlr">
                    </td>
                </tr>
                <tr style="display:none" name="mechhidden">
                    <td>
                        <p style="color:orange">accreditation</p>
                    </td>
                    <td>
                        <input type="text"   pattern="[a-f,A-F][+]{0,}" name="mechar">
                    </td>
                </tr>
                <tr style="display:none" name="mechhidden">
                    <td>
                        <p style="color:orange">year of establishment</p>
                    </td>
                    <td>
                        <input type="number"  pattern="[1-9][0-9]{3}" name="mechyr">
                    </td>
                </tr>
                <tr style="display:none" name="mechhidden">
                    <td>
                        <p style="color:orange">no of staff</p>
                    </td>
                    <td>
                        <input type="number"  pattern="[0-9]{1,2}" name="mechstf">
                    </td>
                </tr>
                <tr>
                    <td>
                       
                    </td>
                    <td>
                        <p style="color:orange"><input type="checkbox" name="chem" value="chem" onclick="hi(this)"> chem</p>
                    </td>
                </tr>
                <tr style="display:none" name="chemhidden">
                    <td>
                        <p style="color:orange"> sections</p>
                    </td>
                    <td>
                        <input type="number" pattern="[0-9]{,2}" name="chemsec">
                    </td>
                </tr>
                 <tr style="display:none" name="chemhidden">
                    <td>
                        <p style="color:orange">firstrank</p>
                    </td>
                    <td>
                        <input type="number"  pattern="[0-9]{,5}" name="chemfr">
                    </td>
                </tr>
                <tr style="display:none" name="chemhidden">
                    <td>
                        <p style="color:orange">lastrank</p>
                    </td>
                    <td>
                        <input type="number"  pattern="[0-9]{,5}" name="chemlr">
                    </td>
                </tr>
                <tr style="display:none" name="chemhidden">
                    <td>
                        <p style="color:orange">accreditation</p>
                    </td>
                    <td>
                        <input type="text"   pattern="[a-f,A-F][+]{0,}" name="chemar">
                    </td>
                </tr>
                <tr style="display:none" name="chemhidden">
                    <td>
                        <p style="color:orange">year of establishment</p>
                    </td>
                    <td>
                        <input type="number" pattern="[1-9][0-9]{3}" name="chemyr">
                    </td>
                </tr>
                <tr style="display:none" name="chemhidden">
                    <td>
                        <p style="color:orange">no of staff</p>
                    </td>
                    <td>
                        <input type="number" pattern="[0-9]{1,2}" name="chemstf">
                    </td>
                </tr>
                <tr>
                    <td>
                       
                    </td>
                    <td>
                        <p style="color:orange"><input type="checkbox" name="biotech" value="biotech" onclick="hi(this)">biotech </p>
                    </td>
                </tr>
                <tr style="display:none" name="biohidden">
                    <td>
                        <p style="color:orange"> sections</p>
                    </td>
                    <td>
                        <input type="number" pattern="[0-9]{,2}" name="biosec">
                    </td>
                </tr>
                 <tr style="display:none" name="biohidden">
                    <td>
                        <p style="color:orange">firstrank</p>
                    </td>
                    <td>
                        <input type="number"  pattern="[0-9]{,5}" name="biofr">
                    </td>
                </tr>
                <tr style="display:none" name="biohidden">
                    <td>
                        <p style="color:orange">lastrank</p>
                    </td>
                    <td>
                        <input type="number"  pattern="[0-9]{,5}" name="biolr">
                    </td>
                </tr>
                <tr style="display:none" name="biohidden">
                    <td>
                        <p style="color:orange">accreditation</p>
                    </td>
                    <td>
                        <input type="text"   pattern="[a-f,A-F][+]{0,}" name="bioar">
                    </td>
                </tr>
                <tr style="display:none" name="biohidden">
                    <td>
                        <p style="color:orange">year of establishment</p>
                    </td>
                    <td>
                        <input type="number"  pattern="[1-9][0-9]{3}" name="bioyr">
                    </td>
                </tr>
                <tr style="display:none" name="biohidden">
                    <td>
                        <p style="color:orange">no of staff</p>
                    </td>
                    <td>
                        <input type="number"  pattern="[0-9]{1,2}" name="biostf">
                    </td>
                </tr>
            </table>
            
            <button value="submit">submit</button>
        </form>
        </div>
    </body>