<!doctype html>
<?php
    //used from w3 just like the lecture notes
    $nameErr = $emailErr = "";
    $name = $email = " ";
    $formfilled = 0;
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["name"])) {
            $nameErr = "Name is required";
        } else {
            $name = test_input($_POST["name"]);
            $formfilled = $formfilled + 1;
            if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
                $nameErr = "Only letters and white space allowed"; 
            }
        }

        if (empty($_POST["email"])) {
            $emailErr = "Email is required";
        } else {
            $email = test_input($_POST["email"]);
            $formfilled = $formfilled + 1;
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Invalid email format";
            }
        }
        if ($formfilled == 2){
            mail("pjc255@cornell.edu","Join Nordic List Serve",$email);
        }
    }
    function test_input($data) {
       $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);
       return $data;
    } 
    ?>

<head>
    <title>Contact</title>
            <!--stylesheet-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../css/index.css">
    <link rel="stylesheet" type="text/css" href="../css/dropdown.css">
    <!--favicon-->
    <link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon" />    
    <!--scripts
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <script src="../scripts/scripts.js"></script> -->
</head>
<body>
<?php include("navbar.php") ?>
    <section id="header">
            <h1>Cornell Nordic</h1>
    </section>
    <section id="credit">
            <h6>Background image credit: <a href="">Justin Horst '17</a>.</h6>
    </section>
    <div id = "container">
        <p>
            <br>
            <b>President: </b><a href="mailto:klg95@cornell.edu" class="reg">Kendall Goodyear</a><br>
            <b>Vice President: </b><a href="mailto:hat34@cornell.edu" class="reg">Helen Tosteson</a><br>
            <b>Treasurer: </b><a href="mailto:jah557@cornell.edu" class="reg">Justin Horst</a><br>
            <b>Alumni Chair: </b><a href="mailto:iss7@cornell.edu" class="reg">Isabel Sharp</a><br><br>
            
            Feel free to contact these people with any questions that you might have about the team, racing, or skiing in general!<br><br>
     
            If you’re new to the team, make sure you’re on the ski team list-serve, as that’s how most announcements will be made. Please provide your name and email:<br><br>
        </p>
    </div>
<?php
if ($formfilled == 2) {
    echo
    '<div id = "centercontainer">
             Thanks! You will be added to the list serve shortly!
            <br>
            <br>
            <br>
    </div>';
} else{echo '<div id = "centercontainer">
                <form method="post" action='.htmlspecialchars($_SERVER["PHP_SELF"]).'>
                    Name: <input name="name" ><span class="error">'.$nameErr.'</span> <br>
                    Email: <input name="email" ><span class="error">'.$emailErr.'</span><br>
                    <input type="submit" name="submit" value="Submit">
                </form>
            <br>
            <br>
            <br>
    </div>';

}
?>
        <?php include("footer.php") ?>
</body>
</html>