<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Blog Post</title>
    <link href="output.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
</head>

<body class="bg-gray-100 min-h-screen">
    <!-- Navigation Menu -->
    <?php include('_partials/header.php'); ?>

    <!-- Hero Section -->
    <section class="bg-indigo-600 text-white py-16 mb-12">
        <div class="max-w-7xl mx-auto text-center">
            <h1 class="text-4xl font-bold mb-4">Add a New Blog Post</h1>
            <p class="text-lg md:text-xl mb-8">Create a blog post by filling in the title and content below. Share your thoughts and ideas with the world!</p>
        </div>
    </section>

    <!-- Form Section -->
    <div class="flex items-center justify-center min-h-[50vh]">
        <div class="w-full max-w-md bg-white p-6 rounded-lg shadow-lg border">
            <h1 class="text-2xl font-bold text-gray-800 mb-4">Add a Blog Post</h1>
            <form method="POST" class="space-y-4" id="post-form">
                <div>
                    <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                    <input type="text" name="title" id="title" class="w-full mt-1 px-3 py-2 border rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500" required>
                </div>
                <div>
                    <label for="content" class="block text-sm font-medium text-gray-700">Content</label>
                    <textarea name="content" id="content" rows="5" class="w-full mt-1 px-3 py-2 border rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500" required></textarea>
                </div>
                <button type="submit" class="w-full bg-indigo-600 text-white py-2 rounded-md hover:bg-indigo-700">Add Post</button>
            </form>
        </div>
    </div>
    <!-- Footer -->
    <?php include('_partials/footer.php'); ?>
    <script>
        $(document).ready(function() {
            $('#post-form').on('submit', function(e) {
                e.preventDefault(); // Prevent the form from submitting normally

                $.ajax({
                    type: 'POST',
                    url: 'ajax/add_post.php', // Adjust this to the PHP file where you process the form
                    data: $(this).serialize(),
                    success: function(response) {
                        const res = JSON.parse(response);

                        // Show toaster based on response status
                        if (res.status === 'success') {
                            toastr.success(res.message); // Success toaster
                        } else {
                            toastr.error(res.message); // Error toaster
                        }
                    },
                    error: function() {
                        toastr.error('An error occurred while adding the post.');
                    }
                });
            });
        });
    </script>
</body>

</html>