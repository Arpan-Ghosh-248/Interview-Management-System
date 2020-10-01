<?php
  include_once ("inc/classes/session.php");
  include ("inc/classes/Create.php");

  $userSession = new Session();
  if ($userSession->getSession('login') != true) {
    header('Location: login.php');
  }
  $userSession->destroy();
  $create = new Create();
  $addCandidate = $create->AddCandidate($_POST);
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Add a Candidate</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  </head>
  <body>

<!------ Include the above in your HEAD tag ---------->
<div>  <h1>HR Interview Management System  </h1>   </div>

<div class="container">
<?php include ('nav.php'); ?>
<div style="width: 50%; margin: 25px auto;">
  <?php
    if (isset($addCandidate)) {
      echo $addCandidate;
    }
  ?>
</div>



    <div id="signupbox" style=" margin-top:10px" class="mainbox col-md-10 col-md-offset-1 col-sm-8 col-sm-offset-2">
        <div class="panel panel-info">
            <div class="panel-heading">
                <div class="panel-title">Add New Candidate</div>

            </div>
            <div class="panel-body" >
                <form method="post" action="">

                        <div id="div_id_username" class="form-group required">
                            <label for="id_username" class="control-label col-md-4  requiredField"> Candidate Name<span class="asteriskField"></span> </label>
                            <div class="controls col-md-8 ">
                                <input class="input-md  textinput textInput form-control" id="candName" maxlength="30" name="candName" placeholder="Candidate Name" style="margin-bottom: 10px" type="text" />
                            </div>
                        </div>
                        <div id="div_id_mobileno" class="form-group required">
                             <label for="id_mobileno" class="control-label col-md-4  requiredField"> Mobile No  <span class="asteriskField">*</span> </label>
                             <div class="controls col-md-8 ">
                                 <input class="input-md textinput textInput form-control" id="mobileno" name="mobileno" placeholder="Mobile No" style="margin-bottom: 10px" type="text" />
                            </div>
                        </div>
                        <div id="div_id_email" class="form-group required">
                            <label for="id_email" class="control-label col-md-4  requiredField"> E-mail<span class="asteriskField">*</span> </label>
                            <div class="controls col-md-8 ">
                                <input class="input-md emailinput form-control" id="candEmail" name="candEmail" placeholder="Candidate email address" style="margin-bottom: 10px" type="email" />
                            </div>
                        </div>
                        <div id="div_id_Media" class="form-group required">
                             <label for="id_Media" class="control-label col-md-4  requiredField"> Media  <span class="asteriskField">*</span> </label>
                             <div class="controls col-md-8 ">
                                 <input class="input-md textinput textInput form-control" id="Media" name="Media" placeholder="Media" style="margin-bottom: 10px" type="text" />
                            </div>
                        </div>
                        <div id="div_id_Appliedfor" class="form-group required">
                             <label for="id_Appliedfor" class="control-label col-md-4  requiredField"> Applied for <span class="asteriskField">*</span> </label>
                             <div class="controls col-md-8 ">
                                 <input class="input-md textinput textInput form-control" id="Appliedfor" name="Appliedfor" placeholder="Appliedfor" style="margin-bottom: 10px" type="text" />
                            </div>
                        </div>
                        

                        <div id="div_id_location" class="form-group required">
                            <label for="id_location" class="control-label col-md-4  requiredField"> Qualification<span class="asteriskField">*</span> </label>
                            <div class="controls col-md-8 ">
                                <input class="input-md textinput textInput form-control" id="candQuali" name="candQuali" placeholder="Qualification" style="margin-bottom: 10px" type="text" />
</div>
                        
                        </div>
                        <div> 
                            
                    
                    
                    </div>
                        
                        <div>
                              <h4> Interview Schedule         </h4>

                        </div>
                        

                        <div id="div_id_CallingPerson" class="form-group required">
                             <label for="id_CallingPerson" class="control-label col-md-4  requiredField"> Calling Person<span class="asteriskField">*</span> </label>
                             <div class="controls col-md-8 ">
                                 <input class="input-md textinput textInput form-control" id="CallingPerson" name="CallingPerson" placeholder="CallingPerson" style="margin-bottom: 10px" type="text" />
                            </div>
                        </div>

                        <div id="div_id_modeofinterview" class="form-group required">
                             <label for="id_number" class="control-label col-md-4  requiredField"> Mode of Interview<span class="asteriskField"></span> </label>
                             <div class="controls col-md-8 ">
                                 <input class="input-md textinput textInput form-control" id="modeofinterview" name="modeofinterview" placeholder="Mode of Interview" style="margin-bottom: 10px" type="text" />
                            </div>
                        </div>
                        <div id="div_id_interviewscheduleddate" class="form-group required">
                            <label for="id_interviewscheduleddate" class="control-label col-md-4  requiredField"> Interview Scheduled Date<span class="asteriskField">*</span> </label>
                            <div class="controls col-md-8 ">
                                <input class="input-md textinput textInput form-control" id="interviewscheduleddate" name="interviewscheduleddate" placeholder="Interview Scheduled Date" style="margin-bottom: 10px" type="text" />
                            </div>
                        </div>
                        <div id="div_id_time" class="form-group required">
                            <label for="id_time" class="control-label col-md-4  requiredField"> Time<span class="asteriskField">*</span> </label>
                            <div class="controls col-md-8 ">
                                <input class="input-md textinput textInput form-control" id="time" name="time" placeholder="Time" style="margin-bottom: 10px" type="text" />
                            </div>
                        </div>
                        <div id="div_id_Result" class="form-group required">
                            <label for="id_Result" class="control-label col-md-4  requiredField"> Result<span class="asteriskField">*</span> </label>
                            <div class="controls col-md-8 ">
                                <input class="input-md textinput textInput form-control" id="Result" name="Result" placeholder="Result" style="margin-bottom: 10px" type="text" />
                            </div>
                        </div>
                        <div id="div_id_InterviewScheduledBy" class="form-group required">
                            <label for="id_InterviewScheduledBy" class="control-label col-md-4  requiredField"> Interview Scheduled By <span class="asteriskField">*</span> </label>
                            <div class="controls col-md-8 ">
                                <input class="input-md textinput textInput form-control" id="InterviewScheduledBy" name="InterviewScheduledBy" placeholder="Interview Scheduled By" style="margin-bottom: 10px" type="text" />
                            </div>
                        </div>
                        <div id="div_id_Comments" class="form-group required">
                            <label for="id_Comments" class="control-label col-md-4  requiredField"> Comments  </label>
                            <div class="controls col-md-8 ">
                                <input class="input-md textinput textInput form-control" id="Comments" name="Comments" placeholder="Comments" style="margin-bottom: 10px" type="text" />
                            </div>
                        </div>
                        <div id="div_id_resume" class="form-group required">
                        <label for="id_resume" class="control-label col-md-4  requiredField"> Resume  </label>
                        <div class="controls col-md-8 ">
                        <input type="file" name="uploadfile" value=""/> 
                        </div>
                        </div>
                        
                        

                        <div class="form-group">
                            <div class="aab controls col-md-4 "></div>
                            <div class="controls col-md-8 ">
                                <input type="submit" name="addCand1" value="Add New Candidate" class="btn btn-primary btn btn-info" id="addCand" />
                            </div>
                        </div>



                </form>
            </div>
        </div>
    </div>
</div>
</div>
  </body>
</html>

<p class="text-center top_spac"> <a href="?action=logout">Logout</a> </p>
