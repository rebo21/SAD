<!-- VERSION 1 -->

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PESO LOG IN</title>
        <link rel="icon" type="image/x-icon" href="../../IMAGES/PESO_LOGO.png">
        <link rel="stylesheet" href="../../CSS/APPLICANT_LOGIN.CSS">
       
    </head>

    <body>

        
        <div class="header">
            
            <a href="../../index.php"><img src="../../IMAGES/PESO_LOGO.png"  style="width:100px;height:100px; float: left;"></a>
            <a href="https://santarosacity.gov.ph"><img src="../../IMAGES/STA_ROSA_LOGO.png"  style="width:100px; height:100px; float: right;"></a>
            
        </div>

        <center>
            <nav class="navbar">
               
                <div class="navbar-links">
                    
                    <ul>
                    
                        <li><a href="../HTML/ABOUT_US.php">ABOUT US</a></li>
                        <li><a href="../HTML/REQUIREMENTS.php">REQUIREMENTS</a></li>
                        <li><a href="../HTML/JOB_OFFERS.php">JOB OFFERS</a></li>
                        <li><a href="../HTML/URGENT_HIRING.php">URGENT HIRING</a></li>
                        <li><a href="..HTML/HELP_CENTER.php">HELP CENTER</a></li>
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
                <h1>LOG IN</h1>
                <br> <br>
                <div class="card2">
                    <form action="" method="post">
                        <div class="container">
                            <div class="card3">
                                <h2><label for="">EMAIL&nbsp;&nbsp;ADDRESS</label></h2>
                                <center><input type="text" placeholder="EMAIL ADDRESS" name="email" required></center>
                            </div>

                            <div class="card3">
                                <h2><label for="">PASSWORD</label></h2>
                                <center><input type="password" placeholder="PASSWORD" name="password" required></center>

                                <h3 style="margin-left: 50px;"><label>
                                <input type="checkbox" checked="checked" name="remember">Remember&nbsp;&nbsp;me
                                </label></h3>
                            </div>

                            <div class="card3">
                                

                                <br> <br>
                                <center><button type="submit">LOG IN</button></center>
                                <br>
                                <center><span class="psw"><a href="#">Forgot&nbsp;&nbsp;password?</a></span></center>
                                <br> 

                            </div>
                          
            
                      
                         
                      </form>
                </div>

            </div>
            </center>
        </div>

        <script src="../../JS/PESO_LOGIN.JS"></script>

    </body>
</html>
