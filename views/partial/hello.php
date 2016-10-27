<!DOCTYPE html>
<html>
<head>
<title>Sign in to GitHub. GitHub</title>

 <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
.login_block
    {
    border: 1px solid #D8DEE2;
    border-radius: 5px;
    margin: 5px 400px 10px 450px;
    padding: 10px 5px 10px 25px;
    }
.forget_password_link
    {
    color: #2da1c1;
    font-size: small;
    text-decoration: none;
    padding-left: 45px;
    /*right: 252px;*/
    }

.create_new_account_block
    {
    border: 1px solid #D8DEE2;
    border-radius: 5px;
    margin: 10px 400px 3px 450px;
    padding: 10px 5px 10px 25px;
    }
.footer_link_block
    {
    padding-left: 450px;
    padding-top: 150px;
    padding-right: 200px;
    }
.logo_alignment
    {
     padding-top: 50px;
     padding-left: 70px; 
    }

body 
    {
    background-color:#F9F9F9;
    }

</style>
</head>
<body >
    <div class="container">
     <div class="row">
            <div class="logo_alignment col-md-offset-5">
              <img src="index.png" alt="Hithub Logo"  height="65" width="65">
            </div>
            <div class="col-md-5 col-md-offset-5">   
                <h3 style="font-size: 23px;font-weight:"lighter"; letter-spacing:0.5px;">Sign into GitHub</h3>
            </div>
     </div>
     <div class="row login_block">
     <form>          
        <p style="font-size:15px;">Username or email address </p>
        <input type="text" name="fullname" id="fullname" size="28">
        <br>
        <p style="font-size:15px;">Password 
        <a class="forget_password_link" href="www.google.com">Forgot password?</a> </p>
        <input type="password" name="login_password" id="login_password" size="28">
        <br><br> 
        <div style="padding-right:25px;">
        <input class="btn btn-success btn-block" type="submit" value="Sign In">
        </div>                              
     </form> 
     </div>
    <div class="row create_new_account_block">
    <p>New to GitHub?<a href="www.google.com">Create an account</a></p>
    </div>
    <div class="row footer_link_block">
   <a style="color: #A1B0D5;" href="">Terms</a>
   <a style="color: #A1B0D5; padding-left:15px" href="www.ggg.com">Privacy</a>
   <a style="color: #A1B0D5; padding-left:15px" href="">Security</a>
   <a style="color: #A1B0D5; padding-left:15px" href="">Contact Github</a>
</div>

</div>              
</div>
</body>
</html>