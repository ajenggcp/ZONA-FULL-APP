<?php

namespace Database\Seeders;

use App\Models\Task;
use Illuminate\Database\Seeder;

class TasksTableSeeder extends Seeder
{
    public function run()
    {
        $tasks = [
            [
                'id'             => 1,
                'description'           => 'Siamese Cat',
                'image'          => 'https://www.hepper.com/wp-content/uploads/2021/05/Blue-Point-Siamese.jpg',
            ],
            [
                'id'             => 2,
                'description'           => 'Road in hand',
                'image'          => 'https://images.pexels.com/photos/799443/pexels-photo-799443.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500',
            ],
            [
                'id'             => 3,
                'description'           => 'Maple Leaves',
                'image'          => 'https://www.kibrispdr.org/data/wallpaper-hd-mobile-11.jpg',
            ],
            [
                'id'             => 4,
                'description'           => 'Polygon',
                'image'          => 'https://wallpapershome.com/images/wallpapers/polygon-1080x1920-4k-hd-wallpaper-3d-241.jpg',
            ],
            [
                'id'             => 5,
                'description'           => 'Paint in Illustration',
                'image'          => 'https://c4.wallpaperflare.com/wallpaper/410/867/750/vector-forest-sunset-forest-sunset-forest-wallpaper-preview.jpg',
            ],
            [
                'id'             => 6,
                'description'           => 'Mustchy Cat',
                'image'          => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQeLkt_c7Mp5Jw_TRLFLJSIlFY9_icxUfQzkw&usqp=CAU',
            ],
            [
                'id'             => 7,
                'description'           => 'Lion',
                'image'          => 'https://newevolutiondesigns.com/images/freebies/cool-wallpaper-preview-3.jpg',
            ],
            [
                'id'             => 8,
                'description'           => 'Deer Diary',
                'image'          => 'https://images.unsplash.com/photo-1543946207-39bd91e70ca7?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8ZnVsbCUyMGhkJTIwd2FsbHBhcGVyfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&w=1000&q=80',
            ],
            [
                'id'             => 9,
                'description'           => 'Buildings',
                'image'          => 'https://images.pexels.com/photos/2526491/pexels-photo-2526491.jpeg?auto=compress&cs=tinysrgb&h=650&w=940',
            ],
            [
                'id'             => 10,
                'description'           => 'London',
                'image'          => 'https://images.pexels.com/photos/1030961/pexels-photo-1030961.jpeg?auto=compress&cs=tinysrgb&h=650&w=940',
            ],
            [
                'id'             => 11,
                'description'           => 'Night in town',
                'image'          => 'https://images.pexels.com/photos/3052361/pexels-photo-3052361.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500',
            ],
            [
                'id'             => 12,
                'description'           => 'Free Elephant',
                'image'          => 'https://images.pexels.com/photos/247431/pexels-photo-247431.jpeg?auto=compress&cs=tinysrgb&h=650&w=940',
            ],
            [
                'id'             => 13,
                'description'           => 'Paint',
                'image'          => 'https://images.pexels.com/photos/2911521/pexels-photo-2911521.jpeg?auto=compress&cs=tinysrgb&h=650&w=940',
            ],
        ];

        Task::insert($tasks);
    }
}
