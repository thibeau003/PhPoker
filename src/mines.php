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
    $array = array(0, 24);
    if (isset($_POST['bombAmount'])) {

        for ($i = 0; $i < $_POST['bombAmount']; $i++) {
            $array[$i] = "Bom";
        }
        for ($i = $_POST['bombAmount']; $i < 25; $i++) {
            $array[$i] = "Win";
        }
        shuffle($array);
        $_SESSION['bombAmount'] = $_POST['bombAmount'];
        $_SESSION['mines'] = $array;
    }
    print_r($array);

    echo "
    <div class='container mx-auto pt-20'>
        <p class='text-center text-xl font-semibold text-white'>Mines</p>
        <div class='mt-10 w-2/3 mx-auto'>
            <div class='keuzeKnoppen'>
                <div class='flex flex-row  my-1'>
                    <button onclick='onClick(0)' class='w-1/3 mx-1 mb-5 p-7 rounded text-center text-white bg-slate-800' id= '0'>
                       
                    </button>
                    <button onclick='onClick(1)' class='w-1/3 mx-1 mb-5 rounded text-center text-white bg-slate-800' id= '1'>
                        
                    </button>
                    <button onclick='onClick(2)' class='w-1/3 mx-1 mb-5 rounded text-center text-white bg-slate-800' id= '2'>
                    
                    </button>
                    <button onclick='onClick(3)' class='w-1/3 mx-1 mb-5 rounded text-center text-white bg-slate-800' id= '3'>
                        
                    </button>
                    <button onclick='onClick(4)' class='w-1/3 mx-1 mb-5 rounded text-center text-white bg-slate-800' id= '4'>
                        
                    </button>
                </div>
                <div class='flex flex-row h-auto my-1'>
                    <button onclick='onClick(5)' class='w-1/3 mx-1 mb-5 p-7 rounded text-center text-white bg-slate-800' id= '5'>
                        
                    </button>
                    <button onclick='onClick(6)' class='w-1/3 mx-1 mb-5 rounded text-center text-white bg-slate-800' id= '6'>
                        
                    </button>
                    <button onclick='onClick(7)' class='w-1/3 mx-1 mb-5 rounded text-center text-white bg-slate-800' id= '7'>
                        
                    </button>
                    <button onclick='onClick(8)' class='w-1/3 mx-1 mb-5 rounded text-center text-white bg-slate-800' id= '8'>
                        
                    </button>
                    <button onclick='onClick(9)' class='w-1/3 mx-1 mb-5 rounded text-center text-white bg-slate-800' id= '9'>
                        
                    </button>
                </div>
                <div class='flex flex-row h-auto my-1'>
                    <button onclick='onClick(10)' class='w-1/3 mx-1 mb-5 p-7 rounded text-center text-white bg-slate-800' id= '10'>
                        
                    </button>
                    <button onclick='onClick(11)' class='w-1/3 mx-1 mb-5 rounded text-center text-white bg-slate-800' id= '11'>
                        
                    </button>
                    <button onclick='onClick(12)' class='w-1/3 mx-1 mb-5 rounded text-center text-white bg-slate-800' id= '12'>
                    
                    </button>
                    <button onclick='onClick(13)' class='w-1/3 mx-1 mb-5 rounded text-center text-white bg-slate-800' id= '13'>
                        
                    </button>
                    <button onclick='onClick(14)' class='w-1/3 mx-1 mb-5 rounded text-center text-white bg-slate-800' id= '14'>
                        
                    </button>
                </div>
                <div class='flex flex-row h-auto my-1'>
                    <button onclick='onClick(15)' class='w-1/3 mx-1 mb-5 p-7 rounded text-center text-white bg-slate-800' id= '15'>
                        
                    </button>
                    <button onclick='onClick(16)' class='w-1/3 mx-1 mb-5 rounded text-center text-white bg-slate-800' id= '16'>
                        
                    </button>
                    <button onclick='onClick(17)' class='w-1/3 mx-1 mb-5 rounded text-center text-white bg-slate-800' id= '17'>
                        
                    </button>
                    <button onclick='onClick(18)' class='w-1/3 mx-1 mb-5 rounded text-center text-white bg-slate-800' id= '18'>
                        
                    </button>
                    <button onclick='onClick(19)' class='w-1/3 mx-1 mb-5 rounded text-center text-white bg-slate-800' id= '19'>
                        
                    </button>
                </div>
                <div class='flex flex-row h-auto my-1 '>
                    <button onclick='onClick(20)' class='w-1/3 mx-1 mb-5 p-7 rounded text-center text-white bg-slate-800' id= '20'>
                        
                    </button>
                    <button onclick='onClick(21)' class='w-1/3 mx-1 mb-5 rounded text-center text-white bg-slate-800' id= '21'>
                        
                    </button>
                    <button onclick='onClick(22)' class='w-1/3 mx-1 mb-5 rounded text-center text-white bg-slate-800' id= '22'>
                        
                    </button>
                    <button onclick='onClick(23)' class='w-1/3 mx-1 mb-5 rounded text-center text-white bg-slate-800' id= '23'>
                        
                    </button>
                    <button onclick='onClick(24)' class='w-1/3 mx-1 mb-5 rounded text-center text-white bg-slate-800' id= '24'>
                        
                    </button>
                </div>
            </div>
            <div class='mt-6 '>
                <form action='mines.php' method='POST'>
                    <input type='text' name='minesBettingAmount' placeholder='Enter an amount to bet.' class='w-full mb-3 py-1 px-2 bg-transparent border border-slate-800 rounded focus:outline-none'>
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
        </div>
    </div>
        ";

    echo "
    <script>
        function onClick(ButtonId) {
            const clickedButton = document.getElementById(ButtonId)
            const valuesButton = <?php echo json_encode(" . $_SESSION['mines'] . ") ?>

            if (valuesButton[clickedButton.id] == 'Bom') {

                for (let i = 0; i < valuesButton.length; i++) {
                    document.getElementById(i).disabled = true;
                }
                clickedButton.style.backgroundColor = '#990000'
                document.getElementById('profit').value = 0
                document.getElementById('stopGame').value = 'Game Over'

            } else {
                clickedButton.disabled = true;
                clickedButton.style.backgroundColor = '#005900'
            }
        }
    </script>";


    print "xd";
    if (isset($_POST['amount'])) {
        $_SESSION['mines']['bet'] = $_POST['amount'] * 100;
        print "testd";
        if ($_SESSION['mines']['bet'] <= $_SESSION['user']['balance']) {
            print "test";
            $sql = 'UPDATE tblusers SET balance = balance - ' .  $_SESSION['mines']['bet'] . ' WHERE user_id = ' . $_SESSION['user']['user_id'];
            $result = $mysqli->query($sql);
            $_SESSION['user']['balance'] = $_SESSION['user']['balance'] - $_SESSION['mines']['bet'];
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
        }
        $_SESSION['mines']['bet'] = 0;
        echo $_SESSION['mines']['bet'];
    }
    ?>
    <?php
    $profit = $_SESSION['mines']['bet'];
    if ($_SESSION['bombAmount'] = '3') {
        $winning = $profit * 1.08;
        $profit += $winning;
        print "test3";
    } elseif ($_SESSION['bombAmount'] = '5') {
        $winning = $profit * 1.16;
        $profit += $winning;
        print "test5";
    } elseif ($_SESSION['bombAmount'] = '10') {
        $winning = $profit * 1.70;
        $profit += $winning;
        print "test10";
    } elseif ($_SESSION['bombAmount'] = '20') {
        $winning = $profit * 3;
        $profit += $winning;
        print "test20";
    } else {
        print "fail";
    }
    ?>
</body>