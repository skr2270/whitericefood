<?php
session_start();

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

// Add item to cart
if (isset($_POST['add_to_cart'])) {
    $product_id = $_POST['product_id'];
    $quantity = $_POST['quantity'];
    
    if (isset($_SESSION['cart'][$product_id])) {
        $_SESSION['cart'][$product_id] += $quantity;
    } else {
        $_SESSION['cart'][$product_id] = $quantity;
    }
    
    header("Location: cart.php");
    exit;
}

// Remove item from cart
if (isset($_GET['remove'])) {
    $product_id = $_GET['remove'];
    unset($_SESSION['cart'][$product_id]);
    header("Location: cart.php");
    exit;
}

// View cart
$cart_items = $_SESSION['cart'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include '../includes/header.php'; ?>
    <title>Shopping Cart</title>
</head>
<body class="bg-gray-100">
    <?php include '../includes/nav.php'; ?>
    <main class="py-16">
        <section class="container mx-auto px-4">
            <h1 class="text-4xl font-bold text-center mb-8">Shopping Cart</h1>
            <?php if (empty($cart_items)) : ?>
                <p class="text-center">Your cart is empty.</p>
            <?php else : ?>
                <table class="w-full border-collapse">
                    <thead>
                        <tr>
                            <th class="border px-4 py-2">Product</th>
                            <th class="border px-4 py-2">Quantity</th>
                            <th class="border px-4 py-2">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($cart_items as $product_id => $quantity) : ?>
                            <tr>
                                <td class="border px-4 py-2"><?php echo $product_id; ?></td>
                                <td class="border px-4 py-2"><?php echo $quantity; ?></td>
                                <td class="border px-4 py-2">
                                    <a href="cart.php?remove=<?php echo $product_id; ?>" class="text-red-600">Remove</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <div class="text-center mt-8">
                    <a href="checkout.php" class="px-6 py-3 bg-blue-600 text-white font-semibold rounded">Proceed to Checkout</a>
                </div>
            <?php endif; ?>
        </section>
    </main>
    <?php include '../includes/footer.php'; ?>
</body>
</html>
