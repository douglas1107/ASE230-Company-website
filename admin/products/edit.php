<?php
include('../../lib/read_json.php');

$filepath = '../../data/products.json';

$products_data = readProducts($filepath);

if (!is_array($products_data)) {
    echo "Error: Products data is not available.";
    exit;
}

$id = isset($_GET['id']) ? (int)$_GET['id'] : null;

if (!isset($products_data[$id])) {
    echo "Error: Product with ID $id not found.";
    exit;
}

$product = $products_data[$id];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $updated_product = [
        'name' => $_POST['name'] ?? '',
        'description' => $_POST['description'] ?? '',
        'applications' => !empty($_POST['applications']) ? explode("\n", trim($_POST['applications'])) : []
    ];
    $products_data['products'][$id] = $updated_product;

    if (file_put_contents($filepath, json_encode($products_data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE))) {
        header('Location: index.php');
        exit;
    } else {
        echo "Error: Could not save product data.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
</head>
<body>
    <h2>Edit Product</h2>
    <form method="POST">
        <label for="name">Product Name:</label><br>
        <input type="text" id="name" name="name" value="<?php echo htmlspecialchars($product['name']); ?>" required><br><br>

        <label for="description">Product Description:</label><br>
        <textarea id="description" name="description" required><?php echo htmlspecialchars($product['description']); ?></textarea><br><br>

        <label for="applications">Applications (one per line):</label><br>
        <textarea id="applications" name="applications" required><?php echo htmlspecialchars(implode("\n", $product['applications'])); ?></textarea><br><br>

        <button type="submit">Save Changes</button>
    </form>
</body>
</html>
