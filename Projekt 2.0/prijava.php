<!DOCTYPE html>
<html>
<head>
<title>Prijava</title>
<link rel = 'stylesheet' href = "css/prijava.css">
</head>
<body>
    <div>
<h1>Prijavite se</h1>
<form method="POST">
    Ime: <input type = "text" name = "ime" required><br>
    Priimek: <input type = "text" name = "priimek" required><br>
    Geslo: <input type = "password" name = "geslo" required><br>
    <button type = "submit" name = "akcija" value = "Prijava" required>Prijava</button>
</form>
    </div>

<?php
session_start();

if(isset($_POST['akcija']))
{
    $conn = mysqli_connect('localhost', 'root', '', 'projekt 2.0');
    if(!$conn)
    {
        die("napaka povezave");
    }
    $ime = $_POST['ime'];
    $priimek = $_POST['priimek'];
    $geslo = $_POST['geslo'];
    $q = "SELECT id, geslo FROM uporabniki WHERE ime = ? AND priimek = ?";

    $stmt = mysqli_prepare($conn, $q);
    if($stmt)
    {
    mysqli_stmt_bind_param($stmt, "ss", $ime, $priimek);

    mysqli_stmt_execute($stmt);

    mysqli_stmt_bind_result($stmt, $uporabnik, $hash);
    mysqli_stmt_fetch($stmt);
    if($uporabnik) {
        if(password_verify($geslo, $hash))
        {
            $_SESSION['user_id'] = $uporabnik;
            header('location: GlavnaStran.php');
            exit();
        }
        else {
            echo "napačno geslo";
        }
    }
    mysqli_stmt_close($stmt);

    mysqli_close($conn);
    }
}
?>

</body>
</html>