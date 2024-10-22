<?php
include('../../lib/read_csv.php');

$csv_file = '../../data/team.csv';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $title = $_POST['title'];
    $bio = $_POST['bio'];
    $image = $_POST['image'];

    $handle = fopen($csv_file, 'a');
    fputcsv($handle, [$name, $title, $bio, $image]);
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
    <title>Create New Team Member</title>
</head>
<body>
    <h2>Add a New Team Member</h2>

    <form action="create.php" method="post">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" required><br><br>

        <label for="title">Title:</label><br>
        <input type="text" id="title" name="title" required><br><br>

        <label for="bio">Bio:</label><br>
        <textarea id="bio" name="bio" rows="4" cols="50" required></textarea><br><br>

        <label for="image">Image Path (e.g., images/team/img-1.jpg):</label><br>
        <input type="text" id="image" name="image" required><br><br>

        <input type="submit" value="Add Team Member">
    </form>

    <br>
    <a href="index.php">Back to Team List</a>
</body>
</html>
