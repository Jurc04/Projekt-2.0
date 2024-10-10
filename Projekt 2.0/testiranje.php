<?php
$geslo = 'vaja';
$hash = '$2y$10$j.zCNewtrcEj9';

if(password_verify($geslo, $hash)) {
    echo "Geslo je pravilno!";
} else {
    echo "Napačno geslo!";
}
?>