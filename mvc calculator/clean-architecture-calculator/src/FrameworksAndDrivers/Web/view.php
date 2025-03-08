<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clean Architecture Calculator</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Clean Architecture Calculator</h1>
    <form method="post" action="">
        <input type="number" name="num1" required placeholder="Enter first number">
        <select name="operation">
            <option value="add">+</option>
            <option value="subtract">-</option>
            <option value="multiply">*</option>
            <option value="divide">/</option>
        </select>
        <input type="number" name="num2" required placeholder="Enter second number">
        <button type="submit">Calculate</button>
    </form>

    <?php if ($result !== ''): ?>
        <h2>Result: <?php echo $result; ?></h2>
    <?php endif; ?>
</body>
</html>