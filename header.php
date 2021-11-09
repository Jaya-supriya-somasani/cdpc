<!DOCTYPE html>
<html>
<head>
	 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/20c5629a29.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="navigation.css">
   
</head>
<body>
<?php $id=$_GET['id'];?>
 <div class="ui large top fixed  menu">
    <div class="ui container">
        <a id="toggle" class="toc item">
            <i class="sidebar icon"></i>Menu</a>
        <div class="header item">
            <img class="logo" alt="logo" src="sklm.jpg">
            <span class="ptc_title">Placement and Training Cell</span>
            <span class="ptc_title_small">- RGUKT SRIKAKULAM</span>
        </div>
        <div class="right menu">
                <div class="item">

                    <?php
                    if($id=="")
                    {?>
                   <a class="ui primary button" href="./login.php">Log in</a>
                   <?php }
                   else
                   {
                       ?>
                       <a class="ui primary button" href="./logout.php">Log out</a>
                       <?php 
                   }?>
                </div>
        </div>
    </div>
 </div>
 <div class="ui left  vertical inverted sidebar  menu dimmed">
    
    
    <?php
                    if($id=="")
                    {?>
                    <br>
                    <a href="./home.php" class="item"><i class="home icon"></i>Home</a>
                    <a href="./about.php" class="item"><i class="info circle icon"></i>About</a>
                    <a href="./Updates.php" class="item"><i class="bell outline icon"></i>Updates</a>
                    <a href="./Gallery.php" class="item"><i class="file image outline icon"></i>Gallery</a>
                    <a href="./branches.php" class="item"><i class="address card outline icon"></i></i>Branches</a>
                    <a href="./recruiters.php" class="item"><i class="users icon"></i>Recruiters</a>
                    <a href="./guidelines.php" class="item"><i class="clipboard outline icon"></i>Guidelines</a>
                    <a href="./contact.php" class="item"><i class="envelope icon"></i>Contact us</a>
                  <a href="./login.php" class="item"><i class="unlock icon"></i>Login</a>
                   <?php }
                   else
                   {
                       ?>
                        <div class="item">
                       
                        <a class="ui image circular" href=""><img alt="user-profile" src="./sklm.jpg" width="40" height="40" ></a>
                        <a>Welcome, <b><?php echo $id;?></b></a>
                    </div>
                    
                        <a href="./home.php?id=<?php echo $id;?>" class="item"><i class="home icon"></i>Home</a>
                        <a href="./about.php?id=<?php echo $id;?>" class="item"><i class="info circle icon"></i>About</a>
                        <a href="./Updates.php?id=<?php echo $id;?>" class="item"><i class="bell outline icon"></i>Updates</a>
                        <a href="./Gallery.php?id=<?php echo $id;?>" class="item"><i class="file image outline icon"></i>Gallery</a>
                        <a href="./branches.php?id=<?php echo $id;?>" class="item"><i class="address card outline icon"></i></i>Branches</a>
                        <a href="./recruiters.php?id=<?php echo $id;?>" class="item"><i class="users icon"></i>Recruiters</a>
                        <a href="./guidelines.php?id=<?php echo $id;?>" class="item"><i class="clipboard outline icon"></i>Guidelines</a>
                        <a href="./contact.php?id=<?php echo $id;?>" class="item"><i class="envelope icon"></i>Contact us</a>

                        <div class="item">
            <b>More</b>
            <div class="menu">
                      <a href="./resume.php?id=<?php echo $id;?>" class="item">Resume</a>
                        <a href="./edit_profile.php?id=<?php echo $id;?>" class="item">Edit profile</a>
                       <a href="./myprofile.php?id=<?php echo $id;?>" class="item">My profile</a>
                       <a href="./LTI.php?id=<?php echo $id;?>" class="item">LTI form</a>
                       <a href="./queries.php?id=<?php echo $id;?>" class="item">Queries</a>
                       <a href="./logout.php" class="item"><i class="unlock icon"></i>Logout</a>
            </div>

                   </div>  
                       <?php 
                   }?>
    
</div>

</body>
</html> 