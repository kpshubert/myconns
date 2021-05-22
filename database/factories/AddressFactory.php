<?php

namespace Database\Factories;

use \App\Models\Model;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illluminate\Support\Str;
//use Faker\Generator as Faker;

class AddressFactory extends Factory
{
  //protected $model = \App\Models\Article::class;
  protected $model = \App\Models\addresses::class;

  public function definition()
  {
    return [
        'street1' => $this->faker->streetAddress(),
        'street2' => $this->faker->secondaryAddress(),
        'city' => $this->faker->city(),
        'st' => $this->faker->stateAbbr(),
        'zip' => substr($this->faker->postcode(), 0, 5),
        'county' => $this->faker->state(),
        'country' => $this->faker->country(),
        'userid' => $this->faker->uuid()
    ];

  }
}
