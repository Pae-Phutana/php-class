<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beautiful Calculator</title>
    <style>
    </style>
</head>
<body>

    <h2>Beautiful Calculator</h2>

    <form id="calculatorForm" method="post" action="calculator_result.php">
        <label for="num1">Number 1:</label>
        <input type="text" id="num1" name="num1" required>

        <label for="operator">Operator:</label>
        <select id="operator" name="operator" required>
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>

        <label for="num2">Number 2:</label>
        <input type="text" id="num2" name="num2" required>

        <button type="submit">Calculate</button>
    </form>

    <div id="result">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $num1 = floatval($_POST["num1"]);
            $num2 = floatval($_POST["num2"]);
            $operator = $_POST["operator"];
            
            switch ($operator) {
                case '+':
                    $result = $num1 + $num2;
                    break;
                case '-':
                    $result = $num1 - $num2;
                    break;
                case '*':
                    $result = $num1 * $num2;
                    break;
                case '/':
                    $result = $num1 / $num2;
                    break;
                default:
                    $result = 'Invalid operator';
            }
            
            echo 'Result: ' . $result;
        }
        ?>
    </div>

</body>
</html>
