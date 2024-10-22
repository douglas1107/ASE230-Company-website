<?php
include('../../lib/read_json.php');

$products = readProducts('../../data/products.json');

echo "<h2>Products</h2>";
echo "<table border='1' cellpadding='10'>";
echo "<tr><th>Product</th><th>Description</th><th>Applications</th><th>Actions</th></tr>";

foreach ($products as $index => $product) {
    if (isset($product['name']) && isset($product['description']) && isset($product['applications'])) {
        echo "<tr>";
        echo "<td>{$product['name']}</td>";
        echo "<td>{$product['description']}</td>"; 
        echo "<td>";
        echo implode('<br>', $product['applications']);
        echo "</td>";

        echo "<td>
                <a href='detail.php?id={$index}'>View</a> | 
              </td>";
        echo "</tr>";
    } else {
        echo "<tr><td colspan='3'>Invalid data in row</td></tr>";
    }
}
echo "</table>";
echo "<a href='create.php'>Add New Product</a>";
echo "<br></br>";
echo "<a href = '../index.php'>Back to Dashboard</a>";
?>
