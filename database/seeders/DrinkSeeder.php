<?php

namespace Database\Seeders;

use App\Models\Drink;
use Illuminate\Database\Seeder;

class DrinkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $drink = new Drink();
        $drink->name = 'nhân trần';
        $drink->price = '5000';
        $drink->img = '';
        $drink->save();  $drink = new Drink();
        $drink->name = 'Sinh tố mít';
        $drink->price = '30000';
        $drink->img = '';
        $drink->save();  $drink = new Drink();
        $drink->name = 'nhân trần';
        $drink->price = '20000';
        $drink->img = '';
        $drink->save();  $drink = new Drink();
        $drink->name = 'Hoa quả nhiệt đới';
        $drink->price = '40000';
        $drink->img = '';
        $drink->save();
    }
}
