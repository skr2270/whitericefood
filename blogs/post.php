<?php
include dirname(__DIR__) . '/config.php';
include $rootPath . '/includes/header.php';
include $rootPath . '/includes/nav.php';

$posts = [
    'food-fortification' => [
        'title' => 'Food Fortification',
        'content' => 'The process of adding essential vitamins and minerals to rice, rava, and flour offers several significant benefits, particularly in regions where these foods are staples. Here are some of the key benefits: Nutritional Improvement -Micronutrient Deficiency Reduction: Fortified foods can help reduce deficiencies of essential vitamins and minerals such as iron, folic acid, vitamin A, and zinc. This is particularly important in regions where diets may lack diversity. -Improved Health Outcomes: Enhanced intake of essential nutrients can lead to better overall health, reducing the prevalence of anemia, especially in women and children, and improving immune function. Public Health Impact -Reduced Disease Burden: By addressing micronutrient deficiencies, fortified foods can help lower the incidence of diseases related to these deficiencies, such as rickets (vitamin D deficiency), scurvy (vitamin C deficiency), and beriberi (vitamin B1 deficiency). -Maternal and Child Health: Improved nutritional status of pregnant women can lead to better birth outcomes, reducing the risk of birth defects and promoting healthy development in children.',
        'image' => '../assets/images/blogs/food-fortification.webp'
    ],
    'studies-food-fortification' => [
        'title' => 'Studies on Food Fortification',
        'content' => 'Recent studies and initiatives on rice fortification highlight its significant potential in addressing micronutrient malnutrition, particularly in countries with high rice consumption like India. India\'s National Mandate India has mandated rice fortification in all social safety net schemes by 2024 to combat anemia and other micronutrient deficiencies. This initiative is expected to benefit over 800 million people, providing essential micronutrients such as iron, folic acid, and vitamin B12 NITI Aayog, Next IAS. Four Principles of Large-Scale Fortification Successful rice fortification programs, such as those in India, follow four key principles: affordability, accessibility, advocacy, and awareness. These principles ensure that fortified rice is cost-effective, widely available, supported by public policies, and well-understood by the population PATH. Health Impact Studies A Cochrane review of 17 studies involving over 10,000 participants found that rice fortified with iron and other micronutrients can reduce anemia and improve iron status.',
        'image' => '../assets/images/blogs/food-fortification-studies.webp'
    ],
    'fortified-countries' => [
        'title' => 'FORTIFIED FOOD IMPLEMENTED COUNTRIES',
        'content' => 'Fortified food programs have been implemented in several countries to combat micronutrient deficiencies, particularly in regions where staple foods such as rice, rava, and flour are consumed. Here are some notable examples: India: India has been a leader in food fortification, with several states implementing fortified food distribution through the Public Distribution System (PDS) and other welfare programs. The government is scaling up fortification efforts nationwide to address micronutrient deficiencies. Bangladesh: Bangladesh has initiated food fortification programs, particularly targeting school meal programs and vulnerable populations to address high levels of micronutrient deficiencies. These programs include fortified rice, flour, and other staple foods.',
        'image' => '../assets/images/blogs/fortified-countries.webp'
    ],
    'fortified-rice-kernels' => [
        'title' => 'WHAT ARE FORTIFIED RICE KERNELS',
        'content' => 'Fortified rice kernels are specially processed rice grains enhanced with essential vitamins and minerals to improve their nutritional value. Here’s a detailed overview: Composition and Process 1. Fortification Process: - Extrusion: This is the most common method for producing fortified rice kernels. Rice flour is mixed with a fortificant premix containing the desired vitamins and minerals. This mixture is then passed through an extruder, which shapes it into rice-like kernels. - Coating and Dusting: Another method involves coating or dusting regular rice grains with a fortificant mixture. However, this method is less durable as the nutrients can wash off during rinsing and cooking. 2. Nutrients Added: - Commonly added nutrients include iron, folic acid, vitamin A, vitamin B12, zinc, and other B vitamins. The selection of nutrients depends on the nutritional needs of the target population.',
        'image' => '../assets/images/blogs/frk.webp'
    ],
    'white-vs-fortified-rice' => [
        'title' => 'WHITE RICE vs FORTIFIED RICE',
        'content' => '
        <h2 class="text-3xl font-bold mb-4">Comparison Table</h2>
        <table class="table-auto w-full mb-8 border-collapse border border-gray-200 shadow-lg">
            <thead>
                <tr>
                    <th class="border px-4 py-2 bg-gray-100">Aspect</th>
                    <th class="border px-4 py-2 bg-gray-100">White Rice</th>
                    <th class="border px-4 py-2 bg-gray-100">Fortified Rice</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="border px-4 py-2">Processing</td>
                    <td class="border px-4 py-2">The husk, bran, and germ are removed, leaving just the starchy endosperm.</td>
                    <td class="border px-4 py-2">Typically starts as white rice, with essential vitamins and minerals added back through processes like extrusion, coating, or dusting.</td>
                </tr>
                <tr>
                    <td class="border px-4 py-2">Carbohydrates</td>
                    <td class="border px-4 py-2">High in carbohydrates, providing a quick source of energy.</td>
                    <td class="border px-4 py-2">High in carbohydrates, similar to white rice.</td>
                </tr>
                <tr>
                    <td class="border px-4 py-2">Protein</td>
                    <td class="border px-4 py-2">Moderate amount.</td>
                    <td class="border px-4 py-2">Moderate amount, similar to white rice.</td>
                </tr>
                <tr>
                    <td class="border px-4 py-2">Fiber</td>
                    <td class="border px-4 py-2">Low due to the removal of the bran.</td>
                    <td class="border px-4 py-2">Low, similar to white rice.</td>
                </tr>
                <tr>
                    <td class="border px-4 py-2">Vitamins and Minerals</td>
                    <td class="border px-4 py-2">Significantly reduced nutrients; lower levels of B vitamins, iron, and other minerals.</td>
                    <td class="border px-4 py-2">Enriched with essential vitamins and minerals like iron, folic acid, and vitamin B12.</td>
                </tr>
                <tr>
                    <td class="border px-4 py-2">Glycemic Index</td>
                    <td class="border px-4 py-2">Higher, leading to quicker spikes in blood sugar levels.</td>
                    <td class="border px-4 py-2">Similar to white rice, but the presence of added nutrients may slightly alter the glycemic index.</td>
                </tr>
                <tr>
                    <td class="border px-4 py-2">Digestibility</td>
                    <td class="border px-4 py-2">Easily digestible, suitable for people with digestive issues.</td>
                    <td class="border px-4 py-2">Easily digestible, similar to white rice.</td>
                </tr>
                <tr>
                    <td class="border px-4 py-2">Uses</td>
                    <td class="border px-4 py-2">Common in a variety of dishes globally due to its mild flavor and soft texture.</td>
                    <td class="border px-4 py-2">Used similarly to white rice in a variety of dishes, with added nutritional benefits.</td>
                </tr>
            </tbody>
        </table>

        <h2 class="text-3xl font-bold mb-4">Additional Information</h2>
        <p>Fortified rice provides an essential solution to address micronutrient deficiencies, especially in regions where rice is a staple food. By incorporating vital nutrients such as iron, folic acid, and vitamin B12, fortified rice helps improve public health outcomes and reduce the prevalence of diseases related to nutrient deficiencies.</p>
        ',
        'image' => '../assets/images/blogs/difference.webp'
    ],
    'micronutrient-deficiencies' => [
        'title' => 'Understanding Micronutrient Deficiencies: Iron, Folic Acid, and Vitamin B12',
        'content' => 'Iron (Fe) Deficiency Iron deficiency can lead to several health issues, primarily related to its role in producing hemoglobin, the protein in red blood cells that carries oxygen. Here are the main problems associated with iron deficiency: 1. Iron-Deficiency Anemia: This is the most common result of iron deficiency. Symptoms include fatigue, weakness, pale skin, shortness of breath, dizziness, and headaches. 2. Pale or Sallow Skin: The lack of adequate hemoglobin can cause the skin to become noticeably pale or sallow. 3. Shortness of Breath: Without enough iron, the body cannot transport sufficient oxygen, leading to frequent shortness of breath, especially during physical activity. 4. Heart Problems: Severe iron deficiency can lead to an enlarged heart or heart failure because the heart has to work harder to move oxygen-rich blood throughout the body. 5. Cold Hands and Feet: Poor circulation due to low hemoglobin levels can cause extremities to feel cold. 6. Brittle Nails and Hair Loss: Iron deficiency can affect the health of nails and hair, leading to brittle or spoon-shaped nails and hair loss.',
        'image' => '../assets/images/blogs/deficiencies.webp'
    ]
];

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_SPECIAL_CHARS);
if (!isset($posts[$id])) {
    // Handle invalid ID
    echo "Invalid blog post ID.";
    exit;
}
$post = $posts[$id];
?>

<main class="py-16">
    <section class="container mx-auto px-4">
        <article class="bg-white p-8 rounded-lg shadow-md">
            <img src="<?php echo $post['image']; ?>" alt="<?php echo $post['title']; ?>" class="w-full h-64 object-cover rounded-lg mb-6">
            <h1 class="text-5xl font-bold mb-6 text-center"><?php echo $post['title']; ?></h1>
            <div class="prose max-w-none"><?php echo $post['content']; ?></div>
        </article>
    </section>
</main>

<?php include $rootPath . '/includes/footer.php'; ?>
<script src="<?php echo $base_url; ?>/assets/js/menu-toggle.js"></script>
</body>
</html>
