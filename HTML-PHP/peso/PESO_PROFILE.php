<!-- VERSION 1 -->

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PESO PROFILE</title>
        <link rel="icon" type="image/x-icon" href="../../IMAGES/PESO_LOGO.png">
        <link rel="stylesheet" href="../../CSS/PESO_PROFILE.CSS">
       
    </head>

    <body>

        
        <div class="header">
            
                <a href="../index.php"><img src="../../IMAGES/PESO_LOGO.png"  style="width:100px;height:100px; float: left;"></a>
                <a href="https://santarosacity.gov.ph"><img src="../../IMAGES/STA_ROSA_LOGO.png"  style="width:100px; height:100px; float: right;"></a>
            
        </div>

        <center>
            <nav class="navbar">
               
                <div class="navbar-links">
                    
                    <ul>
                    
                        <li><a href="../HTML/ABOUT_US.php">JOB OFFERS</a></li>
                        <li><a href="../HTML/REQUIREMENTS.php">JOB OFFERS</a></li>
                        <li><a href="../HTML/JOB_OFFERS.php">JOB OFFERS</a></li>
                        <li><a href="../HTML/URGENT_HIRING.php">JOB OFFERS</a></li>
                        <li><a href="..HTML/HELP_CENTER.php">PROFILE</a></li>
                    </ul>
                    
                </div>

                <a href="#" class="toggle-button">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                  </a>
            </nav>
        </center>

        <div class="column">
            <br> <br> <br> <br> <br> <br>
            <center>
            <div class="card">
                <h1>MY PROFILE</h1>
                <div class="container">
                    <form class="" action="" method="post" autocomplete="off">
                    <div class="card2">


                    </div>

                    <br> <br> <br>

                    

                    <div class="card3">
                        

                        <div class="card4">
                            <div class="col1">
                                <h4><label for="">NAME</label></h4>
                                <input style=width:30%;float:left; type="text" name="lastname" placeholder="LAST NAME" required value="">&nbsp;&nbsp;&nbsp;&nbsp;
                                <input style=width:30%;float:left;margin-left:20px type="text" name="firstname" placeholder="FIRST NAME" required value="">&nbsp;&nbsp;&nbsp;&nbsp;
                                <input style=width:25%;float:left;margin-left:20px type="text" name="middlename" placeholder="MIDDLE NAME" required value="">
                            </div>
                        </div>

                        <div class="card4">
                            <div class="col2">
                                <h4><label for="">AGE</label></h4>
                                <input style=float:left; type="number" name="age" placeholder="AGE" required min="16" max="100">
                                
                            </div>
                            <div class="col3">
                                <h4><label for="">SEX</label></h4>
                                <select style=float:left; class="" name="sex" required>
                                    <option value="" selected hidden></option>
                                    <option value="Female">Female</option>
                                    <option value="Male">Male</option>
                                </select>
                                
                            </div>
                        </div>

                        <div class="card4">
                            <div class="col2">
                                <h4><label for="">POSITION</label></h4>
                                <input style=width:60%;float:left; type="text" name="registration_num" placeholder="REGISTRATION NUMBER" required>
                                
                            </div>
                            <div class="col3">
                                <h4><label for="">STATION HANDLE</label></h4>
                                <input style=float:left; type="text" name="contact_num" placeholder="CONTACT NUMBER" required>
                                
                            </div>
                        </div>

                        <div class="card4">
                            <div class="col2">
                                <h4><label for="">EMPLOYEE NUMBER</label></h4>
                                <input style=width:60%;float:left; type="text" name="employee_num" placeholder="EMPLOYEE NUMBER" required>
                                
                            </div>
                            <div class="col3">
                                <h4><label for="">CONTACT NUMBER</label></h4>
                                <input style=float:left; type="text" name="contact_num" placeholder="CONTACT NUMBER" required>
                                
                            </div>
                        </div>
                        

                        

                        <div class="card4">
                            <div class="col1">
                                <h4><label for="">EMAIL ADDRESS</label></h4>
                                <input style=width:70%;float:left; type="text" name="email" placeholder="COMPANY EMAIL ADDRESS" required>
                                
                            </div>
                        </div>

                        <div class="card4">
                            <div class="col1">
                                <h4><label for="">ADDRESS</label></h4>
                                <input style=width:70%;float:left; type="text" name="company_address" placeholder="COMPANY ADDRESS" required>
                                
                            </div>
                        </div>


            

                        



                        

                        


                        <br> <br> <br> <br> <br> <br>
                    </div>
                    <br> <br> <br>


                    <center><button type="submit" class="button3">SAVE</button></center>
    
                        
                        
                       

                        

                        
                       

                        
                       

                        
                        
                    </form>
                </div>

            </div>
            </center>

            <br> <br> <br> <br> <br> <br>
            
        </div>



        <script src="../../JS/PESO_PROFILE.JS"></script>

    </body>
</html>