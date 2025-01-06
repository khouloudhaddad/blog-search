<?php

// Full path to the Elasticsearch executable
$elasticsearchPath = "C:\\elasticsearch-8.17.0\\bin\\elasticsearch.bat";

// Check if the Elasticsearch executable exists
if (!file_exists($elasticsearchPath)) {
    die("Elasticsearch executable not found at: $elasticsearchPath\n");
}

// Start Elasticsearch
exec("start /B $elasticsearchPath", $output, $returnCode);

// Check if Elasticsearch started successfully
if ($returnCode !== 0) {
    echo "Failed to start Elasticsearch. Return code: $returnCode\n";
    print_r($output);
} else {
    echo "Elasticsearch started successfully.\n";
}

