<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Search - Home</title>
    <link href="output.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>

<body class="bg-gray-50 text-gray-900">

    <!-- Navigation Menu -->
    <?php include('_partials/header.php'); ?>

    <!-- Hero Section -->
    <section class="bg-indigo-600 text-white py-20">
        <div class="max-w-7xl mx-auto px-6 text-center">
            <h1 class="text-4xl md:text-5xl font-bold leading-tight mb-6">
                Find the Best Blog Posts with Ease
            </h1>
            <p class="text-lg md:text-xl mb-8">
                Discover insightful articles, tips, and stories on various topics. Search through our extensive library of blogs with ease.
            </p>
            <a href="/search.php" class="bg-white text-indigo-600 px-8 py-3 rounded-md text-lg font-semibold hover:bg-indigo-100 transition">
                Start Searching
            </a>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-6 text-center">
            <h2 class="text-3xl font-semibold mb-10">Why Choose BlogSearch?</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Feature 1 -->
                <div class="p-6 bg-gray-100 rounded-lg shadow-lg">
                    <h3 class="text-2xl font-semibold mb-4">Easy Search</h3>
                    <p class="text-gray-600">
                        Quickly find blog posts that matter to you with our fast and efficient search engine.
                    </p>
                </div>
                <!-- Feature 2 -->
                <div class="p-6 bg-gray-100 rounded-lg shadow-lg">
                    <h3 class="text-2xl font-semibold mb-4">Extensive Library</h3>
                    <p class="text-gray-600">
                        Our blog database is vast, covering a wide range of topics to keep you engaged and informed.
                    </p>
                </div>
                <!-- Feature 3 -->
                <div class="p-6 bg-gray-100 rounded-lg shadow-lg">
                    <h3 class="text-2xl font-semibold mb-4">User-Friendly Interface</h3>
                    <p class="text-gray-600">
                        Enjoy an intuitive and easy-to-navigate platform designed for the best user experience.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Call-to-Action (CTA) Section -->
    <section class="bg-indigo-600 text-white py-16">
        <div class="max-w-7xl mx-auto px-6 text-center">
            <h2 class="text-3xl font-semibold mb-6">
                Ready to Find Your Next Favorite Blog Post?
            </h2>
            <p class="text-lg md:text-xl mb-8">
                Start exploring our wide variety of blog topics today and get inspired by amazing content!
            </p>
            <a href="/search.php" class="bg-white text-indigo-600 px-8 py-3 rounded-md text-lg font-semibold hover:bg-indigo-100 transition">
                Start Searching Now
            </a>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-16 bg-gray-100">
        <div class="max-w-7xl mx-auto px-6 text-center">
            <h2 class="text-3xl font-semibold mb-10">What Our Users Say</h2>
            <div class="flex flex-wrap justify-center gap-12">
                <!-- Testimonial 1 -->
                <div class="bg-white p-6 rounded-lg shadow-lg max-w-xs">
                    <p class="text-gray-600 mb-4">
                        "BlogSearch has helped me discover countless amazing blog posts. The search functionality is super fast, and the content is diverse."
                    </p>
                    <p class="font-semibold">Jane Doe</p>
                    <p class="text-gray-500">Content Creator</p>
                </div>
                <!-- Testimonial 2 -->
                <div class="bg-white p-6 rounded-lg shadow-lg max-w-xs">
                    <p class="text-gray-600 mb-4">
                        "I love how easy it is to find what I'm looking for! BlogSearch makes reading blogs fun and convenient."
                    </p>
                    <p class="font-semibold">John Smith</p>
                    <p class="text-gray-500">Web Developer</p>
                </div>
                <!-- Testimonial 3 -->
                <div class="bg-white p-6 rounded-lg shadow-lg max-w-xs">
                    <p class="text-gray-600 mb-4">
                        "This platform has made my blog reading experience so much better. I highly recommend BlogSearch to everyone."
                    </p>
                    <p class="font-semibold">Sarah Lee</p>
                    <p class="text-gray-500">Marketing Expert</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php include('_partials/footer.php'); ?>

</body>

</html>
