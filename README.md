# Лабораторная работа №4

- [Лабораторная работа №4](#лабораторная-работа-4)
    - [Инструкции по запуску проекта](#инструкции-по-запуску-проекта)
    - [Задания](#задания)
    - [Примеры использования](#примеры-использования)
    - [Список использованных источников](#список-использованных-источников)

## Инструкции по запуску проекта
1) Склонируйте репозиторий с проектом: git clone [https://github.com/S1ngle777/Lab_4_PHP.git](https://github.com/S1ngle777/Lab_4_PHP.git).
2) Запустите веб-сервер: php -S localhost:8080.
3) Откройте браузер и перейдите по адресу http://localhost:8080 для доступа к первому заданию.
4) Перейдите по адресу http://localhost:8080/task2.php для доступа ко второму заданию.
5) Перейдите по адресу http://localhost:8080/task3.php для доступа к третьему и четвёртому заданию.
6) Перейдите по адресу http://localhost:8080/task4.php для доступа к домашнему заданию.

## Задания
1. Работа с глобальной переменной $_POST

    1. Интерпретируйте и проанализируйте следующий код

```HTML
<div class="form">
    <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="POST">
        <fieldset>
            <legend>Оставьте отзыв!</legend>
            <div id="main_info" style="display: flex; flex-direction: column; gap: 10px;">
                <div>
                    <label for="name">Имя:
                        <input type="text" name="name" />
                    </label>
                </div>
                <div>
                    <label for="email">Email:
                        <input type="email" name="email" />
                    </label>
                </div>
            </div>
            <div id="extra_info">
                <div>
                    <p><label for="review">Оцените наш сервис!</label></p>
                    <div style="display: flex; flex-direction: column;">
                        <p><input id="review" type="radio" name="review" value="10" checked>Хорошо</p>
                        <p><input id="review" type="radio" name="review" value="8">Удовлетворительно</p>
                        <p><input id="review" type="radio" name="review" value="5">Плохо</p>
                    </div>
                </div>
            </div>
            <div id="message_info">
                <div>
                    <p><label for="comment">Ваш комментарий: </label></p>
                    <textarea id="comment" name="comment" cols="30" rows="10" class="comment"></textarea>
                </div>
            </div>
            <div id="buttons" style="display: flex; flex-direction: row; gap: 10px; margin-top: 10px;">
                <input type="submit" value="Отправить" />
                <input type="reset" value="Удалить" />
            </div>
        </fieldset>
    </form>
    <!-- Добавьте в эту область код, который будет отображать сообщение
только после отправки формы -->
    <div id="result">
        <p>Ваше имя: <b><?php echo $_POST["name"] ?></b></p>
        <p>Ваш e-mail: <b><?php echo $_POST["email"] ?></b></p>
        <p>Оценка товара: <b><?php echo $_POST["review"] ?></b></p>
        <p>Ваше сообщение: <b><?php echo $_POST["comment"] ?></b></p>
    </div>
</div>
```

2. Добавьте в отмеченную область код, который будет отображать сообщение только после отправки формы.

3. Добавьте под формой функцию для проверки данных, гарантирующую заполнение всех полей и корректность введенного e-mail.

4. Объясните, что такое глобальная переменная $_POST и $_SERVER[“PHP_SELF”]

__2. Получение данных с различных контроллеров__

1. Создайте форму, состоящую минимум из 3 контроллеров (input, select)

    1. Минимум 1 input с типом number

    2. Минимум 1 select

2. Тема формы определяется на ваш выбор

3. Обработайте данные и выведите их на экран

__3. Создание, обработка и валидация форм__

1. Создайте форму, показанную на рисунке (Рисунок 1)
2. Создайте собственную функцию валидации, которая будет проверять все поля
формы при получении запроса
    1. Для поля “name”: установите минимальную длину в 3 символа,
максимальную - 20 символов, и запретите использование цифр.
    2. Для поля “mail”: удостоверьтесь, что адрес электронной почты
соответствует стандартам.
    3. Для поля “comment”: удостоверьтесь, что оно не пустое и укажите какиелибо другие необходимые критерии валидации (на ваш выбор).
    4. Убедитесь, что пользователь отметил галочку “Do you agree with data
processing?” перед отправкой формы"

