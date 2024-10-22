<?php
include('../../lib/read_json.php');

$filepath = '../../data/products.json';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $products_data = json_decode(file_get_contents($filepath), true);
    
    if (!isset($products_data['products']) || !is_array($products_data['products'])) {
        $products_data['products'] = [];
    }
    $new_product = [
        'name' => $_POST['name'],
        'description' => $_POST['description'],
        'applications' => explode("\n", trim($_POST['applications']))
    ];

    $products_data['products'][] = $new_product;
    $json_data = json_encode($products_data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
    if (file_put_contents($filepath, $json_data)) {
        header('Location: index.php');
        exit;
    } else {
        echo "Error: Could not save data.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New Product</title>
</head>
<body>

    <h2>Create New Product</h2>
    <form method="POST">
        <label for="name">Product Name:</label><br>
        <input type="text" id="name" name="name" required><br><br>

        <label for="description">Product Description:</label><br>
        <textarea id="description" name="description" required></textarea><br><br>

        <label for="applications">Applications (one per line):</label><br>
        <textarea id="applications" name="applications" required></textarea><br><br>

        <input type="submit" value="Create Product">
    </form>

    <p><a href="index.php">Back to Products</a></p>

</body>
</html>
