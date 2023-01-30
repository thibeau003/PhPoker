

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
        
        echo '<a class="pt-20 text-white float-left ml-12 text-xl" href="./index.php">&#x2190 Back</a>';

        if (isset($_POST['amount']) && isset($_SESSION['user'])) {
            $_SESSION['headsortails']['bet'] = $_POST['amount'] * 100;
            if ($_SESSION['headsortails']['bet'] <= $_SESSION['user']['balance']) {
                $stmt = $mysqli->prepare("UPDATE tblusers SET balance = balance - ? WHERE user_id = ?");
                $stmt->bind_param('ii', $_SESSION['headsortails']['bet'], $_SESSION['user']['user_id']);
                $stmt->execute(); 
                $result = $stmt->get_result();

                $_SESSION['user']['balance'] = $_SESSION['user']['balance'] - $_SESSION['headsortails']['bet'];
                echo "<script>document.getElementById('balanceText').textContent = '$". $_SESSION['user']['balance'] / 100 ."'</script>";
                echo "<br>";

                $right = rand(0, 1);

                echo "<div class='w-full flex justify-center'>";
                switch ($right) {
                    case 0:
                        $right = "heads";
                        echo '<img src="./assets/coin/0.png" class="mx-auto">';
                        break;
                    case 1:
                        $right = "tails";
                        echo '<img src="./assets/coin/1.png" class="mx-auto">';
                        break;
                }
                echo "</div>";
                
                if(isset($_POST['guess0']) && $right == $_POST['guess0']){
                    $stmt = $mysqli->prepare("UPDATE tblusers SET balance = balance + ? WHERE user_id = ?");
                    $var = $_SESSION['headsortails']['bet'] * 1.9;
                    $stmt->bind_param('ii', $var, $_SESSION['user']['user_id']);
                    $stmt->execute(); 
                    $result = $stmt->get_result();

                    $_SESSION['user']['balance'] = $_SESSION['user']['balance'] + $_SESSION['headsortails']['bet']*1.9;
                    echo "<script>document.getElementById('balanceText').textContent = '$". $_SESSION['user']['balance'] / 100 ."'</script>";
                    echo '
                        <div class="container mx-auto pt-8">               
                            <div class="text-center">
                                <div class="flex flex-row h-auto my-1 justify-center">
                                    <p class="text-white text-xl font-semibold">You have won!</p>
                                </div>
                             </div>
                        </div>';
                } else if (isset($_POST['guess1']) && $right == $_POST['guess1']) {
                    $stmt = $mysqli->prepare("UPDATE tblusers SET balance = balance + ? WHERE user_id = ?");
                    $var = $_SESSION['headsortails']['bet'] * 1.9;
                    $stmt->bind_param('ii', $var, $_SESSION['user']['user_id']);
                    $stmt->execute(); 
                    $result = $stmt->get_result();
                    
                    $_SESSION['user']['balance'] = $_SESSION['user']['balance'] + $_SESSION['headsortails']['bet']*1.9;
                    echo "<script>document.getElementById('balanceText').textContent = '$". $_SESSION['user']['balance'] / 100 ."'</script>";
                    echo '
                        <div class="container mx-auto pt-8">               
                            <div class="text-center">
                                <div class="flex flex-row h-auto my-1 justify-center">
                                    <p class="text-white text-xl font-semibold">You have won!</p>
                                </div>
                             </div>
                        </div>';
                } else {
                    echo '
                        <div class="container mx-auto pt-8">               
                            <div class="text-center">
                                <div class="flex flex-row h-auto my-1 justify-center">
                                    <p class="text-white text-xl font-semibold">You have lost!</p>
                                </div>
                             </div>
                        </div>';
                }

                echo '
                <div class="container mx-auto pt-20">               
                    <div class="text-center">
                        <div class="flex flex-row h-auto my-1 justify-center">
                            <a class="text-white text-xl font-semibold" href="headsortails.php">New game</a>
                        </div>
                    </div>
                </div>';
                

            } else {
                echo '
                <div class="container mx-auto pt-20">
                    <p class="text-center text-xl font-semibold text-white">Heads or tails</p>                
                        <div class="text-center">
                            <img src="./assets/coin/start.png" class="mx-auto" width="500" height="600">
                            <form method="post" class="text-center">
                                <input type="text" required class="py-2 mt-2 bg-slate-800 rounded text-white text-center" name="amount">
                                <div class="flex flex-row h-auto my-1 justify-center" name="guess">
                                    <button type="submit" name="guess0" value="heads" class="w-1/3 mx-1 rounded text-center text-white bg-slate-800">Heads</button>
                                    <button type="submit" name="guess1" value="tails" class="w-1/3 mx-1 rounded text-center text-white bg-slate-800">Tails</button>
                                </div>
                            </form>
                        </div>
                </div>';
            }
        } else if (!(isset($_SESSION['user']))){
            echo '
            <div class="container mx-auto pt-20">
                <p class="text-center text-xl font-semibold text-white">Heads or tails</p>                
                    <div class="text-center">
                        <img src="./assets/coin/start.png" class="mx-auto" width="500" height="600">
                        <form method="post" class="text-center">
                            <input type="text" required class="py-2 mt-2 bg-slate-800 rounded text-white text-center" name="amount">
                            <div class="flex flex-row h-auto my-1 justify-center" name="guess">
                                <button type="submit" name="guess0" value="heads" class="w-1/3 mx-1 rounded text-center text-white bg-slate-800">Heads</button>
                                <button type="submit" name="guess1" value="tails" class="w-1/3 mx-1 rounded text-center text-white bg-slate-800">Tails</button>
                            </div>
                        </form>
                        <p class="text-red-500">You should be logged in to play.</p>
                    </div>
            </div>';
        } else {
            echo '
                <div class="container mx-auto pt-20">
                    <p class="text-center text-xl font-semibold text-white">Heads or tails</p>                
                        <div class="text-center">
                            <img src="./assets/coin/start.png" class="mx-auto">
                            <form method="post" class="text-center">
                                <input type="text" required class="py-2 mt-2 bg-slate-800 rounded text-white text-center" name="amount">
                                <div class="flex flex-row h-auto my-1 justify-center" name="guess">
                                    <button type="submit" name="guess0" value="heads" class="w-1/3 mx-1 rounded text-center text-white bg-slate-800">Heads</button>
                                    <button type="submit" name="guess1" value="tails" class="w-1/3 mx-1 rounded text-center text-white bg-slate-800">Tails</button>
                                </div>
                            </form>
                        </div>
                </div>';    
        }

       



    ?>
    
</body>
</html>