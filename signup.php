<!DOCTYPE html>
<html>
<head>
  <title>Create a New Account</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleleapis.com/css?family=Roboto|courgette|pacifico:400,700"rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootsrapcdn.com/bootstrap/3.3.7/css.min.css">
  <script src="https://ajax.googleleapis.com/ajax/lids/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootsrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/signup.css">
</head>
<body>
<div class="signup-form">
  <form =action="" method="post">
    <div class="form-header">
     <h2>Sign Up</h2>
     <p>Please fill in this form to create an account</p> 
    </div>
      <div class="form-group">
      <label>Username</label>
      <input type="text"class="form-control" name="email" placeholder="Example: Ian" autocomplete="off"required>
    </div>
      <div class="form-group">
      <label>password</label>
      <input type="password" class="form-control" name="user_pass" placeholder="password" autocomplete="off"required>
    </div>
    <div class="form-group">
      <label>email adress</label>
      <input type="email"class="form-control" name="email" placeholder="someone@site.com" autocomplete="off"required>
       <div class="form-group">
      <label>Country</label>
      <select class="form-control" name="user_country"required>
        <option disabled="">Select a Country</option>
        <option>Kenya</option>
        <option>Uganda</option>
        <option>Tanzania</option>
        <option>Rwanda</option>
        <option>Burundi</option>
      </select>
    </div>
             <div class="form-group">
      <label>address</label>
      <input type="text"class="form-control" name="address" placeholder="address" autocomplete="off"required>
    </div>
   <div class="form-group">
      <label>Gender</label>
      <select class="form-control" name="user_country"required>
        <option disabled="">Select your Gender</option>
        <option>Male</option>
        <option>Female</option>
        <option>Other</option>
        <option>Prefer not to say</option>
      </select>
    </div>
    <div class="form-group">
      <label class="checkbox-inline"><input type="checkbox"required>I accept the<a href="#">Terms of use</a>&amp;<a href="#">privacy policy</a> </label>
    </div>
       <div class="form-group">
      <button type="submit" class="btn btn primary btn-lg"name="sign_up">sign Up</button>
    </div>
  </form>
  <div class="text-center small" style="color: #67428B;">Already have an account?<a href="signin.php">Sign In</a></div>
</div>
</body>
</html>