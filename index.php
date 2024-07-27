<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'includes/header.php'; ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrQkTyTyABn5xB7+ZOVpHl0KqP8tG1p+4jGpv1LFWp59NodAkbJsvJQ/UJp1zI7AxuXhV19qqnh/WaJ50A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="bg-gray-100">
    <?php include 'includes/nav.php'; ?>
    <header class="relative bg-cover bg-center py-32 text-center text-white custom-hero" style="background-image: url('<?php echo $base_url; ?>/assets/images/hero.jpg');">
        <div class="absolute inset-0 bg-black opacity-50"></div>
        <div class="relative z-10 max-w-3xl mx-auto">
            <h1 class="text-5xl font-bold">White Rice Food</h1>
            <p class="mt-4 text-xl">Pioneering Nutritional Innovation</p>
            <a href="#" class="mt-8 inline-block px-6 py-3 bg-blue-600 text-white font-semibold rounded">Know More</a>
        </div>
    </header>
    <main class="py-16">
        <section id="about" class="text-center px-4">
            <h2 class="text-3xl font-semibold mb-8">About Us</h2>
            <div class="flex flex-col md:flex-row justify-center items-center max-w-6xl mx-auto">
                <div class="md:w-1/2 mb-6 md:mb-0">
                    <p>Welcome to White Rice Food, a pioneering manufacturer at the forefront of nutritional innovation, specializing in the production of fortified foods. Based in Telangana, India, White Rice Food is dedicated to combating malnutrition and enhancing food security by enriching staple foods with essential vitamins and minerals.</p>
                    <p>Our mission is to make nutritional foods accessible and affordable for all, particularly in regions where micronutrient deficiencies are prevalent. By partnering with governments, NGOs, and food distributors, we strive to reach millions of people, providing a simple yet effective solution to improve public health outcomes.</p>
                    <a href="<?php echo $base_url; ?>/about.php" class="mt-4 inline-block px-6 py-3 bg-blue-600 text-white font-semibold rounded">Know More</a>
                </div>
                <div class="md:w-1/2">
                    <img src="<?php echo $base_url; ?>/assets/images/about.jpg" alt="About Us" class="w-full h-auto rounded-lg shadow-md">
                </div>
            </div>
        </section>

        <section id="products" class="text-center bg-white py-16">
            <h2 class="text-3xl font-semibold mb-8">Products</h2>
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

        <section id="blog-posts" class="text-center py-16">
            <h2 class="text-3xl font-semibold mb-8">Latest Blog Posts</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-6xl mx-auto px-4">
                <article class="bg-white p-6 rounded-lg shadow-md">
                    <img src="<?php echo $base_url; ?>/assets/images/blogs/food-fortification.webp" alt="Food Fortification" class="w-full h-48 object-cover rounded-lg mb-4">
                    <h3 class="text-2xl font-bold mb-2"><a href="<?php echo $base_url; ?>/blogs/post.php?id=food-fortification" class="text-blue-600">Food Fortification</a></h3>
                    <p>Food fortification is the process of adding essential vitamins and minerals to foods...</p>
                </article>
                <article class="bg-white p-6 rounded-lg shadow-md">
                    <img src="<?php echo $base_url; ?>/assets/images/blogs/frk.webp" alt="WHAT ARE FORTIFIED RICE KERNELS" class="w-full h-48 object-cover rounded-lg mb-4">
                    <h3 class="text-2xl font-bold mb-2"><a href="<?php echo $base_url; ?>/blogs/post.php?id=fortified-rice-kernels" class="text-blue-600">WHAT ARE FORTIFIED RICE KERNELS</a></h3>
                    <p>Fortified rice kernels are specially processed rice grains enhanced with essential vitamins and minerals...</p>
                </article>
                <article class="bg-white p-6 rounded-lg shadow-md">
                    <img src="<?php echo $base_url; ?>/assets/images/blogs/difference.webp" alt="WHITE RICE vs FORTIFIED RICE" class="w-full h-48 object-cover rounded-lg mb-4">
                    <h3 class="text-2xl font-bold mb-2"><a href="<?php echo $base_url; ?>/blogs/post.php?id=white-vs-fortified-rice" class="text-blue-600">WHITE RICE vs FORTIFIED RICE</a></h3>
                    <p>Here’s a detailed comparison of white rice and fortified rice in terms of their nutritional content, health benefits, and other key aspects...</p>
                </article>
            </div>
        </section>

        <section id="usage" class="text-center bg-white py-16">
            <h2 class="text-3xl font-semibold mb-8">How to Use & Process of Fortification</h2>
            <div class="max-w-6xl mx-auto px-4 grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="flex justify-center items-center bg-white p-6 rounded-lg shadow-md">
                    <img src="<?php echo $base_url; ?>/assets/images/usage.jpg" alt="How to Use" class="w-full h-auto rounded-lg cursor-pointer" id="img1" style="max-height: 450px;">
                </div>
                <div class="flex justify-center items-center bg-white p-6 rounded-lg shadow-md">
                    <img src="<?php echo $base_url; ?>/assets/images/Process of Fortification.jpg" alt="Process of Fortification" class="w-full h-auto rounded-lg cursor-pointer" id="img2" style="max-height: 450px;">
                </div>
            </div>
        </section>

        <section id="social" class="text-center py-16">
            <h2 class="text-3xl font-semibold mb-8">Follow us</h2>
            <div class="flex justify-center space-x-4">
                <a href="https://whatsapp.com/channel/0029VaYseakBqbrFV7rncn14" class="text-2xl" target="_blank"><i class="fab fa-whatsapp"></i></a>
                <a href="https://www.instagram.com/white_rice_food?igsh=MXdtN2VkNnlzYmUwYw%3D%3D&utm_source=qr" class="text-2xl" target="_blank"><i class="fab fa-instagram"></i></a>
                <a href="https://www.facebook.com/profile.php?id=61557930563514&mibextid=LQQJ4d" class="text-2xl" target="_blank"><i class="fab fa-facebook"></i></a>
                <a href="https://youtube.com/@white_rice_food?si=YEptMnYDn47XNpe8" class="text-2xl" target="_blank"><i class="fab fa-youtube"></i></a>
                <a href="https://x.com/whitericefood" class="text-2xl" target="_blank"><i class="fab fa-twitter"></i></a>
            </div>
        </section>
    </main>

    <!-- Modal -->
    <div id="modal1" class="fixed inset-0 bg-black bg-opacity-75 flex items-center justify-center hidden">
        <span class="text-white absolute top-0 right-0 p-4 cursor-pointer text-3xl" id="close1">&times;</span>
        <img class="max-w-full max-h-full" src="<?php echo $base_url; ?>/assets/images/usage.jpg" alt="How to Use">
    </div>

    <div id="modal2" class="fixed inset-0 bg-black bg-opacity-75 flex items-center justify-center hidden">
        <span class="text-white absolute top-0 right-0 p-4 cursor-pointer text-3xl" id="close2">&times;</span>
        <img class="max-w-full max-h-full" src="<?php echo $base_url; ?>/assets/images/Process of Fortification.jpg" alt="Process of Fortification">
    </div>

    <script src="<?php echo $base_url; ?>/assets/js/menu-toggle.js"></script>
    <script>
        document.getElementById('img1').onclick = function() {
            document.getElementById('modal1').classList.remove('hidden');
        }
        document.getElementById('close1').onclick = function() {
            document.getElementById('modal1').classList.add('hidden');
        }
        document.getElementById('img2').onclick = function() {
            document.getElementById('modal2').classList.remove('hidden');
        }
        document.getElementById('close2').onclick = function() {
            document.getElementById('modal2').classList.add('hidden');
        }
    </script>
</body>
</html>
