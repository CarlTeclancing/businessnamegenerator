<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Business Name Generator</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Business Name Generator</h1>
        <form action="generate.php" method="post">
            <label for="domain">Business Domain:</label>
            <input type="text" id="domain" name="domain" required>

            <label for="industry">Industry:</label>
            <input type="text" id="industry" name="industry" required>

            <label for="mission">Business Mission:</label>
            <input type="text" id="mission" name="mission" required>

            <button type="submit">Generate Name</button>
        </form>
    </div>
</body>
</html>
