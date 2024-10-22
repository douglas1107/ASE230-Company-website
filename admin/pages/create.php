<?php
if ($_POST) {
    $section = $_POST['section'] ?? '';
    $content = $_POST['content'] ?? '';
    
    $filename = '';
    if ($section === 'overview') {
        $filename = '../../data/overview.txt';
    } elseif ($section === 'mission') {
        $filename = '../../data/mission_statement.txt';
    }
    
    if ($filename) {
        if (file_put_contents($filename, "\n" . $content, FILE_APPEND)) {
            header("Location: index.php");
            exit;
        } else {
            echo "Error saving content.";
        }
    }
}
?>

<form method="POST">
    <label for="section">Select Section:</label><br>
    <select name="section" id="section">
        <option value="overview">Overview</option>
        <option value="mission">Mission Statement</option>
    </select><br><br>

    <label for="content">Content:</label><br>
    <textarea name="content" id="content" required></textarea><br><br>

    <button type="submit">Create Section</button>
</form>

<a href="index.php">Cancel</a>
