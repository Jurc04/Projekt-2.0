<!DOCTYPE html>
<html>
<head>
<title>Registracija</title>
<link rel = "stylesheet" href = "css/registracija.css">
</head>
<body>
    <div><h1>REGISTRIRAJ SE</h1>
    <form method="post">
       Ime: <input type = "text" name = "ime" required><br>
       Priimek: <input type = "text" name = "priimek" required> <br>
       Geslo: <input type = "password" name = "geslo" required> <br>
        <button type = "submit" name = "akcija" value = "potrdi">Potrdi</button>
    </form></div>
    <?php
    if(isset($_POST['akcija']))
    {
    $conn = mysqli_connect('localhost', 'root', '', 'projekt 2.0');
    if($_POST['akcija'] === 'potrdi')
    {
    if(!$conn)
    {
        die("Nekaj je šlo narobe" . mysqli_connect_error());
    }
}
$q = "INSERT INTO uporabniki (ime, priimek, geslo) values (?, ?, ?)";
$stmt = mysqli_prepare($conn, $q);

$ime = $_POST['ime'];
$priimek = $_POST['priimek'];
$geslo = password_hash($_POST['geslo'], PASSWORD_DEFAULT);
mysqli_stmt_bind_param($stmt, "sss", $ime, $priimek, $geslo);
mysqli_stmt_execute($stmt);

if(mysqli_stmt_affected_rows($stmt) > 0)
{
    header('location: prijava.php');
}
else
{
    echo "NAPAKA PRI REGISTRACIJI!!!";
}


}
    ?>
</body>