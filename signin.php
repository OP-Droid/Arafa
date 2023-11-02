<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login To Your Account</title>
  <link href="https://fonts.googleleapis.com/css?family=Roboto|courgette|pacifico:400,700"rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootsrapcdn.com/bootstrap/3.3.7/css.min.css">
  <script src="https://ajax.googleleapis.com/ajax/lids/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootsrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/signin.css">
</head>
<body>
<div class="signin-form">
  <form =action="" method="post">
    <div class="form-header">
     <h2>Sign In</h2>
     <p>login to Arafa</p> 
    </div>
    <div class="form-group">
      <label>email</label>
      <input type="email"class="form-control" name="email" placeholder="someone@site.com" autocomplete="off"required>
    </div>
    <div class="form-group">
      <label>password</label>
      <input type="password"class="form-control" name="password" placeholder="password" autocomplete="off"required>
    </div>
    <div class="small">forgot password?<a href="forgot_pass.php">click here</a></div><br>
    <div class="form-group">
      <button type="submit" class="btn btn primary btn-lg"name="sign_in">sign in</button>
    </div>
  </form>
  <div class="text-center small" style="color: #67428B;">Don't have an account?<a href="signup.php">create account</a></div>
  
</div>
</body>
</html>