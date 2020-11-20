<!DOCTYPE html>
<html lang="en">
<html>
<head>
    <little>Comment From</little>
    <style>
    body{
    background-color:aquamarine;
    }
</style>
    </head>
<body>
<form action="welcome.php" method="post">
Name: <input type="text" name="name" /><br>
Age: <input type="text" name="age" /><br>
<input type="submit" />
</form>
</body>
</html>

Welcome <?php echo $_POST["Name"]; ?>.
You are <?php echo $_POST["Age"]; ?> years old!
