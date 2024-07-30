<?php
$rootPath = dirname(__DIR__);
include $rootPath . '/config.php';
?>

<nav class="bg-white border-b shadow-lg">
    <div class="container mx-auto flex justify-between items-center py-4 px-6">
        <a href="<?php echo $base_url; ?>/index.php">
            <img src="<?php echo $base_url; ?>/assets/images/logo.png" alt="White Rice Food Logo" class="h-12">
        </a>
        <button class="toggle-button block lg:hidden text-black text-2xl"><i class="fas fa-bars"></i></button>
        <ul class="nav-menu hidden lg:flex space-x-6">
            <li><a href="<?php echo $base_url; ?>/index.php" class="text-black hover:text-blue-600">Home</a></li>
            <li><a href="<?php echo $base_url; ?>/about.php" class="text-black hover:text-blue-600">About Us</a></li>
            <li><a href="<?php echo $base_url; ?>/contact.php" class="text-black hover:text-blue-600">Contact Us</a></li>
            <li><a href="<?php echo $base_url; ?>/blogs/blog.php" class="text-black hover:text-blue-600">Blog</a></li>
            <li><a href="<?php echo $base_url; ?>/products/products.php" class="text-black hover:text-blue-600">Products</a></li>
        </ul>
        <div class="flex space-x-4">
            <a href="#" class="text-2xl text-black hover:text-blue-600"><i class="fas fa-shopping-cart"></i></a>
            <a href="#" class="text-2xl text-black hover:text-blue-600"><i class="fas fa-user"></i></a>
        </div>
    </div>
</nav>
