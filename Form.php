Task 1.
<form action="" method="POST">
    <input type="number" name="number" required>
    <input type="submit" value="Concert">
</form>
<?php
if (isset($_POST['number'])) {
    $celsius = (float)$_POST['number'];
    $fahrenheit = $celsius * 1.8 + 32;
    echo htmlspecialchars($celsius) . "°C = " . htmlspecialchars($fahrenheit) . "°F";
}
?>

<!--1) isset(): Проверяет, что параметр number существует, прежде чем пытаться использовать его.
2) (float): Преобразует значение в число с плавающей точкой, чтобы избежать ошибок с типами данных.
3) htmlspecialchars(): Защищает от XSS-атак, если кто-то вставит вредоносный код в поле ввода.
4) step="0.1": Позволяет вводить дробные значения.
5) required: Указывает браузеру, что поле ввода обязательно для заполнения.-->

Task 2.
<form action="" method="post">
    <label for="number1">Введите число:</label>
    <input type="number" name="number1" id="number1" min="0" step="1" required>
    <button type="submit">Вычислить факториал</button>
</form>

<?php
if (isset($_POST['number1'])) {
    $number = (int)$_POST['number1'];

    // Проверка на неотрицательное целое число
    if ($number < 0) {
        echo "Факториал определен только для неотрицательных чисел.";
    } else {
        // Вычисление факториала
        $factorial = 1;
        for ($i = 1; $i <= $number; $i++) {
            $factorial *= $i;
        }

        echo "Факториал числа $number = $factorial";
    }
}
?>