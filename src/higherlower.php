<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hoger Lager</title>
</head>

<body class="bg-slate-700">
    <?php
    include "./tailwind.php";
    include "./header.php";
    include "./connect.php";
    ?>
    <div class="pt-20">
        <?php
        if (isset($_POST['higher'])) {
        }
        if (isset($_POST['lower'])) {
        }

        // Bet
        echo '
            <input type="number" name="bet" max="' . $_SESSION['user']['balance'] . '">
            <p>Balance: ' . $_SESSION['user']['balance'] . '</p>
        ';
        ?>
    </div>
</body>

</html>