<?php

use Illuminate\Database\Seeder;

class GuestsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for ($i = 0; $i < 50; $i++) {
            DB::table('guests')->insert([
                'guest_name' => Str::random(10),
                'guest_email' => Str::random(6) . '@gmail.com',
                'guest_message' => Str::random(100),
            ]);
        }
    }
}
