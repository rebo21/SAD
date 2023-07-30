<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>COMPANY JOB POSTING</title>
        <link rel="icon" type="image/x-icon" href="../IMAGES/PESO_LOGO.png">
        <link rel="stylesheet" href="../CSS/COMPANY_JOBPOSTING3.CSS">
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
            <a href="#">JOB POSTS</a>
            <a href="#" class="active">JOB POSTING</a>
            <a href="#">NOTIFICATION</a>
            <a href="#">PROFILE</a>
            <a href="#">SETTING</a>
            <a href="#">MORE INFO</a>
            <a href="#">LOG OUT</a>
        </div>
          
        <div class="main">
            <div id="navbar">
                <a class="active" style="width: 350px; text-align: left;" href="#">JOB POSTING</a>
                <a style="width: 350px; padding-top: 20px; margin-left: 80px;">
                    <formsearch class="example" action="action_page.php">
                      <center>
                      <input type="text" placeholder="" name="search">
                      <button type="submit"><i class="fa fa-search"></i></button>
                      </center>
                      
                  </formsearch>
                  </a>
                  
                <a href="#"></a>
            </div>
              
            <div class="content">
                <form id="regForm" action="/action_page.php">
                    <h1>POST A JOB!</h1>
                    <!-- One "tab" for each step in the form: -->

                    
                    <div class="tab">
                        <div class="card1">
                            <div class="row">
                                <div class="col-25">
                                    <label for="">JOB TITLE</label>
                                </div>
                                <div class="col-75">
                                    <input type="text" name="c_jobTitle" placeholder="JOB TITLE">
                                </div>
                            </div>

                            <div class="row">
                            <div class="col-25">
                            <label for="">MONTHLY SALARY</label>
                            </div>
                            <div class="col-75">
                            <input type="number" name="c_salary" placeholder="SALARY">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-25">
                            <label for="">WORK LOCATION</label>
                            </div>
                            <div class="col-75">
                            <input type="text" name="c_workLocation" placeholder="WORK LOCATION">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-25">
                            <label for="">JOB INDUSTRY</label>
                            </div>
                            <div class="col-75">
                            <input type="text" name="c_jobIndustry" placeholder="JOB INDUSTRY">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-25">
                            <label for="">SLOTS</label>
                            </div>
                            <div class="col-75">
                            <input type="number" name="c_numSlot" placeholder="SLOTS">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-25">
                            <label for="">SKILLS</label>
                            </div>
                            <div class="col-75">
                            <input type="text" name="c_skills" placeholder="SKILLS">
                            </div>
                        </div>
                        </div>
                    </div>
                    
                    

                    <div class="tab">
                        <div class="card1">
                            <div class="row">
                                <div class="colB-75" style="height:100px">
                                <h2>QUALIFICATION QUESTIONS</h2>
                                <h3 style="color:red;">NOTE: QUESTIONS MUST BE ANSWERABLE BY YES OR NO ONLY.</h3>
                                </div>
                                <div class="colB-25" style="height:100px">
                                    <h4>ANSWERS</h4>
                                </div>
                            </div>

                            <div class="row">
                                <div class="colB-75">
                                    <input style="width: 600px" type="text" name="question1" placeholder="QUESTION #1" required>
                                </div>
                                <div class="colB-25">
                                    <select style="float:left;width:230px;" name="answer1" required>
                                        <option value="Yes">Yes</option>
                                        <option value="No">No</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row">

                                <div class="colB-75">
                                <input style="width: 600px" type="text" name="question2" placeholder="QUESTION #2" required>
                                </div>
                                <div class="colB-25">
                                    <select style="float:left;width:230px;" name="answer2" required>
                                        <option value="Yes">Yes</option>
                                        <option value="No">No</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row">

                                <div class="colB-75">
                                <input style="width: 600px" type="text" name="question3" placeholder="QUESTION #3" required>
                                </div>
                                <div class="colB-25">
                                    <select style="float:left;width:230px;" name="answer3" required>
                                        <option value="Yes">Yes</option>
                                        <option value="No">No</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row">

                                <div class="colB-75">
                                <input style="width: 600px" type="text" name="question4" placeholder="QUESTION #4" required>
                                </div>
                                <div class="colB-25">
                                    <select style="float:left;width:230px;" name="answer4" required>
                                        <option value="Yes">Yes</option>
                                        <option value="No">No</option>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="row">

                                <div class="colB-75">
                                <input style="width: 600px" type="text" name="question5" placeholder="QUESTION #5" required>
                                </div>
                                <div class="colB-25">
                                    <select style="float:left;width:230px;" name="answer5" required>
                                        <option value="Yes">Yes</option>
                                        <option value="No">No</option>
                                    </select>
                                </div>
                            </div>

                        </div>
                    </div>

                    <br>
                    <div style="overflow:auto;">
                        <div style="float:right;">
                            <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                            <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
                        </div>
                    </div>

                    <!-- Circles which indicates the steps of the form: -->
                    <div style="text-align:center;margin-top:40px;">
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
        