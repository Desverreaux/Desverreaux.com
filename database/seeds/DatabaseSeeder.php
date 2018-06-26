<?php

use Illuminate\Database\Seeder;
//use App\Handlers\AssetHandlerButStatic as AssetHandler;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->AssetHandler = app('AssetHandler');
        $this->AssetHandler->CatalogAssets();
    }
}
