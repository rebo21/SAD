
<?php
@include 'config.php';
require "edit.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="images/x-icon" href="../../IMAGES/PESO_LOGO.png">
    <link rel="stylesheet" href="../CSS/update_profile.css">
    <title>Profile</title>
    <script>
        function previewImage(event) {
            var reader = new FileReader();
            reader.onload = function() {
                var output = document.getElementById('image-preview');
                output.src = reader.result;
            };
            reader.readAsDataURL(event.target.files[0]);
        }
    </script>
</head>
<body>
    <div id="navbar">
        <a href="APPLICANT_HOMEPAGE.PHP" style="width:45%; padding-top: 15px;"><img src="../IMAGES/LOGO.png"  style="width:80px;height:80px; float: left; margin-left: 30px;"></a>
        <a href="#">JOB OFFERS</a>
        <a href="#">JOB OFFERS</a>
        <a href="#">JOB OFFERS</a>
        <a href="#" class="active">PROFILE</a>
    </div>
    <!--end of navbar-->
    <div class="update-profile">
        <form action="" method="post" enctype="multipart/form-data">
        <?php
            $select = mysqli_query($conn, "SELECT * FROM a_accounttb WHERE user_id = '$user_id'") or die ('query failed');
            if(mysqli_num_rows($select) > 0){
                $fetch = mysqli_fetch_assoc($select);
            }
            if($fetch['profile_img'] == ''){
                echo '<img src="profile-img/default.jpg">';
            }else{
                echo '<img src="upload_img/'.$fetch['profile_img'].'">';
            }
            ?>
            <input type="file" name="profile_img" onchange="previewImage(event)"accept=".jpg, .jpeg, .png">

            <div class="flex">
                <div class="inputBox">
                    <span>Last Name :</span>
                    <input type="text" name="lastname" value="<?php echo $fetch['lastname']?>" >
                    <span>First Name :</span>
                    <input type="text" name="firstname" value="<?php echo $fetch['firstname']?>">
                    <span>Age :</span>
                    <input type="text" name="age" value="<?php echo $fetch['age']?>">
                    <span>Sex :</span>
                    <select name="sex">
                        <option value="Male" <?php if($fetch['sex'] == 'Male') echo 'selected'; ?>>Male</option>
                        <option value="Female" <?php if($fetch['sex'] == 'Female') echo 'selected'; ?>>Female</option>
                    </select>
                    <span>Email :</span>
                    <input type="email" name="email" value="<?php echo $fetch['email']?>">
                    <span>Password :</span>
                    <input type="text" name="show_pass" value="<?php echo $fetch['password']?>"readonly>
                </div>
                <div class="inputBox">
                    <input type="hidden" name="old_pass" value="<?php echo $fetch['password']?>">
                    <span>Old Password :</span>
                    <input type="text" name="update_pass" placeholder="password" >
                    <span>New Password :</span>
                    <input type="text" name="new_pass" placeholder="password">
                    <span>Confirm Password :</span>
                    <input type="text" name="confirm_pass" placeholder="password">
                    <button class="submit-btn" name="submit">Submit</button>
                    <!--   <button class="submit-btn" name="edit" type="button" onclick="enableEditing()">Edit</button>-->
                    <a href="APPLICANT_PROFILE_1.PHP">Go Back</a>
                    <script src="../JS/NAVBAR.JS"></script>
                </div>
            </div>
        </form>
    </div>
</body>
</html>