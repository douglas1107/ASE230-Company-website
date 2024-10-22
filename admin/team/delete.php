<?php
include('../../lib/read_csv.php');

$id = $_GET['id'];
$team_members = readTeam('../../data/team.csv');
$member = $team_members[$id];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $handle = fopen('../../data/team.csv', 'w');
    fputcsv($handle, ['name', 'title', 'bio', 'image']);
    foreach ($team_members as $index => $team_member) {
        if ($index != $id) {
            fputcsv($handle, $team_member);
        }
    }
    fclose($handle);
    header("Location: index.php");
    exit;
}
?>
<form method="post">
    <p>Are you sure you want to delete <?php echo $member['name']; ?>?</p>
    <input type="submit" value="Yes, Delete">
</form>

<a href="index.php">Cancel</a>
