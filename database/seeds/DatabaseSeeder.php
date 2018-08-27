<?php

use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */

    protected $seedersPath;

    public function run()
    {
        $this->seedersPath = database_path('seeds').'/';
        $this->seed('AssetSeeder');
        $this->seed('CategoriesTableSeeder');
        $this->seed('UsersTableSeeder');
        $this->seed('PostsTableSeeder');
        $this->seed('PagesTableSeeder');
        $this->seed('TranslationsTableSeeder');
        $this->seed('PermissionRoleTableSeeder');
    }
}
