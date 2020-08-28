<?php

$conn = new PDO("mysql:host=localhost;dbname=portfolio","root","");

?>
    <html>


<body <div style="background-image: url('summer.jpg'); background-size:100%" />
<head>
    <title>Portfolio</title>
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

</div>


<!--<div class="container"><br>
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <button type="submit" name="btnlogin">Login</button>
    <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
</div>

<div class="container" style="background-color:#f1f1f1">
    <!--<button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
</div>-->

</div>
<div class="content">
<!--hiermee maak ik mijn inlogscherm-->
<form method="post">
    <div id ="login" </div>
    <input type="text" name="username" placeholder="Username" value="">
    <input type="password" name="password" placeholder="Password" value="">
    <input type="submit" name="login" value="Login">
</form>

<!--hiermee verbind ik de database met mijn inlogscherm-->
<?php
if(isset($_POST['login'])){

    $username = $_POST["username"];
    $password = $_POST['password'];

    if ($username != "" && $password != ""){

        //
        $sql_query = "select * from inlog where gebruikersnaam='".$username."' and wachtwoord='".$password."'";
        $stm = $conn->prepare($sql_query);
        $stm->execute();
        $login = $stm->fetch(PDO::FETCH_OBJ);
        //je voert uit op een object
        //als je op de login button klikt dan gaat hij iets doen omdat het niet gelijk is aan nul
        if($login != null){
            $_SESSION['username'] = $username;
            header('Location: projectwijzigen.php');
        }else{
            echo "Ongeldige gebruikersnaam en/of wachtwoord";
        }

    }

}
?>
</div>
</body>
</html>
