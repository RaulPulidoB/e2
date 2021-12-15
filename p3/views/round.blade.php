@extends('templates/master')

@section('title')
Round Details
@endsection

@section('content')
<div class='center'>
    <h3>Round # {{$round['id']}}</h3>
    <a href='/history'>← Game history</a>
    <div class="container">
        <h3>Result : <?php echo (isset($round['winner']) ? $round['winner'] : '') ?></h3>
        <h4>Game played at : <?php echo (isset($round['timestamp']) ? $round['timestamp'] : '') ?></h3>
    </div>
    <div class="row container">
        <div class="column">
            <div>
                <h4>You </h4>
            </div>
            <!--Show the image according to the number selected by player -->
            <div><?php echo (isset($round['choice']) ? "<img src='/images/" . $game[$round['choice']] . ".png' width='50' height='50'>" : '') ?></div>
            <div>
                <h4><?php echo (isset($game) ? $game[$round['choice']] : '') ?></h4>
            </div>
        </div>
        <div class="column">
            <div>
                <h4>Computer </h4>
            </div>
            <!--Show the image according to the number assigned to the computer -->
            <div><?php echo (isset($round['computer']) ? "<img src='/images/" . $game[$round['computer']] . ".png' width='50' height='50'>" : '') ?></div>
            <div>
                <h4><?php echo (isset($round['computer']) ? $game[$round['computer']] : '') ?></h4>
            </div>
        </div>
    </div>
</div>
@endsection