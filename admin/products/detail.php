<?php
include('../../lib/read_json.php');

$products_data = readProducts('../../data/products.json');
 
$filepath = '../../data/products.json';
if (!file_exists($filepath)) {
    echo "Error: File does not exist.";
    exit;
}

$json_content = file_get_contents($filepath);
if ($json_content === false) {
    echo "Error: Failed to read the file.";
    exit;
}

$products_data = json_decode($json_content, true);
if ($products_data === null) {
    echo "Error: Failed to decode JSON. Invalid JSON format.";
    exit;
}


$products = $products_data['products'];

$id = $_GET['id'];

if (!isset($products[$id])) {
    echo "Invalid product ID.";
    exit;
}

$product = $products[$id];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Details</title>
</head>
<body>

    <h2><?php echo $product['name']; ?></h2>
    <p><strong>Description:</strong> <?php echo $product['description']; ?></p>

    <h3>Applications</h3>
    <ul>
        <?php
        foreach ($product['applications'] as $application) {
            echo "<li>$application</li>";
        }
        ?>
    </ul>
    <p>
        <a href="edit.php?id=<?php echo $id; ?>">Edit Product</a> | 
        <a href="delete.php?id=<?php echo $id; ?>">Delete Product</a> | 
        <a href="index.php">Back to Products</a>
    </p>

</body>
</html>
