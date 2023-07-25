<!-- VERSION 3 -->

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>APPLICANT HOMEPAGE</title>
        <link rel="icon" type="image/x-icon" href="../IMAGES/PESO_LOGO.png">
        <link rel="stylesheet" href="../CSS/ACCESS_REGISTER.CSS">
        <link rel="stylesheet" href="../CSS/NAVBAR.CSS">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        
    </head>

    <body>

        <div class="sidenav">
            <a href="#" class="noHover" style="height: 100px;">
                <img src="../IMAGES/LOGO.png"  style="width:200px;height:60px; float: left; margin-left: 30px;">
            </a>
            
            <a href="#">HOME</a>
            <a href="#" class="active">ACCESS</a>
            <a href="#">PESO REGISTER</a>
            <a href="#">JOB POSTS</a>
            <a href="#">REPORTS</a>
            <a href="#">PROFILE</a>
            <a href="#">SETTING</a>
            <a href="#">MORE INFO</a>
            <a href="#">LOG OUT</a>
        </div>
          
        <div class="main">
            <div id="navbar">
                <a class="active" style="width: 500px; text-align: left;" href="#">APPLICANT ACCESS</a>
                <a href="#"></a>
            </div>
                
            <div class="content">
                <center>
                <div class="card4">
                    <h1>APPLICANTS</h1>
                    <div class="container">
                        <form action="" method="post">
                        
                            <div class="card2">
                                <div class="col1">
                                    <input type="email" placeholder="EMAIL ADDRESS" name="" required>
                                </div>
                            </div>

                            <div class="card2">
                                <div class="col1">
                                    <input type="email" placeholder="EMPLOYEE NUMBER" name="" required>
                                </div>
                            </div>

                            <div class="card2">
                                <div class="col1">
                                    <input type="password" placeholder="PASSCODE" name="" id="password"required maxlength="20">
                                    <img src="../IMAGES/eye-close.png" alt="" id="eyeicon">
                                    
                                </div>
                            </div>

                            <div class="card2">
                                <div class="col1">
                                    <input type="password" placeholder="CONFIRM PASSCODE" name="" id="password"required maxlength="20">
                                    <img src="../IMAGES/eye-close.png" alt="" id="eyeicon">
                                    
                                </div>
                            </div>


                            <div class="card3">
                                <br>
                                <center><button type="submit" class="accessreg" name="submit">ACCESS</button></center>
                                <br>
                                
                            </div>

                            
                            
                        </form>
                    </div>

                </div>
                </center>
                            
                            
            </div>
        
        </div>


        <script src="../JS/APPLICANT_REGISTER.JS"></script>
        <script src="../JS/NAVBAR.JS"></script>
    </body>

</html>

