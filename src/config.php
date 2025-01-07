<?php

require '../vendor/autoload.php';

use Elastic\Elasticsearch\ClientBuilder;
//require '../start_elasticsearch.php';

$elasticsearchHost = getenv('ELASTICSEARCH_HOST') ?: 'elasticsearch';
$elasticsearchPort = getenv('ELASTICSEARCH_PORT') ?: 9200;

// Elasticsearch Configuration
try {
    // Create a client instance
    $esClient = ClientBuilder::create()
        ->setHosts(["http://{$elasticsearchHost}:{$elasticsearchPort}"]) // Replace with your Elasticsearch host
        ->build();

    // Test the connection
    // $response = $esClient->info();
    // echo "Connected to Elasticsearch:\n";
    // print_r($response->asArray());

    // SQLite Database Configuration
    $dbPath = dirname(__DIR__) . '/database/blog.sqlite';
    $db = new PDO('sqlite:' . $dbPath);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Create tables if not exists
    $db->exec("
    CREATE TABLE IF NOT EXISTS users (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        username TEXT NOT NULL UNIQUE,
        password TEXT NOT NULL
    );

    CREATE TABLE IF NOT EXISTS posts (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        title TEXT NOT NULL,
        content TEXT NOT NULL,
        created_at DATETIME DEFAULT CURRENT_TIMESTAMP
    );
");
} catch (Exception $e) {
    echo "Failed to connect to Elasticsearch: " . $e->getMessage();
    exit;
}
