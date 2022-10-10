<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PhPoker | Towers</title>  

    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
</head>
<body class="bg-slate-700">
    <script>
        function setAmountsPerRow(){
            for(let i = 1; i <= 2; i++){
                for(let j = 1; j <= 3; j++){
                    console.log(i + "" + j);
                    const id = i + "" + j
                    console.log(document.getElementById(id));
                    document.getElementById(id).textContent = "$10"
                }        
            }
        }
    </script>

    <?php
        include './header.php';
        include './connect.php';

        print $_POST['towersBettingAmount'];
        if(isset($_SESSION['towers_bet'])){

        } else {
            if(isset($_POST['towersBettingAmount'])){
                $amount = $_POST['towersBettingAmount'] * 100;

                if(isset($_SESSION['user'])){
                    if($_SESSION['user']['balance'] >= $amount){
                        $_SESSION['user']['balance'] -= $amount;
                        $_SESSION['currentWinningTowers'] = $amount;

                        echo "                    
                            <script>
                                document.getElementById('balanceText').textContent = '$' + ". $_SESSION['user']['balance'] ." / 100                                       
                                setAmountsPerRow()
                            </script>

                        ";

                        echo "
                            <div class='container mx-auto pt-20'>
                                <p class='text-center text-xl font-semibold text-white'>Towers</p>
                            
                                <div class='mt-10 w-2/3 mx-auto'>
                                    <div class=''>
                                        <div class='flex flex-row h-auto my-1'>
                                            <button class='w-1/3 mx-1 rounded text-center text-white bg-slate-800'>
                                                <p id='21'>$0.00</p>
                                            </button>
                                            <button class='w-1/3 mx-1 rounded text-center text-white bg-slate-800'>
                                                <p id='22'>$0.00</p>
                                            </button>
                                            <button class='w-1/3 mx-1 rounded text-center text-white bg-slate-800'>
                                                <p id='23'>$0.00</p>
                                            </button>
                                        </div>
                                        <div class='flex flex-row h-auto my-1'>
                                            <button class='w-1/3 mx-1 rounded text-center text-white bg-slate-800'>
                                                <p id='11'>$0.00</p>
                                            </button>
                                            <button class='w-1/3 mx-1 rounded text-center text-white bg-slate-800'>
                                                <p id='12'>$0.00</p>
                                            </button>
                                            <button class='w-1/3 mx-1 rounded text-center text-white bg-slate-800'>
                                                <p id='13'>$0.00</p>
                                            </button>
                                        </div>
                                    </div>
        
                                    <div class='mt-6 '>
                                        <div class='w-full py-1 px-2 bg-transparent border border-slate-800 rounded focus:outline-none'>
                                            <p class='w-full text-center'>$". $amount / 100 ."</p>
                                        </div>
                                        <div class='w-full py-2 mt-2 bg-slate-800 rounded text-white'><p class='w-full text-center'>Current winnings: $". $_SESSION['currentWinningTowers'] / 100 ."</p></div>
                                    </div>
                                </div>
                            </div>
                        ";
                    } else {
                        echo "
                            <div class='container mx-auto pt-20'>
                                <p class='text-center text-xl font-semibold text-white'>Towers</p>
                            
                                <div class='mt-10 w-2/3 mx-auto'>
                                    <div class=''>
                                        <div class='flex flex-row h-auto my-1'>
                                            <button class='w-1/3 mx-1 rounded text-center text-white bg-slate-800'>
                                                <p class=''>$0.00</p>
                                            </button>
                                            <button class='w-1/3 mx-1 rounded text-center text-white bg-slate-800'>
                                                <p class=''>$0.00</p>
                                            </button>
                                            <button class='w-1/3 mx-1 rounded text-center text-white bg-slate-800'>
                                                <p class=''>$0.00</p>
                                            </button>
                                        </div>
                                        <div class='flex flex-row h-auto my-1'>
                                            <button class='w-1/3 mx-1 rounded text-center text-white bg-slate-800'>
                                                <p class=''>$0.00</p>
                                            </button>
                                            <button class='w-1/3 mx-1 rounded text-center text-white bg-slate-800'>
                                                <p class=''>$0.00</p>
                                            </button>
                                            <button class='w-1/3 mx-1 rounded text-center text-white bg-slate-800'>
                                                <p class=''>$0.00</p>
                                            </button>
                                        </div>
                                    </div>
    
                                    <div class='mt-6 '>
                                        <form action='' method='POST'>
                                            <input type='text' name='towersBettingAmount' placeholder='Enter an amount to bet.' class='w-full py-1 px-2 bg-transparent border border-slate-800 rounded focus:outline-none'>
                                            <input type='submit' value='Start Game' class='w-full py-2 mt-2 bg-slate-800 rounded text-white'>
                                        </form>
                                        <p class='text-red-500 mt-1'>You cant't bet more than your current balance.</p>
                                    </div>
                                </div>
                            </div>
                        ";    
                    }
                } else {
                    echo "
                        <div class='container mx-auto pt-20'>
                            <p class='text-center text-xl font-semibold text-white'>Towers</p>
                        
                            <div class='mt-10 w-2/3 mx-auto'>
                                <div class=''>
                                    <div class='flex flex-row h-auto my-1'>
                                        <button class='w-1/3 mx-1 rounded text-center text-white bg-slate-800'>
                                            <p class=''>$0.00</p>
                                        </button>
                                        <button class='w-1/3 mx-1 rounded text-center text-white bg-slate-800'>
                                            <p class=''>$0.00</p>
                                        </button>
                                        <button class='w-1/3 mx-1 rounded text-center text-white bg-slate-800'>
                                            <p class=''>$0.00</p>
                                        </button>
                                    </div>
                                    <div class='flex flex-row h-auto my-1'>
                                        <button class='w-1/3 mx-1 rounded text-center text-white bg-slate-800'>
                                            <p class=''>$0.00</p>
                                        </button>
                                        <button class='w-1/3 mx-1 rounded text-center text-white bg-slate-800'>
                                            <p class=''>$0.00</p>
                                        </button>
                                        <button class='w-1/3 mx-1 rounded text-center text-white bg-slate-800'>
                                            <p class=''>$0.00</p>
                                        </button>
                                    </div>
                                </div>

                                <div class='mt-6 '>
                                    <form action='' method='POST'>
                                        <input type='text' name='towersBettingAmount' placeholder='Enter an amount to bet.' class='w-full py-1 px-2 bg-transparent border border-slate-800 rounded focus:outline-none'>
                                        <input type='submit' value='Start Game' class='w-full py-2 mt-2 bg-slate-800 rounded text-white'>
                                    </form>
                                    <p class='text-red-500 mt-1'>You should be logged in to play.</p>
                                </div>
                            </div>
                        </div>
                    ";
                }
            } else {
                echo "
                    <div class='container mx-auto pt-20'>
                        <p class='text-center text-xl font-semibold text-white'>Towers</p>
                    
                        <div class='mt-10 w-2/3 mx-auto'>
                            <div class=''>
                                <div class='flex flex-row h-auto my-1'>
                                    <button class='w-1/3 mx-1 rounded text-center text-white bg-slate-800'>
                                        <p class=''>$0.00</p>
                                    </button>
                                    <button class='w-1/3 mx-1 rounded text-center text-white bg-slate-800'>
                                        <p class=''>$0.00</p>
                                    </button>
                                    <button class='w-1/3 mx-1 rounded text-center text-white bg-slate-800'>
                                        <p class=''>$0.00</p>
                                    </button>
                                </div>
                                <div class='flex flex-row h-auto my-1'>
                                    <button class='w-1/3 mx-1 rounded text-center text-white bg-slate-800'>
                                        <p class=''>$0.00</p>
                                    </button>
                                    <button class='w-1/3 mx-1 rounded text-center text-white bg-slate-800'>
                                        <p class=''>$0.00</p>
                                    </button>
                                    <button class='w-1/3 mx-1 rounded text-center text-white bg-slate-800'>
                                        <p class=''>$0.00</p>
                                    </button>
                                </div>
                            </div>

                            <div class='mt-6 '>
                                <form action='' method='POST'>
                                    <input type='text' name='towersBettingAmount' placeholder='Enter an amount to bet.' class='w-full py-1 px-2 bg-transparent border border-slate-800 rounded focus:outline-none'>
                                    <input type='submit' value='Start Game' class='w-full py-2 mt-2 bg-slate-800 rounded text-white'>
                                </form>
                            </div>
                        </div>
                    </div>
                ";
            }
       }
    ?>

    
</body>
</html>