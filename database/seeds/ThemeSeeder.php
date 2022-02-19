<?php

use Illuminate\Database\Seeder;
use App\ThemeSettings;

class ThemeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $theme = new ThemeSettings();
        $theme->name = 'dark';
        $theme->description = 'dark Theme';
        $theme->status = 1;
        $theme->save();

    }
}
