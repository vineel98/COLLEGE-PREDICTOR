
   <?php
                      $dbs= mysqli_connect('localhost','root','root','TEST');
                      $query="select * from student ";
                      $result=mysqli_query($dbs,$query);
                     
                      $usernames=array();
                      while($x=mysqli_fetch_array($result))
                      {
                          array_push($usernames, $x[5]);
                      }
                                       
                      
   ?>

<html>
    <head>
        <title>registration  page</title>
       
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
            $(document).ready(function(){
    $("img").click(function(){
        animate({left: '250px'});
    });
});
            
            function user()
            {
                var usernames[];
            
                
            }
            
        </script>
         <link rel="stylesheet" href="vineel1.css">
     </head>
    <body>
        <div class="header1">
         <table width="100%">
            <tr>
                <td> <img src="logo.jpeg" alt="logo" align="right" style="border-radius: 10px"></td>
                <td> <h1 style="font-size: 35px; padding-left: 60px" > COLLEGE PREDICTOR</h1></td>
            </tr>
         </table>
        </div>
        
        <div class="header2"><table style="width:100%"><tr><td><h1>Registration Form</h1></td></tr></table></div>
        <div class="header3">
            <table width="100%">
                <tr>
                    
                    <td><a href="homepage.html" class="header4"> Homepage</a></td>
           <td> <a href="homepage.html" class="header4">About</a></td>
           <td><a href="homepage.html" class="header4">AdminLogin</a></td>
          <td><a href="homepage.html" class="header4">StudentLogin</a></td>
          <td><a href="homepage.html" class="header4">Register</a></td>
                </tr>
            </table>
        </div>
        
        <div class="column">
           
        </div>
        <div  class="column1" >
            <form  action="insert.php"  method="POST" id="myform"  enctype="multipart/form-data">
            <table border="0.3" style="width:100%">
                <tr>
                    <td>
                        <p style="color:orange">Name</p>
                    </td>
                    <td>
                        <input type="text" placeholder="your name..." name="name" id="vineel" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p style="color:orange">Upload Your Photo:</p>
                    </td>
                    <td>
                          <input type="file" name="file1"/>
                    </td>

                </tr>
                <tr>
                    <td>
                        <p style="color:orange">Mobile Number</p>
                    </td>
                    <td>
                        <input type="text" placeholder="your number" name="phn" id="phn">
                    </td>
                </tr>
                <tr>
                    <td>
                        <p style="color:orange">Email</p>
                    </td>
                    <td>
                        <input type="text" placeholder="your email" name="email" id="email">
                    </td>
                </tr>
                <tr>
                    <td>
                        <p style="color:orange">Rank</p>
                    </td>
                    <td>
                        <input type="text" placeholder="your rank" name="rank" id="rank">
                    </td>
                </tr>
                <tr>
                    <td>
                        <p style="color:orange">D-O-B</p>
                    </td>
                    <td>
                        <input type="date"   name="dob" id="dob">
                    </td>

                </tr>
                 <tr>
                    <td>
                      <p style="color:orange">Gender</p>
                    </td>
                    <td>
                        <p style="color:orange"><input type="radio" value="male" name="gender">  Male </p>
                    </td>
                </tr>
                <tr>
                    <td>
                     
                    </td>
                    <td>
                        <p style="color:orange"><input type="radio" value="female" name="gender">  Female </p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <P style="color:orange">UserName</p>
                    </td>
                    <td>
                          <input type="text" placeholder="your username..."  name="username" id="usrname">
                    </td>

                </tr>
                <tr>
                    <td>
                        <p style="color:orange">Password</p>
                    </td>
                    <td>
                          <input type="password" placeholder="your password..."  name="pwd" id="password">
                    </td>

                </tr>
                   
                
                <tr>
                    <td>
                        <button value="submit" > submit</button>
                    </td>
                    
                </tr>
             </table>
                
            </form>
        </div>
                
         
    ^</body>

</html>

