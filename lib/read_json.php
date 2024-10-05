<?php
function readProducts($filename) {
    if (!file_exists($filename) || !is_readable($filename)) {
        return [];
    }

    // Read the JSON file
    $jsonData = file_get_contents($filename);

    // Decode JSON data into an associative array
    $products = json_decode($jsonData, true);

    // Return the products array, or an empty array if JSON decoding fails
    return $products['products'] ?? [];
}
?>
