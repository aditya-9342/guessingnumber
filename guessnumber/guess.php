<?php

if (isset($_POST["submit"])) {
    $number = $_POST["number"];
    $guess = $_POST["guess"];

    if ($guess % 2 == 0) {
        $message = " you guessed an wrong number!!";
    } else {
        if ($guess == $number) {
            $message = " Answer is correct!";
            $number = rand(1, 15);
            $number = $number | 1;
        } elseif ($guess < $number) {
            $message = " try a bigger one";
        } elseif ($guess > $number) {
            $message = " try a smaller one";
        }
    }
} else {
    $message = " Guess the number!!";
    $number = rand(1, 15);
    $number = $number | 1;
}

?>
<!DOCTYPE html>
<html>

<head>
    <title>A simple HTML form</title>
</head>

<body style="background-color:#deeaee;">
    <h3><?php echo $message; ?></h3>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" class="content">
        <style>
            .content {
                border-style: outset;
                border-color: #d1f386;
                border-width: 8px;
                max-width: 500px;
            
                
            }
        </style>
        <p>
            <label for="guess" style="color:#774181 ;">Can you Guess an number between 1 and 15!!!</label><br />
            <input type="text" id="guess" name="guess" style="background-color:#e6e2d3 ;">
        </p>
        <p>
            <input type="hidden" name="number" value="<?php echo $number; ?>">
            <button type="submit" name="submit" value="submit" style="background-color: #eea29a;">Check</button>
        </p>
    </form>
</body>

</html>