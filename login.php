<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title><?php echo "ToxinoTV" ?> </title>
</head>
<body>
    <h1>
        <?php echo "ToxinoTV"; ?>
    </h1>
    <h2 style= "text-align:center"> Login Page </h2>
    <form action="/vinay/database.php" target = "_blank" method = "post">
        <label for="uname">Username :</label>
        <input type="text" placeholder ="Enter username" name = "uname" id= "uname"><br>
        <label for="pass">Password :</label>
        <input type="text" placeholder="Enter password" name = "pass" id ="pass"><br>
        <input id ="submit" type="submit">
    </form>
</body>
</html>