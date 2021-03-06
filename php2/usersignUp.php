<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>FD Tech Lab</title>
    <link rel="shortcut icon" href="../images/favicon-1024x1024.png">
    <script src="../javaS/jS2.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../css2/signuo-main.css">
</head>
<body>
<header>
    <h1>| FD Tech Lab |</h1>
</header>

<section>
    <br>
    <br>
    <p class="greeting">Welcome to the Crew!</p>
    <br>
    <div class="contain">
        <form id="unDo" name="enForm" method="post">
            <div>
                <label>First Name</label>
                <br>
                <input id= "fnInput" type="text" name="fName" placeholder="type here...">
            </div>

            <div>
                <label>Last Name</label>
                <br>
                <input id="lnInput" type="text" name="lName" placeholder="type here...">
            </div>

            <div>
                <label>Email</label>
                <br>
                <input id="emInput" type="text" name="eMail" placeholder="type here...">
            </div>

            <div>
                <label>Choose password<br>(minimum of 8 characters)</label>
                <br>
                <input id="psInput" type="password" name="psWord" placeholder="type here...">
                <input type="checkbox" onclick="revealPass()">
            </div>

            <div>
                <label>College</label>
                <br>
                <input type="text" name="colLege" placeholder="type here...">
            </div>

            <div>
                <label>Major</label>
                <br>
                <input type="text" name="maJor" placeholder="type here...">
            </div>

            <br>
            <button type="submit" name="submit" onclick="checkSignInfo()">Sign-up</button>
            <button type="reset" onclick="clearForm()">Cancel</button>
            <br>
            <br>
            <a class="button" href="../php2/userSignOn.php">Back to login.</a>
        </form>
    </div>
    <br>
    <br>
    <br>
</section>

<footer>
    <p>&copy; 2021, Sherwin Dewan & Parker Francis. | Terms of Use | Privacy Statement</p>
</footer>

</body>
</html>

<?php

    $firstName = "First Name: ".$_POST['fName']."\n";
    $lastName = "Last Name: ".$_POST['lName']."\n";
    $email = "Email: ".$_POST['eMail']."\n";
    $password = "Password: ".$_POST['psWord']."\n";
    $college = "College: ".$_POST['colLege']."\n";
    $major = "Major: ".$_POST['maJor']."\n";

if(isset($_POST['submit'])){
    $fp = fopen('../userData/storage.txt', 'a');
    if (empty($_POST['fName']) || empty($_POST['lName']) || empty($_POST['eMail']) || empty($_POST['psWord']) || empty($_POST['colLege']) || empty($_POST['maJor'])){
        return false;
    }elseif (preg_match('~[0-9]+~', $_POST['fName']) || preg_match('~[0-9]+~', $_POST['lName'])){
        return false;
    }elseif (!filter_var($_POST['eMail'], FILTER_VALIDATE_EMAIL)){
        return false;
    }elseif (!preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8}$/', $_POST['psWord'])){
        return false;
    }else{
        fwrite($fp, $firstName);
        fwrite($fp, $lastName);
        fwrite($fp, $email);
        fwrite($fp, $password);
        fwrite($fp, $college);
        fwrite($fp, $major);
    }
    fclose($fp);
}
?>






