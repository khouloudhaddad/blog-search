<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Blog Search</title>
    
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <!-- Swiper JS -->
    <link href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <!-- jQuery -->
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <link href="output.css" rel="stylesheet">
</head>

<body class="bg-gray-100 text-gray-900">

    <!-- Navigation Menu -->
    <?php include('_partials/header.php'); ?>

    <!-- Main Content Container -->
    <div class="max-w-7xl mx-auto p-8">

        <!-- About Us Heading -->
        <h1 class="text-4xl font-bold text-center mb-6">About Us</h1>

        <!-- About Us Section -->
        <div class="bg-white p-6 rounded-lg shadow-md">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <p class="text-xl text-gray-700 mb-4">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus hendrerit, nunc at tempor luctus, velit felis cursus mi, non suscipit felis ante id turpis. Cras feugiat auctor magna vel lobortis.
                    </p>
                    <p class="text-xl text-gray-700 mb-4">
                        Nam id orci nunc. Integer sed risus sed arcu porttitor cursus. Sed dapibus volutpat ex, eget facilisis purus auctor nec.
                    </p>
                    <p class="text-xl text-gray-700 mb-4">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus hendrerit, nunc at tempor luctus, velit felis cursus mi, non suscipit felis ante id turpis. Cras feugiat auctor magna vel lobortis.
                    </p>
                    <p class="text-xl text-gray-700 mb-4">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus hendrerit, nunc at tempor luctus, velit felis cursus mi, non suscipit felis ante id turpis. Cras feugiat auctor magna vel lobortis.
                    </p>
                </div>
                <div class="flex justify-center items-center">
                    <img src="assets/imgs/placeholder.png" alt="Team Image" class="rounded-lg shadow-lg w-full max-w-md">
                </div>
            </div>
        </div>

        <!-- Our Mission Section -->
        <div class="mt-12 bg-white p-6 rounded-lg shadow-md">
            <h2 class="text-3xl font-semibold text-center mb-4">Our Mission</h2>
            <p class="text-xl text-gray-700">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean nec orci nec dui facilisis fringilla. Aliquam suscipit cursus malesuada. Sed ut magna quam.
            </p>
        </div>

        <!-- Services Carousel Section -->
        <div class="max-w-7xl mx-auto p-8 relative">
            <h1 class="text-4xl font-bold text-center mb-6">Our Services</h1>

            <!-- Swiper Carousel for Services -->
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="assets/imgs/placeholder.png" alt="Service 1">
                        <h3>Service 1</h3>
                        <p>Description for Service 1.</p>
                    </div>
                    <div class="swiper-slide">
                        <img src="assets/imgs/placeholder.png" alt="Service 2">
                        <h3>Service 2</h3>
                        <p>Description for Service 2.</p>
                    </div>
                    <div class="swiper-slide">
                        <img src="assets/imgs/placeholder.png" alt="Service 3">
                        <h3>Service 3</h3>
                        <p>Description for Service 3.</p>
                    </div>
                    <div class="swiper-slide">
                        <img src="assets/imgs/placeholder.png" alt="Service 4">
                        <h3>Service 4</h3>
                        <p>Description for Service 4.</p>
                    </div>
                    <div class="swiper-slide">
                        <img src="assets/imgs/placeholder.png" alt="Service 5">
                        <h3>Service 5</h3>
                        <p>Description for Service 5.</p>
                    </div>
                </div>

                <!-- Optional Pagination and Navigation -->
                <div class="swiper-pagination"></div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <?php include('_partials/footer.php'); ?>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper('.swiper-container', {
            slidesPerView: 3, // Show 3 slides at once
            spaceBetween: 10, // Space between slides
            loop: true, // Enable looping of slides
            autoplay: {
                delay: 3000,    // Time between slide transitions (in milliseconds)
                disableOnInteraction: false, // Keeps autoplay working even after user interaction
            },
            speed: 500, 
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            breakpoints: {
                // Responsive breakpoints
                640: {
                    slidesPerView: 2, // 1 slide for small screens
                    spaceBetween: 10, // Adjust spacing
                },
                768: {
                    slidesPerView:3, // 2 slides for medium screens
                    spaceBetween: 20,
                },
                1024: {
                    slidesPerView: 4, // 3 slides for larger screens
                    spaceBetween: 20,
                },
            }
        });
    </script>

</body>

</html>