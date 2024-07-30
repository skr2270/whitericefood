<?php
session_start();
$rootPath = dirname(__DIR__);
$cart_items = $_SESSION['cart'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include $rootPath . '/includes/header.php'; ?>
    <title>Checkout</title>
</head>
<body class="bg-gray-100">
    <?php include $rootPath . '/includes/nav.php'; ?>
    <main class="py-16">
        <section class="container mx-auto px-4">
            <h1 class="text-4xl font-bold text-center mb-8">Checkout</h1>
            <?php if (empty($cart_items)) : ?>
                <p class="text-center">Your cart is empty.</p>
            <?php else : ?>
                <form action="process_order.php" method="post" class="max-w-xl mx-auto bg-white p-6 rounded-lg shadow-md">
                    <!-- Collect customer details and order summary -->
                    <div class="mb-4">
                        <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                        <input type="text" id="name" name="name" class="mt-1 p-2 border border-gray-300 rounded w-full" required>
                    </div>
                    <div class="mb-4">
                        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                        <input type="email" id="email" name="email" class="mt-1 p-2 border border-gray-300 rounded w-full" required>
                    </div>
                    <div class="mb-4">
                        <label for="address" class="block text-sm font-medium text-gray-700">Address</label>
                        <textarea id="address" name="address" rows="4" class="mt-1 p-2 border border-gray-300 rounded w-full" required></textarea>
                    </div>
                    <h2 class="text-xl font-semibold mb-4">Order Summary</h2>
                    <ul class="mb-4">
                        <?php foreach ($cart_items as $product_id => $quantity) : ?>
                            <li><?php echo $product_id; ?> x <?php echo $quantity; ?></li>
                        <?php endforeach; ?>
                    </ul>
                    <button type="submit" class="px-6 py-3 bg-blue-600 text-white font-semibold rounded">Place Order</button>
                </form>
            <?php endif; ?>
        </section>
    </main>
    <?php include $rootPath . '/includes/footer.php'; ?>
</body>
</html>
