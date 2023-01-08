<?php

namespace Database\Seeders;

use App\Models\Blog;
use App\Models\PDF;
use App\Models\Photo;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        Schema::disableForeignKeyConstraints();
        DB::table('blogs')->truncate();

        for ($i = 1; $i <= 5 ; $i++) {
            $new = new Blog();
            $new->name = ['ar' => $faker->name, 'en' => $faker->name];
            $new->notes = ['ar' => $faker->name, 'en' => $faker->name];
            $new->status = false;

            $new->save();
        }

        for ($i = 1; $i <= 5 ; $i++) {
            Photo::insert([
                'Filename'     => rand(1,6) . ".png",
                'photoable_id' => rand(1,6),
                'photoable_type' => 'App\Models\Blog'
            ]);
        }

        for ($i = 1; $i <= 1 ; $i++) {
            PDF::insert([
                'Filename'     =>"1658152893_HR_.pdf",
                'pdfable_id' => rand(1,6),
                'pdfable_type' => 'App\Models\Blog'
            ]);
        }
        Schema::enableForeignKeyConstraints();
    }
}
