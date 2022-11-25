<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    include "./tailwind.php";
    include "./header.php";
    include "./connect.php";
    $_SESSION['roulette'] = $array;

    if (!isset($_POST['submit'])) {
        echo "
        <br><br><br><br><br><br><br><br>
        <form action='rouletteinzet.php' method='POST'>
            <input type='text' name='rouletteinzet' id= 'rouletteinzet'placeholder='Enter an amount to bet.' class='w-full mb-3 py-1 px-2 bg-transparent border border-slate-800 rounded focus:outline-none'>
            <input type='submit' name = 'submit' value='Start Game' class='w-full cursor-pointer py-2 mt-2 bg-slate-800 rounded text-white'>
        </form>";
    } else {
        $_SESSION['roulette']['bet'] = $_POST['rouletteinzet'];
        $_SESSION['roulette']['bet'] = $_SESSION['roulette']['bet'] * 100;
        if ($_SESSION['roulette']['bet'] <= $_SESSION['user']['balance']) {
            $sql = 'UPDATE tblusers SET balance = balance - ' .  $_SESSION['roulette']['bet'] . ' WHERE user_id = ' . $_SESSION['user']['user_id'];
            $result = $mysqli->query($sql);
            $_SESSION['user']['balance'] = $_SESSION['user']['balance'] - $_SESSION['roulette']['bet'];
            echo "
            <script>
                $.ajax(
                './updateUserSession.php?user_id=" . $_SESSION['user']['user_id'] . "',{
                    success: function(data) {
                        document.getElementById('balanceText').textContent = '$' + " . $_SESSION['user']['balance'] . " / 100
                    },
                    error: function() {
                        alert('There was some error performing the AJAX call!');
                    }
                }
                );
            </script>";
            $_SESSION['roulette']['bet'] = 0;
        }
    }
    ?>
</body>

</html>