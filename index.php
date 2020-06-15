<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Day 1</title>
    <script src="scripts/check.js"></script>
</head>
<body>

<form method="post" action="validator.php">
    <p><label for="phone">Введите телефон в международном формате:</label></p>
    <p>
        <input type="text" name="phone" maxlength="27" required oninput="check(this)" id="phone">
        <input type="submit" value="Валидно?">
    </p>
</form>

</body>
</html>