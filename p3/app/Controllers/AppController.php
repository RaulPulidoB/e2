<?php
namespace App\Controllers;

class AppController extends Controller
{
    /**
     * This method is triggered by the route "/"
     */
    public function index()
    {
        $choice = $this->app->old('choice');
        $winner = $this->app->old('winner');
        $game   = $this->app->old('game');
        $computer  = $this->app->old('computer');

        
        return $this->app->view('index', [
            'winner' => $winner,
            'computer' => $computer,
            'choice' => $choice,
            'game' => $game
        ]);
    }

    public function process()
    {
        $this->app->validate([
            'choice' => 'required'
        ]);
        $choice = $this->app->input('choice');
        
        #Create an array of three options of the game (rock, paper, scissors)
        $game = array('rock', 'paper', 'scissors');

        #Create the variable for computer and Randomly assing a value between 0 and 2
        $computer = rand(0, 2);
        
        # Verify who is the winner

        if ($choice == $computer) {
            $winner='Tie';
        } elseif (($choice + 1) % 3 == $computer) {
            $winner='Computer is the winner';
        } else {
            $winner='You are the winner';
        }

        # Persist round details to the database
        $this->app->db()->insert('rounds', [
            'choice' => $choice,
            'computer' => $computer,
            'winner' => $winner,
            'timestamp' => date('Y-m-d H:i:s')
        ]);

        return $this->app->redirect('/', ['choice'=> $choice, 'winner' => $winner, 'computer' => $computer, 'game' => $game]);
    }

    public function history()
    {
        $rounds = $this->app->db()->all('rounds');

        return $this->app->view('history',['rounds' => $rounds]);
    }

    public function round()
    {
        $id= $this->app->param('id');

        #Create an array of three options of the game (rock, paper, scissors)
        $game = array('rock', 'paper', 'scissors');

        $round = $this->app->db()->findById('rounds', $id);

        return $this->app->view('round', ['round' => $round, 'game' => $game]);
    }
}
