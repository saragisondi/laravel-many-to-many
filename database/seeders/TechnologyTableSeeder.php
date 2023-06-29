<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Technologies;
use Illuminate\Support\Str;

class TechnologyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $data = ['Frontend', 'Backend', 'Design', 'UX', 'Laravel', 'VueJs'];

      foreach($data as $technology){
        $new_technology = new Technologies();
        $new_technology->name = $technology;
        $new_technology->slug = Str::slug($technology, '-');
        $new_technology->save();
      }
    }
}