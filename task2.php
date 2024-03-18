<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <fieldset>
        <legend>Форма</legend>

        <form action="task2.php" method="post">
            <label for="sname">Имя:
                <input type="text" id="fname" name="fname">
            </label><br><br>
            <label for="age">Возраст:
                <input type="number" id="age" name="age">
            </label><br><br>
            <label for="country">Страна:
                <select id="country" name="country">
                    <option value="Молдова">Молдова</option>
                    <option value="Германия">Германия</option>
                    <option value="Франция">Франция</option>
                </select>
            </label><br><br>
            <input type="submit" value="Отправить">
        </form>
    </fieldset>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['fname'];
        $age = $_POST['age'];
        $country = $_POST['country'];
        echo "Имя: $name, Возраст: $age, Страна: $country";
    }
    ?>
</body>

</html>
