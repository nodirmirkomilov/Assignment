<?php

namespace Database\Seeders;

use App\Models\Social;
use Illuminate\Database\Seeder;

class SocialSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'ru' => 'Социальные сети IT Park',
                'cy' => 'IT Park ижтимой тармоқлари',
                'uz' => 'IT Park ijtimoy tarmoqlari',
            ],
            [
                'ru' => "Веб-сайт IT Park",
                'cy' => "IT Park веб-саҳифаси",
                'uz' => "IT Park veb-sahifasi",
            ],
            [
                'ru' => "СМИ",
                'cy' => "ОАВ",
                'uz' => "OAV",
            ],
            [
                'ru' => "Блогеры",
                'cy' => "Блогерлар",
                'uz' => "Blogerlar",
            ],
            [
                'ru' => "Телеграм канал",
                'cy' => "Телеграм каналлар",
                'uz' => "Telegram kanallar",
            ],
            [
                'ru' => "Каналы ВУЗа",
                'cy' => "ОТМ каналлари",
                'uz' => "OTM kanallari",
            ],
            [
                'ru' => "Другое",
                'cy' => "Бошқа",
                'uz' => "Boshqa",
            ],
        ];

        foreach ($data as $item){
            Social::create([
                'title' => $item,
                'slug' => str($item['ru'])->slug()
            ]);
        }
    }
}
