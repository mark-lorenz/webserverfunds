<!DOCTYPE html>
<html>
    <head>
        <title>SQL test response</title>
        <?php 
            // retrieve submittied info
            $course_number = htmlspecialchars($_GET["courses"]);
            $server = "localhost";
            $username = "mark";
            $password = "voidnul0";
            $database = "firstone";
            $conn = mysqli_connect($server, $username, $password, $database);

            // check for successful connection
            if (!$conn) {
                die("Connection failed: {mysqli_connect_error()}");
            }
            $sql = "select course_name, num_students from courses where course_number='{$course_number}';";
            $result = mysqli_query($conn, $sql);
        ?>
    </head>

    <body>
    <!-- Show info -->
        You selected course <?= $course_number ?>.
        <?php
            foreach($result as $row)
            {
                echo "{$row['course_name']} has {$row['num_students']} students.";
            }
            // close connection
            mysqli_close($conn);
        ?>
        <br/><br/>
        <a href="sqlCourselist.php" target="_self">Go back to course list</a>
        <a href="newCourse.php" target="_self">Add new course</a>
        
    </body>

</html>