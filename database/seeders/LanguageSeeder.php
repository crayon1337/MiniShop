<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert('insert into languages (title, image_url, locale) values (?, ?, ?)', [
            'English', 
            'https://icons.iconarchive.com/icons/icons-land/vista-flags/256/English-Language-Flag-1-icon.png',
            'en'
        ]);
        DB::insert('insert into languages (title, image_url, locale) values (?, ?, ?)', [
            'Arabic', 
            'https://images.emojiterra.com/twitter/512px/1f1ea-1f1ec.png',
            'ar'
        ]);
        DB::insert('insert into languages (title, image_url, locale) values (?, ?, ?)', [
            'Spanish', 
            'https://cdn.countryflags.com/thumbs/spain/flag-400.png',
            'es'
        ]);
    }
}
