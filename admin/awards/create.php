<?php
include('../../lib/read_csv.php');

$csv_file = '../../data/awards.csv';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $year = $_POST['Year'];
    $award = $_POST['Award'];

    $handle = fopen($csv_file, 'a');
    fputcsv($handle, [$year, $award]);
    fclose($handle);
    header('Location: index.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add a New Award</title>
</head>
<body>
    <h2>New Award</h2>

    <form action="create.php" method="post">
        <label for="Year">Year:</label><br>
        <input type="text" id="Year" name="Year" required><br><br>

        <label for="Award">Award:</label><br>
        <input type="text" id="Award" name="Award" required><br><br>

        <input type="submit" value="Add Award">
    </form>

    <br>
    <a href="index.php">Back to Award List</a>
</body>
</html>
