<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REPORTS</title>
    <link rel="icon" type="image/x-icon" href="../IMAGES/PESO_LOGO.png">
    <link rel="stylesheet" href="../CSS/APPLICANT_LOGIN.CSS">
   
  </head>

  <body>
    <div class="header" id="myHeader">
      <a href="#" style="width: 55%; margin-left: 20px;"><img src="../IMAGES/LOGO.png"  style="width:300px;height:90px; float: left; margin-left: 30px;"></a>
    </div>
             
    <center>
        <div class="card1">
            <h1>REPORTS ACCESS</h1>
            <div class="container">
                <form action="" method="post">
                   
                    <div class="card2">
                        <div class="col1">
                            <input type="text" placeholder="EMPLOYEE NUMBER" name="employeeNum" required>
                        </div>
                    </div>

                    <div class="card2">
                        <div class="col1">
                            <input type="password" placeholder="PASSCODE" name="passcode" id="password"required maxlength="20">
                        </div>
                    </div>
                    


                    <div class="card3">
                        <br>
                        <center><button type="submit" class="login" name="submit">ACCESS</button></center>
                        <br>
                     

                    </div>

                    
                    
                </form>
            </div>

        </div>
    </center>

    <script src="../JS/APPLICANT_LOGIN.JS"></script>
  </body>

</html>