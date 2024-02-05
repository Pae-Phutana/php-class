<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade Calculator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 50px;
        }

        form {
            display: inline-block;
            text-align: left;
            border: 2px solid #ccc;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input, select {
            margin: 5px;
            padding: 10px;
            width: 80%;
            box-sizing: border-box;
        }

        button {
            margin-top: 10px;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }

        #result {
            font-size: 24px;
            font-weight: bold;
            margin-top: 20px;
        }
    </style>
</head>
<body>

    <h2>Grade Calculator</h2>

    <form action="" method="post">
        <label for="score">Enter your score:</label>
        <input type="text" id="score" name="score" required>

        <button type="submit">Calculate Grade</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $score = floatval($_POST["score"]);

        if ($score >= 80) {
            $grade = 'A';
        } elseif ($score >= 70) {
            $grade = 'B';
        } elseif ($score >= 60) {
            $grade = 'C';
        } elseif ($score >= 50) {
            $grade = 'D';
        } else {
            $grade = 'F';
        }

        echo '<div id="result">Your Grade: ' . $grade . '</div>';
    }
    ?>

</body>
</html>
