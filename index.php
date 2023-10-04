<!DOCTYPE html>
<html>
    <head>
        <title>index.html</title>
    </head>

    <body>
        <p><?= var_dump ($_SERVER) ?></p>
        <div>
        <h1>Website in construction</h1>
            <p><i>One of these days this will be a proper description</i></p>
        </div>
        
        <h3>LIST OF CLICKABLE LINKS</h3>
            <ul>
                <li><a href="https://www.google.ca" target="_blank">FIRST LINK</a></li>
                <li><u><font color="#4287f5">NOT A REAL LINK</p></font></u></li>
                <li><a href="form.html" target="_self">Forms page</a>
                <li><a href="quiet.html" target="_blank">Empty page</a></li>
            </ul>
        <br>
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

        <div id="image">
            <img src="plink.gif">
        </div>

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
        <img id="pet" src="plonk.gif"><br>
        <button onclick="document.getElementById('pet').src='dog-arrives.gif'">I want a dog</button>
        <br><br><br>

        <!-- task 2.1.6 -->
        <button onclick="changeText(this)">The Changing text button</button>
        
        <script>   
            function changeText(id) {
                id.innerHTML = "It has changed";
            }
        </script>
        <br><br><br>


        <!-- task 2.2 AJAX -->
        <h2>AJAX Section</h2>
        <button type="button" onclick="loadDoc()">Request data</button>

        <p id="demo"></p>

        <script>
            function loadDoc() {
              var xhttp = new XMLHttpRequest();
              xhttp.open("GET", "someText.txt", true);
              xhttp.send();
              document.getElementById("demo").innerHTML = xhttp.responseText;
            }
        </script>

    </body>
</html>