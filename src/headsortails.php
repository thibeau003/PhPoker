

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body class="bg-slate-700">
    <?php
        require_once "./header.php";
        require_once "./connect.php";

        if (isset($_POST['bet'])) {
            $_SESSION['headsortails']['bet'] = $_POST['amount'] * 100;
            if ($_SESSION['headsortails']['bet'] <= $_SESSION['user']['balance']) {
                $sql = 'UPDATE tblusers SET balance = balance - '.$_SESSION['headsortails']['bet'].' WHERE user_id = '.$_SESSION['user']['user_id'];
                $result = $mysqli->query($sql);
                $_SESSION['user']['balance'] = $_SESSION['user']['balance'] - $_SESSION['headsortails']['bet'];
                echo "
                        <script>
                            $.ajax(
                            './updateUserSession.php?user_id=". $_SESSION['user']['user_id'] ."',
                            {
                                success: function(data) {
                                    console.log(data)
                                    document.getElementById('balanceText').textContent = '$' + ". $_SESSION['user']['balance'] ." / 100
                                },
                                error: function() {
                                    alert('There was some error performing the AJAX call!');
                                }
                            }
                            );
                        </script>"
                        ;
                echo "<br>";
            }
        } else {
            echo '
                <div class="container mx-auto pt-20">
                    <p class="text-center text-xl font-semibold text-white">Heads or tails</p>                
                        <div class="mt-10 w-2/3 mx-auto">
                            <form method="post">
                                <button>
                        </div>
                </div>';    
        }

        if (!isset($_POST['bet'])) {
            echo '
                <div class="h-screen w-screen flex justify-center items-center">
                    <div class="h-1/2 w-1/3 rounded-xl">
                        <form class="h-full flex flex-col justify-between mx-5" method="POST">
                            <div class="w-full">
                                <div class="w-3/4 mx-auto">
                                    <label for="amount">Amount</label>
                                    <br>
                                    <input class="w-full bg-transparent border-b-2 border-slate-700 focus:outline-none" type="text" id="amount" name="amount" required>
                                </div>
                            </div>
                            <button type="submit" name="bet">Bet!</button>
                        </form>
                    </div>
                </div>
            ';
        } else {

        $_SESSION['blackjack']['bet'] = $_POST['amount'] * 100;

            if ($_SESSION['blackjack']['bet'] <= $_SESSION['user']['balance']) {
                $sql = 'UPDATE tblusers SET balance = balance - '.$_SESSION['blackjack']['bet'].' WHERE user_id = '.$_SESSION['user']['user_id'];
                $result = $mysqli->query($sql);
                $_SESSION['user']['balance'] = $_SESSION['user']['balance'] - $_SESSION['blackjack']['bet'];
                echo "
                        <script>
                            $.ajax(
                            './updateUserSession.php?user_id=". $_SESSION['user']['user_id'] ."',
                            {
                                success: function(data) {
                                    console.log(data)
                                    document.getElementById('balanceText').textContent = '$' + ". $_SESSION['user']['balance'] ." / 100
                                },
                                error: function() {
                                    alert('There was some error performing the AJAX call!');
                                }
                            }
                            );
                        </script>"
                        ;
                echo "<br>";
            }
        }



    ?>
    
</body>
</html>