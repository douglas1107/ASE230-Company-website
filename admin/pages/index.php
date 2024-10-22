<?php
include('../../lib/read_plain_text.php');

$overview = readPlainTxt('../../data/overview.txt');
$mission_statement = readPlainTxt('../../data/mission_statement.txt');

echo "<h2>Company Overview and Mission</h2>";

echo "<h3>Overview</h3>";
echo "<p>" . implode("\n", $overview) . "</p>";
echo "<a href='detail.php?section=overview'>View Overview</a><br><br>";

echo "<h3>Mission Statement</h3>";
echo "<p>" . implode("\n", $mission_statement) . "</p>";
echo "<a href='detail.php?section=mission'>View Mission Statement</a><br><br>";

echo "<a href='create.php'>Add New Section</a>";
echo "<br></br>";
echo "<a href = '../index.php'>Back to Dashboard</a>";
?>
