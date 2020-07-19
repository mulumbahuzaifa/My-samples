<?php
include("database.php");
extract($_POST);

if(isset($submit))
{
	$rs=mysqli_query($conn,"select * from user where user_id='$user_id' and pass='$pass'");
	if(mysqli_num_rows($rs)<1)
	{
		$found="N";
	}
	else
	{
		$_SESSION["login"]=$user_id;
	}
}
if (isset($_SESSION["login"]))
{
echo "<h1 align=center>Hye you are sucessfully login!!!</h1>";
exit;
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Main css -->
<link href="css/style.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
</head>
<body>
<div class="main">
        
        <div class="w3-container w3-hide-small">
            <!-- Ezoic - top - top_of_page -->
            <span id="ezoic-pub-ad-placeholder-107"></span>
            <span style="display:inline-block;float:none;margin-bottom:2px !important;margin-left:0px !important;margin-right:0px !important;margin-top:2px !important;min-height:420px;min-width:580px;" class="ezoic-ad box-2 adtester-container adtester-container-107" data-ez-name="studentstutorial_com-box-2"><span id="div-gpt-ad-studentstutorial_com-box-2-0" ezaw="580" ezah="400" style="position:relative;z-index:0;display:inline-block;min-height:400px;min-width:580px;" class="ezoic-ad ezoic-adl"><script data-ezscrex="false" data-cfasync="false" type="text/javascript" style="display:none;">eval(ez_write_tag([[580,400],'studentstutorial_com-box-2','ezslot_1',107,'0','0']));</script></span></span>
            <!-- End Ezoic - top - top_of_page -->
        </div>
        <div class="w3-container w3-hide-large">
            <!-- Ezoic - top - top_of_page -->
            
            <!-- End Ezoic - top - top_of_page -->
        </div>
        
        
        
     <!-- Sing in  Form -->
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="images/signin-image.jpg" alt="sing up image"></figure>
                        <a href="signup.php" class="signup-image-link">Create an account</a>
						<a href="forget.php" class="signup-image-link">Forget Password</a>
                    </div>
                    
                    <div class="signin-form">
                        <h2 class="form-title">Login</h2>
							<form method="POST" class="register-form" id="login-form">
                            <div class="form-group">
                                <label for="user_id"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="user_id" id="user_id" placeholder="Username" autocomplete="on" required="" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAASCAYAAABSO15qAAAAAXNSR0IArs4c6QAAAPhJREFUOBHlU70KgzAQPlMhEvoQTg6OPoOjT+JWOnRqkUKHgqWP4OQbOPokTk6OTkVULNSLVc62oJmbIdzd95NcuGjX2/3YVI/Ts+t0WLE2ut5xsQ0O+90F6UxFjAI8qNcEGONia08e6MNONYwCS7EQAizLmtGUDEzTBNd1fxsYhjEBnHPQNG3KKTYV34F8ec/zwHEciOMYyrIE3/ehKAqIoggo9inGXKmFXwbyBkmSQJqmUNe15IRhCG3byphitm1/eUzDM4qR0TTNjEixGdAnSi3keS5vSk2UDKqqgizLqB4YzvassiKhGtZ/jDMtLOnHz7TE+yf8BaDZXA509yeBAAAAAElFTkSuQmCC&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%; cursor: auto;">
                                <span id="error_username" style="color:red;"></span>
                            </div>
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="pass" id="pass" placeholder="Password" required="" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAASCAYAAABSO15qAAAAAXNSR0IArs4c6QAAAPhJREFUOBHlU70KgzAQPlMhEvoQTg6OPoOjT+JWOnRqkUKHgqWP4OQbOPokTk6OTkVULNSLVc62oJmbIdzd95NcuGjX2/3YVI/Ts+t0WLE2ut5xsQ0O+90F6UxFjAI8qNcEGONia08e6MNONYwCS7EQAizLmtGUDEzTBNd1fxsYhjEBnHPQNG3KKTYV34F8ec/zwHEciOMYyrIE3/ehKAqIoggo9inGXKmFXwbyBkmSQJqmUNe15IRhCG3byphitm1/eUzDM4qR0TTNjEixGdAnSi3keS5vSk2UDKqqgizLqB4YzvassiKhGtZ/jDMtLOnHz7TE+yf8BaDZXA509yeBAAAAAElFTkSuQmCC&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%; cursor: auto;">
                            </div>
                            
                            <div class="form-group form-button">
                                <input type="submit" name="signin" id="signin" class="form-submit" value="Log in">
                            </div>
                        </form>
                       
                    </div>
                </div>
            </div>
        </section>

    </div>


    </div>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
    

<?php
		  if(isset($found))
		  {
		  	echo '<p class="w3-center w3-text-red">Invalid user id or password<br><a href="index.php">Please try again</p>';
		  }
		  ?>

</form>
</body>
</html>