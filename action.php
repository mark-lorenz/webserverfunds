<!DOCTYPE html>
<html>
    <head>
        <title>Form response</title>
    </head>

    <body>
        Your name is: <?php echo $_GET["full_name"]; ?> <br>
        <p>You are: <?= htmlspecialchars($_GET['age']) . " years old"?></p>

        Welcome <?php echo $_GET["full_name"]; ?>.

        <p><?= var_dump($_GET) ?></p>
        <p><?= var_dump($_POST) ?></p>
    </body>

</html>
    