<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class topicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $topics = ['Vurma cədvəli','100 dairəsində hesablama'];
        foreach ($topics as $topic)
        {
            DB::table('topics')->insert([
                'name'  => $topic,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
