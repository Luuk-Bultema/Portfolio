
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
    <a href="projectwijzigen.php"><i class="fa fa-fw fa-share-alt-square"></i> Projectwijzigen</a>


</div>


<!--<nav>
    <ul>
        <li><a href="portfoliosite.php"
        <li><a href="contact.php"

        <div id= "button">-->


<div id="contact"<form><big><b><h1>Wijzig hier de projecten:</b><big/></form></h1>
<?php
echo "<table style='border: solid 1px black;'>";
echo "<tr><th>Project</th></tr>";

$host = "localhost";
$dbname = "portfolio";
$user = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connected successfully";
    $stmt = $conn->prepare("SELECT pid, projectnaam, projectcode FROM projecten ORDER BY projectnaam");
    $stmt->execute();

    $res = $stmt->fetchAll(PDO::FETCH_OBJ);
    foreach($res as $rij)
    {

        echo "<tr><td><a style='color:white; text-decoration: underline;' target='_blank' href='pwijzigen.php?pid=".$rij->pid."'>$rij->projectnaam</a></td></tr>";

    }
}
catch(PDOException $e) {
    echo "Foutmelding: " . $e->getMessage();
}
$conn = null;
echo "</table>";
?>

</body>
</html>