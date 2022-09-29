
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php if(isset($_GET['fail'])&&$_GET['fail']) echo "Wrong name or password!"; ?>
<form action="login_action.php" method="post">
  <pre>
  <label for="name">Enter your Name</label>
  <input required name="userName" type="text">
  <label for="password">Enter your password</label>
  <input required name="password" type="password">
  <input type="submit" value="Submit">
  </pre>
    <a href="signup.php">Sign up</a>
</form>
</body>
</html>
