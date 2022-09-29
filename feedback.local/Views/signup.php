<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
if(isset($_GET['fail'])&&$_GET['fail']) echo "User already exist";
?>
<form action="signup_action.php" method="post">
  <pre>
        <label for="userName">Type your Name</label>
        <input name="userName" type="text" required>
        <label for="email">Type your email</label>
        <input name="email" type="email" required>
        <label for="password">Type your password</label>
        <input name="password" type="password" required>
        <input type="submit" value="Submit">
  </pre>
</form>
</body>
</html>