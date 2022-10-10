<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Balance | PhPoker</title>
    
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>

</head>

<body class="bg-slate-700">
    <?php
    include "./header.php";
    include "./connect.php";
    ?>
    <div class="pt-20">
        <p class="text-2xl font-semibold pb-8 text-white text-center">Balance</p>

        <div class="w-1/3 flex flex-row text-center mx-auto text-white">
            <div class="w-1/2 bg-slate-800 mr-4 py-3 rounded-full">
                <a href="?action=deposit" class="">Deposit</a>
            </div>
            <div class="w-1/2 bg-slate-800 ml-4 py-3 rounded-full">
                <a href="?action=withdraw" class="">Withdraw</a>
            </div>
        </div>

        <div class="bg-slate-800 mt-6 rounded-xl w-1/3 mx-auto text-center text-white">
            <?php
            if (isset($_POST['deposit_amount'])) {
                $sql = "UPDATE tblusers SET balance = balance + " . $_POST['deposit_amount'] * 100 . " WHERE user_id = " . $_SESSION['user']['user_id'];
                $resultaat = $mysqli->query($sql);
                $_SESSION['user']['balance'] = $_SESSION['user']['balance'] + $_POST['deposit_amount'] * 100;

                echo "
                        <div class='py-8 mx-auto'>
                            <svg xmlns='http://www.w3.org/2000/svg' class='w-1/2 mx-auto h-1/2' fill='green' class='bi bi-check-circle-fill' viewBox='0 0 16 16'>
                                <path d='M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z'/>
                            </svg>
                        </div>
                    ";

                    echo "
                    <script>
                        $.ajax(
                        './updateUserSession.php?user_id=". $_SESSION['user']['user_id'] ."',
                        {
                            success: function(data) {
                                document.getElementById('balanceText').textContent = '$' + ". $_SESSION['user']['balance'] ." / 100
                            },
                            error: function() {
                                alert('There was some error performing the AJAX call!');
                            }
                        }
                        );
                    </script>"
                    ;
                    
            } else {
                echo "
                        <p class='text-xl font-medium py-4'>Deposit</p>
            
                        <form action='' method='post'>  
                            <div class='w-1/2 mx-auto'>
                                <label class='text-left w-1/2' for='amount'>Enter an amount</label>
                                <br>
                                <input class='text-center w-full bg-transparent border-b-2 mb-4 border-slate-700 focus:outline-none' type='amount' id='deposit_amount' name='deposit_amount' required>
                            </div>
                            
                            <input type='submit' class='w-1/2 bg-slate-900 rounded-full mb-4' value='Pay'>
                        </form>
                    ";
            }
            ?>
        </div>

        <?php
        if (isset($_GET["action"]) && $_GET["action"] == "deposit") {
            echo "
                
                ";
        } elseif (isset($_GET["action"]) && $_GET["action"] == "Withdraw") {
            echo "
                
                ";
        }
        ?>
    </div>
</body>

</html>