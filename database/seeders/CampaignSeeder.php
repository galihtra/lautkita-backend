<?php

namespace Database\Seeders;

use App\Models\Campaign;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class CampaignSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Campaign::create([
        'image_url' => "https://img.freepik.com/free-photo/breathtaking-shot-beautiful-stones-turquoise-water-lake-hills-background_181624-12847.jpg",
        'title' => "Ocean Healty",
        'subtitle' => "Lorem ipsum dolor sit amet consectetur. Amet maecenas.Viverra mi euismod dinamik mi euismod",
        'current_goal' => 15,
        'total_goal' => 800000,
        ]);
        Campaign::create([
        'image_url' => "https://img.freepik.com/free-photo/old-rusty-fishing-boat-slope-along-shore-lake_181624-44902.jpg",
        'title' => "Beach",
        'subtitle' => "Lorem ipsum dolor sit amet consectetur. Amet maecenas.Viverra mi euismod dinamik mi euismod",
        'current_goal' => 15,
        'total_goal' => 800000,
        ]);
        Campaign::create([
        'image_url' => "https://img.freepik.com/free-photo/old-rusty-fishing-boat-slope-along-shore-lake_181624-44902.jpg",
        'title' => "Beach",
        'subtitle' => "Lorem ipsum dolor sit amet consectetur. Amet maecenas.Viverra mi euismod dinamik mi euismod",
        'current_goal' => 16,
        'total_goal' => 800000,
        ]);
        Campaign::create([
        'image_url' => "https://img.freepik.com/free-photo/old-rusty-fishing-boat-slope-along-shore-lake_181624-44902.jpg",
        'title' => "Beach",
        'subtitle' => "Lorem ipsum dolor sit amet consectetur. Amet maecenas.Viverra mi euismod dinamik mi euismod",
        'current_goal' => 17,
        'total_goal' => 800000,
        ]);
        Campaign::create([
        'image_url' => "https://img.freepik.com/free-photo/old-rusty-fishing-boat-slope-along-shore-lake_181624-44902.jpg",
        'title' => "Beach",
        'subtitle' => "Lorem ipsum dolor sit amet consectetur. Amet maecenas.Viverra mi euismod dinamik mi euismod",
        'current_goal' => 18,
        'total_goal' => 800000,
        ]);
        Campaign::create([
        'image_url' => "https://img.freepik.com/free-photo/old-rusty-fishing-boat-slope-along-shore-lake_181624-44902.jpg",
        'title' => "Beach",
        'subtitle' => "Lorem ipsum dolor sit amet consectetur. Amet maecenas.Viverra mi euismod dinamik mi euismod",
        'current_goal' => 19,
        'total_goal' => 800000,
        ]);
        Campaign::create([
        'image_url' => "https://img.freepik.com/free-photo/old-rusty-fishing-boat-slope-along-shore-lake_181624-44902.jpg",
        'title' => "Beach",
        'subtitle' => "Lorem ipsum dolor sit amet consectetur. Amet maecenas.Viverra mi euismod dinamik mi euismod",
        'current_goal' => 20,
        'total_goal' => 800000,
        ]);
    }
}
