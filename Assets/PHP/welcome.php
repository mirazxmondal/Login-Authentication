<?php
require 'connect1.php';
require 'session-check.php';

?>
<html>
    <head>
        <style>
            body{
                background-color: #00DBDE;
                background-image: linear-gradient(90deg, #00DBDE 0%, #FC00FF 100%);
                text-align: center;
            }
        </style>
    </head>
    <body>
        <h1>Welcome</h1>
        <h1 style="display:inline;"><?php echo($_SESSION['FIEM']['fname']);?></h1> &nbsp;
        <h1 style="display:inline;"><?php echo($_SESSION['FIEM']['lname']);?></h1> <br>
        <img src="<?php echo($_SESSION['FIEM']['furl']);?>" height="200px" width="200px"> <br>
        <h3><a href="./logout.php">Log out</a></h3> 
    </body>
</html>
