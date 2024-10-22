<?php
include('../../lib/read_csv.php');

$awards = readAwards('../../data/awards.csv'); 
echo "<h2>Awards</h2>";
echo "<table>";
echo "<tr><th>Year</th><th>Award</th></tr>";

foreach ($awards as $index => $award) {
    if (isset($award['Year']) && isset($award['Award'])) {
        echo "<tr>";
        echo "<td>{$award['Year']}</td>";
        echo "<td>{$award['Award']}</td>";
        echo "<td><a href='detail.php?id={$index}'>View</a></td>";
        echo "</tr>";
    } else {
        echo "<tr><td colspan='4'>Invalid data in row</td></tr>";
    }
}

echo "</table>";
echo "<a href='create.php'>Add New Award</a>";
echo "<br></br>";
echo "<a href = '../index.php'>Back to Dashboard</a>";
?>
