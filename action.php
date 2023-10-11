<!DOCTYPE html>
<html>
    <head>
        <title>Form response</title>
    </head>

    <body>
        <h1>Submitted Form Answers</h1>
        Welcome <?php echo htmlspecialchars($_POST["full_name"]) ?>, how are you today?
        You are <?= htmlspecialchars($_POST['age']) ?> years old 
        and your favorite transportation method is <?= htmlspecialchars($_POST['transport']) ?>.
    </body>

</html>
    