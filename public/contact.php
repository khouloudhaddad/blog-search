<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Blog Search</title>
    <link href="output.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 text-gray-900">

    <!-- Navigation Menu -->
    <?php include('_partials/header.php'); ?>

    <!-- Main Content Container -->
    <div class="max-w-7xl mx-auto p-8">

        <!-- Contact Us Heading -->
        <h1 class="text-4xl font-bold text-center mb-6">Contact Us</h1>

        <!-- Contact Form Section -->
        <div class="bg-white p-6 rounded-lg shadow-md border mb-12">
            <h2 class="text-2xl font-semibold mb-4">Send Us a Message</h2>

            <form action="#" method="POST">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="mb-4">
                        <label for="name" class="block text-lg font-medium text-gray-700">Name</label>
                        <input type="text" id="name" name="name" required class="mt-2 p-3 w-full border border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500">
                    </div>

                    <div class="mb-4">
                        <label for="email" class="block text-lg font-medium text-gray-700">Email</label>
                        <input type="email" id="email" name="email" required class="mt-2 p-3 w-full border border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500">
                    </div>
                </div>

                <div class="mb-4">
                    <label for="message" class="block text-lg font-medium text-gray-700">Message</label>
                    <textarea id="message" name="message" rows="4" required class="mt-2 p-3 w-full border border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500"></textarea>
                </div>

                <div class="text-center">
                    <button type="submit" class="bg-indigo-600 text-white px-6 py-3 rounded-md hover:bg-indigo-700 transition">Send Message</button>
                </div>
            </form>
        </div>

        <!-- Google Map Section -->
        <div class="bg-white p-6 rounded-lg border shadow-md">
            <h2 class="text-2xl font-semibold mb-4">Our Location</h2>
            <div class="relative pb-56.25% mb-6">
            <iframe src="https://www.openstreetmap.org/export/embed.html?bbox=-73.97761154174805%2C40.75245693720294%2C-73.9716558456421%2C40.7589460390624&layer=mapnik&marker=40.755697999247885%2C-73.97463321685791"
                width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            <p class="text-lg text-gray-700">Visit us at: 1234 Blog St, Blog City, BC 56789</p>
        </div>

    </div>
    <?php include('_partials/footer.php'); ?>
</body>

</html>