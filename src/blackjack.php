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

<body class="bg-slate-700 text-white">
  <?php
  require_once "./tailwind.php";
  require_once "./connect.php";

  function shuffleDeck()
  {
    shuffle($_SESSION["blackjack"]["deck"]["cards"]);
  }

  function giveCard($playerOrDealer)
  {
    if (isset($_SESSION["blackjack"])) {
      array_push($_SESSION["blackjack"]["hands"][$playerOrDealer], $_SESSION["blackjack"]["deck"]["cards"][$_SESSION["blackjack"]["deck"]["currentCardIndex"]]);
      $_SESSION["blackjack"]["deck"]["currentCardIndex"]++;

      $valueOfHandPlayer = getValueOfHand("player");
      $valueOfHandDealer = getValueOfHand("dealer");

      if ($valueOfHandPlayer == 21 && $valueOfHandDealer == 21) {
        $result = "Draw (Dealer: " . $valueOfHandDealer . ", You: " . $valueOfHandPlayer . ") <br>";
        endRound("draw");
      } elseif ($valueOfHandPlayer == 21) {
        $result = "You won (Dealer: " . $valueOfHandDealer . ", You: " . $valueOfHandPlayer . ") <br>";
        endRound("won");
      } elseif ($valueOfHandDealer == 21) {
        $result = "Dealer won (Dealer: " . $valueOfHandDealer . ", You: " . $valueOfHandPlayer . ") <br>";
        endRound("lost");
      } elseif ($valueOfHandPlayer > 21) {
        $result = "Dealer won (Dealer: " . $valueOfHandDealer . ", You: " . $valueOfHandPlayer . ") <br>";
        endRound("lost");
      } elseif ($valueOfHandDealer > 21) {
        $result = "You won (Dealer: " . $valueOfHandDealer . ", You: " . $valueOfHandPlayer . ") <br>";
        endRound("won");
      }

      if (!isset($_SESSION["blackjack"])) {
        echo "
          <div class='h-screen flex flex-col justify-center items-center'>
            <div class='rounded space-y-4 bg-slate-800 p-10'>
            " . $result . "
              <form method='post' class='flex flex-col gap-2'>
                <input name='bet' type='number' placeholder='Enter your bet' min='1' required class='bg-slate-700 p-2 w-full rounded' />
                <button name='startNewGame' class='bg-slate-700 text-center px-4 py-2 rounded'>Start new game</button>
                <a href='./index.php' class='text-center'>Home</a>
              </form>
            </div>
          </div>
        ";
      }
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
    $_SESSION["blackjack"]["bet"] = $_POST["bet"];
    $_SESSION["blackjack"]["deck"]["cards"] = range(1, 52);
    $_SESSION["blackjack"]["deck"]["currentCardIndex"] = 0;
    $_SESSION["blackjack"]["hands"]["player"] = [];
    $_SESSION["blackjack"]["hands"]["dealer"] = [];
    $_SESSION["blackjack"]["hands"]["beginning"] = true;
    $_SESSION["blackjack"]["standed"] = false;

    shuffleDeck();
    giveCard("player");
    giveCard("dealer");
    giveCard("player");
    giveCard("dealer");
  }

  function getValueOfHand($playerOrDealer)
  {
    if (isset($_SESSION["blackjack"])) {
      $value = 0;

      for ($i = 0; $i < count($_SESSION["blackjack"]["hands"][$playerOrDealer]); $i++) {
        $card = $_SESSION["blackjack"]["hands"][$playerOrDealer][$i];
        $value += getValueOfCard($card);
      }

      if (count($_SESSION["blackjack"]["hands"]["dealer"]) >= 2 && $_SESSION["blackjack"]["hands"]["beginning"] && $playerOrDealer == "dealer") {
        $value -= getValueOfCard($_SESSION["blackjack"]["hands"]["dealer"][1]);
      }

      return $value;
    }
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

  function endRound($status)
  {
    global $mysqli;
    $var1 = $_SESSION["blackjack"]["bet"] * 100;
    if ($status === "won") {
      $stmt = $mysqli->prepare("UPDATE tblusers SET balance = balance + ? WHERE user_id = ?");
      $stmt->bind_param('ii', $var1, $_SESSION['user']['user_id']);
      $stmt->execute();
      $_SESSION['user']['balance'] = $_SESSION['user']['balance'] + $_SESSION["blackjack"]["bet"] * 100;
    } elseif ($status === "lost") {
      $stmt = $mysqli->prepare("UPDATE tblusers SET balance = balance - ? WHERE user_id = ?");
      $stmt->bind_param('ii', $var1, $_SESSION['user']['user_id']);
      $stmt->execute();
      $_SESSION['user']['balance'] = $_SESSION['user']['balance'] - $_SESSION["blackjack"]["bet"] * 100;
    } elseif ($status === "draw") {
      $stmt = $mysqli->prepare("UPDATE tblusers SET balance = balance - ? WHERE user_id = ?");
      $var1 = ($_SESSION["blackjack"]["bet"] * 100) / 2;
      $stmt->bind_param('ii', $var1, $_SESSION['user']['user_id']);
      $stmt->execute();
      $_SESSION['user']['balance'] = $_SESSION['user']['balance'] - $_SESSION["blackjack"]["bet"] * 100;
    }

    unset($_SESSION["blackjack"]);
  }

  function hit()
  {
    if ($_SESSION["blackjack"]["hands"]["beginning"]) {
      $_SESSION["blackjack"]["hands"]["beginning"] = false;
    }

    giveCard("player");
    giveCard("dealer");
  }

  function stand()
  {
    $_SESSION["blackjack"]["standed"] = true;

    if ($_SESSION["blackjack"]["hands"]["beginning"]) {
      $_SESSION["blackjack"]["hands"]["beginning"] = false;
    }

    while (isset($_SESSION["blackjack"]) && getValueOfHand("dealer") !== 17) {
      giveCard("dealer");
    };
  }


  if (isset($_POST["startNewGame"])) {
    startGame();
  }

  if (!isset($_SESSION["blackjack"])) {
    echo "
          <div class='h-screen flex flex-col justify-center items-center'>
            <div class='rounded space-y-4 bg-slate-800 p-10'>
              <form method='post' class='flex flex-col gap-2'>
                <input name='bet' type='number' placeholder='Enter your bet' min='1' required class='bg-slate-700 p-2 w-full rounded' />
                <button name='startNewGame' class='bg-slate-700 text-center px-4 py-2 rounded'>Start new game</button>
              </form>
            </div>
          </div>
        ";
  }

  if (isset($_SESSION["blackjack"])) {
    if (isset($_POST["hit"])) {
      hit();
    } elseif (isset($_POST["stand"])) {
      stand();
    } elseif (isset($_POST["double"])) {
    } elseif (isset($_POST["split"])) {
    }
  }

  if (isset($_SESSION["blackjack"])) {
    echo '
    <div class="h-screen p-16 grid grid-cols-6 bg-slate-700">
      <div class="grid gap-4 place-content-center">
        <div class="text-center text-4xl">' . getValueOfHand("dealer") . '</div>';
    if (!$_SESSION["blackjack"]["standed"]) {
      echo '
        <form method="post" class="grid gap-4 place-content-center">
          <button name="hit" class="px-4 py-2 bg-slate-800  rounded-md">Hit</button>
          <button name="stand" class="px-4 py-2 bg-slate-800  rounded-md">Stand</button>
          <button class="px-4 py-2 bg-slate-800  rounded-md">Double</button>';
    }
    if (canSplit()) {
      echo '<button name="split" class="px-4 py-2 bg-slate-800  rounded-md">Split</button>';
    }
    echo '
        </form>
        <div class=" text-center text-4xl">' . getValueOfHand("player") . '</div>
      </div>
      <div class="col-span-4">
        <div class="h-full grid px-16 grid-rows-2">
          <div class="flex -space-x-44">';
    foreach ($_SESSION["blackjack"]["hands"]["dealer"] as $key => $card) {
      if ($_SESSION["blackjack"]["hands"]["beginning"] && $key == 1) {
        echo '<img class="max-h-80" src="./assets/cards/A.png" alt="Cards">';
      } else {
        echo '<img class="max-h-80" src="./assets/cards/' . $card . '.png" alt="Cards">';
      }
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
      <div class="col-span-1 space-y-10 grid place-content-center">
      <div class="text-center text-4xl truncate">Bet: ' . $_SESSION["blackjack"]["bet"] . '</div>
        <img src="./assets/cards/A.png" alt="Cards">
      </div>
    </div>
    ';
  }
  ?>
</body>

</html>