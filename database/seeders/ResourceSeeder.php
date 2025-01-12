<?php

namespace Database\Seeders;

use App\Models\Resource;
use Illuminate\Database\Seeder;

class ResourceSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'ru' => 'Техническая инфраструктура (сервера и т.д.)',
                'cy' => 'Техник инфратузилма (сервер ва х.к)',
                'uz' => 'Texnik infratuzilma (server va x.k)',
            ],
            [
                'ru' => "Интеграция с банковскими цифровыми продуктами и платежными системами",
                'cy' => "Банк рақамли махсулотлари ва тўлов тизимлари билан интеграция",
                'uz' => "Bank raqamli maxsulotlari va to‘lov tizimlari bilan integratsiya",
            ],
            [
                'ru' => "Коворкинг",
                'cy' => "Коворкинг",
                'uz' => "Kovorking",
            ],
            [
                'ru' => "PR поддержка",
                'cy' => "PR кўмак",
                'uz' => "PR ko‘mak",
            ],
            [
                'ru' => "Консультация",
                'cy' => "Маслахат",
                'uz' => "Maslaxat",
            ],
            [
                'ru' => "Ментор",
                'cy' => "Ментор",
                'uz' => "Mentor",
            ],
            [
                'ru' => "Нетворкинг",
                'cy' => "Нетворкинг",
                'uz' => "Netvorking",
            ],
            [
                'ru' => "Инвестиции",
                'cy' => "Сармоялар",
                'uz' => "Sarmoyalar",
            ],
            [
                'ru' => "Рекрутинг",
                'cy' => "Ишга ёнлаш",
                'uz' => "Ishga yonlash",
            ]
        ];

        foreach ($data as $item){
            Resource::create([
                'title' => $item,
                'slug' => str($item['ru'])->slug()
            ]);
        }
    }
}
