<!-- VERSION 1 -->

<!DOCTYPE html>
<?php
@include'config.php';
session_start();
if(isset($_POST["submit"])){
    $user_id = $_SESSION["user_id"];
    $skill = implode(', ', $_POST["skill"]);
    $techSkill = implode(', ', $_POST["techSkill"]);
    $otherTechskill = $_POST["otherTechskill"];
    
    $insert = "INSERT INTO applicant_profile07 (user_id, skill, techSkill, otherTechskill) VALUES (?,?,?,?)";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $insert)){

    } else{
        mysqli_stmt_bind_param($stmt,"ssss",$user_id,$skill,$techSkill,$otherTechskill);
        mysqli_stmt_execute($stmt);
        exit();
    }
}
?>
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
            <a href="APPLICANT_HOMEPAGE.php">HOME</a>
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
                <a href="APPLICANT_PROFILE_6.PHP">WORK EXPERIENCES</a>
                <a href="APPLICANT_PROFILE_7.PHP"class="active">SKILLS</a>
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
                                <h3>VII. SKILLS</h3>
                                <div class="card4A">
                                    <h4><label for="">21ST CENTURY SKILLS</label></h4>
                                    <h5><label for="">(Check five skills you possess[self assessment])</label></h5>
                                    <div style="text-align: left;" class="col2">
        
                                        <input type="checkbox" id="Innovation" name="skill[]" value="Innovation">
                                        <label for="skill_1">Innovation</label><br>
        
                                        <input type="checkbox" id="Team-Work" name="skill[]" value="Team Work">
                                        <label for="skill_2">Team Work</label><br>
        
                                        <input type="checkbox" id="Multitasking" name="skill[]" value="Multitasking">
                                        <label for="skill_3">Multitasking</label><br>
        
                                        <input type="checkbox" id="Work-Ethics" name="skill[]" value="Work Ethics">
                                        <label for="skill_4">Work Ethics</label><br>
        
                                        <input type="checkbox" id="Self-Motivation" name="skill[]" value="Self Motivation">
                                        <label for="skill_5">Self Motivation</label><br>
        
                                        <input type="checkbox" id="Creative-Problem-Solving" name="skill[]" value="Creative Problem Solving">
                                        <label for="skill_6">Creative Problem Solving</label><br>
        
                                        <input type="checkbox" id="Problem-Solving" name="skill[]" value="Problem Solving">
                                        <label for="skill_7">Problem Solving</label><br>
        
                                        <input type="checkbox" id="Critical-Thinking" name="skill[]" value="Critical Thinking">
                                        <label for="skill_8">Critical Thinking</label><br>
                                    </div>

                                    <div style="text-align: left;" class="col3">

                                        <input type="checkbox" id="Decision-Making" name="skill[]" value="Decision Making">
                                        <label for="skill_9">Decision Making</label><br>
        
                                        <input type="checkbox" id="Stress-Tolerance" name="skill[]" value="Stress Tolerance">
                                        <label for="skill_10">Stress Tolerance</label><br>
        
                                        <input type="checkbox" id="Planning-and-Organizing" name="skill[]" value="Planning and Organizing">
                                        <label for="skill_11">Planning and Organizing</label><br>
        
                                        <input type="checkbox" id="Social-Perceptiveness" name="skill[]" value="Social Perceptiveness">
                                        <label for="skill_12">Social Perceptiveness</label><br>
        
                                        <input type="checkbox" id="English-Functional-Skills" name="skill[]" value="English Functional Skills">
                                        <label for="skill_13">English Functional Skills</label><br>
        
                                        <input type="checkbox" id="English-Comprehension" name="skill[]" value="English Comprehension">
                                        <label for="skill_14">English Comprehension</label><br>
        
                                        <input type="checkbox" id="Math-Functional-Skill" name="skill[]" value="Math Functional Skill">
                                        <label for="skill_15">Math Functional Skill</label><br>
                                    </div>
                                </div>

                                <div class="card4A">
                                    <h4><label for="">TECHNICAL SKILLS ACQUIRED WITHOUT FORMAL TRAINING</label></h4>
                                    <div style="text-align: left;" class="col2">
        
                                        <input type="checkbox" id="Carpentry" name="techSkill[]" value="Carpentry">
                                        <label for="Techskill_1">Carpentry</label><br>
        
                                        <input type="checkbox" id="Masonry" name="techSkill[]" value="Masonry">
                                        <label for="Techskill_2">Masonry</label><br>
        
                                        <input type="checkbox" id="Welding" name="techSkill[]" value="Welding">
                                        <label for="Techskill_3">Welding</label><br>
        
                                        <input type="checkbox" id="Auto-Mechanic" name="techSkill[]" value="Auto Mechanic">
                                        <label for="Techskill_4">Auto Mechanic</label><br>
        
                                        <input type="checkbox" id="Plumbing" name="techSkill[]" value="Plumbing">
                                        <label for="Techskill_5">Plumbing</label><br>
        
                                        <input type="checkbox" id="Driving" name="techSkill[]" value="Driving">
                                        <label for="Techskill_6">Driving</label><br>
        
                                        <input type="checkbox" id="Gardening" name="techSkill[]" value="Gardening">
                                        <label for="Techskill_7">Gardening</label><br>
                                    </div>

                                    <div style="text-align: left;" class="col3">

                                        <input type="checkbox" id="Tailoring" name="techSkill[]" value="Tailoring">
                                        <label for="Techskill_8">Tailoring</label><br>
        
                                        <input type="checkbox" id="Photograph" name="techSkill[]" value="Photograph">
                                        <label for="Techskill_9">Photograph</label><br>
        
                                        <input type="checkbox" id="Hairdressing" name="techSkill[]" value="Hairdressing">
                                        <label for="Techskill_10">Hairdressing</label><br>
        
                                        <input type="checkbox" id="Cooking" name="techSkill[]" value="Cooking">
                                        <label for="Techskill_11">Cooking</label><br>
        
                                        <input type="checkbox" id="Baking" name="techSkill[]" value="Baking">
                                        <label for="Techskill_12">Baking</label><br>
        
                                        <input type="checkbox" id="Other" name="techSkill[]" value="">
                                        <label for="Techskill_13">Other:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                        <input style="width: 40%; height: 15px;" type="text" id="Techskill_13" name="otherTechskill" value="">
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
