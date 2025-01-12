<?php

namespace Database\Seeders;

use App\Models\Direction;
use Illuminate\Database\Seeder;

class DirectionSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'ru' => "Финансовые технологии (FinTech)",
                'cy' => "Молиявий технологиялар (Fintech)",
                'uz' => "Moliyaviy texnologiyalar (Fintech)"
            ],
            [
                'ru' => "Электронная торговля и маркетплейсы (eCommerce)",
                'cy' => "Электрон тижорат ва маркетплейслар (eCommerce)",
                'uz' => "Elektron tijorat va marketpleyslar (eCommerce)"
            ],
            [
                'ru' => "Облачные технологии для бизнеса (CloudTech)",
                'cy' => "Бизнес учун булут технологилари (CloudTech)",
                'uz' => "Biznes uchun bulut texnologilari (CloudTech)"
            ],
            [
                'ru' => "Искусственный интеллект для бизнеса (AI)",
                'cy' => "Бизнес учун сунъий онг (AI) ",
                'uz' => "Biznes uchun sunʼiy ong (AI)"
            ]
        ];

        foreach ($data as $item){
            Direction::create([
                'title' => $item,
                'slug' => str($item['ru'])->slug()
            ]);
        }
    }
}
