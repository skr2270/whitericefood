<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $address = htmlspecialchars($_POST['address']);
    $cart_items = $_SESSION['cart'];

    // Process the order (e.g., save to database, send email, etc.)

    // Clear the cart
    $_SESSION['cart'] = [];

    // Redirect to a confirmation page
    header("Location: confirmation.php");
    exit;
}
?>
