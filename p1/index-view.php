<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <title>RP - Rock-Paper-Scissors</title>
  <link rel="stylesheet" href="/css/main.css">
</head>
 
<body class="centered-wrapper">
  <h1>Project 1 - Game -Rock-Paper-Scissors</h1>
  <h2>Mechanics</h2>
  <div>
    <h3>In this game, the system randomly assigns each player's choice.</h3>
    <ul>
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
  <!--Display the result of the function gameCheck -->
  <div class="TitleDiv">
    <h1>Result : <?php echo $result ?></h1>
  </div>
  <div class="row">
    <div class="column">
      <div>
        <h2>Player A </h2>
      </div>
      <!--Show the image according to the number assigned to player A -->
      <div><?php echo "<img src='/images/" . $game[$playerA] . ".jpeg' width='200' height='200'>"; ?></div>
      <div>
        <h3><?php echo $game[$playerA] ?></h3>
      </div>
    </div>
    <div class="column">
      <div>
        <h2>Player B </h2>
      </div>
      <!--Show the image according to the number assigned to player B -->
      <div><?php echo "<img src='/images/" . $game[$playerB] . ".jpeg' width='200' height='200'>"; ?></div>
      <div>
        <h3><?php echo $game[$playerB] ?></h3>
      </div>
    </div>
  </div>
</body>

</html>