<?php
include('../../lib/read_plain_text.php');

$section = $_GET['section'] ?? null;

if ($section === 'overview') {
    $content = readPlainTxt('../../data/overview.txt');
} elseif ($section === 'mission') {
    $content = readPlainTxt('../../data/mission_statement.txt');
} else {
    echo "Invalid section.";
    exit;
}

echo "<h2>Detail View - " . ucfirst($section) . "</h2>";
echo "<p>" . implode("\n", $content) . "</p>";

echo "<a href='edit.php?section=$section'>Edit</a> | <a href='delete.php?section=$section'>Delete</a>";
echo "<br></br>";
echo "<a href='index.php'>Back to information</a>";
?>