<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'includes/header.php'; ?>
</head>
<body class="bg-gray-100">
    <?php include 'includes/nav.php'; ?>
    <main class="py-16">
        <section class="container mx-auto px-4">
            <h1 class="text-4xl font-bold text-center mb-8">Contact Us</h1>
            <div class="flex flex-col md:flex-row justify-center items-center md:items-start space-y-8 md:space-y-0 md:space-x-8">
                <div class="w-full md:w-1/2 bg-white p-6 rounded-lg shadow-md">
                    <h2 class="text-2xl font-semibold mb-4">Enquiry Form</h2>
                    <form action="submit_enquiry.php" method="post">
                        <div class="mb-4">
                            <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                            <input type="text" id="name" name="name" class="mt-1 p-2 border border-gray-300 rounded w-full" required>
                        </div>
                        <div class="mb-4">
                            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                            <input type="email" id="email" name="email" class="mt-1 p-2 border border-gray-300 rounded w-full" required>
                        </div>
                        <div class="mb-4">
                            <label for="phone" class="block text-sm font-medium text-gray-700">Phone</label>
                            <input type="tel" id="phone" name="phone" class="mt-1 p-2 border border-gray-300 rounded w-full">
                        </div>
                        <div class="mb-4">
                            <label for="message" class="block text-sm font-medium text-gray-700">Message</label>
                            <textarea id="message" name="message" rows="4" class="mt-1 p-2 border border-gray-300 rounded w-full" required></textarea>
                        </div>
                        <button type="submit" class="px-6 py-3 bg-blue-600 text-white font-semibold rounded">Submit</button>
                    </form>
                </div>
                <div class="w-full md:w-1/2 bg-white p-6 rounded-lg shadow-md">
                    <h2 class="text-2xl font-semibold mb-4">Our Location</h2>
                    <div class="h-64 md:h-96 rounded-lg shadow-md">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3771.925652882397!2d79.4784782!3d19.0229975!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a32b10035d6fc8f%3A0xb5f36f09d27f0717!2sWhite%20rice%20food!5e0!3m2!1sen!2sin!4v1722083102416!5m2!1sen!2sin" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <a href="https://www.google.com/maps/dir/?api=1&destination=White+rice+food&destination_place_id=0xb5f36f09d27f0717" target="_blank" class="mt-4 inline-block px-6 py-3 bg-blue-600 text-white font-semibold rounded">Get Directions</a>
                </div>
            </div>
        </section>
        <section class="container mx-auto px-4 mt-8">
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-2xl font-semibold mb-4">Contact Information</h2>
                <p>Email: <a href="mailto:info@whitericefood.com" class="text-blue-600">info@whitericefood.com</a></p>
                <p>Phone: <a href="tel:+917733001126" class="text-blue-600">+917733001126</a></p>
            </div>
        </section>
    </main>
    <?php include 'includes/footer.php'; ?>
    <script src="assets/js/menu-toggle.js"></script>
</body>
</html>
