<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $domain = htmlspecialchars($_POST['domain']);
    $industry = htmlspecialchars($_POST['industry']);
    $mission = htmlspecialchars($_POST['mission']);

    $names = generateBusinessNames($domain, $industry, $mission);
}

function generateBusinessNames($domain, $industry, $mission) {
    // Simple algorithm for generating business names
    $words = explode(" ", $mission);
    $names = [];

    foreach ($words as $word) {
        $names[] = ucfirst($domain) . ucfirst($word) . ucfirst($industry);
        $names[] = ucfirst($word) . ucfirst($industry) . ucfirst($domain);
    }

    return $names;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generated Business Names</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Generated Business Names</h1>
        <ul>
            <?php foreach ($names as $name): ?>
                <li><?php echo $name; ?></li>
            <?php endforeach; ?>
        </ul>
        <a href="index.php">Generate Another Name</a>
    </div>
</body>
</html>
