<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blackjack</title>
</head>

<body>
  <?php
  require_once "./tailwind.php";

  function shuffleDeck()
  {
    shuffle($_SESSION["blackjack"]["deck"]["cards"]);
  }

  function giveCard($playerOrDealer, $amount = 1)
  {
    for ($i = 0; $i < $amount; $i++) {
      array_push($_SESSION["blackjack"]["hands"][$playerOrDealer], $_SESSION["blackjack"]["deck"]["cards"][$_SESSION["blackjack"]["deck"]["currentCardIndex"]]);

      echo "" . $_SESSION["blackjack"]["deck"]["cards"][$_SESSION["blackjack"]["deck"]["currentCardIndex"]] . " gegeven aan " . $playerOrDealer . " <br>";

      $_SESSION["blackjack"]["deck"]["currentCardIndex"]++;
    }

    $valueOfHandPlayer = getValueOfHand("player");
    $valueOfHandDealer = getValueOfHand("dealer");


    if ($valueOfHandPlayer == 21 && $valueOfHandDealer == 21) {
      echo "draw <br>";
      return endRound();
    } elseif ($valueOfHandPlayer == 21) {
      echo "player heeft gewonnen (dealer: " . $valueOfHandDealer . ", speler: " . $valueOfHandPlayer . ") <br>";
      return endRound();
    } elseif ($valueOfHandDealer == 21) {
      echo "dealer won (dealer: " . $valueOfHandDealer . ", speler: " . $valueOfHandPlayer . ") <br>";
      return endRound();
    } elseif ($valueOfHandPlayer > 21) {
      echo "dealer won (dealer: " . $valueOfHandDealer . ", speler: " . $valueOfHandPlayer . ") <br>";
      return endRound();
    } elseif ($valueOfHandDealer > 21) {
      echo "player heeft gewonnen (dealer: " . $valueOfHandDealer . ", speler: " . $valueOfHandPlayer . ") <br>";
      return endRound();
    }
  }

  function getValueOfCard($card)
  {
    $value = 0;

    switch ($card % 13) {
      case '11':
        $value = 10;
        break;
      case '12':
        $value = 10;
        break;
      case '0':
        $value = 10;
        break;
      default:
        $value = $card % 13;
        break;
    }

    return $value;
  }

  function startGame()
  {
    $_SESSION["blackjack"]["deck"]["cards"] = range(1, 52);
    $_SESSION["blackjack"]["deck"]["currentCardIndex"] = 0;
    $_SESSION["blackjack"]["hands"]["player"] = [];
    $_SESSION["blackjack"]["hands"]["dealer"] = [];

    echo "sessie blackjack aangemaakt <br>";

    shuffleDeck();

    echo "deck geshuffled <br>";

    echo "vanaf 91";
    giveCard("player", 2);

    if (isset($_SESSION["blackjack"])) {
      giveCard("dealer", 2); 
    }
  }

  function getValueOfHand($playerOrDealer)
  {
    $value = 0;

    for ($i = 0; $i < count($_SESSION["blackjack"]["hands"][$playerOrDealer]); $i++) {
      $value += getValueOfCard($_SESSION["blackjack"]["hands"][$playerOrDealer][$i]);
    }

    return $value;
  }

  function canSplit()
  {
    $modulusCard1 = $_SESSION["blackjack"]["hands"]["player"][0] % 13;
    $modulusCard2 = $_SESSION["blackjack"]["hands"]["player"][1] % 13;
    if ($modulusCard1 == $modulusCard2 && count($_SESSION["blackjack"]["hands"]["player"]) == 2) {
      return true;
    }

    return false;
  }

  function endRound()
  {
    unset($_SESSION["blackjack"]);
    echo "unsetted blackjack <br>";
  }

  function hit()
  {
    echo "vanaf 126";
    giveCard("player");
    giveCard("dealer");
  }

  if (isset($_POST["startNewGame"])) {
    startGame();
  }

  if (!isset($_SESSION["blackjack"])) {
    echo '
    <form method="post">
      <button name="startNewGame">Start new game</button>
    </form>
    ';
  }

  if (isset($_SESSION["blackjack"])) {
    if (isset($_POST["hit"])) {
      hit();
    }
  }

  if (isset($_SESSION["blackjack"])) {
    echo '
    <div class="h-screen p-16 grid grid-cols-6 bg-slate-700">
      <div class="grid gap-4 place-content-center">
      <div class="text-white">' . getValueOfHand("dealer") . '</div>
        <form method="post" class="grid gap-4 place-content-center">
          <button name="hit" class="px-4 py-2 bg-slate-800 text-white rounded-md">Hit</button>
          <button class="px-4 py-2 bg-slate-800 text-white rounded-md">Stand</button>
          <button class="px-4 py-2 bg-slate-800 text-white rounded-md">Double</button>';
    if (canSplit()) {
      echo '<button name="split" class="px-4 py-2 bg-slate-800 text-white rounded-md">Split</button>';
    }
    echo '
        </form>
        <div class="text-white">' . getValueOfHand("player") . '</div>
      </div>
      <div class="col-span-4">
        <div class="h-full grid px-16 grid-rows-2">
          <div class="flex -space-x-44">';
    foreach ($_SESSION["blackjack"]["hands"]["dealer"] as $card) {
      echo '<img class="max-h-80" src="./assets/cards/' . $card . '.png" alt="Cards">';
    }
    echo '
          </div>
          <div class="flex -space-x-44">';
    foreach ($_SESSION["blackjack"]["hands"]["player"] as $card) {
      echo '<img class="max-h-80" src="./assets/cards/' . $card . '.png" alt="Cards">';
    }
    echo '
          </div>
        </div>
      </div>
      <div class="col-span-1 grid place-content-center">
        <img src="./assets/cards/A.png" alt="Cards">
      </div>
    </div>
    ';
  }
  ?>
</body>

</html>