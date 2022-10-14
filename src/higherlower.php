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
    ?>
    <a class="pt-20 text-white float-left ml-12 text-xl" href="./higherlower.php">&#x2190 Back</a>
    <div class="pt-20 text-center text-white absolute inset-x-0 bottom-20">
        <div class="grid grid-cols-3 container mx-auto text-center mb-10">
            <?php

            if (!isset($_SESSION['user'])) {
                header("location: login.php");
            }

            echo '<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>';
            $deck = range(1, 52);
            shuffle($deck);
            echo '<img class="mx-auto" src="./assets/cards/' . $deck[1] . '.png" width="65%">';
            echo '<img class="opacity-0	 mx-auto" src="./assets/cards/' . $deck[2] . '.png" width="65%" id="speelkaart">';
            echo '<img class="mx-auto" src="./assets/cards/A" width="65%">';
            ?>
        </div>
        <?php
        print '<div>
        <script type="text/javascript">
            $(document).ready(function(){
            $("#myform").submit(function(){
                    $.ajax({
                        url:"higherlower.php"
                        type:"post",
                        data: datastring,
                        success: function(data) {
                            alert(data);
                        }
                    });
            });
        });
        </script>
        <form action="{' . $_SERVER['PHP_SELF'] . '}" method="post" onsubmit="javascript:return false;" id="myform">
        <button class="bg-slate-800 square-lg p-8 mb-5 rounded" type="submit" onclick="changeOpacity();" name="higher">Higher &#8593</button>
        <button class="bg-slate-800 square-lg p-8 mb-5 rounded" type="submit" name="lower">Lower &#8595</button>
        </form>
        </div>';


        if (isset($_POST['knop'])) {
            $_SESSION['bet'] = $_POST['bet'];
            $_SESSION['user']['balance'] -= $_SESSION['bet'] * 100;
            if ($_SESSION['user']['balance'] < $_SESSION['bet']) {
                echo "error with betting";
            } else {
                echo "<p>Bet: $" . $_SESSION['bet'] . ".00</p>";
            }
            $deck[1] + 1;
        } else {
            echo '<form action="" method="post">';
            echo '<input class="bg-slate-800 rounded-lg border-white border-2 text-center" type="number" name="bet" max="' . $_SESSION['user']['balance'] . '"  min="0" required>';
            echo "<br>";
            echo "<br>";
            echo '<button class="p-2 bg-slate-800 rounded" type="submit" name="knop">Bet this value</button>';
            echo '</form>';
        }

        if (isset($_POST['higher'])) {
        } elseif (isset($_POST['lower'])) {
        }

        ?>
    </div>
</body>

</html>