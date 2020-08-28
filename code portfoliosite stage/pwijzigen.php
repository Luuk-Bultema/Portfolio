<!DOCTYPE html>
<html>
<!--<body style="background-color:#708090;">-->
<body <div style="background-image: url('summer.jpg'); background-size:100%" />
<head>
    <title>Contact</title>
    <link rel='stylesheet' href='portfolio.css'/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

<div class="navbar">


    <a class="active" href="portfolio2.php"><i class="fa fa-fw fa-home"></i> Home</a>
    <a href="cv2.php"><i class="fa fa-fw fa-user"></i> CV</a>
    <a href="login2.php"><i class="fa fa-fw fa-user"></i> Login</a>
    <a href="projecten.php"><i class="fa fa-fw fa-share-alt-square"></i> Projectentoevoegen</a>
    <a href="projectoverzicht.php"><i class="fa fa-fw fa-share-alt-square"></i> Projectoverzicht</a>
    <a href="projectwijzigen.php"><i class="fa fa-fw fa-share-alt-square"></i> Projectwijzigen</a>


</div>



<!--<nav>
    <ul>
        <li><a href="portfoliosite.php"
    <li><a href="contact.php"

    <div id= "button">-->


<div id="contact"<form><big><b><h1>Project wijzigen:</b><big/></form></h1>
</div>



<div class="content">
    <br><br><br>
    <form method="post">

        <p>Projectnaam:</p><input type="Text" name="projectnaam"/><br/>
        <p>Projectcode:</p><textarea class="bigbox" name="projectcode"></textarea><br/>
        <input type="submit" name="btnVerstuur" value="Submit"/>
    </form>



    <?php

    $host = "localhost";
    $dbname = "portfolio";
    $user = "root";
    $password = "";


    $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);

    if (isset($_GET['pid'])) {
        $pid = $_GET['pid'];
        $query = "SELECT * FROM planning where nummer = $pid";
        $stm = $conn->prepare($query);
        $stm->execute();
        $rij = $stm->fetch(PDO::FETCH_OBJ);


        if (isset($_POST["btnVerstuur"])) {

            $Variabele1 = $_POST["projectnaam"];
            $Variabele2 = $_POST["projectcode"];


            $query = "UPDATE projecten SET projectnaam = '$Variabele1', projectcode = '$Variabele2' WHERE pid = $pid";
            $stm = $conn->prepare($query);
            if ($stm->execute()) {
                echo "Project is geupdated!";
            } else echo "ERROR!";
        }
    }
    ?>


    </body>
</div>

</html>