<?php

require dirname(__DIR__).'/vendor/autoload.php';

use Elastic\Elasticsearch\ClientBuilder;

$elasticsearchHost = getenv('ELASTICSEARCH_HOST') ?: 'elasticsearch';
$elasticsearchPort = getenv('ELASTICSEARCH_PORT') ?: 9200;

// Elasticsearch Configuration
try {
    // Create a client instance
    $esClient = ClientBuilder::create()
        ->setHosts(["http://{$elasticsearchHost}:{$elasticsearchPort}"]) // Replace with your Elasticsearch host
        ->build();

    // Test the connection to Elasticsearch
    // $response = $esClient->info();
    // echo "Connected to Elasticsearch:\n";
    // print_r($response->asArray());

} catch (Exception $e) {
    echo "Failed to connect to Elasticsearch: " . $e->getMessage();
    exit;
}

// SQLite Database Configuration
try {
    $dbPath = dirname(__DIR__) . '/database/blog.sqlite';
    $db = new PDO('sqlite:' . $dbPath);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Create tables if they do not exist
    $db->exec("CREATE TABLE IF NOT EXISTS users (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        username TEXT NOT NULL UNIQUE,
        password TEXT NOT NULL
    );");

    $db->exec("CREATE TABLE IF NOT EXISTS posts (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        title TEXT NOT NULL,
        content TEXT NOT NULL,
        created_at DATETIME DEFAULT CURRENT_TIMESTAMP
    );");

    //echo "Database tables are ready.\n";

} catch (PDOException $e) {
    echo "Failed to connect to SQLite database: " . $e->getMessage();
    exit;
}

?>
