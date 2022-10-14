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
        <div class='keuzeKnoppen'>
            <div class='flex flex-row  my-1'>
                <button class='w-1/3 mx-1 mb-5 p-7 rounded text-center text-white bg-slate-800'>
                    <p id='1'></p>
                </button>
                <button class='w-1/3 mx-1 mb-5 rounded text-center text-white bg-slate-800'>
                    <p id='2'></p>
                </button>
                <button class='w-1/3 mx-1 mb-5 rounded text-center text-white bg-slate-800'>
                    <p id='3'></p>
                </button>
                <button class='w-1/3 mx-1 mb-5 rounded text-center text-white bg-slate-800'>
                    <p id='4'></p>
                </button>
                <button class='w-1/3 mx-1 mb-5 rounded text-center text-white bg-slate-800'>
                    <p id='5'></p>
                </button>
            </div>
            <div class='flex flex-row h-auto my-1'>
                <button class='w-1/3 mx-1 mb-5 p-7 rounded text-center text-white bg-slate-800'>
                    <p id='6'></p>
                </button>
                <button class='w-1/3 mx-1 mb-5 rounded text-center text-white bg-slate-800'>
                    <p id='7'></p>
                </button>
                <button class='w-1/3 mx-1 mb-5 rounded text-center text-white bg-slate-800'>
                    <p id='8'></p>
                </button>
                <button class='w-1/3 mx-1 mb-5 rounded text-center text-white bg-slate-800'>
                    <p id='9'></p>
                </button>
                <button class='w-1/3 mx-1 mb-5 rounded text-center text-white bg-slate-800'>
                    <p id='10'></p>
                </button>
            </div>
            <div class='flex flex-row h-auto my-1'>
                <button class='w-1/3 mx-1 mb-5 p-7 rounded text-center text-white bg-slate-800'>
                    <p id='11'></p>
                </button>
                <button class='w-1/3 mx-1 mb-5 rounded text-center text-white bg-slate-800'>
                    <p id='12'></p>
                </button>
                <button class='w-1/3 mx-1 mb-5 rounded text-center text-white bg-slate-800'>
                    <p id='13'></p>
                </button>
                <button class='w-1/3 mx-1 mb-5 rounded text-center text-white bg-slate-800'>
                    <p id='14'></p>
                </button>
                <button class='w-1/3 mx-1 mb-5 rounded text-center text-white bg-slate-800'>
                    <p id='15'></p>
                </button>
            </div>
            <div class='flex flex-row h-auto my-1'>
                <button class='w-1/3 mx-1 mb-5 p-7 rounded text-center text-white bg-slate-800'>
                    <p id='16'></p>
                </button>
                <button class='w-1/3 mx-1 mb-5 rounded text-center text-white bg-slate-800'>
                    <p id='17'></p>
                </button>
                <button class='w-1/3 mx-1 mb-5 rounded text-center text-white bg-slate-800'>
                    <p id='18'></p>
                </button>
                <button class='w-1/3 mx-1 mb-5 rounded text-center text-white bg-slate-800'>
                    <p id='19'></p>
                </button>
                <button class='w-1/3 mx-1 mb-5 rounded text-center text-white bg-slate-800'>
                    <p id='20'></p>
                </button>
            </div>
            <div class='flex flex-row h-auto my-1 '>
                <button class='w-1/3 mx-1 mb-5 p-7 rounded text-center text-white bg-slate-800'>
                    <p id='21'></p>
                </button>
                <button class='w-1/3 mx-1 mb-5 rounded text-center text-white bg-slate-800'>
                    <p id='22'></p>
                </button>
                <button class='w-1/3 mx-1 mb-5 rounded text-center text-white bg-slate-800'>
                    <p id='23'></p>
                </button>
                <button class='w-1/3 mx-1 mb-5 rounded text-center text-white bg-slate-800'>
                    <p id='24'></p>
                </button>
                <button class='w-1/3 mx-1 mb-5 rounded text-center text-white bg-slate-800'>
                    <p id='25'></p>
                </button>
            </div>
        </div>
        <div class='mt-6 '>
            <form action='' method='POST'>
                <input type='text' name='towersBettingAmount' placeholder='Enter an amount to bet.' class='w-full mb-3 py-1 px-2 bg-transparent border border-slate-800 rounded focus:outline-none'>
                <p class =' mb-3 text-white text-center'>The amount of mines.</p>
                <div class ='keuzeBomKnoppen'> 
                    <div class='flex flex-row h-auto my-1'>
                        <button class='w-1/3 mx-1 mb-3 p-3 rounded text-center text-white bg-slate-800'>
                            <p id='knop3Bommen'>3</p>
                        </button>
                        <button class='w-1/3 mx-1 mb-3 p-3 rounded text-center text-white bg-slate-800'>
                            <p id='knop5Bommen'>5</p>
                        </button>
                        <button class='w-1/3 mx-1 mb-3 p-3 rounded text-center text-white bg-slate-800'>
                            <p id='knop10Bommen'>10</p>
                        </button>
                        <button class='w-1/3 mx-1 mb-3 p-3 rounded text-center text-white bg-slate-800'>
                            <p id='knop20Bommen'>20</p>
                        </button>
                    </div>    
                </div>
                <input type='submit' value='Start Game' class='w-full py-2 mt-2 bg-slate-800 rounded text-white'>
            </form>
        </div>
    </div>";
                                    
    
    ?>