<!-- VERSION 1 -->
<?php
@include'config.php';
session_start();
if(isset($_POST["submit"])){
    $user_id = $_SESSION["user_id"];
$trainingStatus = $_POST["trainingStatus"];
$training1 = $_POST["training1"];
$startDuration1 = $_POST["startDuration1"];
$endDuration1 = $_POST["endDuration1"];
$training2 = $_POST["training2"];
$startDuration2 = $_POST["startDuration2"];
$endDuration2 = $_POST["endDuration2"];
$training3 = $_POST["training3"];
$startDuration3 = $_POST["startDuration3"];
$endDuration3 = $_POST["endDuration3"];
$institution1 = $_POST["institution1"];
$certificate1 = $_POST["certificate1"];
$completion1 = $_POST["completion1"];
$institution2 = $_POST["institution2"];
$certificate2 = $_POST["certificate2"];
$completion2 = $_POST["completion2"];
$institution3 = $_POST["institution3"];
$certificate3 = $_POST["certificate3"];
$completion3 = $_POST["completion3"];


$insert = "INSERT INTO applicant_profile04 (user_id, trainingStatus, training1, startDuration1,endDuration1, training2, startDuration2, endDuration2, training3, startDuration3, endDuration3, institution1, certificate1, completion1, institution2, certificate2, completion2, institution3, certificate3, completion3) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
$stmt = mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($stmt, $insert)){
    echo "error connecting to database";
} else {
    mysqli_stmt_bind_param($stmt,"ssssssssssssssssssss",$user_id,$trainingStatus,$training1,$startDuration1,$endDuration1,$training2,$startDuration2,$endDuration2,$training3,$startDuration3,$endDuration3,$institution1,$certificate1,$completion1,$institution2,$certificate2,$completion2,$institution3,$certificate3,$completion3);
    mysqli_stmt_execute($stmt);
    header("location:APPLICANT_PROFILE_5.PHP");
    exit();
}
}
?>
<!-- VERSION 2 -->

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>APPLICANT PROFILE</title>
        <link rel="icon" type="image/x-icon" href="../../IMAGES/PESO_LOGO.png">
        <link rel="stylesheet" href="../../CSS/APPLICANT_PROFILE_4.CSS">
       
    </head>

    <body>

        
        <div id="navbar">
            <a href="#" style="width:45; padding-top: 15px;"><img src="../../IMAGES/PESO_LOGO.png"  style="width:80px;height:80px; float: left; margin-left: 30px;"></a>
            <a href="APPLICANT_HOMEPAGE.PHP">HOME</a>
            <a href="#">JOB OFFERS</a>
            <a href="#">JOB OFFERS</a>
            <a href="#" class="active">PROFILE</a>


        </div>

        
        <div class="column">
           
            <div class="sidenav">
               

                <a href="APPLICANT_PROFILE_1.PHP">PERSONAL INFORMATION</a>
                <a href="APPLICANT_PROFILE_2.PHP">EDUCATIONAL BACKGROUND</a>
                <a href="APPLICANT_PROFILE_3.PHP">JOB PREFERENCE</a>
                <a href="APPLICANT_PROFILE_4.PHP"class="active">TRAININGS</a>
                <a href="APPLICANT_PROFILE_5.PHP">ELIGIBILITY</a>
                <a href="APPLICANT_PROFILE_6.PHP">WORK EXPERIENCES</a>
                <a href="APPLICANT_PROFILE_7.PHP">SKILLS</a>
                <a href="#">AUTHORIZATION</a>
                
            </div>

            <div class="main">
                
                <center>
                <div class="card">
                    <h1>MY PROFILE</h1>
                    <div class="container">
                        <form class="" action="" method="post" autocomplete="off">
                            
                            <br> <br> <br>
                            
                            <div class="card3">
                                <h3>IV. TECHNICAL/VOCATIONAL/OTHER TRAINING</h3>
                                <div class="card4A">
                                    <div class="col1">
                                        <h4><label for="">CURRENTLY IN TRAINING?
                                            <select style=width:20%;margin-left:40px; class="" name="trainingStatus" required>
                                                <option value="" selected hidden></option>
                                                <option value="yes">YES</option>
                                                <option value="no">NO</option>
                                            </select>     
                                        </label></h4> 
                                    </div>
                                </div>

                                <div class="card4B">
                                    <div class="col1">
                                        <table style="width:100%;">
                                            <tr>
                                              <th style="width: 45%">TRAINING</th>
                                              <th style="width: 45%">DURATION OF COURSES</th>
                                             
        
        
                                            </tr>
                                            <tr>
                                              <td><input style=width:100%;float:left; type="text" name="training1" placeholder="TRAINING #1" required maxlength="50"></td>
                                              <td>
                                                <input style=width:48%;float:left; type="date" name="startDuration1" placeholder="" required>
                                                <input style=width:48%;float:left; type="date" name="endDuration1" placeholder="" required>
                                            </td>
                                              
                                            </tr>
                                            <tr>
                                                <td><input style=width:100%;float:left; type="text" name="training2" placeholder="TRAINING #2" required maxlength="50"></td>
                                                <td><input style=width:48%;float:left; type="date" name="startDuration2" placeholder="" required>
                                                <input style=width:48%;float:left; type="date" name="endDuration2" placeholder="" required>
                                            </td>
                                                
                                            </tr>
                                            <tr>
                                                <td><input style=width:100%;float:left; type="text" name="training3" placeholder="TRAINING #3" required maxlength="50"></td>
                                                <td>
                                                <input style=width:48%;float:left; type="date" name="startDuration3" placeholder="" required>
                                                <input style=width:48%;float:left; type="date" name="endDuration3" placeholder="" required>
                                                </td>
                                                <style>
                                                    input[type=date]{
                                                        width: 50%;
                                                        padding: 12px 20px;
                                                        margin: 5px 0;
                                                        display: inline-block;
                                                        border: 1px solid #ccc;
                                                        box-sizing: border-box;
                                                        border-radius: 10px;
                                                        font-size: 15px;
                                                        color:rgb(37, 32, 32);
                                                    }
                                                </style>
                                              </tr>
                                        </table>

                                    </div>
                                </div>

                                <div class="card4B">
                                    <div class="col1">
                                        <table style="width:100%;">
                                            <tr>

                                              <th>TRAINING INSTITUTION</th>
                                              <th>CERTIFICATES RECEIVED</th>
                                              <th style="font-size: 15px;">COMPLETED</th>
        
        
                                            </tr>
                                            <tr>
                                            
                                              <td><input style=width:100%;float:left; type="text" name="institution1" placeholder="INSTITUTION #1" required maxlength="50"></td>
                                              <td><input style=width:100%;float:left; type="text" name="certificate1" placeholder="CERTIFICATE #1" required maxlength="50"></td>
                                              <td>
                                                <select style=width:100%; class="" name="completion1" required>
                                                    <option value="" selected hidden></option>
                                                    <option value="yes">YES</option>
                                                    <option value="no">NO</option>
                                                </select> 
                                              </td>
                                            </tr>
                                            <tr>
                                              
                                                <td><input style=width:100%;float:left; type="text" name="institution2" placeholder="INSTITUTION #2" required maxlength="50"></td>
                                                <td><input style=width:100%;float:left; type="text" name="certificate2" placeholder="CERTIFICATE #2" required maxlength="50"></td>
                                                <td>
                                                  <select style=width:100%; class="" name="completion2" required>
                                                      <option value="" selected hidden></option>
                                                      <option value="yes">YES</option>
                                                      <option value="no">NO</option>
                                                  </select> 
                                                </td>
                                            </tr>
                                            <tr>
                                                
                                                <td><input style=width:100%;float:left; type="text" name="institution3" placeholder="INSTITUTION #3" required maxlength="50"></td>
                                                <td><input style=width:100%;float:left; type="text" name="certificate3" placeholder="CERTIFICATE #3" required maxlength="50"></td>
                                                <td>
                                                  <select style=width:100%; class="" name="completion3" required>
                                                      <option value="" selected hidden></option>
                                                      <option value="yes">YES</option>
                                                      <option value="no">NO</option>
                                                  </select> 
                                                </td>
                                              </tr>
                                        </table>
                                        
                                    </div>
                                </div>
                                

                                

        
                            </div>
                            <div class="card4E">
                            <center>
                                <button type="submit" class="button1">SAVE</button>
                                <button class="button2" name="submit">NEXT</button>
                            </center> 
                            </div>
            
                                
            
                                    
                                    
                        </form>
                    </div>
            
                </div>
                </center>
            
                    
              
               
            </div>

           
            
        </div>



        <script src="../../JS/APPLICANT_PROFILE_1.JS"></script>

    </body>
</html>
