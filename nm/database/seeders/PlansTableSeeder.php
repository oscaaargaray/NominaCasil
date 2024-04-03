<?php

namespace Database\Seeders;

use App\Models\Plan;
use Illuminate\Database\Seeder;

class PlansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Plan::create(
            [
                'name' => 'Free Plan',
                'price' => 0,
                'duration' => 'Lifetime',
                'max_users' => 10,
                'max_employees' => 500,
                'storage_limit' => 100000,
                'enable_chatgpt' => 'on',
                'image' => 'free_plan.png',
            ]
        );
    }
}
