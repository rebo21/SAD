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

<!-- VERSION 3 -->

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>APPLICANT HOMEPAGE</title>
        <link rel="icon" type="image/x-icon" href="../IMAGES/PESO_LOGO.png">
        <link rel="stylesheet" href="../CSS/PERSONAL_INFORMATION.CSS">
        <link rel="stylesheet" href="../CSS/NAVBAR.CSS">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        
    </head>

    <body>

        <div class="sidenav">
            <a href="#" class="noHover" style="height: 100px;">
                <img src="../IMAGES/LOGO.png"  style="width:200px;height:60px; float: left; margin-left: 30px;">
            </a>
            
            <a href="#" class="active">HOME</a>
            <a href="#">FIND JOBS</a>
            <a href="#">URGENT HIRING</a>
            <a href="#">SAVED JOBS</a>
            <a href="#">NOTIFICATION</a>
            <a href="#">PROFILE</a>
            <a href="#">SETTING</a>
            <a href="#">MORE INFO</a>
            <a href="#">LOG OUT</a>
          </div>
          
          <div class="main">
            <div id="navbar">
                <a class="active" style="width: 350px; text-align: left;" href="#">Home</a>
                <a style="width: 350px; padding-top: 20px; margin-left: 80px;">
                    <formsearch class="example" action="action_page.php">
                      <center>
                      <input type="text" placeholder="SEARCH FOR JOB!" name="search">
                      <button type="submit"><i class="fa fa-search"></i></button>
                      </center>
                      
                  </formsearch>
                  </a>
                  <?php
        $user_id = $_SESSION['user_id']; 
        $query = " SELECT * FROM a_accounttb WHERE user_id = '$user_id'";
        $result = mysqli_query($conn, $query);
        while ($data = mysqli_fetch_assoc($result)) {
        ?>
                    <center><img style="height:35px; width:35px; border-radius: 50%; margin-top: 25px;" src="./upload_img/<?php echo $data['profile_img']; ?>">
            <?php echo $data['lastname']; ?></center>
        <?php
        }
        ?>
                <a href="#"></a>
                
              </div>
              
              <div class="content">
                <div class="row">

                    <div class="column side">
                    <div class="card1">
                    <div id="display-image">
        <?php
        $user_id = $_SESSION['user_id']; 
        $query = " SELECT * FROM a_accounttb WHERE user_id = '$user_id'";
        $result = mysqli_query($conn, $query);
        while ($data = mysqli_fetch_assoc($result)) {
        ?>
            <center><img style="height:150px; width:150px; border-radius: 50%; margin-top: 30px;" src="./upload_img/<?php echo $data['profile_img']; ?>"></center>
        <?php
        }
        ?>
    </div>   
                    <a href="#" class="active">HOME</a>
                    <a href="#">FIND JOBS</a>
                    <a href="#">URGENT HIRING</a>
                    <a href="#">SAVED JOBS</a>
                    <a href="#">NOTIFICATION</a>
                    <a href="#">PROFILE</a>
                    </div>
                        
                    </div>
                    
                    <div class="column middle">
                      
                    </div>
                    
                   
                  </div>
              
          </div>

          <script src="../JS/NAVBAR.JS"></script>
    </body>

</html>