<?php 
// DB Connection //
include('dbconnect.php'); 

// Decale variables //
$checkbox1 = isset($_POST['checkbox1']) ? $_POST['checkbox1'] : null;

// SQL Statement //
$sql = "UPDATE myformcontrols SET checkbox1 = '$checkbox1'"; 
if(mysqli_query($conn, $sql) > 0) {
    // echo "Der Datensatz wurde gespeichert!";
    header("Location: index.php");
} else {
    // echo "Der Datensatz wurde nicht gespeichert oder verändert!";
    header("Location: index.php");
}
// Close //
?>
