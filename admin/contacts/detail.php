<?php
include('../../lib/read_csv.php');

$filepath = '../../data/contact_req.csv';

$contacts = readContacts($filepath);

$id = isset($_GET['id']) ? (int)$_GET['id'] : null;


$contact = $contacts[$id];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Request Detail</title>
</head>
<body>
    <h2>Contact Request Details</h2>
    <p><strong>Name:</strong> <?php echo htmlspecialchars($contact['name']); ?></p>
    <p><strong>Email:</strong> <?php echo htmlspecialchars($contact['email']); ?></p>
    <p><strong>Phone:</strong> <?php echo htmlspecialchars($contact['phone']); ?></p>
    <p><strong>Message:</strong> <?php echo htmlspecialchars($contact['message']); ?></p>

    <br>
    <a href="index.php">Back to Contacts Request List</a>
</body>
</html>

