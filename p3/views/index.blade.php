@extends('templates/master')

@section('title')
{{ $app->config('app.name') }}
@endsection

@section('content')
<div class='center'>
  <h3>Instructions</h3>

  <h4>In this game version, you play against the computer. You have to choose one of the three options, and the system randomly chooses another option.</h4>
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
<div class='center'>
  <h4><a href='/history'>Game History</a></h4>
</div>
<form method="POST" action="/process">
  <div class="container">
    <h4>Select your choice</h4>
    <input type="radio" test='rock-radio' name="choice" value="0" id="rock-radio">
    <label for="rock-radio"><img src="/images/rock.png" width="60" height="45"></label>
    <input type="radio" test='paper-radio' name="choice" value="1" id="paper-radio">
    <label for="paper-radio"><img src="/images/paper.png" width="60" height="45"></label>
    <input type="radio" test='scissors-radio' name="choice" value="2" id="scissors-radio">
    <label for="scissors-radio"><img src="/images/scissors.png" width="60" height="45"></label>
  </div>
  <div class="center container">
    <button test='submit-button' class="btn-gradient blue" type="submit">
      <h3>Play</h3>
    </button>
  </div>
</form>
<div class='center'>
  @if ($app->errorsExist())
  <ul test='validation-output' class='alert required'>
    @foreach($app->errors() as $error)
    <li>{{ $error }}</li>
    @endforeach
  </ul>
  @endif
</div>
<!--Display the result of the winner -->
<div class="container" test='results-div'>
  <h3>Result : <span test='winner'><?php echo (isset($winner) ? $winner : '') ?></span></h3>
</div>
<div class="row container">
  <div class="column">
    <div>
      <h4>You </h4>
    </div>
    <!--Show the image according to the number selected by player -->
    <div><?php echo (isset($choice) ? "<img src='/images/" . $game[$choice] . ".png' width='50' height='50'>" : '') ?></div>
    <div>
      <h4><?php echo (isset($game) ? $game[$choice] : '') ?></h4>
    </div>
  </div>
  <div class="column">
    <div>
      <h4>Computer </h4>
    </div>
    <!--Show the image according to the number assigned to the computer -->
    <div><?php echo (isset($computer) ? "<img src='/images/" . $game[$computer] . ".png' width='50' height='50'>" : '') ?></div>
    <div>
      <h4><?php echo (isset($computer) ? $game[$computer] : '') ?></h4>
    </div>
  </div>
</div>
@endsection