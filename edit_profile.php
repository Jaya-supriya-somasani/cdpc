<!DOCTYPE html>
<html>
<head>
	<title>My Profile</title>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
	<style>
    
      .main-bg
      {
        background-color: white !important;
      }
    </style>
</head>
<body class=" main">
	<div class="ui container mb-5">
    <?php
    include('./header.php')
    ?>
	</div>
    <br>
   <div >
        <div class="ui container mb7">
            <h2 class="ui header mt-5">
                Profile Update
                <div class="sub header">Fill Details Carefully with correct information</div>
            </h2>
            <div class="sixteen wide mobile eight wide tablet sixteen wide computer column">
                <div class="ui segment">
                    <div class="ui warning message">
                        <i class="icon close"></i>
                        <div class="header">
                            Fill the correct details. Once you updated the profile, You can't update it.
                        </div>
                    </div>
                    <div class="ui grid">
                        <div class="sixteen wide mobile eight wide tablet eight wide computer column">
                            <div class="ui pilled segment">
                                <form class="ui form" action="https://cdpc.rguktn.ac.in/cdpc/editprofile?" method="POST" enctype="multipart/form-data">
                                    <div class="required field">
                                        <label>Choose Pic</label>
                                        <input type="file" name="image" required="">
                                    </div>
                                    <button class="ui button blue" type="submit" name="image_upload"> Submit</button>
                                </form>
                            </div>
                        </div>
                        <div class="sixteen wide mobile eight wide tablet eight wide computer column">
                            <div class="ui pilled segment">
                                <img class="ui tiny circular image" alt="S160862" src="supriya.jpg">
                            </div>
                        </div>
                    </div>
                    <form class="ui form" id="profile-form" novalidate="novalidate">
                        <div class="ui grid">
                            <div class="sixteen wide mobile eight wide tablet eight wide computer column">
                                <div class="ui pilled segment">
                                    <h4>Personal information</h4>
                                    <div class="required field">
                                        <label>Full Name</label>
                                        <input type="text" name="fname" id="fname" value="SOMASANI JAYA SUPRIYA" readonly="" placeholder="Full Name">
                                    </div>
                                    <div class="required  field">
                                        <label>Email</label>
                                        <input type="email" name="email" id="email" value="S160862@rguktsklm.ac.in" placeholder="Email">
                                    </div>
                                    <div class="required  field">
                                        <label>Mobile</label>
                                        <input type="number" name="mobile" id="mobile" value="9398467112" placeholder="Mobile">
                                    </div>
                                    <div class="required field">
                                        <label>DOB</label>
                                        <input type="date" name="dob" id="dob" value="2001-03-20" placeholder="DOB">
                                    </div>
                                    <div class=" field">
                                        <label>Street</label>
                                        <input type="text" name="street" id="street" value="Ramalayam" placeholder="Street">
                                    </div>
                                    <div class="required  field">
                                        <label>Village/City/Town</label>
                            <input type="text" name="village" id="village" value="Maredubaka" placeholder="Village/City/Town">
                                    </div>
                                    <div class="required  field">
                                        <label>Mandal</label>
                                        <input type="text" name="mandal" id="mandal" value="Mandapeta" placeholder="Mandal">
                                    </div>
                                    <div class="required  field">
                                        <label>District</label>
                                        <input type="text" name="dist" id="dist" value="East Godavari" placeholder="District">
                                    </div>

                                    <div class="required  field">
                                        <label>State</label>
                                        <input type="text" name="state" id="state" value="Andhra Pradesh" placeholder="State">
                                    </div>
                                    <div class="required  field">
                                        <label>Pincode</label>
                                        <input type="number" name="pincode" id="pincode" value="533308" placeholder="Pincode">
                                    </div>
                                    <div class="required  field">
                                        <label>Door/House No</label>
                                        <input type="text" name="dno" id="dno" value="1-121" placeholder="Door/House No">
                                    </div>
                                </div>
                            </div>
                            <div class="sixteen wide mobile eight wide tablet eight wide computer column">
                                <div class="ui pilled segment">
                                    <div class="required field">
                                        <label>Branch</label>
                                        <div class="ui disabled dropdown selection" tabindex="0"><select name="dept" id="dept">
                                            <option value="">Select Branch</option>
                                            <option value="CSE" selected="">CSE</option>
                                            <option value="ECE">ECE</option>
                                            <option value="MECH">MECH</option>
                                            <option value="MME">MME</option>
                                            <option value="CIVIL">CIVIL</option>
                                            <option value="CHEM">CHEM</option>
                                        </select><i class="dropdown icon"></i><div class="text">CSE</div><div class="menu" tabindex="-1"><div class="item active selected" data-value="CSE">CSE</div><div class="item" data-value="ECE">ECE</div><div class="item" data-value="MECH">MECH</div><div class="item" data-value="MME">MME</div><div class="item" data-value="CIVIL">CIVIL</div><div class="item" data-value="CHEM">CHEM</div></div></div>
                                    </div>
                                    <div class="required  field">
                                        <label>Year</label>
                                        <div class="ui  disabled dropdown selection" tabindex="0"><select name="year" id="year">
                                            <option value="">Select Year</option>
                                            <option value="E2">E2</option>
                                            <option value="E3" selected="">E3</option>
                                            <option value="E$">E4</option>
                                        </select><i class="dropdown icon"></i><div class="text">E3</div><div class="menu" tabindex="-1"><div class="item" data-value="E2">E2</div><div class="item active selected" data-value="E3">E3</div><div class="item" data-value="E$">E4</div></div></div>
                                    </div>
                                    <div class="required field">
                                        <label>Gender</label>
                                        <div class="ui  disabled dropdown selection" tabindex="0"><select name="gender" id="gender">
                                            <option value="M">Male</option>
                                            <option value="F" selected="">Female</option>
                                        </select><i class="dropdown icon"></i><div class="text">Female</div><div class="menu" tabindex="-1"><div class="item" data-value="M">Male</div><div class="item active selected" data-value="F">Female</div></div></div>
                                    </div>
                                    <div class="required  field">
                                        <label>Section</label>
                                        <div class="ui fluid dropdown selection" tabindex="0">
                                            <select name="section" id="section">
                                                <option value="">Select Section</option>
                                                <option value="Section-1">Section-1</option>
                                                <option value="Section-2">Section-2</option>
                                                <option value="Section-3">Section-3</option>                                                
                                                <option value="Section-4">Section-4</option>
                                                <option value="Section-5">Section-5</option>
                                                <option value="Section-6" selected="">Section-6</option>
                                            </select>
                                            <i class="dropdown icon"></i>
                                            <div class="text">Section-6</div>
                                            <div class="menu" tabindex="-1">
                                                <div class="item" data-value="Section-1">Section-1</div>
                                                <div class="item" data-value="Section-2">Section-2</div>
                                                <div class="item" data-value="Section-3">Section-3</div>
                                                <div class="item" data-value="Section-4">Section-4</div>
                                                <div class="item" data-value="Section-5">Section-5</div>
                                                <div class="item active selected" data-value="Section-6">Section-6</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" required field">
                                        <label>SSC School</label>
                                        <input type="text" name="sname" id="sname" value="S. L. B. MPL. Girls. High School" placeholder="SSC School">
                                    </div>
                                    <div class="required field">
                                        <label>Year of Pass (SSC)</label>
                                        <input type="number" name="syear" id="syear" value="2016" placeholder="Year of Pass (SSC)">
                                    </div>
                                    <div class="required field">
                                        <label>Year of Pass (PUC)</label>
                                        <input type="number" name="pyear" id="pyear" value="2018" placeholder="Year of Pass (PUC)">
                                    </div>
                                    <div class="required field">
                                        <label>Year of Pass (B.Tech)</label>
                                        <input type="number" name="byear" id="byear" value="2022" placeholder="Year of Pass (B.Tech)">
                                    </div>
                                    <div class="required field">
                                        <label>SSC CGPA</label>
                                        <input type="text" name="ssc" id="ssc" value="9.7" placeholder="SSC CGPA">
                                    </div>
                                        <div class="required   field">
                                        <label>PUC CGPA</label>
                                        <input type="text" name="puc" id="puc" value="8.1" placeholder="PUC CGPA">
                                    </div>
                                        <div class="required   field">
                                        <label>Btech CGPA</label>
                                        <input type="text" name="btech" id="btech" value="8.78" placeholder="Btech CGPA">
                                    </div>
                                    <div class="required   field">
                                        <label>Backlogs</label>
                                        <input type="number" name="blogs" id="blogs" value="0" placeholder="Backlogs">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="result"></div><br>
                        <div class="inline field">
                            <div class="ui checkbox">
                                <input type="checkbox" id="agree" name="agree" tabindex="0">
                                <label>I hereby declare that the above mentioned information is true to the best of my knowledge.</label>
                            </div>
                        </div>
                        <button class="ui button blue" type="submit" id="btn-basic"> Submit</button>
                    </form>
                </div>
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