<?php
include('../../lib/read_csv.php');

$id = $_GET['id'];
$team_members = readTeam('../../data/team.csv');
$member = $team_members[$id];

if ($_POST) {
    $team_members[$id]['name'] = $_POST['name'];
    $team_members[$id]['title'] = $_POST['title'];
    $team_members[$id]['bio'] = $_POST['bio'];
    $handle = fopen('../../data/team.csv', 'w');
    fputcsv($handle, ['name', 'title', 'bio', 'image']);
    foreach ($team_members as $row) {
        fputcsv($handle, $row);
    }
    fclose($handle);
    header("Location: index.php");
    exit;
}
?>
<form method="post">
    <label>Name: <input type="text" name="name" value="<?php echo $member['name']; ?>" required></label><br>
    <label>Title: <input type="text" name="title" value="<?php echo $member['title']; ?>" required></label><br>
    <label>Bio: <textarea name="bio" required><?php echo $member['bio']; ?></textarea></label><br>
    <input type="submit" value="Save Changes">
</form>

<a href="index.php">Cancel</a>
