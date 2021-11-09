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
<body class=" main-bg">
<?php $id=$_GET['id']; ?>
	<div class="ui container">
    <?php
    include('./header.php')
    ?>
	</div>
   <br>
    <div class=" mt-5">
    <div class="ui container mb7 mt-5">
    <br>
        <h2 class="ui header">
            Profile Details
            <div class="sub header">Update your profile for better communication <a href="./edit_profile.php?id=<?php echo $id ?>">Click Here to edit </a></div>
        </h2>
        <div class="ui segment ">
            <div class="ui grid">
                <div class="sixteen wide mobile eight wide tablet eight wide computer column">
                    <div class="ui stacked segment">
                        <h4 class="ui header">Personal Details</h4>
                            <table class="ui celled table">
                                <tbody>
                                    <tr>
                                        <td>Univesity ID</td>
                                        <td>S160773</td>
                                    </tr>
                                    <tr>
                                        <td>Name</td>
                                        <td>SOMASANI JAYA SUPRIYA</td>
                                    </tr>
                                    <tr>
                                        <td>Mobile</td>
                                        <td>9398467112</td>
                                    </tr>
                                    <tr>
                                        <td>Email</td>
                                        <td>S160862@rguktsklm.ac.in</td>
                                    </tr>
                                    <tr>
                                        <td>Village</td>
                                        <td>Maredubaka</td>
                                    </tr>
                                    <tr>
                                        <td>Mandal</td>
                                        <td>Mandapeta</td>
                                    </tr>
                                    <tr>
                                        <td>District</td>
                                        <td>East Godavari</td>
                                    </tr>
                                    <tr>
                                        <td>State</td>
                                        <td>Andhra Pradesh</td>
                                    </tr>
                                    <tr>
                                        <td>Pincode</td>
                                        <td>533308</td>
                                    </tr>
                                    <tr>
                                        <td>Door / House no</td>
                                        <td>1-122</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="sixteen wide mobile eight wide tablet eight wide computer column">
                        <div class="ui stacked segment">
                            <h4 class="ui header">Academic Details</h4>
                                <table class="ui celled table">
                                    <tbody>
                                        <tr>
                                            <td>Branch</td>
                                            <td>CSE</td>
                                        </tr>
                                        <tr>
                                            <td>Year</td>
                                            <td>E3</td>
                                        </tr>
                                        <tr>
                                            <td>SSC SCHOOL</td>
                                            <td>S. L. B. MPL.Girls. High School</td>
                                        </tr>
                                        <tr>
                                            <td>SSC CGPA</td>
                                            <td>9.7</td>
                                        </tr>
                                        <tr>
                                            <td>Year of Pass - SSC</td>
                                            <td>2016</td>
                                        </tr>
                                        <tr>
                                            <td>PUC CGPA</td>
                                            <td>8.1</td>
                                        </tr>
                                        <tr>
                                            <td>Year of Pass - PUC</td>
                                            <td>2018</td>
                                        </tr>
                                        <tr>
                                            <td>Btech CGPA</td>
                                            <td>8.78</td>
                                        </tr>
                                        <tr>
                                            <td>Year of Pass - Btech</td>
                                            <td>2022</td>
                                        </tr>
                                        <tr>
                                            <td>Blogs</td>
                                            <td>0</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="ui grid">
                        <div class="sixteen wide mobile eight wide tablet eight wide computer column">
                            <div class="ui stacked segment">
                                <h4 class="ui header">Placement Details</h4>
                                <table class="ui celled table">
                                    <tbody>
                                        <tr>
                                            <td>No of Companies</td>
                                            <td>0</td>
                                        </tr>
                                        <tr>
                                            <td>Registered Companies</td>
                                            <td>0</td>
                                        </tr>
                                        <tr>
                                            <td>Absent Drives</td>
                                            <td>0</td>
                                        </tr>
                                        <tr>
                                            <td>Withdraws</td>
                                            <td>0</td>
                                        </tr>
                                        <tr>
                                            <td>Internships Got</td>
                                            <td>0</td>
                                        </tr>
                                        <tr>
                                            <td>Placements Got</td>
                                            <td>0</td>
                                        </tr>
                                        <tr>
                                            <td>Offers Got</td>
                                            <td>0</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        
                        <div class="sixteen wide mobile eight wide tablet eight wide computer column">
                            <div class="ui stacked segment">
                                <h4 class="ui header">Change Password</h4>
                                <div id="result"></div>
                                <p style="color: red;"><b>The new password must be between 8 to 15 characters which contain at least one lowercase letter, one uppercase letter, one numeric digit, and one special character.</b></p>
                                <div class="ui form">
                                    <div class="field">
                                        <label>Current Password</label>
                                        <input type="password" name="cpasswd" id="cpasswd" placeholder="Current Password">
                                    </div>
                                    <div class="field">
                                        <label>New Password</label>
                                        <input type="password" pattern="^(?=.*[0-9]+.*)(?=.*[a-zA-Z]+.*)[0-9a-zA-Z]{6,}$" name="npasswd" id="npasswd" placeholder="New Password">
                                    </div>
                                    <div class="field">
                                        <label>Re-enter New Password</label>
                                        <input type="password" pattern="^(?=.*[0-9]+.*)(?=.*[a-zA-Z]+.*)[0-9a-zA-Z]{6,}$" name="rpasswd" id="rpasswd" placeholder="Re-enter New Password">
                                    </div>
                                    <input class="ui button blue" id="btn-change" value="Change Password" name="submit" type="submit">
                                </div>
                      
                            </div>
                        </div>
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
