<?php
include('../../lib/read_csv.php');

$team_members = readTeam('../../data/team.csv');

$id = isset($_GET['id']) ? (int)$_GET['id'] : -1;

if ($id >= 0 && $id < count($team_members)) {
    $member = $team_members[$id];
} else {
    echo "Invalid team member ID.";
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['delete'])) {
    $file = fopen('../../data/team.csv', 'w');
    fputcsv($file, ['Name', 'Title', 'Bio', 'image']);
    foreach ($team_members as $index => $team_member) {
        if ($index != $id) { 
            fputcsv($file, [$team_member['name'], $team_member['title'], $team_member['bio'], $team_member['image']]);
        }
    }
    fclose($file);
    header('Location: index.php');
    exit;
}

echo "<h2>{$member['name']}</h2>";
echo "<p><strong>Title:</strong> {$member['title']}</p>";
echo "<p><strong>Bio:</strong> {$member['bio']}</p>";
echo "<p><img src='../../{$member['image']}' alt='{$member['name']}' width='100'></p>";

?>

<a href="delete.php?id=<?= $id ?>">Delete Team Member</a><br><br>
<a href="edit.php?id=<?= $id ?>">Edit Team Member</a><br><br>
<a href="index.php">Back to Team List</a>
