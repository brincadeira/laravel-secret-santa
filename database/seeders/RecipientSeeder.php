<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Recipient;

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
                $santa_id = array_rand($rangeArray);
            } while ($i===$santa_id);

            Recipient::create([
                'id' => $i,
                'santa_id' => $santa_id,
            ]);
            
            unset($rangeArray[$santa_id]);
        }
    }
}
