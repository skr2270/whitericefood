<?php 
$rootPath = dirname(__DIR__);
include $rootPath . '/config.php'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include $rootPath . '/includes/header.php'; ?>
</head>
<body class="bg-gray-100">
    <?php include $rootPath . '/includes/nav.php'; ?>
    <main class="py-16">
        <section id="products" class="text-center bg-white py-16">
            <h2 class="text-3xl font-semibold mb-8">Our Products</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 max-w-6xl mx-auto px-4">
                <!-- Product 1 -->
                <div class="bg-white p-6 border rounded-lg shadow-md">
                    <img src="<?php echo $base_url; ?>/assets/images/FRK.jpeg" alt="FRK" class="w-full h-48 object-cover rounded-lg mb-4">
                    <h3 class="text-xl font-bold mb-2">FRK (Fortified Rice Kernels)</h3>
                    <p class="mb-4">Each grain is specially extruded and enriched with Iron, Folic Acid, and Vitamin B12.</p>
                    <form action="<?php echo $base_url; ?>/products/cart.php" method="post">
                        <input type="hidden" name="product_id" value="FRK">
                        <input type="number" name="quantity" value="1" min="1" class="w-full mb-4 p-2 border rounded">
                        <button type="submit" name="add_to_cart" class="px-6 py-2 bg-blue-600 text-white font-semibold rounded">Add to Cart</button>
                    </form>
                    <a href="#" class="mt-4 inline-block px-6 py-2 bg-green-600 text-white font-semibold rounded">Order Now</a>
                </div>
                <!-- Repeat similar blocks for other products -->
            </div>
        </section>
    </main>
    <?php include $rootPath . '/includes/footer.php'; ?>
    <script src="<?php echo $base_url; ?>/assets/js/menu-toggle.js"></script>
</body>
</html>
