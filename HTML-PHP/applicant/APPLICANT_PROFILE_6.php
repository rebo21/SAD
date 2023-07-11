<!-- VERSION 1 -->
<?php
@include'config.php';
session_start();
if (isset($_POST["submit"])){
  $user_id = $_SESSION["user_id"];
$company1 = $_POST["company1"];
$cpAddress1 = $_POST["cpAddress1"];
$company2 = $_POST["company2"];
$cpAddress2 = $_POST["cpAddress2"];
$company3 = $_POST["company3"];
$cpAddress3 = $_POST["cpAddress3"];
$company4 = $_POST["company4"];
$cpAddress4 = $_POST["cpAddress4"];
$position1 = $_POST["position1"];
$incluDate1 = $_POST["incluDate1"];
$appointStat1 = $_POST["appointStat1"];
$position2 = $_POST["position2"];
$incluDate2 = $_POST["incluDate2"];
$appointStat2 = $_POST["appointStat2"];
$position3 = $_POST["position3"];
$incluDate3 = $_POST["incluDate3"];
$appointStat3 = $_POST["appointStat3"];
$position4 = $_POST["position4"];
$incluDate4 = $_POST["incluDate4"];
$appointStat4 = $_POST["appointStat4"];

$sql = "INSERT INTO applicant_profile06 (user_id, company1, cpAddress1, company2, cpAddress2, company3, cpAddress3, company4, cpAddress4, position1, incluDate1, appointStat1, position2, incluDate2, appointStat2, position3, incluDate3, appointStat3, position4, incluDate4, appointStat4) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
$stmt = mysqli_stmt_init($conn);
if(!mysqli_stmt_prepare($stmt, $insert)){

} else{
  mysqli_stmt_bind_param($stmt, "sssssssssssssssssssss",$user_id, $company1, $cpAddress1, $company2, $cpAddress2, $company3, $cpAddress3, $company4, $cpAddress4, $position1, $incluDate1, $appointStat1, $position2, $incluDate2, $appointStat2, $position3, $incluDate3, $appointStat3, $position4, $incluDate4, $appointStat4);
  mysqli_stmt_execute($stmt);
  header("location:APPLICANT_PROFILE_7.PHP");
  exit();
}
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>APPLICANT PROFILE</title>
        <link rel="icon" type="image/x-icon" href="../../IMAGES/PESO_LOGO.png">
        <link rel="stylesheet" href="../../CSS/APPLICANT_PROFILE_6.CSS">
       
    </head>

    <body>

        
       
    <div id="navbar">
            <a href="#" style="width:45%; padding-top: 15px;"><img src="../../IMAGES/PESO_LOGO.png"  style="width:80px;height:80px; float: left; margin-left: 30px;"></a>
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
                <a href="APPLICANT_PROFILE_4.PHP">TRAININGS</a>
                <a href="APPLICANT_PROFILE_5.PHP">ELIGIBILITY</a>
                <a href="APPLICANT_PROFILE_6.PHP"class="active">WORK EXPERIENCES</a>
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
                                <h3>VI. WORK EXPERIENCES</h3>
                                <h4 style="padding-left: 30px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(Limit the occupation for the last 10 years. Start with the most recent employment)</h4>
                                <div class="card4A">
                                    <div class="col1">
                                        <table style="width:100%;">
                                            <tr>
                                              <th style="width: 25%">NAME OF OFFICE/COMPANY</th>
                                              <th style="width: 23%">ADDRESS</th>
                                            
                                            </tr>
                                            <tr>
                                              <td><input style=width:100%;float:left; type="text" name="company1" placeholder="COMPANY #1" required maxlength="50"></td>
                                              <td><input style=width:100%;float:left; type="text" name="cpAddress1" placeholder="ADDRESS #1" required maxlength="50"></td>
                                              
                                            </tr>
                                            <tr>
                                                <td><input style=width:100%;float:left; type="text" name="company2" placeholder="COMPANY #2" required maxlength="50"></td>
                                                <td><input style=width:100%;float:left; type="text" name="cpAddress2" placeholder="ADDRESS #2" required maxlength="50"></td>
                                               
                                              </tr>
                                              <tr>
                                                <td><input style=width:100%;float:left; type="text" name="company3" placeholder="COMPANY #3" required maxlength="50"></td>
                                                <td><input style=width:100%;float:left; type="text" name="cpAddress3" placeholder="ADDRESS #3" required maxlength="50"></td>
                                                
                                              </tr>
                                              <tr>
                                                <td><input style=width:100%;float:left; type="text" name="company4" placeholder="COMPANY #4" required maxlength="50"></td>
                                                <td><input style=width:100%;float:left; type="text" name="cpAddress4" placeholder="ADDRESS #4" required maxlength="50"></td>
                                               
                                              </tr>
                                        </table>
                                    </div>
                                </div>

                                <div class="card4A">
                                    <div class="col1">
                                        <table style="width:100%;">
                                            <tr>
                                              
                                              <th style="width: 20%">POSITION HELD</th>
                                              <th style="width: 30%">INCLUSIVE DATES</th>
                                              <th style="width: 15%">STATUS OF APPOINTMENT</th>
        
        
                                            </tr>
                                            <tr>
                                              
                                              <td><input style=width:100%;float:left; type="text" name="position1" placeholder="POSITION #1" required maxlength="50"></td>
                                              <td><input style=width:100%;float:left; type="text" name="incluDate1" placeholder="MM/YYYY TO MM/YYYY" required></td>
                                              <td>
                                                <select style=width:100%; class="" name="appointStat1" required>
                                                    <option value="" selected hidden></option>
                                                    <option value="permanent">PERMANENT</option>
                                                    <option value="contractual">CONTRACTUAL</option>
                                                    <option value="part_time">PART-TIME</option>
                                                    <option value="probitionary">PROBITIONARY</option>
                                                </select> 
                                              </td>
                                            </tr>
                                            <tr>
                                                
                                                <td><input style=width:100%;float:left; type="text" name="position2" placeholder="POSITION #2" required maxlength="50"></td>
                                                <td><input style=width:100%;float:left; type="text" name="incluDate2" placeholder="MM/YYYY TO MM/YYYY" required></td>
                                                <td>
                                                  <select style=width:100%; class="" name="appointStat2" required>
                                                      <option value="" selected hidden></option>
                                                      <option value="permanent">PERMANENT</option>
                                                      <option value="contractual">CONTRACTUAL</option>
                                                      <option value="part_time">PART-TIME</option>
                                                      <option value="probitionary">PROBITIONARY</option>
                                                  </select> 
                                                </td>
                                              </tr>
                                              <tr>
            

                                                <td><input style=width:100%;float:left; type="text" name="position3" placeholder="POSITION #3" required maxlength="50"></td>
                                                <td><input style=width:100%;float:left; type="text" name="incluDate3" placeholder="MM/YYYY TO MM/YYYY" required></td>
                                                <td>
                                                  <select style=width:100%; class="" name="appointStat3" required>
                                                      <option value="" selected hidden></option>
                                                      <option value="permanent">PERMANENT</option>
                                                      <option value="contractual">CONTRACTUAL</option>
                                                      <option value="part_time">PART-TIME</option>
                                                      <option value="probitionary">PROBITIONARY</option>
                                                  </select> 
                                                </td>
                                              </tr>
                                              <tr>
                                               
                                                <td><input style=width:100%;float:left; type="text" name="position4" placeholder="POSITION #4" required maxlength="50"></td>
                                                <td><input style=width:100%;float:left; type="text" name="incluDate4" placeholder="MM/YYYY TO MM/YYYY" required></td>
                                                <td>
                                                  <select style=width:100%; class="" name="appointStat4" required>
                                                      <option value="" selected hidden></option>
                                                      <option value="permanent">PERMANENT</option>
                                                      <option value="contractual">CONTRACTUAL</option>
                                                      <option value="part_time">PART-TIME</option>
                                                      <option value="probitionary">PROBITIONARY</option>
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




        <script src="../../JS/APPLICANT_PROFILE.JS"></script>

    </body>
</html>
