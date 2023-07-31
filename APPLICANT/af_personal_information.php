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

    $educLevel = $_POST['educLevel'];
    $gradYear = $_POST['gradYear'];
    $school = $_POST['school'];
    $course = $_POST['course'];
    $preferIndustry = $_POST['preferIndustry'];

    $employmentStatus = $_POST['employmentStatus'];
    $activelyLooking = $_POST['activelyLooking'];
    $willinglyWork = $_POST['willinglyWork'];
    $fourPsBeneficiary = $_POST['fourPsBeneficiary'];
    $ofw = $_POST['ofw'];

    // Check if applicant data already exists in the database
    $check_query = "SELECT * FROM applicant_profile WHERE applicant_id = ?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $check_query)) {
        echo "Error connecting to database";
    } else {
        mysqli_stmt_bind_param($stmt, "i", $applicant_id);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if (mysqli_num_rows($result) > 0) {
            // Data already exists, perform an UPDATE query
            $update_query = "UPDATE applicant_profile SET 
                lastName = ?, 
                firstName = ?, 
                midName = ?, 
                suffix = ?, 
                jobseekerType = ?, 
                birthplace = ?, 
                birthday = ?, 
                age = ?, 
                sex = ?, 
                civilStatus = ?, 
                citizenship = ?, 
                housenumPresent = ?, 
                brgyPresent = ?, 
                cityPresent = ?, 
                provincePresent = ?, 
                housenumPermanent = ?, 
                brgyPermanent = ?, 
                cityPermanent = ?, 
                provincePermanent = ?, 
                height = ?, 
                weight = ?, 
                mobilePnum = ?, 
                mobileSnum = ?, 
                email = ?, 
                disability = ?, 

                educLevel = ?,
                gradYear = ?,
                school = ?,   
                course = ?, 
                preferIndustry = ?, 

                employmentStatus = ?, 
                activelyLooking = ?, 
                willinglyWork = ?, 
                fourPsBeneficiary = ?, 
                ofw = ?
                WHERE applicant_id = ?";
            $stmt = mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt, $update_query)) {
                echo "Error connecting to database";
            } else {
                mysqli_stmt_bind_param($stmt, "ssssssssssssssssssssssssssssssssssss", 
                    $lastName, $firstName, $midName, $suffix, $jobseekerType, $birthplace, $birthday, $age, $sex, $civilStatus, $citizenship, $housenumPresent, $brgyPresent, $cityPresent, $provincePresent, $housenumPermanent, $brgyPermanent, $cityPermanent, $provincePermanent, $height, $weight, $mobilePnum, $mobileSnum, $email, $disability, $educLevel, $gradYear, $school, $course, $preferIndustry, $employmentStatus, $activelyLooking, $willinglyWork, $fourPsBeneficiary, $ofw, $applicant_id);
                mysqli_stmt_execute($stmt);
                echo "Data successfully updated";
                header("Location: #");
                exit();
            }
        } else {
            // Data does not exist, perform an INSERT query
            $insert_query = "INSERT INTO applicant_profile (applicant_id, lastName, firstName, midName, suffix, jobseekerType, birthplace, birthday, age, sex, civilStatus, citizenship, housenumPresent, brgyPresent, cityPresent, provincePresent, housenumPermanent, brgyPermanent, cityPermanent, provincePermanent, height, weight, mobilePnum, mobileSnum, email, disability, educLevel, gradYear, school, course, preferIndustry, employmentStatus, activelyLooking, willinglyWork, fourPsBeneficiary, ofw)
            VALUES (?,?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
            $stmt = mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt, $insert_query)) {
                echo "Error connecting to database";
            } else {
                mysqli_stmt_bind_param($stmt, "isssssssssssssssssssssssssssssssssss", 
                    $applicant_id, $lastName, $firstName, $midName, $suffix, $jobseekerType, $birthplace, $birthday, $age, $sex, $civilStatus, $citizenship, $housenumPresent, $brgyPresent, $cityPresent, $provincePresent, $housenumPermanent, $brgyPermanent, $cityPermanent, $provincePermanent, $height, $weight, $mobilePnum, $mobileSnum, $email, $disability, $educLevel, $gradYear, $school, $course, $preferIndustry, $employmentStatus, $activelyLooking, $willinglyWork, $fourPsBeneficiary, $ofw);
                mysqli_stmt_execute($stmt);
                echo "Data successfully stored";
                header("Location: #");
                exit();
            }
        }
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
      <div class="fetch-data">
        <?php
        $applicant_id = $_SESSION["applicant_id"];
                    $select = mysqli_query($conn, "SELECT * FROM applicant_profile WHERE applicant_id = '$applicant_id'") or die ('query failed');
                    if(mysqli_num_rows($select) > 0){
                        $fetch = mysqli_fetch_assoc($select);
                    }
        ?>
    </div>
    <div class="main-container">

 
    <div style="background: transaparent;" class="mini-sidebar">
        <div class="content-sidebar">
            
        
            <div class="col-center">
                
            </div>
        </div>
    </div>

    <div class="container-profile">
    <h1>Personal Information</h1>
   
    
    
        <form action="" method="post">
        <div class="wrapper">
            
            <div class="profile-picture">
                <img src="profile-img/default.jpg" alt="">
                <input type="file" name="profile-image" id="profile-image-input" style="display: none;">
                <center><label for="profile-image-input" class="change-profile-button">Change Profile</label></center>
            </div
                    <div class="mt-3">
                        <div class="col3">
                        <label for=""><h2>Name</h2></label>
                        <input style="width:170px;" type="text" placeholder="First Name" name="firstName" value="<?php echo isset($fetch['firstName']) ? $fetch['firstName'] : ''; ?>">
                        <input style="width:170px;" type="text" placeholder="Last Name" name="lastName" value="<?php echo isset($fetch['lastName']) ? $fetch['lastName'] : ''; ?>">
                        <input style="width:170px;" type="text" placeholder="Middle Name" name="midName"value="<?php echo isset($fetch['midName']) ? $fetch['midName'] : ''; ?>">
                        <input style="width:80px;" type="text" placeholder="suffix" name="suffix"value="<?php echo isset($fetch['suffix']) ? $fetch['suffix'] : ''; ?>">
                        </div>
                    </div>
                    <div class="mt-3">
                    <div class="col3">
                    <label for=""><h2>Type of jobseeker</h2></label>
                    <select style="width:200px;" class="" name="jobseekerType" required>
                        <option value="" <?php echo empty($fetch['jobseekerType']) ? 'selected' : ''; ?>>Select Type</option>
                        <option value="first_time" <?php echo (isset($fetch['jobseekerType']) && $fetch['jobseekerType'] === 'first_time') ? 'selected' : ''; ?>>FIRST TIME</option>
                        <option value="jobseeker" <?php echo (isset($fetch['jobseekerType']) && $fetch['jobseekerType'] === 'jobseeker') ? 'selected' : ''; ?>>JOBSEEKER</option>
                        <option value="ofw" <?php echo (isset($fetch['jobseekerType']) && $fetch['jobseekerType'] === 'ofw') ? 'selected' : ''; ?>>OFW</option>
                    </select>
                </div>
                    </div>
                    <div class="mt-3">
                    <div class="stick-object">
                        <div class="col1">
                        <label for=""><h2>Birthplace</h2></label>
                        <input type="text" name="birthplace"placeholder="BIRTHPLACE" required value="<?php echo isset($fetch['birthplace']) ? $fetch['birthplace'] : ''; ?>">
                        </div>
                        <div class="col2">
                        <label for=""><h2>Date of Birth</h2></label>
                        <input type="date" placeholder="birthday" name="birthday" value="<?php echo isset($fetch['birthday']) ? $fetch['birthday'] : ''; ?>">
                        </div>
                    </div>
                    </div>
                    <div class="mt-3">
                    <div class="stick-object">
                       
                        <div class="col1">
                        <label for=""><h2>Age</h2></label>
                        <input type="number" id="age"name="age" placeholder="AGE"min="16" max="90"required value="<?php echo isset($fetch['age']) ? $fetch['age'] : ''; ?>">
                        </div>
                        <div class="col2">
                        <label for=""><h2>Sex</h2></label>
                        <select class="" name="sex" required>
                            <option value="" <?php echo empty($fetch['sex']) ? 'selected' : ''; ?>>Select Gender</option>
                            <option value="Female" <?php echo (isset($fetch['sex']) && $fetch['sex'] === 'Female') ? 'selected' : ''; ?>>Female</option>
                            <option value="Male" <?php echo (isset($fetch['sex']) && $fetch['sex'] === 'Male') ? 'selected' : ''; ?>>Male</option>
                        </select>
                    </div>

                    </div>
                    </div>
                    
                    <div class="mt-3">
                    <div class="stick-object">
                    <div class="col1">
                    <label for=""><h2>Civil Status</h2></label>
                    <select class="" name="civilStatus" required>
                        <option value="" <?php echo empty($fetch['civilStatus']) ? 'selected' : ''; ?>>Select Status</option>
                        <option value="Single" <?php echo (isset($fetch['civilStatus']) && $fetch['civilStatus'] === 'Single') ? 'selected' : ''; ?>>Single</option>
                        <option value="Married" <?php echo (isset($fetch['civilStatus']) && $fetch['civilStatus'] === 'Married') ? 'selected' : ''; ?>>Married</option>
                        <option value="Single Parent" <?php echo (isset($fetch['civilStatus']) && $fetch['civilStatus'] === 'Single Parent') ? 'selected' : ''; ?>>Single Parent</option>
                        <option value="Widow" <?php echo (isset($fetch['civilStatus']) && $fetch['civilStatus'] === 'Widow') ? 'selected' : ''; ?>>Widow</option>
                    </select>
                </div>
                        <div class="col2">
                        <label for=""><h2>Citizenship</h2></label>
                        <input type="text" name="citizenship" placeholder="CITIZENSHIP" required maxlength="50" value="<?php echo isset($fetch['citizenship']) ? $fetch['citizenship'] : ''; ?>">
                        </div>
                    </div>
                    </div>
                    <div class="mt-3">
                        <div class="col3">
                        <label for=""><h2>Present Address</h2></label>
                        <input style="width:100px;" type="text" name="housenumPresent" placeholder="HOUSE NO." required maxlength="50" value="<?php echo isset($fetch['housenumPresent']) ? $fetch['housenumPresent'] : ''; ?>">
                        <input style="width:170px;" type="text"name="brgyPresent" placeholder="BARANGAY" required maxlength="50" value="<?php echo isset($fetch['brgyPresent']) ? $fetch['brgyPresent'] : ''; ?>">
                        <input style="width:170px;" type="text" name="cityPresent" placeholder="MUNICIPALITY/CITY" required maxlength="50" value="<?php echo isset($fetch['cityPresent']) ? $fetch['cityPresent'] : ''; ?>">
                        <input style="width:170px;" type="text" name="provincePresent" placeholder="PROVINCE" required maxlength="50" value="<?php echo isset($fetch['provincePresent']) ? $fetch['provincePresent'] : ''; ?>">
                        </div>
                    </div>
                    <div class="mt-3">
                        <div class="col3">
                        <label for=""><h2>Permanent Address</h2></label>
                        <input style="width:100px;" type="text" name="housenumPermanent" placeholder="HOUSE NO." required maxlength="50" value="<?php echo isset($fetch['housenumPermanent']) ? $fetch['housenumPermanent'] : ''; ?>">
                        <input style="width:170px;" type="text" name="brgyPermanent" placeholder="BARANGAY" required maxlength="50" value="<?php echo isset($fetch['brgyPermanent']) ? $fetch['brgyPermanent'] : ''; ?>">
                        <input style="width:170px;" type="text" name="cityPermanent" placeholder="MUNICIPALITY/CITY" required maxlength="50" value="<?php echo isset($fetch['cityPermanent']) ? $fetch['cityPermanent'] : ''; ?>">
                        <input style="width:170px;" type="text" name="provincePermanent" placeholder="PROVINCE" required maxlength="50" value="<?php echo isset($fetch['provincePermanent']) ? $fetch['provincePermanent'] : ''; ?>">
                        </div>
                    </div>
                    <div class="mt-3">
                    <div class="stick-object">
                        <div class="col1">
                        <label for=""><h2>Height</h2></label>
                        <input type="number" name="height" id="body-size" placeholder="HEIGHT (cm)" min="0" required value="<?php echo isset($fetch['height']) ? $fetch['height'] : ''; ?>">
                        </div>
                        <div class="col2">
                        <label for=""><h2>Weight</h2></label>
                        <input type="text" name="weight" id="body-size" placeholder="WEIGHT (kg)" required value="<?php echo isset($fetch['weight']) ? $fetch['weight'] : ''; ?>">
                        </div>
                    </div>
                    </div>
                    <div class="mt-3">
                        <div class="col1">
                        <label for=""><h2>Mobile Number</h2></label>
                        <input type="tel" name="mobilePnum" placeholder="PRIMARY NUMBER" required value="<?php echo isset($fetch['mobilePnum']) ? $fetch['mobilePnum'] : ''; ?>">
                        </div>
                        <div class="col2">
                        <label for=""><h2>Mobile Number</h2></label>
                        <input type="tel" name="mobileSnum" placeholder="SECONDARY NUMBER" required value="<?php echo isset($fetch['mobileSnum']) ? $fetch['mobileSnum'] : ''; ?>">
                        </div>
                    </div>
                    <div class="mt-3">
                        <div class="col3">
                        <label for=""><h2>Email Address</h2></label>
                        <input type="email" name="email" placeholder="EMAIL ADDRESS" required maxlength="50" value="<?php echo isset($fetch['email']) ? $fetch['email'] : ''; ?>">
                        </div>
                    </div>
                    <div class="mt-3">
                    <div class="stick-object">
                    <div class="col1">
                    <label for=""><h2>Disability</h2></label>
                    <select style="width: 120px;" class="" name="disability" required>
                        <option value="None" <?php echo (isset($fetch['disability']) && $fetch['disability'] === 'None') ? 'selected' : ''; ?>>None</option>
                        <option value="visual" <?php echo (isset($fetch['disability']) && $fetch['disability'] === 'visual') ? 'selected' : ''; ?>>Visual</option>
                        <option value="hearing" <?php echo (isset($fetch['disability']) && $fetch['disability'] === 'hearing') ? 'selected' : ''; ?>>Hearing</option>
                        <option value="speech" <?php echo (isset($fetch['disability']) && $fetch['disability'] === 'speech') ? 'selected' : ''; ?>>Speech</option>
                        <option value="physical" <?php echo (isset($fetch['disability']) && $fetch['disability'] === 'physical') ? 'selected' : ''; ?>>Physical</option>
                    </select>
                </div>

                <div class="col2">
                <label for=""><h2>Employment Status</h2></label>
                <select class="" name="employmentStatus" required>
                    <option value="" <?php echo empty($fetch['employmentStatus']) ? 'selected' : ''; ?>>Status</option>
                    <option value="wage_employed" <?php echo (isset($fetch['employmentStatus']) && $fetch['employmentStatus'] === 'wage_employed') ? 'selected' : ''; ?>>Wage Employed</option>
                    <option value="self_employed" <?php echo (isset($fetch['employmentStatus']) && $fetch['employmentStatus'] === 'self_employed') ? 'selected' : ''; ?>>Self Employed</option>
                    <option value="fresh_grad" <?php echo (isset($fetch['employmentStatus']) && $fetch['employmentStatus'] === 'fresh_grad') ? 'selected' : ''; ?>>Fresh Graduate</option>
                    <option value="finished_contract" <?php echo (isset($fetch['employmentStatus']) && $fetch['employmentStatus'] === 'finished_contract') ? 'selected' : ''; ?>>Finished Contract</option>
                    <option value="resigned" <?php echo (isset($fetch['employmentStatus']) && $fetch['employmentStatus'] === 'resigned') ? 'selected' : ''; ?>>Resigned</option>
                    <option value="retired" <?php echo (isset($fetch['employmentStatus']) && $fetch['employmentStatus'] === 'retired') ? 'selected' : ''; ?>>Retired</option>
                    <option value="terminated" <?php echo (isset($fetch['employmentStatus']) && $fetch['employmentStatus'] === 'terminated') ? 'selected' : ''; ?>>Terminated</option>
                    <option value="laidoff_local" <?php echo (isset($fetch['employmentStatus']) && $fetch['employmentStatus'] === 'laidoff_local') ? 'selected' : ''; ?>>Laidoff(local)</option>
                    <option value="laidoff_abroad" <?php echo (isset($fetch['employmentStatus']) && $fetch['employmentStatus'] === 'laidoff_abroad') ? 'selected' : ''; ?>>Laidoff(abroad)</option>
                </select>
            </div>

                    </div>

                    
                    <div class="mt-3">
                        <div class="col1">
                        <label for=""><h2>Educational Level</h2></label>
                        <input type="text" name="educLevel" placeholder="EDUC LEVEL" required maxlength="50" value="<?php echo isset($fetch['educLevel']) ? $fetch['educLevel'] : ''; ?>">
                        </div>
                        <div class="col2">
                        <label for=""><h2>Year Graduated</h2></label>
                        <input type="text" name="gradYear" placeholder="GRAD YEAR" required maxlength="50" value="<?php echo isset($fetch['gradYear']) ? $fetch['gradYear'] : ''; ?>">
                        </div>
                    </div>
                    <div class="mt-3">
                        <div class="col3">
                        <label for=""><h2>School</h2></label>
                        <input type="text" name="school" placeholder="SCHOOL" required maxlength="50" value="<?php echo isset($fetch['school']) ? $fetch['school'] : ''; ?>">
                        </div>
                    </div>
                    <div class="mt-3">
                        <div class="col1">
                        <label for=""><h2>Course</h2></label>
                        <input type="text" name="course" placeholder="COURSE" required maxlength="50" value="<?php echo isset($fetch['course']) ? $fetch['course'] : ''; ?>">
                        </div>
                        <div class="col2">
                        <label for=""><h2>Preferred Industry</h2></label>
                        <input type="text" name="preferIndustry" placeholder="PREFERRED INDUSTRY" required maxlength="50" value="<?php echo isset($fetch['preferIndustry']) ? $fetch['preferIndustry'] : ''; ?>">
                        </div>
                    </div>
                    



                    </div>
                    <div class="mt-3">
                    <div style="height: 40px;" class="col1">
                        <label for="">ACTIVELY LOOKING FOR WORK?</label>
                    </div>
                    <div class="col2">
                        <select class="" name="activelyLooking" required>
                            <option value="" <?php echo empty($fetch['activelyLooking']) ? 'selected' : ''; ?> hidden>Select an option</option>
                            <option value="yes" <?php echo (isset($fetch['activelyLooking']) && $fetch['activelyLooking'] === 'yes') ? 'selected' : ''; ?>>Yes</option>
                            <option value="no" <?php echo (isset($fetch['activelyLooking']) && $fetch['activelyLooking'] === 'no') ? 'selected' : ''; ?>>No</option>
                        </select>
                    </div> 
                </div>
                <div class="mt-3">
                    <div style="height: 40px;" class="col1">
                        <label for="">WILLING TO WORK IMMEDIATELY?</label>
                    </div>
                    <div class="col2">
                        <select class="drop-down" name="willinglyWork" required>
                            <option value="" <?php echo empty($fetch['willinglyWork']) ? 'selected' : ''; ?> hidden>Select an option</option>
                            <option value="yes" <?php echo (isset($fetch['willinglyWork']) && $fetch['willinglyWork'] === 'yes') ? 'selected' : ''; ?>>Yes</option>
                            <option value="no" <?php echo (isset($fetch['willinglyWork']) && $fetch['willinglyWork'] === 'no') ? 'selected' : ''; ?>>No</option>
                        </select>
                    </div>     
                </div>
                <div class="mt-3">
                    <div style="height: 40px;" class="col1">
                        <label for="">ARE YOU A 4Ps BENEFICIARY?</label>
                    </div>
                    <div class="col2">
                        <select class="" name="fourPsBeneficiary" required>
                            <option value="" <?php echo empty($fetch['fourPsBeneficiary']) ? 'selected' : ''; ?> hidden>Select an option</option>
                            <option value="yes" <?php echo (isset($fetch['fourPsBeneficiary']) && $fetch['fourPsBeneficiary'] === 'yes') ? 'selected' : ''; ?>>Yes</option>
                            <option value="no" <?php echo (isset($fetch['fourPsBeneficiary']) && $fetch['fourPsBeneficiary'] === 'no') ? 'selected' : ''; ?>>No</option>
                        </select>
                    </div>     
                </div>
                <div class="mt-3">
                    <div style="height: 40px;" class="col1">
                        <label for="">ARE YOU AN OFW?</label>
                    </div>
                    <div class="col2">
                        <select class="" name="ofw" required>
                            <option value="" <?php echo empty($fetch['ofw']) ? 'selected' : ''; ?> hidden>Select an option</option>
                            <option value="yes" <?php echo (isset($fetch['ofw']) && $fetch['ofw'] === 'yes') ? 'selected' : ''; ?>>Yes</option>
                            <option value="no" <?php echo (isset($fetch['ofw']) && $fetch['ofw'] === 'no') ? 'selected' : ''; ?>>No</option>
                        </select>
                    </div>    
                </div>
                    
                </div>
                <button name="submit">Submit</button>
                </div>
                    
        </form>
    </div>
    </div>
    <script src="../JS/NAVBAR.JS"></script>
</body>
</html>