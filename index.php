<?php
session_start();

include("connection.php");
include("function.php");

// Check if user is logged in
if(isset($_SESSION['username'])) {
    $user_data = check_login($conn);

}/*else {
    // Redirect to login page if user is not logged in
    header("Location: login.php");
    exit; // Terminate script execution after redirect
}*/
?>

