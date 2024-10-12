<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ReportTransactionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
     public function run()
    {
        // Sample data for seeding the report_transactions table
        DB::table('report_transactions')->insert([
            [
                'user_id' => 1,
                'game_type_id' => 2,
                'rate' => 1.5,
                'transaction_amount' => 1000.00,
                'bet_amount' => 500.00,
                'valid_amount' => 450.00,
                'status' => '1',
                'final_turn' => '10',
                'banker' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'user_id' => 2,
                'game_type_id' => 1,
                'rate' => 2.0,
                'transaction_amount' => 2000.00,
                'bet_amount' => 1500.00,
                'valid_amount' => 1200.00,
                'status' => '0',
                'final_turn' => '8',
                'banker' => '0',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'user_id' => 3,
                'game_type_id' => 3,
                'rate' => 1.2,
                'transaction_amount' => 500.00,
                'bet_amount' => 400.00,
                'valid_amount' => 350.00,
                'status' => '1',
                'final_turn' => '6',
                'banker' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}