<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 50px;
        }

        form {
            display: inline-block;
            text-align: left;
        }

        input {
            margin: 5px;
            padding: 5px;
        }
    </style>
</head>
<body>

    <h2>Grade Calculator</h2>

    <form action="graderes.php" method="post">
        <label for="score">Enter your score:</label>
        <input type="text" name="score" required>

        <input type="submit" value="Calculate Grade">
    </form>

</body>
</html>
