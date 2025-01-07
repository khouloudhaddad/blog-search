<?php

require '../src/config.php';
require '../src/functions.php';

$results = [];
if ($_SERVER['REQUEST_METHOD'] === 'GET' && !empty($_GET['query'])) {
    $query = $_GET['query'];
    $results = searchPosts($esClient, $query);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Blog Posts</title>
    <link href="output.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 min-h-screen">

    <!-- Include Header -->
    <?php include('_partials/header.php'); ?>

    <!-- Hero Section -->
    <section class="bg-indigo-600 text-white py-16 w-full">
        <div class="max-w-7xl mx-auto text-center">
            <h1 class="text-4xl font-bold mb-4">Search Blog Posts</h1>
            <p class="text-lg md:text-xl mb-8">Find relevant blog posts by searching the title or content below.</p>
        </div>
    </section>

    <!-- Search Form Section -->
    <div class="flex items-center justify-center w-full min-h-[50vh]">
        <div class="w-full max-w-2xl bg-white p-6 mt-10 rounded-lg shadow-md">
            <form method="GET" class="flex space-x-2 mb-6">
                <input type="text" name="query" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500" placeholder="Search..." required>
                <button type="submit" class="bg-indigo-600 text-white px-4 py-2 rounded-md hover:bg-indigo-700">Search</button>
            </form>
            <?php if (!empty($results)): ?>
                <h2 class="text-xl font-semibold text-gray-700 mb-4">Results:</h2>
                <ul class="space-y-4">
                    <?php foreach ($results as $result): ?>
                        <li class="p-4 border rounded-md shadow-md">
                            <strong class="text-lg font-bold text-gray-900"><?= $result['_source']['title']; ?></strong><br>
                            <p class="text-gray-700"><?= $result['_source']['content']; ?></p>
                        </li>
                    <?php endforeach; ?>
                </ul>
            <?php else: ?>
                <p class="text-gray-700">No results found. Please try again with different keywords.</p>
            <?php endif; ?>
        </div>
    </div>

    <!-- Include Footer -->
    <?php include('_partials/footer.php'); ?>

</body>

</html>