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
    session_start();
    echo "
    <div class='mt-10 w-2/3 mx-auto'>
        <div class=''>
            <div class='flex flex-row  my-1'>
                <button class='w-1/3 mx-1 mb-5 p-3 rounded text-center text-white bg-slate-800'>
                    <p id='21'>$0.00</p>
                </button>
                <button class='w-1/3 mx-1 mb-5 p-3 rounded text-center text-white bg-slate-800'>
                    <p id='22'>$0.00</p>
                </button>
                <button class='w-1/3 mx-1 mb-5 p-3 rounded text-center text-white bg-slate-800'>
                    <p id='23'>$0.00</p>
                </button>
                <button class='w-1/3 mx-1 mb-5 p-3 rounded text-center text-white bg-slate-800'>
                    <p id='23'>$0.00</p>
                </button>
                <button class='w-1/3 mx-1 mb-5 p-3 rounded text-center text-white bg-slate-800'>
                    <p id='23'>$0.00</p>
                </button>
            </div>
            <div class='flex flex-row h-auto my-1'>
                <button class='w-1/3 mx-1 mb-5 p-3 rounded text-center text-white bg-slate-800'>
                    <p id='11'>$0.00</p>
                </button>
                <button class='w-1/3 mx-1 mb-5 p-3 rounded text-center text-white bg-slate-800'>
                    <p id='12'>$0.00</p>
                </button>
                <button class='w-1/3 mx-1 mb-5 p-3 rounded text-center text-white bg-slate-800'>
                    <p id='13'>$0.00</p>
                </button>
                <button class='w-1/3 mx-1 mb-5 p-3 rounded text-center text-white bg-slate-800'>
                    <p id='23'>$0.00</p>
                </button>
                <button class='w-1/3 mx-1 mb-5 p-3 rounded text-center text-white bg-slate-800'>
                    <p id='23'>$0.00</p>
                </button>
            </div>
            <div class='flex flex-row h-auto my-1'>
                <button class='w-1/3 mx-1 mb-5 p-3 rounded text-center text-white bg-slate-800'>
                    <p id='11'>$0.00</p>
                </button>
                <button class='w-1/3 mx-1 mb-5 p-3 rounded text-center text-white bg-slate-800'>
                    <p id='12'>$0.00</p>
                </button>
                <button class='w-1/3 mx-1 mb-5 p-3 rounded text-center text-white bg-slate-800'>
                    <p id='13'>$0.00</p>
                </button>
                <button class='w-1/3 mx-1 mb-5 p-3 rounded text-center text-white bg-slate-800'>
                    <p id='23'>$0.00</p>
                </button>
                <button class='w-1/3 mx-1 mb-5 p-3 rounded text-center text-white bg-slate-800'>
                    <p id='23'>$0.00</p>
                </button>
            </div>
            <div class='flex flex-row h-auto my-1'>
                <button class='w-1/3 mx-1 mb-5 p-3 rounded text-center text-white bg-slate-800'>
                    <p id='11'>$0.00</p>
                </button>
                <button class='w-1/3 mx-1 mb-5 p-3 rounded text-center text-white bg-slate-800'>
                    <p id='12'>$0.00</p>
                </button>
                <button class='w-1/3 mx-1 mb-5 p-3 rounded text-center text-white bg-slate-800'>
                    <p id='13'>$0.00</p>
                </button>
                <button class='w-1/3 mx-1 mb-5 p-3 rounded text-center text-white bg-slate-800'>
                    <p id='23'>$0.00</p>
                </button>
                <button class='w-1/3 mx-1 mb-5 p-3 rounded text-center text-white bg-slate-800'>
                    <p id='23'>$0.00</p>
                </button>
            </div>
            <div class='flex flex-row h-auto my-1'>
                <button class='w-1/3 mx-1 mb-5 p-3 rounded text-center text-white bg-slate-800'>
                    <p id='11'>$0.00</p>
                </button>
                <button class='w-1/3 mx-1 mb-5 p-3 rounded text-center text-white bg-slate-800'>
                    <p id='12'>$0.00</p>
                </button>
                <button class='w-1/3 mx-1 mb-5 p-3 rounded text-center text-white bg-slate-800'>
                    <p id='13'>$0.00</p>
                </button>
                <button class='w-1/3 mx-1 mb-5 p-3 rounded text-center text-white bg-slate-800'>
                    <p id='23'>$0.00</p>
                </button>
                <button class='w-1/3 mx-1 mb-5 p-3 rounded text-center text-white bg-slate-800'>
                    <p id='23'>$0.00</p>
                </button>
            </div>
        </div>
    </div>
                                    
    <div class='mt-6 '>
        <form action='' method='POST'>
            <input type='text' name='towersBettingAmount' placeholder='Enter an amount to bet.' class='w-full py-1 px-2 bg-transparent border border-slate-800 rounded focus:outline-none'>
            <input type='submit' value='Start Game' class='w-full py-2 mt-2 bg-slate-800 rounded text-white'>
        </form>
    </div>";
    ?>