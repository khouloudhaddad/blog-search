<?php

// Add a blog post to Elasticsearch and SQLite
function addPost($db, $esClient, $title, $content) {
    // Add to SQLite
    $stmt = $db->prepare("INSERT INTO posts (title, content) VALUES (:title, :content)");
    $stmt->execute([':title' => $title, ':content' => $content]);

    // Add to Elasticsearch
    $esClient->index([
        'index' => 'blog_posts',
        'body'  => [
            'title'   => $title,
            'content' => $content,
        ]
    ]);

    return true;
}

// Search blog posts
function searchPosts($esClient, $query) {
    $response = $esClient->search([
        'index' => 'blog_posts',
        'body'  => [
            'query' => [
                'multi_match' => [
                    'query'  => $query,
                    'fields' => ['title', 'content']
                ]
            ]
        ]
    ]);

    return $response['hits']['hits'];
}
