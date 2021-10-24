<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <title>RP - Rock-Paper-Scissors</title>
  <link rel="stylesheet" href="/css/main.css">
</head>

<body class="centered-wrapper">
  <h1>Project 2 - Game Rock-Paper-Scissors</h1>
  <h3>Mechanics</h3>
  <div>
    <h3>In this game version, you play against the computer. You have to choose one of the three options, and the system randomly chooses another option.</h3>
    <li>Rock-Paper-Scissors is a game played to settle disputes between two people.</li>
    <li>Required of two players</li>
    <li>The game is played where players deliver hand signals that will represent the elements of the game; rock, paper, and scissors.</li>
    <li>Three simple rules determine the outcome of the game:
      <ul>
        <li>Rock wins against scissors.</li>
        <li>Scissors beat against paper.</li>
        <li>Paper wins against the rock.</li>
      </ul>
    </li>
    </ul>
  </div>
  <div>
    <form method="POST" action="/process.php">
      <div class="container">
        <h3>Select your choice</h3>
        <input type="radio" name="choice" value="0" id="rock-radio">
        <label for="rock-radio"><img src="/images/rock.jpeg" width="100" height='100'></label>
        <input type="radio" name="choice" value="1" id="paper-radio">
        <label for="paper-radio"><img src="/images/paper.jpeg" width="100" height='100'></label>
        <input type="radio" name="choice" value="2" id="scissors-radio">
        <label for="scissors-radio"><img src="/images/scissors.jpeg" width="100" height='100'></label>
      </div>
      <div class="container">
        <button class="btn-gradient blue block" type="submit">
          <h3>Play</h3>
        </button>
      </div>
    </form>

    <!--Display the result of the function gameCheck -->
    <div class="TitleDiv">
      <h1>Result : <?php echo (isset($winner) ? $winner : '') ?></h1>
    </div>
    <div class="row">
      <div class="column">
        <div>
          <h2>You </h2>
        </div>
        <!--Show the image according to the number assigned to player A -->
        <div><?php echo (isset($choice) ? "<img src='/images/" . $game[$choice] . ".jpeg' width='200' height='200'>" : '') ?></div>
        <div>
          <h3><?php echo (isset($game) ? $game[$choice] : '') ?></h3>
        </div>
      </div>
      <div class="column">
        <div>
          <h2>Computer </h2>
        </div>
        <!--Show the image according to the number assigned to player B -->
        <div><?php echo (isset($computer) ? "<img src='/images/" . $game[$computer] . ".jpeg' width='200' height='200'>" : '') ?></div>
        <div>
          <h3><?php echo (isset($computer) ? $game[$computer] : '') ?></h3>
        </div>
      </div>
    </div>
</body>

</html>