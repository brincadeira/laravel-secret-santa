<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RecipientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rangeArray = array_fill_keys(range(1,50), 0);

        for ($i=1; $i<51; $i++) {
            do{
                $recipient_id = array_rand($rangeArray);
            } while ($i===$recipient_id);

            DB::table('recipients')->insert([
                'id' => $i,
                'recipient_id' => $recipient_id,
            ]);
            
            unset($rangeArray[$recipient_id]);
        }
    }
}
