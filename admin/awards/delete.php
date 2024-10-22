<?php
include('../../lib/read_csv.php');

$id = $_GET['id']; 
$awards = readAwards('../../data/awards.csv'); 
$award = $awards[$id];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $handle = fopen('../../data/awards.csv', 'w');
    fputcsv($handle, ['Year', 'Award']); 
    foreach ($awards as $index => $award_data) {
        if ($index != $id) { 
            fputcsv($handle, $award_data);
        }
    }
    fclose($handle);

    header("Location: index.php");
    exit;
}
?>
<form method="post">
    <p>Are you sure you want to delete the following award?</p>
    <p><strong>Year:</strong> <?php echo $award['Year']; ?></p>
    <p><strong>Award:</strong> <?php echo $award['Award']; ?></p>
    <input type="submit" value="Yes, Delete">
</form>

<a href="index.php">Cancel</a>
