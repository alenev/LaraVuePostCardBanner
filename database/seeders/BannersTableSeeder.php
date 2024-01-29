<?php

namespace App\Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Banner;

class BannersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $banners = [
            [
                'title' => 'Av. Gustave Eiffel',
                'url' => 'https://www.google.com.ua/maps/place/%D0%AD%D0%B9%D1%84%D0%B5%D0%BB%D0%B5%D0%B2%D0%B0+%D0%B1%D0%B0%D1%88%D0%BD%D1%8F/@48.8583926,2.2916042,16.5z/data=!4m6!3m5!1s0x47e66e2964e34e2d:0x8ddca9ee380ef7e0!8m2!3d48.8583701!4d2.2944813!16zL20vMDJqODE?hl=ru&entry=ttu',
                'text' => 'Sed imperdiet elit vulputate, suscipit ex nec, pellentesque massa. Vivamus viverra erat nibh, non hendrerit dolor pretium non. Cras convallis nisi sodales ex accumsan sodales. Aliquam sollicitudin lacinia tempus. ',
                'user_id' => 1,
            ],
            [
                'title' => 'Hollywood',
                'url' => 'https://www.google.com.ua/maps/place/%D0%93%D0%BE%D0%BB%D0%BB%D0%B8%D0%B2%D1%83%D0%B4,+%D0%9B%D0%BE%D1%81-%D0%90%D0%BD%D0%B4%D0%B6%D0%B5%D0%BB%D0%B5%D1%81,+%D0%9A%D0%B0%D0%BB%D0%B8%D1%84%D0%BE%D1%80%D0%BD%D0%B8%D1%8F,+%D0%A1%D0%A8%D0%90/@34.0841139,-118.3464518,13.5z/data=!4m6!3m5!1s0x80c2bf07045279bf:0xf67a9a6797bdfae4!8m2!3d34.0928092!4d-118.3286614!16zL20vMGYyd2o?hl=ru&entry=ttu',
                'text' => 'Praesent semper, arcu quis volutpat congue, sapien nisl vulputate quam, a facilisis dui erat vitae lorem. Integer ut lorem at ante molestie elementum eget venenatis turpis.',
                'user_id' => 1,
            ],
            [
                'title' => 'Grand Canyon',
                'url' => 'https://www.google.com.ua/maps/place/%D0%93%D1%80%D0%B0%D0%BD%D0%B4+%D0%9A%D0%B0%D0%BD%D1%8C%D0%BE%D0%BD/@36.1851955,-112.4312584,10.75z/data=!4m10!1m2!2m1!1susa+grand+canyon!3m6!1s0x80cc0654bd27e08d:0xb1c2554442d42e8d!8m2!3d36.0997631!4d-112.1124846!15sChB1c2EgZ3JhbmQgY2FueW9uWhIiEHVzYSBncmFuZCBjYW55b26SAQZyYXZpbmXgAQA!16s%2Fg%2F1tg6vzsz?hl=ru&entry=ttu',
                'text' => 'Vestibulum condimentum eros ligula, pretium volutpat neque facilisis id. Etiam feugiat arcu vitae tincidunt malesuada. Aenean a placerat sapien. ',
                'user_id' => 1,
            ]
            
        ];

        foreach ($banners as $banner) {
            Banner::create($banner);
        }
    }
}