<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('siteSettings')->insert([
            'option'=>'whatthejoshuaperez@gmail.com',
            'value'=>'asdasdsasd'    
        ]);
    }
}
