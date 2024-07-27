<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'includes/header.php'; ?>
</head>
<body class="bg-gray-100">
    <?php include 'includes/nav.php'; ?>
    <header class="relative bg-cover bg-center py-32 text-center text-white mx-4 rounded-lg" style="background-image: url('assets/images/hero.jpg');">
        <div class="absolute inset-0 bg-black opacity-50 rounded-lg"></div>
        <div class="relative z-10 max-w-3xl mx-auto">
            <h1 class="text-5xl font-bold">White Rice Food</h1>
            <p class="mt-4 text-xl">Pioneering Nutritional Innovation</p>
            <a href="#" class="mt-8 inline-block px-6 py-3 bg-blue-600 text-white font-semibold rounded">Know More</a>
        </div>
    </header>
    <main class="py-16">
        <section id="about" class="py-16 bg-white flex flex-col items-center">
            <h2 class="text-3xl font-semibold mb-8 text-center">About Us</h2>
            <div class="flex flex-col md:flex-row justify-center items-center max-w-5xl mx-auto px-4">
                <div class="md:w-1/2 mb-8 md:mb-0 text-center md:text-left">
                    <p class="mb-4">Welcome to White Rice Food, a pioneering manufacturer at the forefront of nutritional innovation.</p>
                    <p class="mb-4">Our mission is to make nutritional foods accessible and affordable for all.</p>
                    <a href="about.php" class="inline-block px-6 py-3 bg-blue-600 text-white font-semibold rounded">Know More</a>
                </div>
                <div class="md:w-1/2">
                    <img src="assets/images/about.jpg" alt="About Us" class="w-full h-64 object-cover rounded-lg shadow-md">
                </div>
            </div>
        </section>
        <section id="products" class="text-center bg-white py-16">
            <h2 class="text-3xl font-semibold mb-8">Products</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 max-w-6xl mx-auto px-4">
                <div class="bg-white p-6 border rounded-lg shadow-md">
                    <img src="assets/images/FRK.jpeg" alt="FRK" class="w-full h-48 object-cover rounded-lg mb-4">
                    <h3 class="text-xl font-bold mb-2">FRK (Fortified Rice Kernels)</h3>
                    <p class="mb-4">Each grain is specially extruded and enriched with Iron, Folic Acid, and Vitamin B12.</p>
                    <a href="#" class="px-6 py-2 bg-blue-600 text-white font-semibold rounded">Order Now</a>
                </div>
                <div class="bg-white p-6 border rounded-lg shadow-md">
                    <img src="assets/images/Rawa-Blend.jpeg" alt="NutriRawa" class="w-full h-48 object-cover rounded-lg mb-4">
                    <h3 class="text-xl font-bold mb-2">NutriRawa</h3>
                    <p class="mb-4">Our Rawa Blend combines the graininess of semolina with essential nutrients like Iron, Folic Acid, and B Vitamins.</p>
                    <a href="#" class="px-6 py-2 bg-blue-600 text-white font-semibold rounded">Order Now</a>
                </div>
                <div class="bg-white p-6 border rounded-lg shadow-md">
                    <img src="assets/images/NutriFlour.jpeg" alt="NutriFlour" class="w-full h-48 object-cover rounded-lg mb-4">
                    <h3 class="text-xl font-bold mb-2">NutriFlour</h3>
                    <p class="mb-4">Finely Milled Flour with essential nutrients like Iron, Folic Acid, and Vitamin B12.</p>
                    <a href="#" class="px-6 py-2 bg-blue-600 text-white font-semibold rounded">Order Now</a>
                </div>
            </div>
        </section>
        <section id="customers" class="text-center py-16">
            <h2 class="text-3xl font-semibold mb-8">Our happy customers</h2>
            <div class="max-w-3xl mx-auto px-4">
                <p class="mb-4">"I'm a big fan of poke bowls, and this place definitely delivers. The quality of the ingredients is top-notch, and the variety of toppings allows you to customize your bowl." - Lauren Martinez</p>
                <img src="assets/images/customer1.jpg" alt="Customer" class="w-20 h-20 rounded-full mx-auto">
            </div>
        </section>
        <section id="locations" class="text-center bg-white py-16">
            <h2 class="text-3xl font-semibold mb-8">Find our locations</h2>
            <p class="max-w-3xl mx-auto mb-6 px-4">Serving fresh fish daily at Boston Harbor Islands, Boylston St, Congress St, Kendall Square, Cambridge St, Haviland St.</p>
            <a href="#" class="inline-block px-6 py-3 bg-blue-600 text-white font-semibold rounded">Locations & Hours</a>
        </section>
        <section id="social" class="text-center py-16">
            <h2 class="text-3xl font-semibold mb-8">Follow us</h2>
            <div class="flex justify-center space-x-4">
                <a href="https://whatsapp.com/channel/0029VaYseakBqbrFV7rncn14" class="text-2xl" target="_blank"><i class="fab fa-whatsapp"></i></a>
                <a href="https://www.instagram.com/white_rice_food?igsh=MXdtN2VkNnlzYmUwYw%3D%3D&utm_source=qr" class="text-2xl" target="_blank"><i class="fab fa-instagram"></i></a>
                <a href="https://www.facebook.com/profile.php?id=61557930563514&mibextid=LQQJ4d" class="text-2xl" target="_blank"><i class="fab fa-facebook"></i></a>
                <a href="https://youtube.com/@white_rice_food?si=YEptMnYDn47XNpe8" class="text-2xl" target="_blank"><i class="fab fa-youtube"></i></a>
                <a href="https://x.com/?lang=en" class="text-2xl" target="_blank"><i class="fab fa-twitter"></i></a>
            </div>
        </section>
    </main>
    <?php include 'includes/footer.php'; ?>
    <script src="assets/js/menu-toggle.js"></script>
</body>
</html>
