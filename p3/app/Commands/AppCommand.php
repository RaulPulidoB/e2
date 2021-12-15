<?php

namespace App\Commands;

use Faker\Factory;

class AppCommand extends Command
{
    public function migrate()
    {
        $this->app->db()->createTable('rounds', [
            'choice' => 'int',
            'computer' => 'int',
            'winner' => 'varchar(255)',
            'timestamp' => 'timestamp',
        ]);

        dump('Migrations complete');
    }

    public function seed()
    {
        $faker = Factory::create();
        for ($i = 10; $i > 0; $i--) {
            $choiceSel = rand(0, 2);
            $computerSel = rand(0, 2);
            if ($choiceSel == $computerSel) {
                $winnerSel = 'Tie';
            } elseif (($choiceSel + 1) % 3 == $computerSel) {
                $winnerSel = 'Computer is the winner';
            } else {
                $winnerSel = 'You are the winner';
            }

            $this->app->db()->insert('rounds', [
                'choice' => $choiceSel,
                'computer' => $computerSel,
                'winner' => $winnerSel,
                'timestamp' => $faker->dateTimeBetween('-' . $i . ' days', '-' . $i . ' days')->format('Y-m-d H:i:s')
            ]);
        }

        dump('Seeds complete');
    }
}
