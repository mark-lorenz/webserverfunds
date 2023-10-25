<!DOCTYPE html>
<html>
    <title>Submit new course</title>
    <head>
        <?php 
            // connecting
            $server = "localhost";
            $username = "mark";
            $password = "voidnul0";
            $database = "firstone";
            $conn = mysqli_connect($server, $username, $password, $database);

            if (!$conn) {
                die("Connection failed: {mysqli_connect_error()}");
            }
        ?>
    </head>
    <body>
        <form action="newCourse.php" method="post">
            <h2>Add new course</h2>
                <p>Course ID: <input type="text" name="course_number" id="course_number" /></p>
                <p>Course name: <input type="text" name="course_name" id="course_name" /></p>
                <p>Number of students: <input type="text" name="num_students" id="num_students" /></p>
                <p><input type="submit" /></p>
        </form>
        <br/>
        <?php
            // define values needed for the $sql php command
            $course_number = $course_name = $num_students = "";
            
            // take the inputs from the forms section to send to the $sql command
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $course_number = htmlspecialchars($_POST["course_number"]);
                $course_name = htmlspecialchars($_POST["course_name"]);
                $num_students = htmlspecialchars($_POST["num_students"]);

                // will take the info from above to send to MariaDB
                $sql = "INSERT INTO course_list (course_number, course_name, num_students)
                        VALUES ('$course_number', '$course_name', '$num_students');";

                // execute query
                if (mysqli_query($conn, $sql)) {
                    // shows user what they added
                    $sql = "select course_name, num_students from course_list where course_number='{$course_number}';";
                    $result = mysqli_query($conn, $sql);

                    echo "You have added " . $course_number . "<br/>";
                    foreach($result as $row) {
                        echo "{$row['course_name']} has {$row['num_students']} students";
                    }
                } else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                }
                
                
            }
            
            mysqli_close($conn);
        ?>
        <br/>
        <a href="sqlCourselist.php" target="_self">Go back to course list</a>
    </body>
</html>