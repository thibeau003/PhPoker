<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Higher Lower</title>
    <script src="higherlower.js"></script>
</head>

<body class="bg-slate-700">
    <?php
    include "./tailwind.php";
    include "./header.php";
    include "./connect.php";
    $_SESSION['previousmove'] = "higherButton";
    $_SESSION['loststreak'] = 0;
    $_SESSION['won'] = 0;

    if ($_SESSION["bet"]) {
        echo '<form method="post">
        <button type="submit" name="back" class="pt-20 text-white float-left ml-12 text-xl hover:underline">&#x2190 Back</button>
        </form>';
    }

    if (isset($_POST["back"])) {
        unset($_SESSION["higherlower"]["startgame"]);
    }
    ?>
    <div class="pt-20 text-center text-white absolute inset-x-0 bottom-20">
        <div class="grid grid-cols-3 container mx-auto text-center mb-10">
            <?php

            if (isset($_POST["startgame"])) {
                $_SESSION["higherlower"]["startgame"] = true;
            }

            if (!isset($_SESSION["higherlower"]["startgame"])) {
                $_SESSION["higherlower"]["deck"] = range(1, 52);
                $_SESSION["higherlower"]["startgame"] = false;
                shuffle($_SESSION["higherlower"]["deck"]);
            }

            if (!isset($_SESSION["currentCard"])) {
                $_SESSION["currentCard"] = 1;
                $_SESSION["nextCard"] = 2;
            } else {
                $_SESSION["currentCard"]++;
                $_SESSION["nextCard"]++;
            }

            if ($_SESSION["higherlower"]["startgame"]) {
                echo '<img class="mx-auto" src="./assets/cards/' .
                    $_SESSION["higherlower"]["deck"][$_SESSION["currentCard"]] .
                    '.png" width="65%">';
                echo '<img class="opacity-0 mx-auto" src="./assets/cards/' .
                    $_SESSION["higherlower"]["deck"][$_SESSION["nextCard"]] .
                    '.png" width="65%" id="speelkaart">';
                echo '<img class="mx-auto" src="./assets/cards/A.png" width="65%">';
            }
            ?>

        </div>
        <?php
        if (!$_SESSION["higherlower"]["startgame"]) {
            echo '<form action="" method="post">';
            echo '<input class="bg-slate-800 rounded-lg border-white border-2 text-center" type="number" name="bet" max="' .
                $_SESSION["user"]["balance"] .
                '"  min="1" required>';
            echo "<br>";
            echo "<br>";
            echo '<button class="p-2 bg-slate-800 rounded" type="submit" name="knop">Bet this value</button>';
            echo "</form>";

            if (!$_SESSION["higherlower"]["startgame"]) {
                if (isset($_POST["knop"])) {
                    $_SESSION["bet"] = $_POST["bet"];
                    $_SESSION["user"]["balance"] -= $_SESSION["bet"] * 100;
                    if ($_SESSION["user"]["balance"] < $_SESSION["bet"]) {
                        echo "error with betting";
                    } else {
                        echo "<p>Bet: $" . $_SESSION["bet"] . ".00</p>";
                    }
                }
            }
        }

        if ($_SESSION["higherlower"]["startgame"] == false) {
            echo '
                    <form action="higherlower.php" method="post">
                    <button name="startgame" class="mx-auto text-center p-5" type="submit" onclick="startGame()">Start Game</button>
                    </form>
                    ';
        }
        if ($_SESSION["higherlower"]["startgame"]) {
            print '
                <div>
                <form action="" method="post">
                    <button class="text-xl p-1 hover:underline text-center" type="submit" name="nextButton">Next Card</button>
                </form>
                <button class="bg-slate-800 square-lg p-5 mb-5 rounded" type="submit" onclick="changeOpacity();" name="higher">Higher &#8593</button>
                <button class="bg-slate-800 square-lg p-5 mb-5 rounded" type="submit" onclick="changeOpacity();" name="lower">Lower &#8595</button>

                </div>
                ' .
                "Bet: $" .
                $_SESSION["bet"] .
                ".00" .
                " Winning Money: " . "$" . ($_SESSION['won'] * 100) . " Losing Streak:" . $_SESSION['loststreak'];
        }



        if (isset($_POST["higher"])) {
            $_SESSION['previousmove'] = "higherButton";
        } else {
            $_SESSION['previousmove'] = "lowerButton";
        }

        if ($_SESSION["nextCard"] > $_SESSION["higherlower"]["deck"][$_SESSION["currentCard"]] && $_SESSION['previousmove'] == "higherButton") {
            if (isset($_POST['nextButton'])) {
                $_SESSION['won'] + ($_SESSION['bet'] ** 1.50);
            }
        } else {
            $_SESSION['loststreak'] += 1;
        }
        if ($_SESSION["nextCard"] < $_SESSION["higherlower"]["deck"][$_SESSION["currentCard"]] && $_SESSION['previousmove'] == "lowerButton") {
            if (isset($_POST['nextButton'])) {
                $_SESSION['won'] + ($_SESSION['bet'] ** 1.50);
            }
        } else {
            $_SESSION['loststreak'] += 1;
        }
        ?>
    </div>
</body>

</html>