<!-- VERSION 1 -->
<?php
@include'config.php';
session_start();
if (isset($_POST["submit"])) {
    $user_id = $_SESSION["user_id"];
    $careerServ1 = $_POST["careerServ1"];
    $licenceNum1 = $_POST["licenceNum1"];
    $expiryDate1 = $_POST["expiryDate1"];
    $careerServ2 = $_POST["careerServ2"];
    $licenceNum2 = $_POST["licenceNum2"];
    $expiryDate2 = $_POST["expiryDate2"];
    $careerServ3 = $_POST["careerServ3"];
    $licenceNum3 = $_POST["licenceNum3"];
    $expiryDate3 = $_POST["expiryDate3"];
    $validDate = $_POST["validDate"];
    $languageCertifications = implode(', ', $_POST["languageCertifications"]);
    $otherCertification = $_POST["otherCertification"];
    $dialectsSpoken = implode(', ', $_POST["dialectsSpoken"]);
    $otherDialect = $_POST["otherDialect"];

    $insert = "INSERT INTO applicant_profile05 (user_id, careerServ1, licenceNum1, expiryDate1, careerServ2, licenceNum2, expiryDate2, careerServ3, licenceNum3, expiryDate3, validDate, languageCertifications, otherCertification, dialectsSpoken, otherDialect) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$insert)){

    }else{
        mysqli_stmt_bind_param($stmt,"sssssssssssssss",$user_id,$careerServ1,$licenceNum1,$expiryDate1,$careerServ2,$licenceNum2,$expiryDate2,$careerServ3,$licenceNum3,$expiryDate3,$validDate,$languageCertifications,$otherCertification,$dialectsSpoken,$otherDialect);
        mysqli_stmt_execute($stmt);
        header("location:APPLICANT_PROFILE_6.PHP");
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
        <link rel="stylesheet" href="../../CSS/APPLICANT_PROFILE_5.CSS">
       
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
                <a href="APPLICANT_PROFILE_5.PHP"class="active">ELIGIBILITY</a>
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
                                <h3>V. ELIGIBILITY</h3>
                                <div class="card4A">
                                    <div class="col1">
                                        <table style="width:100%;">
                                            <tr>
                                              <th style="width: 30%;">CAREER SERVICE/BOARD/BAR</th>
                                              <th style="width: 30%;">LICENCE NUMBER</th>
                                              <th style="width: 25%;">EXPIRY DATE</th>
                                            </tr>
                                            <tr>
                                              <td><input style=width:100%;float:left; type="text" name="careerServ1" placeholder="" required maxlength="50"></td>
                                              <td><input style=width:100%;float:left; type="text" name="licenceNum1" placeholder="" required maxlength="50"></td>
                                              <td><input style=width:100%;float:left; type="date" name="expiryDate1" placeholder="MM/DD/YYYY" required></td>
                                            </tr>
                                            <tr>
                                                <td><input style=width:100%;float:left; type="text" name="careerServ2" placeholder="" required maxlength="50"></td>
                                                <td><input style=width:100%;float:left; type="text" name="licenceNum2" placeholder="" required maxlength="50"></td>
                                                <td><input style=width:100%;float:left; type="date" name="expiryDate2" placeholder="MM/DD/YYYY" required></td>
                                            </tr>
                                            <tr>
                                                <td><input style=width:100%;float:left; type="text" name="careerServ3" placeholder="" required maxlength="50"></td>
                                                <td><input style=width:100%;float:left; type="text" name="licenceNum3" placeholder="" required maxlength="50"></td>
                                                <td><input style=width:100%;float:left; type="date" name="expiryDate3" placeholder="MM/DD/YYYY" required></td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>

                                <div class="card4B">
                                    <div style="text-align: left;" class="col1">
                                        <h4><label for="">LANGUAGE PROFECIENCY CERTIFICATION</label></h4>
                                        <input type="checkbox" id="cert_1" name="languageCertifications[]" value="IELTS">
                                        <label for="cert_1">International English Language Testing System (IELTS)</label><br>
                                        <input type="checkbox" id="cert_2" name="languageCertifications[]" value="TOEFL">
                                        <label for="cert_2">Test of English as a Foreign Language (TOEFL)</label><br>
                                        <input type="checkbox" id="cert_3" name="languageCertifications[]" value="TOCFL">
                                        <label for="cert_3">Test of Chinese as a Foreign Language (TOCFL)</label><br>
                                        <input type="checkbox" id="cert_4" name="languageCertifications[]" value="JLPT">
                                        <label for="cert_4">Japanese Language Proficiency Test (JLPT)</label><br>
                                        <input type="checkbox" id="cert_5" name="languageCertifications[]" value="TOPIC">
                                        <label for="cert_5">Test of Proficiency in Korea (TOPIC)</label><br>
                                        <input type="checkbox" id="cert_other" name="cert_other" value="">
                                        <label for="otherCertification">Other:</label>
                                        <input style="width: 20%; height: 15px;" type="text" id="otherCertification" name="otherCertification" value="" maxlength="50">
                                    </div>
                                </div>

                                <div class="card4C">
                                    <div class="col1">
                                        <h4><label for="">VALIDITY DATE:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <input style="width: 30%;" type="date" id="valid_date" name="validDate"  placeholder="MM/DD/YYYY" value="">
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
                                                    }</style>
        
                                        </label></h4>
                                    </div>
        
                                </div>

                                <div class="card4D">
                                    <div style="text-align: left;" class="col1">
                                        <h4><label for="dialectsSpoken">DIALECTS SPOKEN</label></h4>
                                        <input type="checkbox" id="Tagalog" name="dialectsSpoken[]" value="Tagalog">
                                        <label for="dialect_1">Tagalog</label><br>
                                        <input type="checkbox" id="Ilocano" name="dialectsSpoken[]" value="Ilocano">
                                        <label for="dialect_2">Ilocano</label><br>
                                        <input type="checkbox" id="Ilonggo" name="dialectsSpoken[]" value="Ilonggo">
                                        <label for="dialect_3">Ilonggo</label><br>
                                        <input type="checkbox" id="Bikol" name="dialectsSpoken[]" value="Bikol">
                                        <label for="dialect_4">Bikol</label><br>
                                        <input type="checkbox" id="dialect_other" name="dialectsSpoken[]r" value="">
                                        <label for="dialect_other">Other:</label>
                                        <input style="width: 20%; height: 15px;" type="text" id="dialect_other" name="otherDialect" value="" maxlength="50">
        
        
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
