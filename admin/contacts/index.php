<?php
include('../../lib/read_csv.php');

$filepath = '../../data/contact_req.csv';

$contacts = readContacts($filepath);

echo "<h2>Contact Requests</h2>";
echo "<table>";
echo "<tr><th>Name</th><th>Email</th><th>Phone</th><th>Message</th></tr>";


foreach ($contacts as $id => $contact) {
    echo "<tr>";
    echo "<td>" . htmlspecialchars($contact['name']) . "</td>";
    echo "<td>" . htmlspecialchars($contact['email']) . "</td>";
    echo "<td>" . htmlspecialchars($contact['phone']) . "</td>";
    echo "<td>" . htmlspecialchars($contact['message']) . "</td>";
    echo "<td><a href='detail.php?id=$id'>View</a></td>";
    echo "</tr>";
}


echo "</table>";
echo "<br></br>";
echo "<a href = '../index.php'>Back to Dashboard</a>";
?>
