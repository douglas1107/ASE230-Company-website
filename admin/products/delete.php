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
    unset($products_data[$id]);
    $products_data = array_values($products_data);
    $all_products = ['products' => $products_data];
    if (file_put_contents($filepath, json_encode($all_products, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE))) {
        header('Location: index.php');
        exit;
    } else {
        echo "Error: Could not save product data.";
    }
}
?>

<form method="post">
    <p>Are you sure you want to delete "<?php echo htmlspecialchars($product['name']); ?>"?</p>
    <input type="submit" value="Yes, Delete">
</form>

<a href="index.php">Cancel</a>
