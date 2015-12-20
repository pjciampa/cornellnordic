<!doctype html>
<head>
    <title>Race Schedule </title>
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
    <section id="schedule-header">
            <h1>Schedule</h1>
    </section>
    <section id="credit">
            <h6>Background image credit: <a href="">Justin Horst '17</a>.</h6>
    </section>
    <section id="practiceSchedule">
        <h2>Practice Schedule</h2>
        <p>We meet 5 days a week, Monday through Friday, at 5 PM in the parking lot of Schoellkopf Stadium.</p>
        <br><br>
        <h2>Race Schedule</h2>
        <table class="roster-table">
        <tr class="roster-firstrow"><th>Race</th><th>Location</th><th>Date</th></tr>
         <tr><td><a href = "vermont.php"> University of Vermont Invitational </a></td><td>Sleepy Hollow–Huntington, VT</td><td>January 23-24</td></tr>
         <tr><td><a href = "invitational.php"> Cornell Invitational</a></td><td>TBA</td><td>January 30-31</td></tr>
         <tr><td><a href = "clarkson.php"> Clarkson Invitational</a></td><td>Lake Placid, NY</td><td>February 6-7</td></tr>
         <tr><td><a href = "divisional.php"> Divisional Championships </a></td><td>Prospect Mountain, VT</td><td>February 13-14</td></tr>
         <tr><td><a href = "regional.php"> Regional Championships </a></td><td> Jericho, VT</td><td>February 20-21</td></tr>
         <tr><td><a href = "nationals.php"> USCSA Nationals </a></td><td>Lake Placid, NY</td><td>March 8th-12th</td></tr>
        </table>

    </section>
        <?php include("footer.php") ?>
</body>
</html>