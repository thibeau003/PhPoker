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
                <button class="border border-white h-3/5 px-2 hover:bg-white" name="0" onclick="voorbeeld(name)">
                    0
                </button>
            </div>
            <div class="flex flex-col">
                <div class="flex flex-row">
                    <div id="1" class="flex flex-col">

                        <button class="border border-white p-2 hover:bg-white" name="3" onclick="voorbeeld(name)">
                            3
                        </button>
                        <button class="border border-white p-2 hover:bg-white" name="2" onclick="voorbeeld(name)">
                            2
                        </button>
                        <button class="border border-white p-2 hover:bg-white" name="1" onclick="voorbeeld(name)">
                            1
                        </button>
                    </div>
                    <div id="2" class="flex flex-col">
                        <button class="border border-white p-2 hover:bg-white" name="6" onclick="voorbeeld(name)">
                            6
                        </button>
                        <button class="border border-white p-2 hover:bg-white" name="5" onclick="voorbeeld(name)">
                            5
                        </button>
                        <button class="border border-white p-2 hover:bg-white" name="4" onclick="voorbeeld(name)">
                            4
                        </button>
                    </div>
                    <div id="3" class="flex flex-col">
                        <button class="border border-white p-2 hover:bg-white" name="9" onclick="voorbeeld(name)">
                            9
                        </button>
                        <button class="border border-white p-2 hover:bg-white" name="8" onclick="voorbeeld(name)">
                            8
                        </button>
                        <button class="border border-white p-2 hover:bg-white" name="7" onclick="voorbeeld(name)">
                            7
                        </button>
                    </div>
                    <div id="4" class="flex flex-col">
                        <button class="border border-white p-2 hover:bg-white" name="12" onclick="voorbeeld(name)">
                            12
                        </button>
                        <button class="border border-white p-2 hover:bg-white" name="11" onclick="voorbeeld(name)">
                            11
                        </button>
                        <button class="border border-white p-2 hover:bg-white" name="10" onclick="voorbeeld(name)">
                            10
                        </button>
                    </div>
                </div>

                <div class="w-full">
                    <button class="border border-white py-2 w-full hover:bg-white" name="1st-to-12" onclick="voorbeeld(name)">
                        1st 12
                    </button>
                </div>

                <div class="w-full flex flex-row">
                    <button class="border border-white py-2 w-full hover:bg-white" name="even" onclick="voorbeeld(name)">
                        even
                    </button>
                </div>
            </div>

            <div class="flex flex-col">
                <div class="flex flex-row">
                    <div id="5" class="flex flex-col">
                        <button class="border border-white p-2 hover:bg-white" name="15" onclick="voorbeeld(name)">
                            15
                        </button>
                        <button class="border border-white p-2 hover:bg-white" name="14" onclick="voorbeeld(name)">
                            14
                        </button>
                        <button class="border border-white p-2 hover:bg-white" name="13" onclick="voorbeeld(name)">
                            13
                        </button>
                    </div>
                    <div id="6" class="flex flex-col">
                        <button class="border border-white p-2 hover:bg-white" name="18" onclick="voorbeeld(name)">
                            18
                        </button>
                        <button class="border border-white p-2 hover:bg-white" name="17" onclick="voorbeeld(name)">
                            17
                        </button>
                        <button class="border border-white p-2 hover:bg-white" name="16" onclick="voorbeeld(name)">
                            16
                        </button>
                    </div>
                    <div id="7" class="flex flex-col">
                        <button class="border border-white p-2 hover:bg-white" name="21" onclick="voorbeeld(name)">
                            21
                        </button>
                        <button class="border border-white p-2 hover:bg-white" name="20" onclick="voorbeeld(name)">
                            20
                        </button>
                        <button class="border border-white p-2 hover:bg-white" name="19" onclick="voorbeeld(name)">
                            19
                        </button>
                    </div>
                    <div id="8" class="flex flex-col">
                        <button class="border border-white p-2 hover:bg-white" name="24" onclick="voorbeeld(name)">
                            24
                        </button>
                        <button class="border border-white p-2 hover:bg-white" name="23" onclick="voorbeeld(name)">
                            23
                        </button>
                        <button class="border border-white p-2 hover:bg-white" name="22" onclick="voorbeeld(name)">
                            22
                        </button>
                    </div>
                </div>

                <div class="w-full">
                    <button class="border border-white py-2 w-full hover:bg-white" name="2nd-to-12" onclick="voorbeeld(name)">
                        2nd 12
                    </button>
                </div>

                <div class="w-full flex flex-row">
                    <button class="border border-white py-2 w-full hover:bg-white" name="red" onclick="voorbeeld(name)">
                        red
                    </button>
                    <button class="border border-white py-2 w-full hover:bg-white" name="black" onclick="voorbeeld(name)">
                        black
                    </button>
                </div>
            </div>

            <div class="flex flex-col">
                <div class="flex flex-row">
                    <div id="9" class="flex flex-col">
                        <button class="border border-white p-2 hover:bg-white" name="27" onclick="voorbeeld(name)">
                            27
                        </button>
                        <button class="border border-white p-2 hover:bg-white" name="26" onclick="voorbeeld(name)">
                            26
                        </button>
                        <button class="border border-white p-2 hover:bg-white" name="25" onclick="voorbeeld(name)">
                            25
                        </button>
                    </div>
                    <div id="10" class="flex flex-col">
                        <button class="border border-white p-2 hover:bg-white" name="30" onclick="voorbeeld(name)">
                            30
                        </button>
                        <button class="border border-white p-2 hover:bg-white" name="29" onclick="voorbeeld(name)">
                            29
                        </button>
                        <button class="border border-white p-2 hover:bg-white" name="28" onclick="voorbeeld(name)">
                            28
                        </button>
                    </div>
                    <div id="11" class="flex flex-col">
                        <button class="border border-white p-2 hover:bg-white" name="33" onclick="voorbeeld(name)">
                            33
                        </button>
                        <button class="border border-white p-2 hover:bg-white" name="32" onclick="voorbeeld(name)">
                            32
                        </button>
                        <button class="border border-white p-2 hover:bg-white" name="31" onclick="voorbeeld(name)">
                            31
                        </button>
                    </div>
                    <div id="12" class="flex flex-col">
                        <button class="border border-white p-2 hover:bg-white" name="36" onclick="voorbeeld(name)">
                            36
                        </button>
                        <button class="border border-white p-2 hover:bg-white" name="35" onclick="voorbeeld(name)">
                            35
                        </button>
                        <button class="border border-white p-2 hover:bg-white" name="34" onclick="voorbeeld(name)">
                            34
                        </button>
                    </div>
                </div>

                <div class="w-full">
                    <button class="border border-white py-2 w-full hover:bg-white" name="3rd-to-12" onclick="voorbeeld(name)">
                        3rd 12
                    </button>
                </div>

                <div class="w-full flex flex-row">
                    <button class="border border-white py-2 w-full hover:bg-white" name="odd" onclick="voorbeeld(name)">
                        odd
                    </button>
                </div>
            </div>
        </div>

        <form action="" class="flex flex-row mx-auto justify-center my-2">
            <input type="number" name="amount" class="rounded-xl text-black" id="amount" required>
        </form>
    </div>
    <div>
        <?php
        echo $_COOKIE['number'];
        if (($_COOKIE['number'] = "")) {
            echo "saus";
            header('location: roulette.php?geenlogin');
        } else {
            echo "kkak";
        ?><button type="submit" id='spin' class="p-1 mb-4 w-1/2 mt-6 flex flex-row mx-auto justify-center  bg-slate-800 text-white rounded-xl" onclick="inzet()">Start game</button>
        <?php
        }
        ?>

    </div>
    <script src="rouletteJona.js"></script>
    <?php
    if (isset($_GET['geenlogin'])) {
        echo "<div class='flex' justify-center items-center mt- text-red-500'>Foute inloggevens</div>";
    }
    ?>
</body>

</html>