<?php

namespace Database\Seeders;

use App\Models\ObjectElement;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use PhpParser\Node\Expr\Cast\Object_;

class ObjectElementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++) {
            $newObjectEl = new ObjectElement();
            $newObjectEl->title = $faker->word;
            $newObjectEl->customer = $faker->name;
            $newObjectEl->status = $faker->boolean;;
            $newObjectEl->save();
        }
    }
}
