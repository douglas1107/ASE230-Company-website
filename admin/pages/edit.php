<?php
include('../../lib/read_plain_text.php');

$section = $_GET['section'] ?? null;

$filename = '';
if ($section === 'overview') {
    $filename = '../../data/overview.txt';
    $content = readPlainTxt($filename);
} elseif ($section === 'mission') {
    $filename = '../../data/mission_statement.txt';
    $content = readPlainTxt($filename);
} else {
    echo "Invalid section.";
    exit;
}

if ($_POST) {
    $new_content = $_POST['content'] ?? '';
    if (file_put_contents($filename, $new_content)) {
        header("Location: index.php");
        exit;
    } else {
        echo "Error saving content.";
    }
}
?>

<form method="POST">
    <label for="content">Edit Content:</label><br>
    <textarea name="content" id="content" required><?php echo implode("\n", $content); ?></textarea><br><br>
    <button type="submit">Save Changes</button>
</form>

<a href="index.php">Cancel</a>
