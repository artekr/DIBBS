<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
 <link rel="stylesheet" type"text/css" href="css/styles.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.0/jquery.min.js"></script>
 <script type="text/javascript" src="javascript/jscripts.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>DIBBS! Scheduler</title>
</head>

<body>
 <div id="wrapper">
            
            <div id="left_container">
                <div id="logo">
                <a href="index.php"><img src="images/dibbslogo.gif" width="220%"></a>
                </div>
                <div id="navigationbar">
                    <div class="navcontainer">
                        <h2 class="acc_trigger" onclick="showAddCourse()"><a href="#" >Add Course</a></h2>
                        <div class="acc_container">
                        </div>
                        
                        <h2 class="acc_trigger" onclick="showCourses()"><a href="#" >Selected Courses</a></h2>
                        <div class="acc_container">
                        </div>
                        
                         <h2 class="acc_trigger2"  onclick="buildScheduleTable()"><a href="#">Schedules</a></h2>
                        <div class="acc_container2"></div>
                        
                        <h2 class="acc_trigger2"><a href="#">Reset Schedule</a></h2>
                        <div class="acc_container2"></div>
                        
                        <h2 class="acc_triggershop"><a href="#">GENERATE</a></h2>
                        <div class="acc_container2"></div>
                    </div>    
                </div>
            </div>
            
            
           <div id="right_container">
           
           <!--           INTRO PAGE         -->
           	    <div id="introPage">
                       <h2>Welcome</h2>
                        <p>Welcome to the DIBBS! Scheduler. This web application is built to ease the registration of Concordia Students.<br />
                        DIBBS! was built by Computer Science and Software Engineer students in the Software Process (SOEN 341) class.<br />
                        To start building schedules, click on the start button below.<br />
                        ENJOY !</p>
                        <div align="center" onclick="showInstructions()"><a href="#" >START NOW</a></div>
                </div>
           <!--           INSTRUCTION PAGE           -->
              <div id="instructionPage">
                 <h2>1)</h2>Choose Term:<br /><br />
                 <div id="term" onclick="selectTerm('fall')"><a href="#" id="fall" >Fall</a></div>
                 <div id="term" onclick="selectTerm('winter')"><a href="#" id="winter">Winter</a></div>
                 <div id="term" onclick="selectTerm('summer')"><a href="#" id="summer">Summer</a></div><br /><br />
                 <h2>2)</h2>Click on the Add Course button<br />
				 <h2>3)</h2>Type the course id in the text field<br />
                 <h2>4)</h2>Repeat step 2 and 3 for all desired courses<br />
                 <h2>5)</h2>Click on the GENERATE button<br />   
              </div>
              
              <!--           Schedules PAGE           -->
              <div id="schedules">
              
              </div>
              <!--           ADD COURSE WINDOW          -->
              <div id="addCourseWindow">
              
              	<h2>ADD COURSE</h2><h1 onclick="closeAddWindow()">X</h1>
                <h3>Type Course Id Here:</h3>
                <input type="text" size="10" id="courseIdTxt" border="1px solid black" onkeydown="" />
                <select id="coursesAvail" SIZE=10> 
                <OPTION>BCEE123</OPTION>
                <OPTION>BCEE123</OPTION>
                <OPTION>BCEE123</OPTION>
                <OPTION>BCEE123</OPTION>
                <OPTION>BCEE123</OPTION>
                </select>
                <div id="addBtn" onclick="closeAddWindow()">Add+</div>
              
              </div>
                                          
          </div><!-- END OF RIGHT CONTAINER -->
          
          
          <div id="footer">
          <div id="footer_top"> 
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                    
                    <td width="22%" valign="top">
                        <ul>
                            <li class="title">DIBBS! 2011</li>
                            <li></li>
                        </ul>
                    </td>
                    
                    <td width="33%" valign="top">
                        <ul>
                            <li><a href="about.html">SOEN 341 Project</a></li>
                        </ul>
                    </td> 
                </tr>
            </table>
         </div>
         </div>
    </div>
</body>
</html>