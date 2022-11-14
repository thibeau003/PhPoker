<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PhPoker</title>
</head>

<body class="bg-slate-700">
    <?php
    include "./tailwind.php";
    include "./header.php";
    ?>

    <div class="container pt-20 mx-auto">
        <p class="text-2xl font-extrabold text-white mb-6 text-center">Our games</p>


        <div class="flex flex-row">
            <a href="./blackjack.php" class="w-1/2 mr-8">
                <div class="bg-slate-800 rounded-xl w-full pb-4">
                    <p class="text-white pl-6 pt-4 text-lg font-semibold">Favourite</p>
                    <hr class="border-slate-900 mx-2">
                    <p class="text-white pl-6 pt-4 text-lg font-semibold">Blackjack</p>
                </div>
            </a>
            <a href="./headsortails.php" class="w-1/2">
                <div class="bg-slate-800 rounded-xl w-full pb-4">
                    <p class="text-white pl-6 pt-4 text-lg font-semibold">New</p>
                    <hr class="border-slate-900 mx-2">
                    <p class="text-white pl-6 pt-4 text-lg font-semibold">Heads or tails</p>
                </div>
            </a>
            
            <?php
            if (!empty($_SESSION["user"])) {
                if (!$_SESSION["user"]["admin"] == 0) {
                    print '<a href="adminUsersPanel.php" class="w-1/2">
                <div class="bg-slate-800 rounded-xl w-full pb-4">
                    <p class="text-white pl-6 pt-4 text-lg font-semibold"> go to users panel
                </div>
            </a>';
                }
            }
            ?>

        </div>
        <div class="flex flex-row mt-5">
            <a href="./towers.php" class="w-1/2 mr-8">
                <div class="bg-slate-800 rounded-xl w-full pb-4">
                    <p class="text-white pl-6 pt-4 text-lg font-semibold">Towers</p>
                </div>
            </a>
            <a href="./mines.php" class="w-1/2">
                <div class="bg-slate-800 rounded-xl w-full pb-4">
                    <p class="text-white pl-6 pt-4 text-lg font-semibold">Mines</p>
                </div>
            </a> 
        </div>
        <div class="flex flex-row mt-5">
            <a href="./higherlower.php" class="w-full">
                <div class="bg-slate-800 rounded-xl w-full pb-4">
                    <p class="text-white pl-6 pt-4 text-lg font-semibold">Higherlower</p>
                </div>
            </a>
        </div>
    </div>
</body>

</html>