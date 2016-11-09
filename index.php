<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>myCloset</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  </head>
  <body>
    <script type="text/javascript">
    $(function() {
     $('#switchForm').click(function() {
       $('#sec_box').show();
       $('#first_box').hide();
     });
    });
    </script>
    <div class="form animated bounceInDown">
      <div class="registerForm" id="first_box" align="center">
        <h1>Welcome to myCloset</h1>
        <p>Live smarter. Aliquam vel libero scelerisque, auctor odio nec, iaculis mi. Vestibulum id maximus dui. Ut et aliquet ante. Suspendisse lacinia aliquam posuere. Nullam vitae vulputate erat. Nam id augue neque. Praesent enim diam, egestas eu cursus in, venenatis a erat.</p>
        <h2>Register</h2>
        <form action="index.php" method="post" enctype="multipart/form-data">
          <input placeholder="Fill in name" name="name" type="text" autofocus required="true">
          <input placeholder="your@email.com" name="email" type="text" autofocus required="true">
          <input placeholder="Enter your password" name="password" type="password" autofocus required="true">
          <br/>
            <input name="register" type="submit" value="Register" class="btn-register">
            <p><br/>Already a user? <a href="#" id="switchForm">Login</a>.</p>
        </form>
      </div>
      <div class="loginForm" id="sec_box" style="display: none;" align="center">
        <h2>Login</h2>
        <form action="index.php" method="post" enctype="multipart/form-data">
          <input placeholder="Enter email" name="username" type="text" autofocus>
          <input placeholder="Enter password" name="password" type="password">
          <br/>
          <input name="login" type="submit" value="Login" class="btn-login">
          <br><br><br><a href="index.php">Cancel</a>
        </form>
      </div>
    </div>
  </body>
</html>
