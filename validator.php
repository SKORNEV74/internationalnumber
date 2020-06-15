<?php

$phone = $_POST['phone'];

$phone = trim($phone);

if (preg_match('/^[+]?\s?[7|8](\D*\d){10}$/', $phone)) echo 'Валидно! ';
else echo 'Не валидно! ';

echo '<a href="index.php">Попробуем еще?</a>';