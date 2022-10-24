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
  session_start();

  function shuffleDeck()
  {
    shuffle($_SESSION["blackjack"]["deck"]["cards"]);
  }

  function giveCard($userOrDealer, $amount = 1)
  {
    for ($i = 0; $i < $amount; $i++) {
      array_push($_SESSION["blackjack"]["hands"][$userOrDealer], $_SESSION["blackjack"]["deck"]["cards"][$_SESSION["blackjack"]["deck"]["currentCardIndex"]]);
      $_SESSION["blackjack"]["deck"]["currentCardIndex"]++;
    }
  }

  function getValueOfCard($card) {
    $value = 0;

    switch ($card % 13) {
      case '11':
        $value = 10;
        break;
      case '12':
        $value = 10;
        break;
      case '13':
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
    shuffleDeck();

    giveCard("player", 2);
    giveCard("dealer", 2);
  }

  if (!isset($_SESSION["blackjack"])) {
    $_SESSION["blackjack"]["deck"]["cards"] = range(1, 52);
    $_SESSION["blackjack"]["deck"]["currentCardIndex"] = 0;
    $_SESSION["blackjack"]["hands"]["player"] = [];
    $_SESSION["blackjack"]["hands"]["dealer"] = [];

    startGame();
  } else {
    echo '
    <div class="h-screen p-16 grid grid-cols-6 bg-slate-700">
      <div class="col-span-1 grid gap-4 place-content-center">
        <button class="px-4 py-2 bg-slate-800 text-white rounded-md">Hit</button>
        <button class="px-4 py-2 bg-slate-800 text-white rounded-md">Stand</button>
        <button class="px-4 py-2 bg-slate-800 text-white rounded-md">Double</button>
        <button class="px-4 py-2 bg-slate-800 text-white rounded-md">Split</button>
      </div>
      <div class="col-span-4">
        <div class="h-full grid grid-rows-2">
          <div class="flex ml-44">';
            foreach ($_SESSION["blackjack"]["hands"]["dealer"] as $card) {
              echo '<img class="max-h-80 -ml-44" src="./assets/cards/'. $card .'.png" alt="Cards">';
            }
          echo '
          </div>
          <div class="flex ml-44">';
            foreach ($_SESSION["blackjack"]["hands"]["player"] as $card) {
              echo '<img class="max-h-80 -ml-44" src="./assets/cards/'. $card .'.png" alt="Cards">';
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