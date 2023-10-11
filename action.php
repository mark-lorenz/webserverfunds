<!DOCTYPE html>
<html>
    <head>
        <title>Form response</title>
    </head>

    <body>
        <p>Your name is: <?= htmlspecialchars($_POST['full_name']) . ". Hi " . htmlspecialchars($_POST['full_name'])?></p>
        <p>You are: <?= htmlspecialchars($_POST['age']) . " years old"?></p>

        <?php
            echo "Your name is " . $_GET['full_name'] . 
            ". You are" . $_GET['age'] . " years old."
        ?>
        
    </body>

</html>
    