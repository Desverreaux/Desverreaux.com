<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assets', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Item');
            $table->string('Filetype');
            $table->double('Version');
            $table->string('Quality');
            $table->string('Alias');
            $table->boolean('Hidden');
            //$table->timestamps('Addition Date');
            $table->string('Site Domain');
            $table->string('Default Alt Text');
            $table->string('Path');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('assets');
    }
}

//TODO (###### Wed Jun 13 13:18:17 CDT 2018)
// Add the modifications made to the table in MyPhpAdmin to the migrations table
