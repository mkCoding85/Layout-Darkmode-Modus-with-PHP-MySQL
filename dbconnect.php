<?php
// Verbindung zum Datenbank Server herstellen //
date_default_timezone_set('Europe/Berlin');
/* [SERVER NAME LOCALHOST] */
if($_SERVER['SERVER_NAME'] == 'localhost') {
    // Offline
    $conn = new mysqli('localhost', 'root', '', 'test');
} else {
    // 1&1 IONOS = Online
    $conn = new mysqli('', '', '', '');
}
/* [CHARSET-UTF-8] */
$conn->set_charset('utf-8');
/* [VERBINUNGSFEHLER] */
if($conn->connect_errno) {
    die('Sorry - gerade gibt es ein Verbindungsproblem!');
}    
// Close //
?>