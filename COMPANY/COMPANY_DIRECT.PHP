<!-- VERSION 3 -->



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>APPLICANTS ACCESS</title>
    <link rel="icon" type="image/x-icon" href="../IMAGES/PESO_LOGO.png">
    <link rel="stylesheet" href="../CSS/COMPANY_REQUIREMENTS.CSS">
   
  </head>

  <body>
    <div class="header" id="myHeader">
      <a href="#" style="width: 55%; margin-left: 20px;"><img src="../IMAGES/LOGO.png"  style="width:300px;height:90px; float: left; margin-left: 30px;"></a>
    </div>
             
    <center>
        <div class="card1">
            <h1>PLEASE UPLOAD YOUR REQUIREMENTS</h1>
            <br> <br>
            <form action="upload.php" method="post" enctype="multipart/form-data">
            <h2>1. COMPANY PROFILE</h2>
            <input type="file" name="fileToUpload" id="fileToUpload">
            <input type="submit" value="Upload Image" name="submit">


        </div>
    </center>

    <script src="../JS/APPLICANT_LOGIN.JS"></script>
  </body>

</html>