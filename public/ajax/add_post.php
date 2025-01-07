<?php

require '../../src/config.php';
require '../../src/functions.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $content = $_POST['content'];

    try {
        // Assuming `addPost` function adds the post to both DB and Elasticsearch
        addPost($db, $esClient, $title, $content);

        // Return success response
        echo json_encode(["status" => "success", "message" => "Post added successfully!"]);
    } catch (Exception $e) {
        // Handle error and return error response
        echo json_encode(["status" => "error", "message" => "Failed to add post: " . $e->getMessage()]);
    }
}

