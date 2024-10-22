<?php
include('../../lib/read_csv.php');

$team_members = readTeam('../../data/team.csv'); 
echo "<h2>Team Members</h2>";
echo "<table>";
echo "<tr><th>Image</th><th>Name</th><th>Title</th><th>Bio</th></tr>";

foreach ($team_members as $index => $member) {
    if (isset($member['name']) && isset($member['title']) && isset($member['bio']) && isset($member['image'])) {
        $image_path = '../../' . $member['image'];

        echo "<tr>";
        echo "<td><img src='{$image_path}' alt='{$member['name']}' width='50'></td>";
        echo "<td>{$member['name']}</td>";
        echo "<td>{$member['title']}</td>";
        echo "<td>{$member['bio']}</td>";
        echo "<td><a href='detail.php?id={$index}'>View</a></td>";
        echo "</tr>";
    } else {
        echo "<tr><td colspan='4'>Invalid data in row</td></tr>";
    }
}

echo "</table>";
echo "<a href='create.php'>Add New Team Member</a>";
echo "<br></br>";
echo "<a href = '../index.php'>Back to Dashboard</a>";
?>
