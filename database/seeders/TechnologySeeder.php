<?php

namespace Database\Seeders;

use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $technologies = ['php', 'Vue', 'Js', 'Laravel', 'React', 'Bootstrap', 'Tailwind', 'Html', 'Css', 'Scss'];
        foreach ($technologies as $key => $technology) {
            $newTechonology = new Technology();
            $newTechonology->name = $technology;
            $newTechonology->save();
        }
    }
}
