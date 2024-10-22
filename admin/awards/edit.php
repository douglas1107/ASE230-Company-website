<?php
include('../../lib/read_csv.php');

$id = $_GET['id'];
$awards = readAwards('../../data/awards.csv');
$award = $awards[$id];

if ($_POST) {
    $awards[$id]['Year'] = $_POST['Year'];
    $awards[$id]['Award'] = $_POST['Award'];
    $awards[$id]['bio'] = $_POST['bio'];
    $handle = fopen('../../data/awards.csv', 'w');
    fputcsv($handle, ['Year', 'Award']);
    foreach ($awards as $row) {
        fputcsv($handle, $row);
    }
    fclose($handle);
    header("Location: index.php");
    exit;
}
?>
<form method="post">
    <label>Year: <input type="text" name="Year" value="<?php echo $award['Year']; ?>" required></label><br>
    <label>Award: <input type="text" name="Award" value="<?php echo $award['Award']; ?>" required></label><br>
    <input type="submit" value="Save Changes">
</form>

<a href="index.php">Cancel</a>