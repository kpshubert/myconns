<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Circle;

class CircleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $circles = [
        [
          'circle_level' => 0,
          'name' => 'Just Me',
          'description' => "Stuff I don\'t want to share with others"
        ],
        [
          'circle_level' => 1,
          'name' => 'Inner Circle',
          'description' => "Only my closest friends and family (between Just Me and Outer Circle)"
        ],
        [
          'circle_level' => 2,
          'name' => 'Outer Circle',
          'description' => "Close but no cigar (between Inner Circle and More Distant)"
        ],
        [
          'circle_level' => 3,
          'name' => 'More Distant',
          'description' => "Starting to get out there (between Outer Circle and Getting Cooler)"
        ],
        [
          'circle_level' => 4,
          'name' => 'Getting Cooler',
          'description' => 'Getting pretty far out there (between More Distant and Downright Cold)'
        ],
        [
          'circle_level' => 5,
          'name' => 'Downright Cold',
          'description' => 'Hand me that sweater (between Getting Colder and Pretty Frigid)'
        ],
        [
          'circle_level' => 6,
          'name' => 'Pretty Frigid',
          'description' => 'Don that arctic gear (between Downright Cold and All Ice)'
        ],
        [
          'circle_level' => 7,
          'name' => 'All Ice',
          'description' => "I didn't even know that could freeze! (between Pretty Frigid and Permafrost)"
        ],
        [
          'circle_level' => 8,
          'name' => 'Permafrost',
          'description' => 'Are those penguins in the distance? (between All Ice and Under the Surface)'
        ],
        [
          'circle_level' => 9,
          'name' => 'Under the Surface',
          'description' => 'Have to dig to get here! (between Permafrost and Ten Feet Under)'
        ],
        [
          'circle_level' => 10,
          'name' => 'Ten Feet Under',
          'description' => 'Deep down (between Under the Surface and Nearly Unknown)'
        ],
        [
          'circle_level' => 11,
          'name' => 'Nearly Unknown',
          'description' => "I'm sorry, who were you again? (between Ten Feet Under and Everybody)"
        ],
        [
          'circle_level' => 12,
          'name' => 'Everybody',
          'description' => 'This information is public (available to everyone)'
        ]
      ];
      foreach ($circles as $circle) {
        Circle::create($circle);
      }
    }
  }
