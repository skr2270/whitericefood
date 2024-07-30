<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
    $rootPath = dirname(__DIR__);
    include $rootPath . '/includes/header.php'; 
    ?>
    <title>Order Confirmation</title>
</head>
<body class="bg-gray-100">
    <?php include $rootPath . '/includes/nav.php'; ?>
    <main class="py-16">
        <section class="container mx-auto px-4">
            <h1 class="text-4xl font-bold text-center mb-8">Order Confirmation</h1>
            <p class="text-center">Thank you for your order! Your order has been placed successfully.</p>
        </section>
    </main>
    <?php include $rootPath . '/includes/footer.php'; ?>
</body>
</html>
