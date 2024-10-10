<?php
$conn = mysqli_connect('localhost', 'root', '', 'projekt 2.0');
if(!$conn)
{
    die('Povezava je napačna');
}
$sql = "SELECT ime, pot, slika FROM glasba";
$rezultat = mysqli_query($conn, $sql);
?>



<!DOCTYPE html>
<html>
<head>
<title>Glavna stran</title>
<link rel = "stylesheet" href = "css/GlavnaStran.css">
</head>
<body>
<h1> VSE PESMI </h1>
<?php
if(mysqli_num_rows($rezultat) > 0)
{
    while($vrstica = mysqli_fetch_assoc($rezultat))
    {
        echo '<div><p>'. $vrstica['ime'] . '</p>';
        echo '<img src="' . $vrstica['slika'] . '" alt="Slika pesmi">';
       echo '<audio controls> <source src = " ' . htmlspecialchars($vrstica['pot']) . '" type = "audio/mpeg" ></audio></div><br>';
    }
    mysqli_close($conn);
}
?>