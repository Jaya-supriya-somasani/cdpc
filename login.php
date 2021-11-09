<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
    <?php include './config/dbcon.php';?>
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
	<div class="ui container">
    <?php
    include('./header.php')
    ?>
	</div>
    <div class="pusher">
        <div class="ui container mb7 mt-5">
            <div class="ui stackable grid">
                <div class="four wide column"></div>
                    <div class="seven wide column">
                        <h2 class="ui icon header mt-5">
                            <i class="graduation cap icon"></i>
                            <div class="content">
                                Welcome Back
                                <div class="sub header">Don't miss your next opportunity. Sign in to stay updated with us</div>
                            </div>
                        </h2>
                        <div class="ui info message">
                            <i class="icon close"></i>
                            <div class="header"> Default Password is Your Exam Password.</div>
                            <p>Only 2016,17 batches have access to this website.</p>
                        </div>
                        <div id="result"><br></div>
                        <form action="login.php" method="POST"class="ui form" id="login-form" novalidate="novalidate">
                            <div class=" required field">
                                <label>University ID</label>
                                <input type="text" name="user_idno" id="user_idno" placeholder="University ID">
                            </div>
                            <div class=" required field">
                                <label>Password</label>
                                <input type="password" name="password" id="password" placeholder="Password">
                                <input type="hidden" name="view" value="">

                            </div>

                            <div class="two fields">
                                <div class="field">
                                    <input type="checkbox" id="remember" name="remember" value="1"> Remember me on this device
                                </div>
                                <div class="field">
                                    <a href="#">Forgot Password ?</a>
                                </div>
                            </div>


                            <input class="ui button primary" id="btn-login" name="submit" value="submit" type="submit">
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
<?php
 if(isset($_POST['submit'])) {
        
    $username=$_POST['user_idno'];
    $password=$_POST['password'];
    $sql="SELECT * FROM register WHERE ID='$username' AND Password='$password' ";
    $result=mysqli_query($con,$sql);
    $count=mysqli_num_rows($result);
    $row=mysqli_fetch_assoc($result);
    
    if($count==1)
    {
        $id=$row['ID'];
       
        $_SESSION['id']=$id;
       
        // echo "<script> alert('Login Successful');</script>";
        echo "
            <script>
            M.toast({html: 'Login successfull!'});
        
            </script>
         ";

        echo "<script>document.location='./home.php?id=$id'</script>";
        

    }
    else
    {

        echo "
            <script>
            M.toast({html: 'wrong username/password'});
        
            </script>
         ";
        // echo "<script> alert('wrong username/password');</script>";
       // echo "<script>document.location='./login.php'</script>";
        
    }
}

?>