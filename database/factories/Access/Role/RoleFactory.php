<?php

namespace Database\Factories\Access\Role;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Access\Role\Role;
use App\Models\Access\User\User;
use Faker\Generator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

class RoleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'all' => 0,
            'sort' => $this->faker->numberBetween(1, 100),
        ];
    }

    public function admin()
    {
        return $this->state(function () {
            return [
                'all' => 1,
            ];
        });
    }
}
