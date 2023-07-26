<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PERSONAL INFORMATION</title>
        <link rel="icon" type="image/x-icon" href="../IMAGES/PESO_LOGO.png">
        <link rel="stylesheet" href="../CSS/PERSONAL_INFORMATION.CSS">
        <link rel="stylesheet" href="../CSS/NAVBAR.CSS">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        
    </head>

    <body>
      <?php
      include 'function.php';
      include 'sidebar.php';
      ?>
          <div class="main">
            <div id="navbar">
                <a class="active" style="width: 350px; text-align: left;" href="#">Home</a>
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
                <div class="row">
                    <div class="column side">
                      <div class="card1">
                        <center>
                        <img style="height:120px; width:120px; border-radius: 50%; margin-top: 10px;" src="../IMAGES/SAMPLE_PROFILE.jpg">
                        <br>
                        <button type="" class="update" name="">UPDATE PROFILE</button>
                      </center>
                      <br>
                        <a href="#" class="active">PERSONAL INFORMATION</a>
                        <a href="#">JOB PREFERENCE</a>
                        <a href="#">EDUCATIONAL BACKGROUND</a>
                        <a href="#">TRAININGS</a>
                        <a href="#">ELIGIBILITY</a>
                        <a href="#">WORK EXPERIENCES</a>
                        <a href="#">SKILLS</a>
                        <a href="#">AUTHORIZATION</a>
                      
                      </div>
                    </div>
                    
                    <div class="column middle">
                      <div class="card2">
                        <h1>PERSONAL INFORMATION</h1>
                        <div class="card3A">
                          <div class="col3">
                          <h2>NAME</h2>
                          <input style="width:150px" type="text" name="" value="">
                          <input style="width:150px" type="text" name="" value="">
                          <input style="width:150px" type="text" name="" value="">
                          <input style="width:45px" type="text" name="" value="">
                          </div>
                        </div>

                        <div class="card3A">
                          <div class="col3">
                          <h2>TYPE OF JOBSEEKER</h2>
                          <input type="text" name="" value="">
                          </div>
                        </div>

                        <div class="card3A">
                          <div class="col1">
                          <h2>BIRTHPLACE</h2>
                          <input type="text" name="" value="">
                          </div>
                          <div class="col2">
                            <h2>BIRTHDAY</h2>
                            <input type="text" name="" value="">
                            </div>
                        </div>

                        <div class="card3A">
                          <div class="col1">
                          <h2>AGE</h2>
                          <input type="text" name="" value="">
                          </div>
                          <div class="col2">
                            <h2>SEX</h2>
                            <input type="text" name="" value="">
                            </div>
                        </div>

                        <div class="card3A">
                          <div class="col1">
                          <h2>CIVIL STATUS</h2>
                          <input type="text" name="" value="">
                          </div>
                          <div class="col2">
                            <h2>CITIZENSHIP</h2>
                            <input type="text" name="" value="">
                            </div>
                        </div>

                        <div class="card3A">
                          <div class="col3">
                          <h2>PRESENT ADDRESS</h2>
                          <input style="width:45px" type="text" name="" value="">
                          <input style="width:150px" type="text" name="" value="">
                          <input style="width:150px" type="text" name="" value="">
                          <input style="width:150px" type="text" name="" value="">
                          </div>
                        </div>

                        <div class="card3A">
                          <div class="col3">
                          <h2>PERMANENT ADDRESS</h2>
                          <input style="width:45px" type="text" name="" value="">
                          <input style="width:150px" type="text" name="" value="">
                          <input style="width:150px" type="text" name="" value="">
                          <input style="width:150px" type="text" name="" value="">
                          </div>
                        </div>

                        <div class="card3A">
                          <div class="col1">
                          <h2>HEIGHT</h2>
                          <input type="text" name="" value="">
                          </div>
                          <div class="col2">
                            <h2>WEIGHT</h2>
                            <input type="text" name="" value="">
                            </div>
                        </div>

                        <div class="card3A">
                          <div class="col3">
                          <h2>LANDLINE NUMBER</h2>
                          <input type="text" name="" value="">
                          </div>
                        </div>

                        <div class="card3A">
                          <div class="col1">
                          <h2>MOBILE NUMBER</h2>
                          <input type="text" name="" value="">
                          </div>
                          <div class="col2">
                            <h2>&nbsp;&nbsp;</h2>
                            <input type="text" name="" value="">
                            </div>
                        </div>

                        <div class="card3A">
                          <div class="col3">
                          <h2>EMAIL ADDRESS</h2>
                          <input type="text" name="" value="">
                          </div>
                        </div>

                        <div class="card3A">
                          <div class="col1">
                          <h2>DISABLITY</h2>
                          <input type="text" name="" value="">
                          </div>
                          <div class="col2">
                            <h2>EMPLOYMENT</h2>
                            <input type="text" name="" value="">
                            </div>
                        </div>

                        <div class="card3A" style="height:40px">
                          <div class="col1" style="width: 65%">
                          <h2>ACTIVELY LOOKING FOR WORK?</h2>
                          </div>
                          <div class="col2" style="width: 30%">
                            <input style="margin-top: 10px;" type="text" name="" value="">
                            </div>
                        </div>

                        <div class="card3A" style="height:40px">
                          <div class="col1" style="width: 65%">
                          <h2>WILLING TO WORK IMMEDIATELY?</h2>
                          </div>
                          <div class="col2" style="width: 30%">
                            <input style="margin-top: 10px;" type="text" name="" value="">
                            </div>
                        </div>

                        <div class="card3A" style="height:40px">
                          <div class="col1" style="width: 65%">
                          <h2>ARE YOU A 4Ps BENEFICIERY?</h2>
                          </div>
                          <div class="col2" style="width: 30%">
                            <input style="margin-top: 10px;" type="text" name="" value="">
                            </div>
                        </div>
                        
                        <div class="card3A" style="height:40px">
                          <div class="col1" style="width: 65%">
                          <h2>ARE YOU AN OFW?</h2>
                          </div>
                          <div class="col2" style="width: 30%">
                            <input style="margin-top: 10px;" type="text" name="" value="">
                            </div>
                        </div>
                        

                      </div>
                    
                        
                      
                    </div>
                    
                   
                  </div>
              
          </div>

          <script src="../JS/NAVBAR.JS"></script>
    </body>

</html>