![image](https://github.com/S1ngle777/Lab_4_PHP/assets/128795707/03dd5a32-cd4a-433f-a514-f5fedd033f99)

Рисунок 1. Форма комментариев

4. Если пользователь верно ввел данные, выведите комментарий ниже формы (не
требуется сохранение комментариев где-либо)
5. Чем отличается глобальная переменная $_REQUEST и $_POST?
6. Дополнительно (Данное задание не является оцениваемым, а помогает вам более
подробно погрузиться в изучение PHP)
    1. В качестве валидатора рассмотрите и изучите следующий [класс](https://gist.github.com/devrdn/34999922e3310610b97ecf8708384ece). 

__4. Создание формы__

1. Создайте тест из 3-х вопросов используя input, type radio, и input, type checkbox и
запросите имя пользователя. Проверьте заполнение формы и варианты, выбранные
пользователем. Выведите результаты на экран.


## Примеры использования

1. Работа с глобальной переменной $_POST

1.2. Добавьте в отмеченную область код, который будет отображать сообщение только после отправки формы.

```php
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") { 
        ?>
    <div id="result">
        <p>Ваше имя: <b><?php echo $_POST["name"] ?></b></p>
        <p>Ваш e-mail: <b><?php echo $_POST["email"] ?></b></p>
        <p>Оценка товара: <b><?php echo $_POST["review"] ?></b></p>
        <p>Ваше сообщение: <b><?php echo $_POST["comment"] ?></b></p>
    </div>
    <?php
    }
    ?>
```
1.3. Добавьте под формой функцию для проверки данных, гарантирующую заполнение
всех полей и корректность введенного e-mail.
```php
function validateFormData($name, $email, $review, $comment)
    {
        if (empty($name) || empty($email) || empty($review) || empty($comment)) {
            return false;
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return false;
        }

        return true;
    }
```
1.4. Объясните, что такое глобальная переменная $_POST и $_SERVER[“PHP_SELF”]

`$_POST` и `$_SERVER["PHP_SELF"]` - это предопределенные глобальные переменные в PHP, также известные как суперглобальные переменные.

`$_POST` - это ассоциативный массив, который содержит значения, переданные в текущий скрипт через HTTP метод POST. Это обычно используется для сбора данных из формы. Например, если у вас есть поле формы с именем "email", вы можете получить введенное значение с помощью `$_POST["email"]`.

`$_SERVER["PHP_SELF"]` - это глобальная переменная, которая содержит имя текущего скрипта, который выполняется. Это полезно, когда вы хотите отправить форму на ту же страницу, на которой она находится. 

__2. Получение данных с различных контроллеров__

1. Создайте форму, состоящую минимум из 3 контроллеров (input, select)
```HTML
<fieldset>
        <legend>Форма</legend>

        <form action="task2.php" method="post">
            <label for="fname">Имя:
                <input type="text" id="fname" name="fname">
            </label><br><br>а
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
```
3. Обработайте данные и выведите их на экран

```php
 <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['fname'];
        $age = $_POST['age'];
        $country = $_POST['country'];
        echo "Имя: $name, Возраст: $age, Страна: $country";
    }
    ?>
```

![image](https://github.com/S1ngle777/Lab_4_PHP/assets/128795707/deb322fa-030a-4dd2-ae55-ed22c8f431b1)


__3. Создание, обработка и валидация форм__

![image](https://github.com/S1ngle777/Lab_4_PHP/assets/128795707/3d19d0d2-44dd-405c-b534-acef570d5f5d)

Я ввёл неверно данные:

![image](https://github.com/S1ngle777/Lab_4_PHP/assets/128795707/6ea585d8-b8b1-42b6-bc31-bcb3f6e17e9a)

Я ввёл данные верно:

![image](https://github.com/S1ngle777/Lab_4_PHP/assets/128795707/61f33386-3628-4bd2-9c0c-7766b4bfea7b)

`$_REQUEST` и `$_POST` - это глобальные массивы в PHP, которые содержат данные, переданные в скрипт.

`$_POST` содержит данные, переданные через HTTP POST. Это обычно данные формы, отправленные методом "POST".

`$_REQUEST`, с другой стороны, содержит данные, переданные через HTTP GET, POST и COOKIE. По умолчанию, `$_REQUEST` содержит содержимое `$_GET`, `$_POST` и `$_COOKIE`.

Основное различие между ними заключается в том, что `$_POST` содержит только данные, отправленные методом POST, в то время как `$_REQUEST` может содержать данные из различных источников, в зависимости от конфигурации PHP.


__4. Создание формы__

## Список использованных источников

https://developer.mozilla.org/en-US/docs/Web/HTML/Element/fieldset
