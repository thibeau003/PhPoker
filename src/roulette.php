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
    ?>

    <div class="container text-center mx-auto pt-20 text-white">
        <p class='text-center text-xl font-semibold text-white'>Roulette</p>


        <canvas id="canvas" width="500" height="500" class="mx-auto mt-4"></canvas>
        

        <div class="flex flex-row justify-center mt-2">
            <div id="0" class="">
                <button class="border border-white h-3/5 px-2">
                    0
                </button>
            </div>

            <div class="flex flex-col">
                <div class="flex flex-row">
                    <div id="1" class="flex flex-col">
                        <button class="border border-white p-2">
                            3
                        </button>
                        <button class="border border-white p-2">
                            2
                        </button>
                        <button class="border border-white p-2">
                            1
                        </button>
                    </div>
                    <div id="2" class="flex flex-col">
                        <button class="border border-white p-2">
                            6
                        </button>
                        <button class="border border-white p-2">
                            5
                        </button>
                        <button class="border border-white p-2">
                            4
                        </button>
                    </div>
                    <div id="3" class="flex flex-col">
                        <button class="border border-white p-2">
                            9
                        </button>
                        <button class="border border-white p-2">
                            8
                        </button>
                        <button class="border border-white p-2">
                            7
                        </button>
                    </div>
                    <div id="4" class="flex flex-col">
                        <button class="border border-white p-2">
                            12
                        </button>
                        <button class="border border-white p-2">
                            11
                        </button>
                        <button class="border border-white p-2">
                            10
                        </button>
                    </div>
                </div>

                <div class="w-full">
                    <button class="border border-white py-2 w-full">
                        1st 12
                    </button>
                </div>

                <div class="w-full flex flex-row">
                    <button class="border border-white py-2 w-full">
                        even
                    </button>
                </div>
            </div>

            <div class="flex flex-col">
                <div class="flex flex-row">
                    <div id="5" class="flex flex-col">
                        <button class="border border-white p-2">
                            15
                        </button>
                        <button class="border border-white p-2">
                            14
                        </button>
                        <button class="border border-white p-2">
                            13
                        </button>
                    </div>
                    <div id="6" class="flex flex-col">
                        <button class="border border-white p-2">
                            18
                        </button>
                        <button class="border border-white p-2">
                            17
                        </button>
                        <button class="border border-white p-2">
                            16
                        </button>
                    </div>
                    <div id="7" class="flex flex-col">
                        <button class="border border-white p-2">
                            21
                        </button>
                        <button class="border border-white p-2">
                            20
                        </button>
                        <button class="border border-white p-2">
                            19
                        </button>
                    </div>
                    <div id="8" class="flex flex-col">
                        <button class="border border-white p-2">
                            24
                        </button>
                        <button class="border border-white p-2">
                            23
                        </button>
                        <button class="border border-white p-2">
                            22
                        </button>
                    </div>
                </div>

                <div class="w-full">
                    <button class="border border-white py-2 w-full">
                        2nd 12
                    </button>
                </div>

                <div class="w-full flex flex-row">
                    <button class="border border-white py-2 w-full">
                        red
                    </button>
                    <button class="border border-white py-2 w-full">
                        black
                    </button>
                </div>
            </div>

            <div class="flex flex-col">
                <div class="flex flex-row">
                    <div id="9" class="flex flex-col">
                        <button class="border border-white p-2">
                            27
                        </button>
                        <button class="border border-white p-2">
                            26
                        </button>
                        <button class="border border-white p-2">
                            25
                        </button>
                    </div>
                    <div id="10" class="flex flex-col">
                        <button class="border border-white p-2">
                            30
                        </button>
                        <button class="border border-white p-2">
                            29
                        </button>
                        <button class="border border-white p-2">
                            28
                        </button>
                    </div>
                    <div id="11" class="flex flex-col">
                        <button class="border border-white p-2">
                            33
                        </button>
                        <button class="border border-white p-2">
                            32
                        </button>
                        <button class="border border-white p-2">
                            31
                        </button>
                    </div>
                    <div id="12" class="flex flex-col">
                        <button class="border border-white p-2">
                            36
                        </button>
                        <button class="border border-white p-2">
                            35
                        </button>
                        <button class="border border-white p-2">
                            34
                        </button>
                    </div>
                </div>

                <div class="w-full">
                    <button class="border border-white py-2 w-full">
                        3rd 12
                    </button>
                </div>

                <div class="w-full flex flex-row">
                    <button class="border border-white py-2 w-full">
                        odd
                    </button>
                </div>
            </div>
        </div>

        <form action="" class="flex flex-row mx-auto justify-center my-2">
            <input type="text" name="amount" class="rounded-xl" id="">
            <input type="submit" class="ml-2 bg-slate-800 rounded-xl py-2 px-4" value="Zet in">
        </form>

        <button type="submit" id='spin' class="p-1 mb-4 w-1/2 bg-slate-800 rounded-xl" >Start game</button>
    </div>

    <script src="rouletteJona.js"></script>
</body>
</html>