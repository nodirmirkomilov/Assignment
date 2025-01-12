<?php

namespace Database\Seeders;

use App\Models\Model;
use Illuminate\Database\Seeder;

class ModelSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'ru' => 'B2B',
                'cy' => 'B2B',
                'uz' => 'B2B',
            ],
            [
                'ru' => 'B2C',
                'cy' => 'B2C',
                'uz' => 'B2C',
            ],
            [
                'ru' => 'B2G',
                'cy' => 'B2G',
                'uz' => 'B2G',
            ],
            [
                'ru' => 'C2C',
                'cy' => 'C2C',
                'uz' => 'C2C',
            ],
            [
                'ru' => 'C2B',
                'cy' => 'C2B',
                'uz' => 'C2B',
            ],
            [
                'ru' => 'B2B2C',
                'cy' => 'B2B2C',
                'uz' => 'B2B2C',
            ]
        ];

        foreach ($data as $item){
            Model::create([
                'title' => $item,
                'slug' => str($item['ru'])->slug()
            ]);
        }
    }
}
