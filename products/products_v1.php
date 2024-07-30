<?php include '../config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include '../includes/header.php'; ?>
</head>
<body class="bg-gray-100">
    <?php include '../includes/nav.php'; ?>
    <main class="py-16">
        <section id="products" class="text-center bg-white py-16">
            <h2 class="text-3xl font-semibold mb-8">Our Products</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 max-w-6xl mx-auto px-4">
                <div class="bg-white p-6 border rounded-lg shadow-md">
                    <img src="<?php echo $base_url; ?>/assets/images/FRK.jpeg" alt="FRK" class="w-full h-48 object-cover rounded-lg mb-4">
                    <h3 class="text-xl font-bold mb-2">FRK (Fortified Rice Kernels)</h3>
                    <p class="mb-4">Each grain is specially extruded and enriched with Iron, Folic Acid, and Vitamin B12.</p>
                    <a href="#" class="px-6 py-2 bg-blue-600 text-white font-semibold rounded">Order Now</a>
                </div>
                <div class="bg-white p-6 border rounded-lg shadow-md">
                    <img src="<?php echo $base_url; ?>/assets/images/Rawa-Blend.jpeg" alt="NutriRawa" class="w-full h-48 object-cover rounded-lg mb-4">
                    <h3 class="text-xl font-bold mb-2">NutriRawa</h3>
                    <p class="mb-4">Our Rawa Blend combines the graininess of semolina with essential nutrients like Iron, Folic Acid, and B Vitamins.</p>
                    <a href="#" class="px-6 py-2 bg-blue-600 text-white font-semibold rounded">Order Now</a>
                </div>
                <div class="bg-white p-6 border rounded-lg shadow-md">
                    <img src="<?php echo $base_url; ?>/assets/images/NutriFlour.jpeg" alt="NutriFlour" class="w-full h-48 object-cover rounded-lg mb-4">
                    <h3 class="text-xl font-bold mb-2">NutriFlour</h3>
                    <p class="mb-4">Finely Milled Flour with essential nutrients like Iron, Folic Acid, and Vitamin B12.</p>
                    <a href="#" class="px-6 py-2 bg-blue-600 text-white font-semibold rounded">Order Now</a>
                </div>
            </div>
        </section>
    </main>
    <?php include '../includes/footer.php'; ?>
    <script src="<?php echo $base_url; ?>/assets/js/menu-toggle.js"></script>
</body>
</html>
