<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Higher Lower</title>
    <script src="higherlower.js"></script>
</head>

<body class="bg-slate-700">
    <?php
    include "./tailwind.php";
    include "./header.php";
    include "./connect.php";
    ?>
    <div class="pt-20 text-center text-white absolute inset-x-0 bottom-20">
        <div class="grid grid-cols-3 container mx-auto text-center mb-10">
            <?php
            $number = rand(1, 52);
            $number2 = rand(1, 52);
            echo '<img class="mx-auto" src="./assets/cards/' . $number . '.png" width="65%">';
            echo '<img class="opacity-0	 mx-auto" src="./assets/cards/' . $number2 . '.png" width="65%" id="speelkaart">';
            echo '<img class="mx-auto" src="./assets/cards/' . $number . '.png" width="65%">';
            ?>
        </div>
        <?php

        if (isset($_POST['higher'])) {
            
        }
        if (isset($_POST['lower'])) {
        }
        print '<div>
        <form method="post" action="higherLower.php">
        <button class="bg-slate-800 square-lg p-8 mb-5" type="submit" onclick="changeOpacity();" name="higher">Higher &#8593</button>
        <button class="bg-slate-800 square-lg p-8 mb-5" type="submit" name="lower">Lower &#8595</button>
        </form>
        </div>';

        // Bet
        echo '
            <label for="bet">Bet</label>
            <br>
            <input class="bg-slate-800 rounded-lg border-white border-2 text-center" type="number" name="bet" max="' . $_SESSION['user']['balance'] . '"  min="0" required>
            <p>Balance: ' . $_SESSION['user']['balance'] . '</p>
        ';
        ?>
    </div>
</body>

</html>