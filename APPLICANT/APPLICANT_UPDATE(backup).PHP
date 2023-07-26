<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PERSONAL INFORMATION</title>
        <link rel="icon" type="image/x-icon" href="../IMAGES/PESO_LOGO.png">
        <link rel="stylesheet" href="../CSS/APPLICANT_UPDATE.CSS">
        <link rel="stylesheet" href="../CSS/NAVBAR.CSS">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        
    </head>

    <body>

        <div class="sidenav">
            <a href="#" class="noHover" style="height: 100px;">
                <img src="../IMAGES/LOGO.png"  style="width:200px;height:60px; float: left; margin-left: 30px;">
            </a>
            
            <a href="#">HOME</a>
            <a href="#">APPLICANTS</a>
            <a href="#" class="active">JOB POSTS</a>
            <a href="#">JOB POSTING</a>
            <a href="#">NOTIFICATION</a>
            <a href="#">PROFILE</a>
            <a href="#">SETTING</a>
            <a href="#">MORE INFO</a>
            <a href="#">LOG OUT</a>
        </div>
          
        <div class="main">
            <div id="navbar">
                <a class="active" style="width: 350px; text-align: left;" href="#">UPDATE PROFILE</a>
                <a href="#"></a>
            </div>

            <div class="content">
                <form id="regForm" action="/action_page.php">
                  
                    <!-- One "tab" for each step in the form: -->

                    <!--
                    <div class="tab">
                        <div class="card2A">
                            <center>
                            <div class="card1">
                                <center>
                                <img style="height: 150px; width: 150px; border-radius: 50%; margin-top: 10px;" src="../IMAGES/SAMPLE_PROFILE.jpg">
                                <br>
                                <button type="" class="change" name="">CHANGE PICTURE</button>
                                <button type="" class="remove" name="">REMOVE PICTURE</button>
                                </center>
                            </div>
                            </center>
                            <br> <br>
                            <h1>PERSONAL PROFILE</h1>   1. PERSONAL PROFILE 
                            <div class="card3">
                                <div class="col3">
                                    <h2>NAME</h2>
                                    <input style="width:200px; margin-right: 15px;" type="text" oninput="this.className = ''" name="" value="">
                                    <input style="width:200px; margin-right: 15px;" type="text" oninput="this.className = ''" name="" value="">
                                    <input style="width:200px; margin-right: 15px;" type="text" oninput="this.className = ''" name="" value="">
                                    <input style="width:50px" type="text" oninput="this.className = ''" name="" value="">
                                </div>
                            </div>

                            <div class="card3">
                                <div class="col3">
                                    <h2>TYPE OF JOBSEEKER</h2>
                                    <select oninput="this.className = ''" name="jobseekerType" required>
                                            <option value="" selected disabled>TYPE OF JOBSEEKER</option>
                                            <option value="FirstTime">First Time Jobseeker</option>
                                            <option value="Jobseeker">Jobseeker</option>
                                            <option value="OFW">OFW</option>
                                    </select>
                                </div>
                            </div>

                            <div class="card3">
                                <div class="col1">
                                    <h2>BIRTHPLACE</h2>
                                    <input type="text" oninput="this.className = ''" name="" value="">
                                </div>
                                <div class="col2">
                                    <h2>BIRTHDAY</h2>
                                    <input type="text" oninput="this.className = ''" name="" value="">
                                </div>
                            </div>

                            <div class="card3">
                                <div class="col1">
                                    <h2>AGE</h2>
                                    <input type="text" oninput="this.className = ''" name="" value="">
                                </div>
                                <div class="col2">
                                    <h2>SEX</h2>
                                    <select oninput="this.className = ''" name="" required>
                                            <option value="" selected disabled>SEX</option>
                                            <option value="Female">Female</option>
                                            <option value="Male">Male</option>
                                        
                                    </select>
                                </div>
                            </div>

                            <div class="card3">
                                <div class="col1">
                                    <h2>CIVIL STATUS</h2>
                                    <input type="text" oninput="this.className = ''" name="" value="">
                                </div>
                                <div class="col2">
                                    <h2>CITIZENSHIP</h2>
                                    <input type="text" oninput="this.className = ''" name="" value="">
                                </div>
                            </div>

                            

                           

                            <div class="card3">
                                <div class="col3">
                                    <h2>PRESENT ADDRESS</h2>
                                    <input style="width:80px; margin-right: 15px;" type="text" oninput="this.className = ''" name="" value="">
                                    <input style="width:200px; margin-right: 15px;" type="text" oninput="this.className = ''" name="" value="">
                                    <input style="width:200px; margin-right: 15px;" type="text" oninput="this.className = ''" name="" value="">
                                    <input style="width:200px" type="text" oninput="this.className = ''" name="" value="">
                                </div>
                            </div>

                            <div class="card3">
                                <div class="col3">
                                    <h2>PERMANENT ADDRESS</h2>
                                    <input style="width:80px; margin-right: 15px;" type="text" oninput="this.className = ''" name="" value="">
                                    <input style="width:200px; margin-right: 15px;" type="text" oninput="this.className = ''" name="" value="">
                                    <input style="width:200px; margin-right: 15px;" type="text" oninput="this.className = ''" name="" value="">
                                    <input style="width:200px" type="text" oninput="this.className = ''" name="" value="">
                                </div>
                            </div>

                    
                            <div class="card3">
                                <div class="col1">
                                    <h2>HEIGHT</h2>
                                    <input type="text" oninput="this.className = ''" name="" value="">
                                </div>
                                <div class="col2">
                                    <h2>WEIGHT</h2>
                                    <input type="text" oninput="this.className = ''" name="" value="">
                                </div>
                            </div>

                            <div class="card3">
                                <div class="col3">
                                    <h2>LANDLINE NUMBER</h2>
                                    <input type="text" oninput="this.className = ''" name="" value="">
                                </div>
                            </div>

                    
                            <div class="card3">
                                <div class="col1">
                                    <h2>MOBILE NUMBERS</h2>
                                    <input type="text" oninput="this.className = ''" name="" value="">
                                </div>
                                <div class="col2">
                                    <h2>&nbsp;</h2>
                                    <inpDAut type="text" oninput="this.className = ''" name="" value="">
                                </div>
                            </div>

                            <div class="card3">
                                <div class="col3">
                                    <h2>EMAIL ADDRESS</h2>
                                    <input type="text" oninput="this.className = ''" name="" value="">
                                </div>
                            </div>
                    
                            <div class="card3">
                                <div class="col1">
                                    <h2>DISABILITY</h2>
                                    <input type="text" oninput="this.className = ''" name="" value="">
                                </div>
                                <div class="col2">
                                    <h2>BIRTHDAY</h2>
                                    <input type="text" oninput="this.className = ''" name="" value="">
                                </div>
                            </div>

                            <div class="card3" style="height:45px">
                            <div class="col1" style="width: 55%">
                            <h2>ACTIVELY LOOKING FOR WORK?</h2>
                            </div>
                            <div class="col2" style="width: 30%">
                                <select oninput="this.className = ''" name="" required>
                                    <option value="" selected disabled></option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                                </div>
                            </div>

                            <div class="card3" style="height:45px">
                            <div class="col1" style="width: 55%">
                            <h2>ACTIVELY LOOKING FOR WORK?</h2>
                            </div>
                            <div class="col2" style="width: 30%">
                            <select oninput="this.className = ''" name="" required>
                                    <option value="" selected disabled></option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                                </div>
                            </div>

                            <div class="card3" style="height:45px">
                            <div class="col1" style="width: 55%">
                            <h2>ACTIVELY LOOKING FOR WORK?</h2>
                            </div>
                            <div class="col2" style="width: 30%">
                            <select oninput="this.className = ''" name="" required>
                                    <option value="" selected disabled></option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                                </div>
                            </div>

                            <div class="card3" style="height:45px">
                            <div class="col1" style="width: 55%">
                            <h2>ACTIVELY LOOKING FOR WORK?</h2>
                            </div>
                            <div class="col2" style="width: 30%">
                            <select oninput="this.className = ''" name="" required>
                                    <option value="" selected disabled></option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    -->
                    

                    <!--
                    <div class="tab">
                        <div class="card2B">
                            <h1>JOB PREFERENCE</h1>   2. JOB PREFERENCE 
                            <div class="card6">
                                <table style="width:100%">
                                    <center>
                                    <tr>
                                        <th>
                                            <h2>PREFERRED OCCUPATION</h2>
                                            <h3>(e.g., clerk, call center agent, saleslady)</h3>
                                        </th>
                                        <th>
                                            <h2>PREFERRED INDUSTRY</h2>
                                            <h3>(e.g., IY-BPM, construction, manufacturing)</h3>
                                        </th>
                                    </tr>

                                    <tr>
                                        <td>
                                            <input style=width:95%;float:left; type="text" name="occupation1" placeholder="PREFERRED OCCUPATION #1" required maxlength="50">
                                        </td>
                                        <td>
                                            <input style=width:95%;float:left; type="text" name="industry1" placeholder="PREFERRED INDUSTRY #1" required maxlength="50">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input style=width:95%;float:left; type="text" name="occupation2" placeholder="PREFERRED OCCUPATION #2" required maxlength="50">
                                        </td>
                                        <td>
                                            <input style=width:95%;float:left; type="text" name="industry2" placeholder="PREFERRED INDUSTRY #2" required maxlength="50">
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <input style=width:95%;float:left; type="text" name="occupation3" placeholder="PREFERRED OCCUPATION #3" required maxlength="50">
                                        </td>
                                        <td>
                                            <input style=width:95%;float:left; type="text" name="industry3" placeholder="PREFERRED INDUSTRY #3" required maxlength="50">
                                        </td>
                                    </tr>
                                    </center>                                                                        
                                </table>
                            </div>

                            <div class="card4" style="height:50px">
                                <div class="col1" style="width: 50%">
                                    <h4>PREFERED WORK LOCATION</h4>
                                </div>
                                <div class="col2" style="width: 40%; padding-top: 10px;">
                                    <select oninput="this.className = ''" name="" required>
                                        <option value="" selected disabled></option>
                                        <option value="Local">Local</option>
                                        <option value="Abroad">Abroad</option>
                                    </select>
                                </div>
                            </div>
                           
                            <div class="card5">
                                <div class="col3">
                                    <input type="text" name="" value="">
                                </div>
                            </div>
                                    
                            <div class="card5">
                                <div class="col3">
                                    <input type="text" name="" value="">
                                </div>
                            </div>

                        </div>
                    </div>

                    -->


                    <!--
                    <div class="tab">
                        <div class="card2C">
                            <h1>EDUCATIONAL BACKGROUND</h1>  3. EDUCATIONAL BACKGROUND 
                            <div class="card3" style="height:50px">
                                <div class="col1" style="width: 55%">
                                    <h2>CURRENTLY IN SCHOOL?</h2>
                                </div>
                                <div class="col2" style="width: 30%; padding-top:5px;">
                                    <select oninput="this.className = ''" name="" required>
                                        <option value="" selected disabled></option>
                                        <option value="Yes">Yes</option>
                                        <option value="No">No</option>
                                    </select>
                                </div>
                            </div>

                            <div class="card3">
                                <div class="col3">
                                    <h2>HIGHEST EDUCATIONAL LEVEL</h2>
                                    <input type="text" name="" value="">
                                </div>
                            </div>

                            <div class="card3">
                                <div class="col3">
                                    <h2>YEAR GRADUATED/LAST YEAR ATTENDED</h2>
                                    <input type="text" name="" value="">
                                </div>
                            </div>

                            <div class="card3">
                                <div class="col3">
                                    <h2>SCHOOL/UNIVERSITY</h2>
                                    <input type="text" name="" value="">
                                </div>
                            </div>
                                                    
                            <div class="card3">
                                <div class="col3">
                                    <h2>COURSE/PROGRAM</h2>
                                    <input type="text" name="" value="">
                                </div>
                            </div>
                                                    
                            <div class="card3">
                                <div class="col3">
                                    <h2>AWARDS/HONORS RECEIVED</h2>
                                    <input type="text" name="" value="">
                                </div>
                            </div>
                        </div>
                    </div>

                    -->


                    
                    <div class="tab">
                        <div class="card2D">
                            <h1>TRAININGS</h1>    4. TRAININGS 
                            <div class="card4" style="height:50px">
                                <div class="col1" style="width:50%;">
                                    <h4>CURRENTLY IN TRAINING?</h4>
                                </div>
                                <div class="col2" style="width: 40%; padding-top: 10px;">
                                    <select oninput="this.className = ''" name="" required>
                                        <option value="" selected disabled></option>
                                        <option value="Yes">Yes</option>
                                        <option value="No">No</option>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="card3" style="height: 250px;">
                                <table style="width:95%;margin-left:25px;" >
                                    <center>
                                    <tr>
                                        <th style=width:350px;>
                                            <h2 style="text-align:center;">TRAININGS</h2>
                                        </th>
                                        <th>
                                            <h2 style="text-align:center;">DURATION OF COURSES</h2>
                                        </th>
                                    </tr>

                                    <tr>
                                        <td>
                                            <input style=width:90%;float:left; type="text" name="" placeholder="" required maxlength="50">
                                        </td>
                                        <td>
                                            <input style=width:40%;float:left; type="text" name="" placeholder="">
                                            <input style=width:5%;float:left; type="text" name="" placeholder="TO">
                                            <input style=width:40%;float:left; type="text" name="" placeholder="">
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <input style=width:90%;float:left; type="text" name="" placeholder="" required maxlength="50">
                                        </td>
                                        <td>
                                            <input style=width:40%;float:left; type="text" name="" placeholder="">
                                            <input style=width:5%;float:left; type="text" name="" placeholder="TO">
                                            <input style=width:40%;float:left; type="text" name="" placeholder="">
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <input style=width:90%;float:left; type="text" name="" placeholder="" required maxlength="50">
                                        </td>
                                        <td>
                                            <input style=width:40%;float:left; type="text" name="" placeholder="">
                                            <input style=width:5%;float:left; type="text" name="" placeholder="TO">
                                            <input style=width:40%;float:left; type="text" name="" placeholder="">
                                        </td>
                                    </tr>

                                    </center>
                                </table>
                            </div>

                            <div class="card3" style="height: 230px;">
                                <table style="width:95%;margin-left:25px;">
                                    <center>
                                    <tr>
                                        <th>
                                            <h2>TRAINING INSTITUTION</h2>
                                        </th>
                                        <th>
                                            <h2>CERTIFICATED RECEIVED</h2>
                                        </th>
                                        <th style=width:100px;>
                                            <h2>COMPLETED</h2>
                                        </th>
                                    </tr>

                                    <tr>
                                        <td>
                                            <input style=width:94%;float:left; type="text" name="" placeholder="" required maxlength="50">
                                        </td>
                                        <td>
                                            <input style=width:94%;float:left; type="text" name="" placeholder="" required maxlength="50">
                                        </td>
                                        <td>
                                            <input style=width:84%;float:left; type="text" name="" placeholder="" required maxlength="50">
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <input style=width:94%;float:left; type="text" name="" placeholder="" required maxlength="50">
                                        </td>
                                        <td>
                                            <input style=width:94%;float:left; type="text" name="" placeholder="" required maxlength="50">
                                        </td>
                                        <td>
                                            <input style=width:84%;float:left; type="text" name="" placeholder="" required maxlength="50">
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <input style=width:94%;float:left; type="text" name="" placeholder="" required maxlength="50">
                                        </td>
                                        <td>
                                            <input style=width:94%;float:left; type="text" name="" placeholder="" required maxlength="50">
                                        </td>
                                        <td>
                                            <input style=width:84%;float:left; type="text" name="" placeholder="" required maxlength="50">
                                        </td>
                                    </tr>
                                    </center>
                                </table>
                            </div>
                        </div>
                    </div>

                    

                    <div class="tab">
                        <div class="card2">
                            <h1>ELIGIBILITY</h1>   <!-- 5. ELIGIBILITY -->
                            <div class="card3" style="height: 200px;">
                                <table style="width:95%; margin-left:25px;">
                                    <center>
                                    <tr>
                                        <th>
                                            <h2>CAREER SERVICE/ BOARD/ BAR</h2>
                                        </th>
                                        <th style=width:200px;>
                                            <h2>LICENSE NUMBER</h2>
                                        </th>
                                        <th style=width:150px;>
                                            <h2>EXPIRY DATE</h2>
                                        </th>
                                    </tr>

                                    <tr>
                                        <td>
                                            <input style=width:96%;float:left; type="text" name="" placeholder="" required maxlength="50">
                                        </td>
                                        <td>
                                            <input style=width:89%;float:left; type="text" name="" placeholder="" required maxlength="50">
                                        </td>
                                        <td>
                                            <input style=width:86%;float:left; type="text" name="" placeholder="" required maxlength="50">
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <input style=width:96%;float:left; type="text" name="" placeholder="" required maxlength="50">
                                        </td>
                                        <td>
                                            <input style=width:89%;float:left; type="text" name="" placeholder="" required maxlength="50">
                                        </td>
                                        <td>
                                            <input style=width:86%;float:left; type="text" name="" placeholder="" required maxlength="50">
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <input style=width:96%;float:left; type="text" name="" placeholder="" required maxlength="50">
                                        </td>
                                        <td>
                                            <input style=width:89%;float:left; type="text" name="" placeholder="" required maxlength="50">
                                        </td>
                                        <td>
                                            <input style=width:86%;float:left; type="text" name="" placeholder="" required maxlength="50">
                                        </td>
                                    </tr>
                                    </center>
                                </table>
                            </div>  
                            
                            <div class="card3" style="height: 250px;">
                            
                            <h2 style="margin-left: 30px;">LANGUAGE PROFECIENCY CERTIFICATION</h2>
                            
                            <h3>
                                <label class="container">International English Language Testing System (IELTS)
                                    <input type="checkbox" checked="checked">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="container">Test of English as a Foreign Language (TOEFL)
                                    <input type="checkbox" checked="checked">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="container">Test of Chinese as a Foreign Language (TOCFL)
                                    <input type="checkbox" checked="checked">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="container">Japanese Language Proficiency Test (JLPT)
                                    <input type="checkbox" checked="checked">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="container">Test of Proficiency in Korea (TOPIC)
                                    <input type="checkbox" checked="checked">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="container">Others:
                                    <input type="checkbox" checked="checked">
                                    <span class="checkmark"></span>
                                </label>
                            </h3>

                                
                            </div>
                        </div>
                    </div>




  <div class="tab">Login Info:
    <p><input placeholder="Username..." oninput="this.className = ''" name="uname"></p>
    <p><input placeholder="Password..." oninput="this.className = ''" name="pword" type="password"></p>
  </div>
  <center>
  <div>
    <div >
      <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
      <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
    </div>
  </div>
</center>
  <!-- Circles which indicates the steps of the form: -->
  <div style="text-align:center;margin-top:40px;">
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
  </div>
</form>


            
            </div>
        
        </div>
              


        <script src="../JS/APPLICANT_UPDATE.JS"></script>
        <script src="../JS/NAVBAR.JS"></script>
    </body>

</html>