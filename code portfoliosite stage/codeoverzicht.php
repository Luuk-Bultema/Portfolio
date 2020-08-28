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
<div id="contact"<form><big><b><h1>Project code:</b><big/></form></h1>
<pre style="margin: 0px;"><code class="html" style="background: rgba(130,63,215,0.3); font-weight: bold; padding-top: 0px;"><?php
        $host = "localhost";
        $dbname = "portfolio";
        $user = "root";
        $password = "";

        try {
            $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // echo "Connected successfully";
            $pid=$_GET['pid'];
            $stmt = $conn->prepare("SELECT projectcode FROM projecten WHERE pid='$pid'");
            $stmt->execute();

            // set the resulting array to associative
            $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $result = $stmt->fetchAll(PDO::FETCH_OBJ);
            foreach($result as $Code)
            {
                echo highlight_string("$Code->projectcode");
            }
        }
        catch(PDOException $e) {
            echo "Foutmelding: " . $e->getMessage();
        }
        $conn = null;
        ?>
</code></pre>
</body>
</div>
</html>