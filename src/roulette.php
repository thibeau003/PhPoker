<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Roulette</title>
</head>

<body class="bg-slate-700">
    <?php
    include "./header.php";
    function saus()
    {
        echo "kak";
    }
    $selectedBets = array(
        array(),
        array()
    )
    ?>

    <div class="container text-center mx-auto pt-20 text-white">
        <p class='text-center text-xl font-semibold text-white'>Roulette</p>


        <canvas id="canvas" width="500" height="500" class="mx-auto mt-4"></canvas>
    </div>


    <div>
        <div class="flex flex-row justify-center mt-2">
            <div id="0" class="">
                <button class="border border-white h-3/5 px-2 hover:bg-white" name="0">
                    0
                </button>
            </div>

            <div class="flex flex-col">
                <div class="flex flex-row">
                    <div id="1" class="flex flex-col">

                        <button class="border border-white p-2 hover:bg-white" name="3" onclick="saus()">
                            3

                        </button>
                        <button class="border border-white p-2 hover:bg-white" name="2" onclick="addprice()">
                            2
                        </button>
                        <button class="border border-white p-2 hover:bg-white" name="1" onclick="addprice()">
                            1
                        </button>
                    </div>
                    <div id="2" class="flex flex-col">
                        <button class="border border-white p-2 hover:bg-white" name="6">
                            6
                        </button>
                        <button class="border border-white p-2 hover:bg-white" name="5">
                            5
                        </button>
                        <button class="border border-white p-2 hover:bg-white" name="4">
                            4
                        </button>
                    </div>
                    <div id="3" class="flex flex-col">
                        <button class="border border-white p-2 hover:bg-white" name="9">
                            9
                        </button>
                        <button class="border border-white p-2 hover:bg-white" name="8">
                            8
                        </button>
                        <button class="border border-white p-2 hover:bg-white" name="7">
                            7
                        </button>
                    </div>
                    <div id="4" class="flex flex-col">
                        <button class="border border-white p-2 hover:bg-white" name="12">
                            12
                        </button>
                        <button class="border border-white p-2 hover:bg-white" name="11">
                            11
                        </button>
                        <button class="border border-white p-2 hover:bg-white" name="10">
                            10
                        </button>
                    </div>
                </div>

                <div class="w-full">
                    <button class="border border-white py-2 w-full hover:bg-white" name="1st-to-12">
                        1st 12
                    </button>
                </div>

                <div class="w-full flex flex-row">
                    <button class="border border-white py-2 w-full hover:bg-white" name="even">
                        even
                    </button>
                </div>
            </div>

            <div class="flex flex-col">
                <div class="flex flex-row">
                    <div id="5" class="flex flex-col">
                        <button class="border border-white p-2 hover:bg-white" name="15">
                            15
                        </button>
                        <button class="border border-white p-2 hover:bg-white" name="14">
                            14
                        </button>
                        <button class="border border-white p-2 hover:bg-white" name="13">
                            13
                        </button>
                    </div>
                    <div id="6" class="flex flex-col">
                        <button class="border border-white p-2 hover:bg-white" name="18">
                            18
                        </button>
                        <button class="border border-white p-2 hover:bg-white" name="17">
                            17
                        </button>
                        <button class="border border-white p-2 hover:bg-white" name="16">
                            16
                        </button>
                    </div>
                    <div id="7" class="flex flex-col">
                        <button class="border border-white p-2 hover:bg-white" name="21">
                            21
                        </button>
                        <button class="border border-white p-2 hover:bg-white" name="20">
                            20
                        </button>
                        <button class="border border-white p-2 hover:bg-white" name="19">
                            19
                        </button>
                    </div>
                    <div id="8" class="flex flex-col">
                        <button class="border border-white p-2 hover:bg-white" name="24">
                            24
                        </button>
                        <button class="border border-white p-2 hover:bg-white" name="23">
                            23
                        </button>
                        <button class="border border-white p-2 hover:bg-white" name="22">
                            22
                        </button>
                    </div>
                </div>

                <div class="w-full">
                    <button class="border border-white py-2 w-full hover:bg-white" name="2nd-to-12">
                        2nd 12
                    </button>
                </div>

                <div class="w-full flex flex-row">
                    <button class="border border-white py-2 w-full hover:bg-white" name="red">
                        red
                    </button>
                    <button class="border border-white py-2 w-full hover:bg-white" name="black">
                        black
                    </button>
                </div>
            </div>

            <div class="flex flex-col">
                <div class="flex flex-row">
                    <div id="9" class="flex flex-col">
                        <button class="border border-white p-2 hover:bg-white" name="27">
                            27
                        </button>
                        <button class="border border-white p-2 hover:bg-white" name="26">
                            26
                        </button>
                        <button class="border border-white p-2 hover:bg-white" name="25">
                            25
                        </button>
                    </div>
                    <div id="10" class="flex flex-col">
                        <button class="border border-white p-2 hover:bg-white" name="30">
                            30
                        </button>
                        <button class="border border-white p-2 hover:bg-white" name="29">
                            29
                        </button>
                        <button class="border border-white p-2 hover:bg-white" name="28">
                            28
                        </button>
                    </div>
                    <div id="11" class="flex flex-col">
                        <button class="border border-white p-2 hover:bg-white" name="33">
                            33
                        </button>
                        <button class="border border-white p-2 hover:bg-white" name="32">
                            32
                        </button>
                        <button class="border border-white p-2 hover:bg-white" name="31">
                            31
                        </button>
                    </div>
                    <div id="12" class="flex flex-col">
                        <button class="border border-white p-2 hover:bg-white" name="36">
                            36
                        </button>
                        <button class="border border-white p-2 hover:bg-white" name="35">
                            35
                        </button>
                        <button class="border border-white p-2 hover:bg-white" name="34">
                            34
                        </button>
                    </div>
                </div>

                <div class="w-full">
                    <button class="border border-white py-2 w-full hover:bg-white" name="3rd-to-12">
                        3rd 12
                    </button>
                </div>

                <div class="w-full flex flex-row">
                    <button class="border border-white py-2 w-full hover:bg-white" name="odd" onclick="">
                        odd
                    </button>
                </div>
            </div>
        </div>

        <form action="" class="flex flex-row mx-auto justify-center my-2">
            <input type="text" name="amount" class="rounded-xl text-black" id="">
            <input type="submit" class="ml-2 bg-slate-800 rounded-xl py-2 px-4" value="Zet in">
        </form>
    </div>
    <?php

    function addPrice()
    {
        $tussenmatrix = ['name'][$_POST['amount']];
        //$ex = [{"key": "value"}]
        $selectedBets = $tussenmatrix;
        echo $tussenmatrix;
    }
    echo $tussenmatrix;
    ?>
    <div>

        <button type="submit" id='spin' class="p-1 mb-4 w-1/2 bg-slate-800 rounded-xl">Start game</button>
    </div>

    <script src="rouletteJona.js"></script>
</body>

</html>