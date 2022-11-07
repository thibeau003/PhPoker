<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PhPoker | Mines</title>
</head>

<body class="bg-slate-700">
    <?php
    include "./tailwind.php";
    include "./header.php";
    include "./connect.php";
    ?>
    <a class="pt-20 text-white float-left ml-12 text-xl" href="./index.php">&#x2190 Back</a>

    <?php
    $arrray = array(0, 24);
    if (isset($_POST['bombAmount'])) {
        
        for ($i = 0; $i < $_POST['bombAmount']; $i++) {
            $arrray[$i] = "Bom";
        }
        for($i = $_POST['bombAmount']; $i < 25; $i++){
            $arrray[$i] = "Win";
        }
        shuffle($arrray);

    }
    
    switch($arrray){
        case $arrray[0]:
            
            break;
    }
    

    echo "
        <div class='mt-10 w-2/3 mx-auto'>
            <div class='keuzeKnoppen'>
                <div class='flex flex-row  my-1'>
                    <button class='w-1/3 mx-1 mb-5 p-7 rounded text-center text-white bg-slate-800' id= '0'>
                       
                    </button>
                    <button class='w-1/3 mx-1 mb-5 rounded text-center text-white bg-slate-800' id= '1'>
                        
                    </button>
                    <button class='w-1/3 mx-1 mb-5 rounded text-center text-white bg-slate-800' id= '2'>
                    
                    </button>
                    <button class='w-1/3 mx-1 mb-5 rounded text-center text-white bg-slate-800' id= '3'>
                        
                    </button>
                    <button class='w-1/3 mx-1 mb-5 rounded text-center text-white bg-slate-800' id= '4'>
                        
                    </button>
                </div>
                <div class='flex flex-row h-auto my-1'>
                    <button class='w-1/3 mx-1 mb-5 p-7 rounded text-center text-white bg-slate-800' id= '5'>
                        
                    </button>
                    <button class='w-1/3 mx-1 mb-5 rounded text-center text-white bg-slate-800' id= '6'>
                        
                    </button>
                    <button class='w-1/3 mx-1 mb-5 rounded text-center text-white bg-slate-800' id= '7'>
                        
                    </button>
                    <button class='w-1/3 mx-1 mb-5 rounded text-center text-white bg-slate-800' id= '8'>
                        
                    </button>
                    <button class='w-1/3 mx-1 mb-5 rounded text-center text-white bg-slate-800' id= '9'>
                        
                    </button>
                </div>
                <div class='flex flex-row h-auto my-1'>
                    <button class='w-1/3 mx-1 mb-5 p-7 rounded text-center text-white bg-slate-800' id= '10'>
                        
                    </button>
                    <button class='w-1/3 mx-1 mb-5 rounded text-center text-white bg-slate-800' id= '11'>
                        
                    </button>
                    <button class='w-1/3 mx-1 mb-5 rounded text-center text-white bg-slate-800' id= '12'>
                    
                    </button>
                    <button class='w-1/3 mx-1 mb-5 rounded text-center text-white bg-slate-800' id= '13'>
                        
                    </button>
                    <button class='w-1/3 mx-1 mb-5 rounded text-center text-white bg-slate-800' id= '14'>
                        
                    </button>
                </div>
                <div class='flex flex-row h-auto my-1'>
                    <button class='w-1/3 mx-1 mb-5 p-7 rounded text-center text-white bg-slate-800' id= '15'>
                        
                    </button>
                    <button class='w-1/3 mx-1 mb-5 rounded text-center text-white bg-slate-800' id= '16'>
                        
                    </button>
                    <button class='w-1/3 mx-1 mb-5 rounded text-center text-white bg-slate-800' id= '17'>
                        
                    </button>
                    <button class='w-1/3 mx-1 mb-5 rounded text-center text-white bg-slate-800' id= '18'>
                        
                    </button>
                    <button class='w-1/3 mx-1 mb-5 rounded text-center text-white bg-slate-800' id= '19'>
                        
                    </button>
                </div>
                <div class='flex flex-row h-auto my-1 '>
                    <button class='w-1/3 mx-1 mb-5 p-7 rounded text-center text-white bg-slate-800' id= '20'>
                        
                    </button>
                    <button class='w-1/3 mx-1 mb-5 rounded text-center text-white bg-slate-800' id= '21'>
                        
                    </button>
                    <button class='w-1/3 mx-1 mb-5 rounded text-center text-white bg-slate-800' id= '22'>
                        
                    </button>
                    <button class='w-1/3 mx-1 mb-5 rounded text-center text-white bg-slate-800' id= '23'>
                        
                    </button>
                    <button class='w-1/3 mx-1 mb-5 rounded text-center text-white bg-slate-800' id= '24'>
                        
                    </button>
                </div>
            </div>
            <div class='mt-6 '>
                <form action='mines.php' method='POST'>
                    <input type='text' name='towersBettingAmount' placeholder='Enter an amount to bet.' class='w-full mb-3 py-1 px-2 bg-transparent border border-slate-800 rounded focus:outline-none'>
                    <p class =' mb-3 text-white text-center'>The amount of mines.</p>
                    <div class ='keuzeBomKnoppen'> 
                        <div class='flex flex-row h-auto my-1'>
                            <div class='mx-auto'>
                                <input type='radio' name='bombAmount' value='3'>
                                    <p class=' text-white text-center'>3</p>
                                    
                            </div>
                            <div class='mx-auto'>
                                <input type='radio' name='bombAmount' value='5'>
                                    <p class=' text-white text-center'>5</p>
                                    
                            </div>
                            <div class='mx-auto'>
                                <input type='radio' name='bombAmount' value='10'>
                                    <p class=' text-white text-center'>10</p>
                                    
                            </div>
                            <div class='mx-auto'>
                                <input type='radio' name='bombAmount' value='20'>
                                    <p class=' text-white text-center'>20</p>
                                    
                            </div>
                        </div>    
                    
                    <input type='submit' value='Start Game' class='w-full cursor-pointer py-2 mt-2 bg-slate-800 rounded text-white'>
                </form>
            </div>
        </div>";
        if (isset($_POST['amount'])) {
            $_SESSION['mines']['bet'] = $_POST['amount'] * 100;
    
            if ($_SESSION['mines']['bet'] <= $_SESSION['user']['balance']) {
                $sql = 'UPDATE tblusers SET balance = balance - ' .  $_SESSION['mines']['bet'] . ' WHERE user_id = ' . $_SESSION['user']['user_id'];
                $result = $mysqli->query($sql);
                $_SESSION['user']['balance'] = $_SESSION['user']['balance'] - $_SESSION['mines']['bet'];
                echo "
                <script>
                $.ajax(
                './updateUserSession.php?user_id=" . $_SESSION['user']['user_id'] . "',
                {
                    success: function(data) {
                        document.getElementById('balanceText').textContent = '$' + " . $_SESSION['user']['balance'] . " / 100
                    },
                    error: function() {
                        alert('There was some error performing the AJAX call!');
                    }
                }
                );
            </script>";
                $_SESSION['mines']['bet'] = 0;
                echo $_SESSION['mines']['bet'];
            };
        }
        ?> 
        
    ?>