<?php
$section = $_GET['section'] ?? null;

$filename = '';
if ($section === 'overview') {
    $filename = '../../data/overview.txt';
} elseif ($section === 'mission') {
    $filename = '../../data/mission_statement.txt';
} else {
    echo "Invalid section.";
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (file_exists($filename)) {
        file_put_contents($filename, "");
        header("Location: index.php");
        exit;
    } else {
        echo "Error: File not found.";
    }
}
?>

<form method="POST">
    <p>Are you sure you want to delete the content of the <?php echo ucfirst($section); ?> section?</p>
    <button type="submit">Yes, Delete</button>
</form>

<a href="index.php">Cancel</a>
