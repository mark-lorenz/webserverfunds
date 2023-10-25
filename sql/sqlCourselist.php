<!DOCTYPE html>
<html>
    <head>
        <title>SQL test page</title>
        <?php
            $server = "localhost";
            $username = "mark";
            $password = "voidnul0";
            $database = "firstone";
            $conn = mysqli_connect($server, $username, $password, $database);

            // check for successful connection
            if (!$conn) {
                die("Connection failed: {mysqli_connect_error()}");
            }
            $sql = "select * from course_list;";
            $result = mysqli_query($conn, $sql);
        ?>
    </head>
    <body>
        <form action="sqlResponse.php" method="get">
            <label for="courses"><h3>Select a course:</h3></label>
            <select id="courses" name="courses">
                <?php
                    foreach($result as $row) {
                        echo "<option value='{$row['course_name']}'> {$row['course_name']}</option>\n";
                    }
                    // close the connection
                    mysqli_close($conn);
                ?>
            </select>
            <br/><br/>
            <input type="submit" value="submit"/>
        </form>

        <br/>
        <a href="../index.php" target="_self">Homepage</a>
        <a href="newCourse.php" target="_self">Add a new course</a>
    </body>
</html>