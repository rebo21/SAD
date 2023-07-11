<!-- VERSION 1.1 -->
<?php
@include 'config.php';
session_start();
if (isset($_POST['submit'])) {
    $user_id = $_SESSION['user_id']; 
    $lastName = $_POST['lastName'];
    $firstName = $_POST['firstName'];
    $midName = $_POST['midName'];
    $suffix = $_POST['suffix'];
    $jobseekerType = $_POST['jobseekerType'];
    $birthplace = $_POST['birthplace'];
    $birthday = $_POST['birthday'];
    $age = $_POST['age'];
    $sex = $_POST['sex'];
    $civilStatus = $_POST['civilStatus'];
    $citizenship = $_POST['citizenship'];
    $housenumPresent = $_POST['housenumPresent'];
    $brgyPresent = $_POST['brgyPresent'];
    $cityPresent = $_POST['cityPresent'];
    $provincePresent = $_POST['provincePresent'];
    $housenumPermanent = $_POST['housenumPermanent'];
    $brgyPermanent = $_POST['brgyPermanent'];
    $cityPermanent = $_POST['cityPermanent'];
    $provincePermanent = $_POST['provincePermanent'];
    $height = $_POST['height'];
    $weight = $_POST['weight'];
    $landlineNum = $_POST['landlineNum'];
    $mobilePnum = $_POST['mobilePnum'];
    $mobileSnum = $_POST['mobileSnum'];
    $email = $_POST['email'];
    $disability = $_POST['disability'];
    $employmentStatus = $_POST['employmentStatus'];
    $activelyLooking = $_POST['activelyLooking'];
    $willinglyWork = $_POST['willinglyWork'];
    $fourpsBeneficiary = $_POST['fourpsBeneficiary'];
    $ofw = $_POST['ofw'];

    $insert = "INSERT INTO applicant_profile01 (user_id,lastName, firstName, midName, suffix, jobseekerType, birthplace, birthday, age, sex, civilStatus, citizenship, housenumPresent, brgyPresent, cityPresent, provincePresent, housenumPermanent, brgyPermanent, cityPermanent, provincePermanent, height, weight, landlineNum, mobilePnum, mobileSnum, email, disability, employmentStatus, activelyLooking, willinglyWork, fourpsBeneficiary, ofw)
    VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $insert)){
        echo "Error connecting to database";
    } else{
        mysqli_stmt_bind_param($stmt, "ssssssssssssssssssssssssssssssss",$user_id,$lastName, $firstName, $midName, $suffix, $jobseekerType, $birthplace, $birthday, $age, $sex, $civilStatus, $citizenship, $housenumPresent, $brgyPresent, $cityPresent, $provincePresent, $housenumPermanent, $brgyPermanent, $cityPermanent, $provincePermanent, $height, $weight, $landlineNum, $mobilePnum, $mobileSnum, $email, $disability, $employmentStatus, $activelyLooking, $willinglyWork, $fourpsBeneficiary, $ofw);
        mysqli_stmt_execute($stmt);
        echo"data successfully stored";
        header("location:APPLICANT_PROFILE_2.php");
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
        <link rel="stylesheet" href="../../CSS/APPLICANT_PROFILE_1.CSS">
       
    </head>

    <body>

        
    <div id="navbar">
            <a href="APPLICANT_HOMEPAGE.PHP" style="width:45%; padding-top: 15px;"><img src="../../IMAGES/PESO_LOGO.png"  style="width:80px;height:80px; float: left; margin-left: 30px;"></a>
            <a href="#">JOB OFFERS</a>
            <a href="#">JOB OFFERS</a>
            <a href="#">JOB OFFERS</a>
            <a href="#" class="active">PROFILE</a>
        </div>
            <!--end of navbar-->
        
        <div class="column">
           <!--side bar-->
            <div class="sidenav">
               

                <a href="APPLICANT_PROFILE_1.PHP" class="active">PERSONAL INFORMATION</a>
                <a href="APPLICANT_PROFILE_2.PHP">EDUCATIONAL BACKGROUND</a>
                <a href="APPLICANT_PROFILE_3.PHP">JOB PREFERENCE</a>
                <a href="APPLICANT_PROFILE_4.PHP">TRAININGS</a>
                <a href="APPLICANT_PROFILE_5.PHP">ELIGIBILITY</a>
                <a href="APPLICANT_PROFILE_6.PHP">WORK EXPERIENCES</a>
                <a href="APPLICANT_PROFILE_7.PHP">SKILLS</a>
                <a href="#">AUTHORIZATION</a>
                <!--end of side bar-->
            </div>

            <div class="main">
                
                <center>
                <div class="card">
                    <h1>MY PROFILE</h1>
                    <div class="container"> 
                        <div class="edit-profile">
                    <div id="display-image">
        <?php
        $user_id = $_SESSION['user_id']; 
        $query = " SELECT * FROM a_accounttb WHERE user_id = '$user_id'";
        $result = mysqli_query($conn, $query);
        while ($data = mysqli_fetch_assoc($result)) {
        ?>
            <img src="./upload_img/<?php echo $data['profile_img']; ?>">
        <?php
        }
        ?>
    </div>
    </div>
                            <br><a class="button2" href="update_profile.php">Edit Profile</a>
                                            
                        <!--start of profile form-->
                        <form class="" action="" method="post" autocomplete="off">
                            <div class="card2">
                            </div>
                            <div class="card3">
                                <h3>I. PERSONAL INFORMATION</h3>
                                <div class="card4A">
                                    <div class="col1"onkeydown="restrictName(event)">
                                    <h4><label for="">NAME</label></h4>
                                    <input style="width:70%;float:left;margin-left:20px" type="text"name="lastName" placeholder="LAST NAME" required maxlength="50">
                                    <input style="width:70%;float:left;margin-left:20px" type="text"name="firstName" placeholder="FIRST NAME" required>
                                    <input style="width:45%;float:left;margin-left:20px" type="text"name="midName" placeholder="MIDDLE NAME">
                                    <input style="width:20%;float:left;margin-left:20px" type="text" name="suffix" placeholder="SUFFIX">
                                    </div>
                                </div>

                                <div class="card4B">
                                    <div class="col1">
                                    <h4><label for="">TYPE OF JOBSEEKER</label></h4>
                                    <select style=float:left; class="" name="jobseekerType" required>
                                        <option value="" selected hidden></option>
                                        <option value="first_time">FIRST TIME</option>
                                        <option value="jobseeker">JOBSEEKER</option>
                                        <option value="ofw">OFW</option>
                                    </select>
                                    </div>
                                    
                                </div>

                                <div class="card4B">
                                    <div class="col2">
                                        <h4><label for="">PLACE&nbsp;&nbsp;OF&nbsp;&nbsp;BIRTH</label></h4>                
                                        <input style=float:left; type="text" name="birthplace"placeholder="BIRTHPLACE" required>
                                    </div>
        
                                    <div class="col2">
                                        <h4><label for="">DATE&nbsp;&nbsp;OF&nbsp;&nbsp;BIRTH</label></h4>                
                                        <input style=float:left; type="date" name="birthday" placeholder="BIRTHDAY" required>
                                    </div>
                                </div>

                                <div class="card4B">
                                    <div class="col2">
                                        <h4><label for="">AGE</label></h4>
                                        <input style=float:left; type="number" id="age"name="age" placeholder="AGE"min="16" max="90"required>
                                        
                                    </div>
        
                                    <div class="col2">
                                        <h4><label for="">SEX</label></h4>
                                        <select style=float:left; class="" name="sex" required>
                                            <option value="" selected hidden></option>
                                            <option value="Female">Female</option>
                                            <option value="Male">Male</option>
                                        </select>
                                        
                                    </div>
                                </div>

                                <div class="card4B">
                                    <div class="col2">
                                        <h4><label for="">CIVIL&nbsp;&nbsp;STATUS</label></h4>
                                        <select style=float:left; class="" name="civilStatus" required>
                                            <option value="" selected hidden></option>
                                            <option value="Single">Single</option>
                                            <option value="Married">Married</option>
                                            <option value="Single Parent">Single Parent</option>
                                            <option value="Widow">Widow</option>

                                        </select>                                        
                                    </div>
        
                                    <div class="col2">
                                        <h4><label for="">CITIZENSHIP</label></h4>
                                        <input style=float:left; type="text" onkeydown="restrictName(event)" name="citizenship" placeholder="CITIZENSHIP" required maxlength="50">
        
                                        
                                    </div>
                                </div>

                                <div class="card4C">
                                    <div class="col1">
                                    <h4><label for="">PRESENT ADDRESS</label></h4>
                                    <input style=width:45%;float:left;margin-left:20px  type="text" name="housenumPresent" placeholder="HOUSE NO." required maxlength="50">
                                    <input style=width:45%;float:left;margin-left:20px type="text"name="brgyPresent" placeholder="BARANGAY" required maxlength="50">
                                    <input style=width:45%;float:left;margin-left:20px type="text"onkeydown="restrictName(event)" name="cityPresent" placeholder="MUNICIPALITY/CITY" required maxlength="50">
                                    <input style=width:45%;float:left;margin-left:20px type="text" onkeydown="restrictName(event)"name="provincePresent" placeholder="PROVINCE" required maxlength="50">
                                    </div>
                                </div>

                                <div class="card4C">
                                    <div class="col1">
                                    <h4><label for="">PERMANENT ADDRESS</label></h4>
                                    <input style=width:45%;float:left;margin-left:20px type="text" name="housenumPermanent" placeholder="HOUSE NO." required maxlength="50">
                                    <input style=width:45%;float:left;margin-left:20px type="text" onkeydown="restrictName(event)"name="brgyPermanent" placeholder="BARANGAY" required maxlength="50">
                                    <input style=width:45%;float:left;margin-left:20px type="text" onkeydown="restrictName(event)"name="cityPermanent" placeholder="MUNICIPALITY/CITY" required maxlength="50">
                                    <input style=width:45%;float:left;margin-left:20px type="text" onkeydown="restrictName(event)"name="provincePermanent" placeholder="PROVINCE" required maxlength="50">
                                    </div>
                                </div>

                                <div class="card4B">
                                    <div class="col2">
                                        <h4><label for="">HEIGHT</label></h4>
                                        <input style=float:left; type="number" name="height" id="body-size" placeholder="HEIGHT (cm)" min="0" required>
                                        
                                    </div>
        
                                    <div class="col2">
                                        <h4><label for="">WEIGHT</label></h4>
                                        <input style=float:left; type="text" name="weight" id="body-size" placeholder="WEIGHT (kg)" required>
        
                                        
                                    </div>
                                </div>

                                <div class="card4B">
                                    <div class="col1">
                                        <h4><label for="">LANDLINE NUMBER</label></h4>
                                        <input style=width:40%;float:left; type="tel" id="landnum" name="landlineNum" placeholder="LANDLINE NUMBER" pattern="[0-9]{8}"required>
                                        
                                    </div>
                                </div>

                                <div class="card4B">
                                    <div class="col1">
                                        <h4><label for="">MOBILE NUMBER</label></h4>
                                        <input style=width:45%;float:left; type="tel" name="mobilePnum" placeholder="PRIMARY NUMBER" pattern="[0-9]{11}"required>
                                        <input style=width:45%;float:left;margin-left:30px type="number" name="mobileSnum" placeholder="SECONDARY NUMBER"pattern="[0-9]{11}" required>
                                    </div>
                                </div>

                                <div class="card4B">
                                    <div class="col1">
                                        <h4><label for="">EMAIL ADDRESS</label></h4>
                                        <input style=width:70%;float:left; type="email" name="email" placeholder="EMAIL ADDRESS" required maxlength="50">
                                        
                                    </div>
                                </div>

                                <div class="card4B">
                                    <div class="col2">
                                        <h4><label for="">DISABILITY</label></h4>
                                        <select style="float:left; width:70%;" class="" name="disability" required>
                                            <option value="" selected hidden></option>
                                            <option value="visual">Visual</option>
                                            <option value="hearing">Hearing</option>
                                            <option value="speech">Speech</option>
                                            <option value="physical">Physical</option>
                                        </select>                                
                                    </div>

                                    <div class="col3">
                                        <h4><label for="">EMPLOYMENT STATUS</label></h4>
                                        <select style="float:left; width:70%;" class="" name="employmentStatus" required>
                                            <option value="" selected hidden></option>
                                            <option value="wage_employed">Wage Employed</option>
                                            <option value="self_employed">Self Employed</option>
                                            <option value="fresh_grad">Fresh Graduate</option>
                                            <option value="finished_contract">Finished Contract</option>
                                            <option value="resigned">Resigned</option>
                                            <option value="retired">Retired</option>
                                            <option value="terminated">Terminated</option>
                                            <option value="laidoff_local">Laidoff(local)</option>
                                            <option value="laidoff_abroad">Laidoff(abroad)</option>
        
                                        </select>                                
                                    </div>
                                </div>

                                <div class="card4D">
                                    <div class="col1">
                                        <h4><label for="">ACTIVELY LOOKING FOR WORK?</label></h4> 
                                        <select style="width:20%;margin-left:40px;" class="" name="activelyLooking" required>
                                            <option value="" selected hidden></option>
                                            <option value="yes">Yes</option>
                                            <option value="no">No</option>
                                        </select>                                 
                                    </div>
                                </div>
        
                                <div class="card4D">
                                    <div class="col1">
                                        <h4><label for="">WILLING TO WORK IMMEDIATELY?</label></h4>
                                        <select style=width:20%;margin-left:40px; class="drop-down" name="willinglyWork" required>
                                            <option value="" selected hidden></option>
                                            <option value="yes">Yes</option>
                                            <option value="no">No</option>
                                        </select>     
                                                 
                                    </div>
                                </div>

                                <div class="card4D">
                                    <div class="col1">
                                        <h4><label for="">ARE YOU A 4Ps BENEFICIARY?</label></h4>
                                        <select style=width:20%;margin-left:40px; class="" name="fourpsBeneficiary" required>
                                            <option value="" selected hidden></option>
                                            <option value="yes">Yes</option>
                                            <option value="no">No</option>
                                        </select>     
                                                                     
                                    </div>
                                </div>
        
                                <div class="card4D">
                                    <div class="col1">
                                        <h4><label for="">ARE YOU AN OFW?</label></h4>
                                        <select style=width:20%;margin-left:40px; class="" name="ofw" required>
                                            <option value="" selected hidden></option>
                                            <option value="yes">Yes</option>
                                            <option value="no">No</option>
                                        </select>                                 
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
