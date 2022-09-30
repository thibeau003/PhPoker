<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Higher Lower</title>
</head>

<body class="bg-slate-700">
    <?php
    include "./tailwind.php";
    include "./header.php";
    include "./connect.php";
    session_start()
    ?>
    <div class="pt-20 text-center text-white">
        <?php
        if (isset($_POST['higher'])) {
        }
        if (isset($_POST['lower'])) {
        }
        print '<div>
        <button class="bg-slate-800 rounded-xl p-2 mb-5" type="submit" name="higher">higher</button>
        <button class="bg-slate-800 rounded-xl p-2 mb-5" type="submit" name="lower">Lower</button>
        </div>';

        // Bet
        echo '
            <label for="bet">Bet</label>
            <br>
            <input class="bg-slate-800 rounded-lg border-white border-2 text-center" type="number" name="bet" max="' . $_SESSION['user']['balance'] . '" required>
            <p>Balance: ' . $_SESSION['user']['balance'] . '</p>
        ';
        ?>
    </div>
</body>

</html>