<?php
include '../connect.php';
session_start();
if (isset($_POST['submit'])) {
    $applicant_id = $_SESSION['applicant_id']; 
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
    $mobilePnum = $_POST['mobilePnum'];
    $mobileSnum = $_POST['mobileSnum'];
    $email = $_POST['email'];
    $disability = $_POST['disability'];
    $employmentStatus = $_POST['employmentStatus'];
    $activelyLooking = $_POST['activelyLooking'];
    $willinglyWork = $_POST['willinglyWork'];
    $fourpsBeneficiary = $_POST['fourpsBeneficiary'];
    $ofw = $_POST['ofw'];

    $insert = "INSERT INTO applicant_profile01 (applicant_id,lastName, firstName, midName, suffix, jobseekerType, birthplace, birthday, age, sex, civilStatus, citizenship, housenumPresent, brgyPresent, cityPresent, provincePresent, housenumPermanent, brgyPermanent, cityPermanent, provincePermanent, height, weight, mobilePnum, mobileSnum, email, disability, employmentStatus, activelyLooking, willinglyWork, fourpsBeneficiary, ofw)
    VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $insert)){
        echo "Error connecting to database";
    } else{
        mysqli_stmt_bind_param($stmt, "issssssssssssssssssssssssssssss",$applicant_id,$lastName, $firstName, $midName, $suffix, $jobseekerType, $birthplace, $birthday, $age, $sex, $civilStatus, $citizenship, $housenumPresent, $brgyPresent, $cityPresent, $provincePresent, $housenumPermanent, $brgyPermanent, $cityPermanent, $provincePermanent, $height, $weight, $mobilePnum, $mobileSnum, $email, $disability, $employmentStatus, $activelyLooking, $willinglyWork, $fourpsBeneficiary, $ofw);
        mysqli_stmt_execute($stmt);
        echo"data successfully stored";
        header("location:#");
        exit();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Applicant Profile</title>
    <link rel="icon" type="image/x-icon" href="../IMAGES/PESO_LOGO.png">
    <link rel="stylesheet" href="../css/af_personal_information.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <?php
    include 'function.php';
    include 'sidebar.php';
    ?>
    <div class="main-container">

 
    <div class="mini-sidebar">
        <div class="content-sidebar">
            <div class="profile-picture">
                <img src="profile-img/default.jpg" alt="">
                <input type="file" name="profile-image" id="profile-image-input" style="display: none;">
                <center><label for="profile-image-input" class="change-profile-button">Change Profile</label></center>
            </div>
        
            <div class="col-center">
                <a href="">Personal Information</a>
                <a href="">Educational Background</a>
                <a href="">Job Preference</a>
                <a href=""> Trainings</a>
                <a href="">Eligibility</a>
                <a href="">Work Experiences</a>
                <a href="">Skills</a>
                <a href="">Authorization</a>
            </div>
        </div>
    </div>

    <div class="container-profile">
    <h1>Personal Information <button class="update" name="submit">UPDATE</button></h1>
   
    
    
        <form action="" method="post">
        <div class="wrapper">
       
                    <div class="mt-3">
                        <div class="col3">
                        <label for=""><h2>Name</h2></label>
                        <input style="width:170px;" type="text" placeholder="First Name" name="firstName">
                        <input style="width:170px;" type="text" placeholder="Last Name" name="lastName">
                        <input style="width:170px;" type="text" placeholder="Middle Name" name="midName">
                        <input style="width:80px;" type="text" placeholder="suffix" name="suffix">
                        </div>
                    </div>
                    <div class="mt-3">
                        <div class="col3">
                        <label for=""><h2>Type of jobseeker</h2></label>
                        <select style="width:200px;" class="" name="jobseekerType" required>
                                        <option value="" selected hidden>Select Type</option>
                                        <option value="first_time">FIRST TIME</option>
                                        <option value="jobseeker">JOBSEEKER</option>
                                        <option value="ofw">OFW</option>
                                    </select>
                        </div>
                    </div>
                    <div class="mt-3">
                    <div class="stick-object">
                        <div class="col1">
                        <label for=""><h2>Birthplace</h2></label>
                        <input type="text" name="birthplace"placeholder="BIRTHPLACE" required>
                        </div>
                        <div class="col2">
                        <label for=""><h2>Date of Birth</h2></label>
                        <input type="date" placeholder="birthday" name="birthday">
                        </div>
                    </div>
                    </div>
                    <div class="mt-3">
                    <div class="stick-object">
                       
                        <div class="col1">
                        <label for=""><h2>Age</h2></label>
                        <input type="number" id="age"name="age" placeholder="AGE"min="16" max="90"required>
                        </div>
                        <div class="col2">
                        <label for=""><h2>Sex</h2></label>
                        <select class="" name="sex" required>
                                            <option value="" selected hidden>Select Gender</option>
                                            <option value="Female">Female</option>
                                            <option value="Male">Male</option>
                        </select>
                        </div>
                    </div>
                    </div>
                    
                    <div class="mt-3">
                    <div class="stick-object">
                        <div class="col1">
                        <label for=""><h2>Civil Status</h2></label>
                        <select class="" name="civilStatus" required>
                                            <option value="" selected hidden>Select Status</option>
                                            <option value="Single">Single</option>
                                            <option value="Married">Married</option>
                                            <option value="Single Parent">Single Parent</option>
                                            <option value="Widow">Widow</option>
                        </select>
                        </div>
                        <div class="col2">
                        <label for=""><h2>Citizenship</h2></label>
                        <input type="text" name="citizenship" placeholder="CITIZENSHIP" required maxlength="50">
                        </div>
                    </div>
                    </div>
                    <div class="mt-3">
                        <div class="col3">
                        <label for=""><h2>Present Address</h2></label>
                        <input style="width:100px;" type="text" name="housenumPresent" placeholder="HOUSE NO." required maxlength="50">
                        <input style="width:170px;" type="text"name="brgyPresent" placeholder="BARANGAY" required maxlength="50">
                        <input style="width:170px;" type="text" name="cityPresent" placeholder="MUNICIPALITY/CITY" required maxlength="50">
                        <input style="width:170px;" type="text" name="provincePresent" placeholder="PROVINCE" required maxlength="50">
                        </div>
                    </div>
                    <div class="mt-3">
                        <div class="col3">
                        <label for=""><h2>Permanent Address</h2></label>
                        <input style="width:100px;" type="text" name="housenumPermanent" placeholder="HOUSE NO." required maxlength="50">
                        <input style="width:170px;" type="text" name="brgyPermanent" placeholder="BARANGAY" required maxlength="50">
                        <input style="width:170px;" type="text" name="cityPermanent" placeholder="MUNICIPALITY/CITY" required maxlength="50">
                        <input style="width:170px;" type="text" name="provincePermanent" placeholder="PROVINCE" required maxlength="50">
                        </div>
                    </div>
                    <div class="mt-3">
                    <div class="stick-object">
                        <div class="col1">
                        <label for=""><h2>Height</h2></label>
                        <input type="number" name="height" id="body-size" placeholder="HEIGHT (cm)" min="0" required>
                        </div>
                        <div class="col2">
                        <label for=""><h2>Weight</h2></label>
                        <input type="text" name="weight" id="body-size" placeholder="WEIGHT (kg)" required>
                        </div>
                    </div>
                    </div>
                    <div class="mt-3">
                        <div class="col1">
                        <label for=""><h2>Mobile Number</h2></label>
                        <input type="tel" name="mobilePnum" placeholder="PRIMARY NUMBER" required>
                        </div>
                        <div class="col2">
                        <label for=""><h2>Mobile Number</h2></label>
                        <input type="tel" name="mobileSnum" placeholder="SECONDARY NUMBER" required>
                        </div>
                    </div>
                    <div class="mt-3">
                        <div class="col3">
                        <label for=""><h2>Email Address</h2></label>
                        <input type="email" name="email" placeholder="EMAIL ADDRESS" required maxlength="50">
                        </div>
                    </div>
                    <div class="mt-3">
                    <div class="stick-object">
                        <div class="col1">
                        <label for=""><h2>Disability</h2></label>
                        <select style="width: 120px;"class="" name="disability" required>
                                            <option value="None" selected hidden>None</option>
                                            <option value="None">None</option>
                                            <option value="visual">Visual</option>
                                            <option value="hearing">Hearing</option>
                                            <option value="speech">Speech</option>
                                            <option value="physical">Physical</option>
                        </select>   
                        </div>
                        <div class="col2">
                        <label for=""><h2>Employment Status</h2></label>
                        <select class="" name="employmentStatus" required>
                                            <option value="" selected hidden>Status</option>
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
                    
                    </div>
                    <div class="mt-3">
                        <div style="height: 40px;" class="col1">
                        <label for="">ACTIVELY LOOKING FOR WORK?</label>
                        </div>
                        <div class="col2">
                        <select class="" name="activelyLooking" required>
                                            <option value="" selected hidden></option>
                                            <option value="yes">Yes</option>
                                            <option value="no">No</option>
                        </select>  
                        </div> 
                    </div>
                    <div class="mt-3">
                    <div style="height: 40px;" class="col1">
                        <label for="">WILLING TO WORK IMMEDIATELY?</label>
                        </div>
                        <div class="col2">
                        <select class="drop-down" name="willinglyWork" required>
                                            <option value="" selected hidden></option>
                                            <option value="yes">Yes</option>
                                            <option value="no">No</option>
                        </select>
                        </div>     
                    </div>
                    <div class="mt-3">
                        <div style="height: 40px;" class="col1">
                        <label for="">ARE YOU A 4Ps BENEFICIARY?</label>
                        </div>
                        <div class="col2">
                        <select class="" name="fourpsBeneficiary" required>
                                            <option value="" selected hidden></option>
                                            <option value="yes">Yes</option>
                                            <option value="no">No</option>
                        </select>
                        </div>     
                    </div>
                    <div class="mt-3">
                        <div style="height: 40px;" class="col1">
                        <label for="">ARE YOU AN OFW?</label>
                        </div>
                        <div class="col2">
                        <select class="" name="ofw" required>
                                            <option value="" selected hidden></option>
                                            <option value="yes">Yes</option>
                                            <option value="no">No</option>
                        </select>
                        </div>        
                    </div>
                </div>
                
        </form>
    </div>
    </div>
    <script src="../JS/NAVBAR.JS"></script>
</body>
</html>