<?php
ob_start();
?>

<?php
$host = "localhost";
$dbname = "portfolio";
$username = "root";
$password = "";

$conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
?>
<!DOCTYPE html>
<html>
<!--<body style="background-color:#708090;">-->
<body <div style="background-image: url('summer.jpg'); background-size:100%" />
<head>
    <title>Contact</title>
    <link rel="stylesheet" href="portfolio.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<div class="navbar">

    <a class="active" href="portfolio2.php"><i class="fa fa-fw fa-home"></i> Home</a>
    <a href="cv2.php"><i class="fa fa-fw fa-user"></i> CV</a>
    <a href="login2.php"><i class="fa fa-fw fa-user"></i> Login</a>
    <a href="projecten.php"><i class="fa fa-fw fa-share-alt-square"></i> Projectentoevoegen</a>
    <a href="projectoverzicht.php"><i class="fa fa-fw fa-share-alt-square"></i> Projectoverzicht</a>

</div>

<!--<nav>
    <ul>
        <li><a href="portfoliosite.php"
        <li><a href="contact.php"

        <div id= "button">-->

<div class="content">

<div id="contact"<form><big><b><h1>Projecten toevoegen:</b><big/></form></h1>
</div>
<!--<hr/>-->







<!--<form method="post">

<p>Voeg hier je projecten toe:</p>

<input type="text" placeholder="projecten" name="projecten">


<input type="submit" name="toevoegen" value="Submit"/>

</form>

-->
<br><br><br><br>
<form method="post">

    <p>Projectnaam:</p><input type="Text" name="projectnaam"/><br/>
    <!--
    textarea=vakje waar je text kan invoeren zoals je code
    -->
    <p>Projectcode:</p><textarea class="bigbox" name="projectcode"></textarea><br/>
    <input type="submit" name="btnVerstuur" value="Submit"/>
</form>

<?php
$host = "localhost";
$dbname = "portfolio";
$username = "root";
$password = "";

$conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
if(isset($_POST['btnVerstuur'])) {
    $pnaam = $_POST['projectnaam'];
    $pcode = $_POST['projectcode'];

    /*
     met INSERT INTO voeg je projecten toe in database en SET staat voor waar je het wil neerzetten, addslashes is dat je code goed wordt uitgevoerd
     */
    $query = "INSERT INTO projecten SET projectnaam = '$pnaam', projectcode = '".addslashes($pcode)."'";
    $stm = $conn->prepare($query);
    if($stm->execute())
    {
        echo "Project zit in database!";
    }else echo "Project zit niet in database!";
}

?>

</body>
</div>
</html>






















