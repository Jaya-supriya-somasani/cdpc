<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/20c5629a29.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script> 

</head>
<body class="">
<?php
    include('./header.php')
?>
<div class="pusher dimmed"><br><br><br><div class="container" id="formm">
    
    <center><h1>Long-Term Internship - Form Generator</h1>
        <h3>Fill the details correctly</h3>
    </center>

      <div class="container">
              <div class="card bg-light text-dark">
          <div class="card-header"><center><b>Instructions for filling the long term Internship forms</b></center></div>
          <div class="card-header">
            <p>Students should be ready with following details before filling the form details:
            </p><ul><li>Name</li><li>Institute Id number</li><li>Department</li><li>Engineering Year</li><li>Mobile No. of the Student</li><li>Mail Id of the student</li><li>Name of the Project Guide/Supervisor with designation</li><li>Name of parent/guardian</li><li>Mobile No. of the Parent/Guardian</li><li>Mail Id of the Parent/Guardian</li><li>Long term internship company name</li><li>long term internship work location</li><li>Reporting date mentioned in offer letter</li><li>If long term internship offer is through PTC/department or off campus</li><li>PTC job advertisement date</li><li>In case of off campus (job portal/job advertisement portal name:  and job notification date:)</li><li>internship period (start date, end date, time duration in months)</li></ul><p></p>
            '
          </div>
        </div>
      </div>
      <br><br>
        
    <form method="post" action="#">

      <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">Name</span>
            </div>
            <input type="text" class="form-control" placeholder="Fullname" name="name" required="">
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">University Id</span>
            </div>
            <input type="text" class="form-control" name="idno" placeholder="University Id" required="">
        </div>
        <select name="branch" class="custom-select mb-3">
          <option selected="">Select Branch</option>
          <option value="Electronics and Communication Engineering">Electronics and Communication Engineering</option>
          <option value="Computer Science Engineering">Computer Science Engineering</option>
          <option value="Civil Engineering">Civil Engineering</option>
          <option value="Mechanical Engineering">Mechanical Engineering</option>
          <option value="Chemical Engineering">Chemical Engineering</option>
          <option value="Materials and Metallurgical Engineering">Materials and Metallurgical Engineering(MME)</option>
        </select>
        <select name="year" class="custom-select mb-3">
          <option selected="">Select Year</option>
          <option value="Third">E3</option>
          <option value="Fourth">E4</option>
        </select>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">Student Email</span>
            </div>
            <input type="email" class="form-control" name="email_s" required="">
        </div>        
        <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">Parent Name</span>
            </div>
            <input type="text" class="form-control" name="name_p" required="">
            <div class="input-group-prepend">
              <span class="input-group-text">Parent Email</span>
            </div>
            <input type="email" class="form-control" name="email_p" placeholder="optional">
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">Student Phone Number</span>
            </div>
            <input type="text" class="form-control" name="phone_s" maxlength="10" required="">
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">Parent Phone Number</span>
            </div>
            <input type="text" class="form-control" name="phone_p" maxlength="10" required="">
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">Company Name</span>
            </div>
            <input type="text" class="form-control" name="company" required="">
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">Place of Internship</span>
            </div>
            <input type="text" class="form-control" name="place" required="">
        </div>
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text">Date(From)</span>
          </div>
          <input type="date" class="form-control" placeholder="From" name="start" required="">
          <div class="input-group-prepend">
            <span class="input-group-text">Date(To)</span>
          </div>
          <input type="date" class="form-control" placeholder="To" name="end" required="">
      </div>
      <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">Total Duration</span>
            </div>
            <input type="text" class="form-control" name="months" required="" placeholder="No. of months">
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">Stipend/Compensation</span>
            </div>
            <input type="text" class="form-control" name="stipend" required="">
        </div>
        <div class="input-group mb-3">
          <span class="input-group-text mr-2">Source of Internship</span>
          <div class="custom-control custom-radio custom-control-inline mt-1">
            <input type="radio" class="custom-control-input" id="customRadio" name="check" value="yes">
            <label class="custom-control-label" for="customRadio">From PTC</label>
        </div>
          <div class="custom-control custom-radio custom-control-inline mt-1">
            <input type="radio" class="custom-control-input" id="customRadio2" name="check" value="no">
            <label class="custom-control-label" for="customRadio2">OFF Campus</label>
        </div> 
        </div>
      <div class="input-group mb-3" id="show">
            <div class="input-group-prepend">
              <span class="input-group-text">Internship advertisemnt/Notification portal</span>
            </div>
            <input type="text" class="form-control" name="portal">
      </div>  
      <div class="input-group mb-3" id="show1">
            <div class="input-group-prepend">
              <span class="input-group-text">Date of Internship Notification</span>
            </div>
            <input type="date" class="form-control" name="date_n" placeholder="Advertisement/Notification in the Departmental Notice Board/CDPC/Job Portal dated">
      </div>

      <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">Date of offer letter received</span>
            </div>
            <input type="date" class="form-control" name="date_o" required="" placeholder="Authenticated Offer Letter received dated">
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">Project Guide/Supervisor</span>
            </div>
            <input type="text" class="form-control" name="guide" required="">
            <div class="input-group-prepend">
            <span class="input-group-text">Designation</span>
          </div>
          <input type="text" class="form-control" placeholder="" name="designation" required="">
        </div>
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="customCheck" name="checkbox" value="know" required="">
          <label class="custom-control-label" for="customCheck">I hereby accept that I have the knowledge of <a href="#">Long term-internship guideline</a> of RGUKT and will abide to these guidelines at all circumstances.</label>
        </div>
        <br>
        <center><input value="Submit" type="submit" class="btn btn-primary" id="submit"></center>
      

    </form>
  </div><div class="container" id="conn" style="display: none;">
    <div class="card bg-light text-dark">
      <div class="card-header">
        <center><b>Your Forms are Downloaded</b></center>
      </div>
      <div class="card-body">
        <p>Download Zip file includes four documents:</p><ol><li>Annexure 5A : Student request letter</li><li> Annexure 5B : letter of undertaking</li><li>Annexure 5C : no objection certificate</li><li> Annexure 5D : Relieving certificate</li></ol>Below are the guidelines to follow for approval/sanction of relieving certificate for long term internship:<br>
          <ol><li>Students must print the download the forms and fill with signatures of student as well as parent/guardian in relevant spaces</li><li>Student should scan the forms with signatures into pdf format.</li><li>Mail the following document to project supervisor/guide ,DPN ,HOD<ul><li>Annexure 5A : Student request letter</li><li>Annexure 5B : letter of undertaking</li><li>Annexure 5C : no objection certificate</li><li>Annexure 5D : Relieving certificate</li><li>Internship offer letter</li><li>Medical Fitness Certificate from the Govt. Medical Officer/Medical Officer of RGUKT</li><li>Job reference printout/ job notification document/job advertisement printout (In case job offer is not through PTC portal or off-campus)</li></ul></li><li>Students should mention in the mail weather the offer letter is through PTC or off campus.</li><li>Inform the project guide/supervisor and DPN regarding the internship.</li></ol><p></p>
      </div>
    </div>
</div>
<?php
    include('./footer.php')
?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js"></script>
  <script>
    $('#toggle').click(function () {
      $('.ui.sidebar').sidebar('toggle');
    })
  </script>
</body>
</html>