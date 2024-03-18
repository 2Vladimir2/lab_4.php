<?php
function validateForm($name, $mail, $comment, $agree)
{
    $errors = [];

    if (strlen($name) < 3 || strlen($name) > 20 || preg_match("/\d/", $name)) {
        $errors[1] = "Invalid name. It should be 3-20 characters long and contain no digits.";
    }

    if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
        $errors[2] = "Invalid email address.";
    }

    if (empty($comment)) {
        $errors[3] = "Comment cannot be empty.";
    }

    if (!$agree) {
        $errors[4] = "You must agree with data processing.";
    }

    return $errors;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/style.css">
</head>

<body>
    <?php
    $name = $mail = $comment = $agree = "";
    $errors = [];

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        $mail = $_POST["mail"];
        $comment = $_POST["comment"];
        $agree = isset($_POST["agree"]);

        $errors = validateForm($name, $mail, $comment, $agree);
    }
    ?>

    <header>
        <div style="margin: 10px;">
            #my-shop
        </div>
        <div class="header_mid">
            <div class="blocks">Home</div>
            <div class="blocks">Comments</div>
        </div>
        <div class="blocks">Exit</div>
    </header>
    <form method="post">
        <fieldset>
            <legend>
                <h1>#write-comment</h1>
            </legend>
            <div class="e_form">
                <label for="name">Name:
                    <input type="text" name="name" value="<?php echo $name; ?>">
                    <?php echo isset($errors[1]) ? $errors[1] : ""; ?>
                </label>
            </div>
            <div class="e_form">
                <label for="mail">Mail:
                    <input type="email" name="mail" value="<?php echo $mail; ?>">
                    <?php echo isset($errors[2]) ? $errors[2] : ""; ?>
                </label>
            </div>
            <div class="e_form">
                <label for="comment">Comment:<br><br>
                    <textarea name="comment" id="comment" cols="30" rows="10"><?php echo $comment; ?></textarea>
                    <?php echo isset($errors[3]) ? $errors[3] : ""; ?>
                </label>
            </div>
            <div style="margin: 10px; font-size: 12px">
                <input type="checkbox" name="agree" id="agree">
                <label for="agree">Do you agree with data processing?</label>
                <?php echo isset($errors[4]) ? $errors[4] : ""; ?>
            </div>
            <div class="submit">
                <input type="submit" value="Send">
            </div>

        </fieldset>
    </form>
    <?php
    if (empty($errors)) {
    ?>
        <div id="result" class="comment-result">
            <p>Your name: <b><?php echo $name ?></b></p>
            <p>Your e-mail: <b><?php echo $mail ?></b></p>
            <p>Your comment: <b><?php echo $comment ?></b></p>
        </div>
    <?php
    }
    ?>
</body>

</html>
