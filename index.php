<!DOCTYPE html>
<html>
    <head>
        <title>Mark's index</title> 
        
        <style>
            body {
                background-color: black;
                background-image: url('/images/background-img4.jpg');
                background-repeat: no-repeat;
                background-size: cover;
            }

            div {
                width: 600px;
                margin: 10px;

                border: 2px black;
                background: linear-gradient(to top, #66B2FF, #CCE5FF);
                padding-top: 1px;
                padding-bottom: 1px;
                padding-right: 10px;
                padding-left: 10px;
            }
        </style>
    </head>

    <body>
        <div>
            <p><h1><b> Welcome, you are using </b></h1></p>
            <?php echo $_SERVER['HTTP_USER_AGENT']; ?> 
            <p id="nerdge">
                <img src="/images/Nerdge.png" width="50">
            </p>
        </div>

        <div>
            <h1>Website in construction</h1>
                <p><i>One of these days this will be a proper description</i></p>
        
            <h3>LIST OF CLICKABLE LINKS</h3>
                <ul>
                    <li><a href="https://www.google.ca" target="_blank">FIRST LINK</a></li>
                    <li><u><font color="#4287f5">NOT A REAL LINK</p></font></u></li>
                    <li><a href="form.php" target="_self">Forms page</a>
                    <li><a href="/sql/sqlCourselist.php" target="_self">SQL test page</a></li>
                </ul>
            <br>
        </div>

        <div>
        <!-- JavaScript Section -->    
            <p id="jsSection"></p>

            <script>
                document.getElementById("jsSection").innerHTML = "JavaScript Section";
            </script>

            <script>
                function popUp() {
                    window.alert("How's it going");
                }
            </script>


            <!-- task 2.1.2 -->
            <button type="button" onclick="popUp()">Click on this button</button>
            <br><br><br>
            
            <!-- task 2.1.3-->
            <script>
                function changeSection(){
                    document.getElementById("jsSection").innerHTML = Date();
                }
            </script>
                <button onclick="changeSection()">Change section title</button>
            <br><br><br>

            <!-- task 2.1.4 -->
            <button onclick="showCat()">Hide this cat</button>

            <p id="image">
                <img src="/images/plink.gif">
            </p>

            <script>
                function showCat() {
                    let x = document.getElementById("image");
                    if (x.style.display === "none") {
                        x.style.display = "block";
                    } else {
                        x.style.display = "none";
                    }
                }
            </script>
            <br>


            <!-- task 2.1.5 -->
            <img id="pet" src="/images/plonk.gif"><br>
            <button onclick="document.getElementById('pet').src='/images/dog-arrives.gif'">I want a dog</button>
            <br><br><br>

            <!-- task 2.1.6 -->
            <button onclick="changeText(this)">The Changing text button</button>
            
            <script>   
                function changeText(id) {
                    id.innerHTML = "It has changed";
                }
            </script>
            <br><br><br>

        </div>

        <div>
        <!-- task 2.2 AJAX section-->
            <h2>AJAX Section</h2>
            <button type="button" onclick="loadDoc()">Request data</button>

            <p id="demo"></p>

            <script>
                function loadDoc() {
                const xhttp = new XMLHttpRequest();
                xhttp.open("GET", "someText.txt", true);
                xhttp.send();
                document.getElementById("demo").innerHTML = xhttp.responseText;
                
                
                console.warn("ajax section button worked");
                }
            </script>
        </div>

    </body>
</html>
