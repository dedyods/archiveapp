<?php

use Illuminate\Database\Seeder;
use App\Project;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Project::create([
            'name'=>'PAG-JK-005',
            'slug'=>'pag-jk-005',
            'vendor'=>'IPI',
            'customer'=>'PT. Pertamina Arun Gas',
        ]);
    }
}
