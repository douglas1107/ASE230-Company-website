<?php
include('../../lib/read_csv.php');

$awards = readAwards('../../data/awards.csv');

$id = isset($_GET['id']) ? (int)$_GET['id'] : -1;

if ($id >= 0 && $id < count($awards)) {
    $awards = $awards[$id];
} else {
    echo "Invalid Award.";
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['delete'])) {
    $file = fopen('../../data/awards.csv', 'w');
    fputcsv($file, ['Year', 'Award']);
    foreach ($awards as $index => $award) {
        if ($index != $id) { 
            fputcsv($file, [$award['Year'], $award['Award']]);
        }
    }
    fclose($file);
    header('Location: index.php');
    exit;
}

echo "<h2>{$awards['Year']}</h2>";
echo "<p><strong>Title:</strong> {$awards['Award']}</p>";

?>

<a href="delete.php?id=<?= $id ?>">Delete Award</a><br><br>
<a href="edit.php?id=<?= $id ?>">Edit Award</a><br><br>
<a href="index.php">Back to Awards</a>
