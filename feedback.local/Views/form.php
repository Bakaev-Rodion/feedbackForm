<?php
session_start();
if(!isset($_SESSION['userName']))
    header("Location: login.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php echo "Welcome ".$_SESSION['userName'];
if (isset($_SESSION['failedToAdd'])){ echo "<br>You have already sent request today";}
?>
    <form action="form_action.php" enctype="multipart/form-data" method="post">
        <pre>
        <label for="topic">Input topic</label>
        <input name="topic" type="text" required>
        <label for="message">Input text</label>
        <textarea name="message" required></textarea>
        <label for="file">Input file</label>
        <input name="userFile" type="file" required>

        <input type="submit">
        </pre>
    </form>
<a href="logout.php">Log out</a>
</body>
</html>
