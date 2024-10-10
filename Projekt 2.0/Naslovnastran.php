<!DOCTYPE html>
<html>
<head>
<title>Uvodna stran</title>
<link rel = "stylesheet" href = "css/Naslovnastran.css">
</head>
<body>
<div><h1>Pozdravljeni na uvodni strani</h1>
<p>za nadaljni dostop se morate registrirati ali prijaviti</p>
<p>Registrirali se boste s klikom na gumb registriraj</p>
<p>za prijavo bo zadoščal že gumb prijava</p>

<form method = "get">
    <button type = "submit" name = "akcija" value="registracija">registracija</button>
    <button type = "submit" name= "akcija" value="prijava">prijava</button>
</form>
</div>
<?php
if(isset($_GET['akcija']))
{
    if($_GET['akcija'] === 'registracija')
    {
        header('location: registracija.php');
        exit();
    }
    else if ($_GET['akcija'] === 'prijava')
    {
        header('location: prijava.php');
        exit();
    }
}
?>
</body>