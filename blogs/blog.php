<!DOCTYPE html>
<html lang="en">
<head>
    <?php include '../includes/header.php'; ?>
</head>
<body class="bg-gray-100">
    <?php include '../includes/nav.php'; ?>
    <main class="py-16">
        <section class="container mx-auto px-4">
            <h1 class="text-4xl font-bold text-center mb-8">Blog</h1>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <article class="bg-white p-6 rounded-lg shadow-md">
                    <img src="../assets/images/blogs/food-fortification.webp" alt="Food Fortification" class="w-full h-48 object-cover rounded-lg mb-4">
                    <h2 class="text-2xl font-bold mb-2"><a href="post.php?id=food-fortification" class="text-blue-600">Food Fortification</a></h2>
                    <p>Food fortification is the process of adding essential vitamins and minerals to foods...</p>
                </article>
                <article class="bg-white p-6 rounded-lg shadow-md">
                    <img src="../assets/images/blogs/food-fortification-studies.webp" alt="Studies on Food Fortification" class="w-full h-48 object-cover rounded-lg mb-4">
                    <h2 class="text-2xl font-bold mb-2"><a href="post.php?id=studies-food-fortification" class="text-blue-600">Studies on Food Fortification</a></h2>
                    <p>Recent studies and initiatives on rice fortification highlight its significant potential...</p>
                </article>
                <article class="bg-white p-6 rounded-lg shadow-md">
                    <img src="../assets/images/blogs/fortified-countries.webp" alt="FORTIFIED FOOD IMPLEMENTED COUNTRIES" class="w-full h-48 object-cover rounded-lg mb-4">
                    <h2 class="text-2xl font-bold mb-2"><a href="post.php?id=fortified-countries" class="text-blue-600">FORTIFIED FOOD IMPLEMENTED COUNTRIES</a></h2>
                    <p>Fortified food programs have been implemented in several countries to combat micronutrient deficiencies...</p>
                </article>
                <article class="bg-white p-6 rounded-lg shadow-md">
                    <img src="../assets/images/blogs/frk.webp" alt="WHAT ARE FORTIFIED RICE KERNELS" class="w-full h-48 object-cover rounded-lg mb-4">
                    <h2 class="text-2xl font-bold mb-2"><a href="post.php?id=fortified-rice-kernels" class="text-blue-600">WHAT ARE FORTIFIED RICE KERNELS</a></h2>
                    <p>Fortified rice kernels are specially processed rice grains enhanced with essential vitamins and minerals...</p>
                </article>
                <article class="bg-white p-6 rounded-lg shadow-md">
                    <img src="../assets/images/blogs/difference.webp" alt="WHITE RICE vs FORTIFIED RICE" class="w-full h-48 object-cover rounded-lg mb-4">
                    <h2 class="text-2xl font-bold mb-2"><a href="post.php?id=white-vs-fortified-rice" class="text-blue-600">WHITE RICE vs FORTIFIED RICE</a></h2>
                    <p>Here’s a detailed comparison of white rice and fortified rice in terms of their nutritional content, health benefits, and other key aspects...</p>
                </article>
                <article class="bg-white p-6 rounded-lg shadow-md">
                    <img src="../assets/images/blogs/deficiencies.webp" alt="Understanding Micronutrient Deficiencies: Iron, Folic Acid, and Vitamin B12" class="w-full h-48 object-cover rounded-lg mb-4">
                    <h2 class="text-2xl font-bold mb-2"><a href="post.php?id=micronutrient-deficiencies" class="text-blue-600">Understanding Micronutrient Deficiencies: Iron, Folic Acid, and Vitamin B12</a></h2>
                    <p>Iron, folic acid, and vitamin B12 deficiencies can lead to several health problems...</p>
                </article>
            </div>
        </section>
    </main>
    <?php include '../includes/footer.php'; ?>
    <script src="../assets/js/menu-toggle.js"></script>
</body>
</html>
