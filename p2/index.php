<?php

session_start();

if (isset($_SESSION['results'])) {
     $results = $_SESSION['results'];
     $winner = $results['winner'];
     $computer = $results['computer'];
     $choice = $results['choice'];
     $game = $results['game'];

     $_SESSION['results'] = null;
}

require 'index-view.php';
