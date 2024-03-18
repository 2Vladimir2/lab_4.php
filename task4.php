<!DOCTYPE html>
<html>

<head>
    <title>Тест</title>
</head>

<body>
    <h1>Тест</h1>
    <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <label for="name">Имя:</label>
        <input type="text" name="name" id="name"><br><br>

        <label for="question1">Столица Молдовы</label><br>
        <input type="radio" name="question1" value="Лондон"> Лондон<br>
        <input type="radio" name="question1" value="Кишинёв"> Кишинёв<br>
        <input type="radio" name="question1" value="Берлин"> Берлин<br><br>

        <label for="question2">Какие из перечисленных языков являются языками программирования?</label><br>
        <input type="checkbox" name="question2[]" value="PHP"> PHP<br>
        <input type="checkbox" name="question2[]" value="HTML"> HTML<br>
        <input type="checkbox" name="question2[]" value="CSS"> CSS<br><br>

        <label for="question3">Кто изображен на американской купюре в 1 доллар?</label><br>
        <input type="radio" name="question3" value="Авраам Линкольн"> Авраам Линкольн<br>
        <input type="radio" name="question3" value="Джеймс Мэдисон"> Джеймс Мэдисон<br>
        <input type="radio" name="question3" value="Джордж Вашингтон"> Джордж Вашингтон<br><br>

        <input type="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $name = $_POST["name"];
        $answer1 = $_POST["question1"];
        $answer2 = $_POST["question2"];
        $answer3 = $_POST["question3"];

        $errors = [];
        if (empty($name)) {
            $errors[] = "Введите имя.";
        }
        if (empty($answer1) || empty($answer2) || empty($answer3)) {
            $errors[] = "Пожалуйста, ответьте на все вопросы.";
        }

        if (empty($errors)) {
            echo "Имя: " . $name . "<br>";
            echo "Вопрос 1: " . $answer1 . "<br>";
            echo "Вопрос 2: ";
            if (is_array($answer2)) {
                echo implode(", ", $answer2);
            } else {
                echo $answer2;
            }
            echo "<br>";
            echo "Вопрос 3: " . $answer3 . "<br>";
        } else {
            foreach ($errors as $error) {
                echo $error . "<br>";
            }
        }
    }
    ?>
</body>

</html>
