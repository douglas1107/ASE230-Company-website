<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        .dashboard-container {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
        }

        .dashboard-item {
            background-color: #f4f4f4;
            padding: 20px;
            border-radius: 10px;
            width: 200px;
            text-align: center;
            margin: 10px;
        }

        .dashboard-item a {
            text-decoration: none;
            font-size: 18px;
            color: #333;
        }

        .dashboard-item a:hover {
            color: #007bff;
        }
    </style>
</head>
<body>

    <h1>Admin Dashboard</h1>
    <p>Welcome to the admin dashboard. Use the links below to manage different sections of your website.</p>

    <div class="dashboard-container">
        <?php
        $sections = [
            ['title' => 'Products', 'link' => 'products/index.php'],
            ['title' => 'Team Members', 'link' => 'team/index.php'],
            ['title' => 'Awards', 'link' => 'awards/index.php'],
            ['title' => 'Company Information', 'link' => 'pages/index.php'],
            ['title' => 'Contact Requests', 'link' => 'contacts/index.php']
        ];

        // Loop through sections and generate dashboard items
        foreach ($sections as $section) {
            echo "<div class='dashboard-item'>";
            echo "<h3>" . $section['title'] . "</h3>";
            echo "<a href='" . $section['link'] . "'>Manage " . $section['title'] . "</a>";
            echo "</div>";
        }
        ?>
    </div>

</body>
</html>
