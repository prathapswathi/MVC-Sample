<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Login form</title>
<style type="text/css">

.form-control {
    min-height: 41px;
    background: #fff;
    box-shadow: none !important;
    border-color: #e3e3e3;
}
.form-control:focus {
    border-color: #70c5c0;
}
.form-control, .btn {        
    border-radius: 2px;
}
.login-form {
    width: 350px;
    margin: 0 auto;
    padding: 100px 0 30px;		
}
.login-form form {
    color: #7a7a7a;
    border-radius: 2px;
    margin-bottom: 15px;
    font-size: 13px;
    background: #ececec;
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    padding: 30px;	
    position: relative;	
}
.login-form h2 {
    font-size: 22px;
    margin: 35px 0 25px;
}
.login-form .avatar {
    position: absolute;
    margin: 0 auto;
    left: 0;
    right: 0;
    top: -50px;
    width: 95px;
    height: 95px;
    border-radius: 50%;
    z-index: 9;
    background: #70c5c0;
    padding: 15px;
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
}
.login-form .avatar img {
    width: 100%;
}	
.login-form input[type="checkbox"] {
    margin-top: 2px;
}
.login-form .btn {        
    font-size: 16px;
    font-weight: bold;
    background: #70c5c0;
    border: none;
    margin-bottom: 20px;
}
.login-form .btn:hover, .login-form .btn:focus {
    background: #50b8b3;
    outline: none !important;
}    
.login-form a {
    color: #fff;
    text-decoration: underline;
}
.login-form a:hover {
    text-decoration: none;
}
.login-form form a {
    color: #7a7a7a;
    text-decoration: none;
}
.login-form form a:hover {
    text-decoration: underline;
}
</style>
</head>
<body>
<?php include_once "header.php" ;?>
<div class="login-form">
    <form action="index.php?action=login" method="post">
		<div class="avatar">
		<img src="https://img.icons8.com/cotton/2x/person-male.png" alt="Avatar" class="md-avatar rounded-circle">
	  
		</div>
        <h2 class="text-center">Member Login</h2>   
        <div class="form-group">
        	<input type="text" class="form-control" name="username" placeholder="Username" required="required">
        </div>
		<div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="Password" required="required">
        </div>        
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-lg btn-block" name="login" value="login">Sign in</button>
        </div>
		<div class="clearfix">
            <label class="pull-left checkbox-inline"><input type="checkbox"> Remember me</label>
            <a href="#" class="pull-right">Forgot Password?</a>
        </div>
    </form>
    <p class="text-center small">Don't have an account? <a href="index.php?action=register" style="color:red">Sign up here!</a></p>
</div>


</body>
<?php include_once "footer.php" ;?>
</html>                            