<!-- VERSION 1.1 -->
<?php
@include 'config.php';
session_start();
if (isset($_POST['submit'])) {
    $user_id = $_SESSION['user_id'];
    $occupation1 = $_POST["occupation1"];
    $industry1 = $_POST["industry1"];
    $occupation2 = $_POST["occupation2"];
    $industry2 = $_POST["industry2"];
    $occupation3 = $_POST["occupation3"];
    $industry3 = $_POST["industry3"];
    $employment_status = $_POST["employment_status"];
    $location1 = $_POST["location1"];
    $location2 = $_POST["location2"];

    $insert = "INSERT INTO applicant_profile02 (user_id, occupation1, industry1, occupation2, industry2, occupation3, industry3, employment_status, location1, location2) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $insert)) {
        echo "SQL connection error";
    } else {
        mysqli_stmt_bind_param($stmt, "ssssssssss", $user_id, $occupation1, $industry1, $occupation2, $industry2, $occupation3, $industry3, $employment_status, $location1, $location2);
        mysqli_stmt_execute($stmt);
        echo "Data inserted successfully";
        header("location:APPLICANT_PROFILE_4.php");
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
        <link rel="stylesheet" href="../../CSS/APPLICANT_PROFILE_2.CSS">
       
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
                <a href="APPLICANT_PROFILE_3.PHP"class="active">JOB PREFERENCE</a>
                <a href="APPLICANT_PROFILE_4.PHP">TRAININGS</a>
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
                                <h3>III. JOB PREFERENCE</h3>

                                <div class="card4A">
                                    <div class="col1">
                                        <table style="width:100%">
                                            <center>
                                            <tr>
                                                <th><h4>PREFERRED OCCUPATION</h4>
                                                    <h5>(e.g., clerk, call center agent, saleslady)</h5>
                                                </th>
                                                <th><h4><label for="">PREFERRED INDUSTRY</label></h4>
                                                    <h5><label for="">(e.g., IY-BPM, construction, manufacturing)</label></h5>
                                                </th>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <input style=width:100%;float:left; type="text" name="occupation1" placeholder="PREFERRED OCCUPATION #1" required maxlength="50">
                                                </td>
                                                <td>
                                                    <input style=width:100%;float:left; type="text" name="industry1" placeholder="PREFERRED INDUSTRY #1" required maxlength="50">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <input style=width:100%;float:left; type="text" name="occupation2" placeholder="PREFERRED OCCUPATION #2" required maxlength="50">
                                                </td>
                                                <td>
                                                    <input style=width:100%;float:left; type="text" name="industry2" placeholder="PREFERRED INDUSTRY #2" required maxlength="50">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <input style=width:100%;float:left; type="text" name="occupation3" placeholder="PREFERRED OCCUPATION #3" required maxlength="50">
                                                </td>
                                                <td>
                                                    <input style=width:100%;float:left; type="text" name="industry3" placeholder="PREFERRED INDUSTRY #3" required maxlength="50">
                                                </td>
                                            </tr>
                                            </center>
        
                                            
        
                                        </table>

                                    </div>
                                </div>

                                <div class="card4B">
                                    <div class="col1">
                                        <h4 style="text-align: left;"><label for="">PREFERRED WORK LOCATION
                                            <select style=width:20%;margin-left:40px; class="" name="employment_status" required>
                                                <option value="" selected hidden></option>
                                                <option value="local">LOCAL</option>
                                                <option value="abroad">ABROAD</option>
                                            </select>     
                                            </label></h4> 
                                    <input style=width:70%;float:left; type="text" name="location1" placeholder="WORK LOCATION #1" required maxlength="50">
                                    <input style=width:70%;float:left; type="text" name="location2" placeholder="WORK LOCATION #2" required maxlength="50">
                                    </div>
                                </div>
                               

                               
        
                                
        
                                
                                

                                

        
                            </div>
                            <div class="card4E">
                            <center>
                                <button type="submit"class="button1">SAVE</button>
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
